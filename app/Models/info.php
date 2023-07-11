<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'value',
        'created_at',
        'updated_at',
    ];
}
