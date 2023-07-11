<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\info;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Auth;

class Handler extends Controller
{
    //To show home 
    public function index(Request $request)
    {
        if ($request->method() == 'GET') {
            
            // $info = Info::all();
            return view('index');
        }

        $data = (object) $request->all();
        // dd($data);
        $info = Info::where("type","=","{$data->type}")->get()->first();
    
        if ($info && $data->value == $info->value) {
            
            // return response()->json(['success'=>true,]);
            return  redirect('success')->with('name', $data->value);
        }else{
            // return response()->json(['error'=>true,]);
            return redirect('cancel')->with('name', $data->value);  
        }
    }
    
    //to show invalide input warning ⚠ 
    public function cancel(Request $request)
    {
        if ($request->method() == 'GET') {
            
            return view('cancel');
        }
    }

    //To show successful input
    public function success(Request $request)
    {
        if ($request->method() == 'GET') {
            
            return view('success');
        }
    }

    //to show admin dashoard
    public function dashboard(Request $request)
    {
        if ($request->method() == 'GET') {
            
            $infos = info::orderBy('id','DESC')->get();
            return view('admin.dashboard',[
                "infos" => $infos
            ]);
        }

    }

    //to show authenticate login page
    public function login(Request $request)
    {
        if ($request->method() == 'GET') {
            
            return view('admin.login');
        }

        $data = (object) $request->all();
        $user = User::where("email", "=","$data->email")->get()->first();

        if ($user && $data->password == $user->password) {

            $request->session()->regenerate();
            Auth::loginUsingId($user->id);

            return redirect()->route('dashboard')->with('match', 'Logged in Successfully');
        }else{

            return back()->with('noMatch', 'inavlid Login Details');
        }
    }

    // to show create
    public function create(Request $request)
    {
        if ($request->method() == 'GET') {
            
            return view('admin.create');
        }

        $data = (object) $request->all();
        if (empty($data)) {
            return redirect()->route('create');
        }else{

           info::insert([
                "type" => $data->type,
                "value"=> $data->value,
                "created_at" => Date('Y-m-d h:i:s'),
            ]); 

            return back()->with('message','Data Created Successfully');
        }
        
    }

    // to show Edit
    public function edit(Request $request, info $info)
    {
        if ($request->method() == 'GET') {
            
            return view('admin.edit', [
                "infos" => $info
            ]);
        }

        $data = $request->all();

        $info->update($data);
        
        return back()->with('success', 'Data Updated Successfully');
    }

    // To Delete data
    public function Delete(info $info)
    {
        $info->delete();

        return redirect('/admin/dashboard')->with('delete','Data Deleted successfully :)');
    }

    // to Logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('message', 'you have logout successfully');
    }
}
