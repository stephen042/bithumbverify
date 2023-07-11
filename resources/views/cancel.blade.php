<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ URL('assets/home/fav.png') }}" type="image/gif" sizes="16x16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="assets/home/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <title>cancel</title>
    
    <style>
        * 
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* font-family: "Inter", sans-serif; */
        }

        body 
        {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* color: #222; */
            position: relative;
            min-height: 150vh;
            /* width: 100px; */
        }

        .modal {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 0.2rem;
        width: 550px;
        padding-top: 1.3rem;
        padding-bottom: 1.3rem;
        /* min-height: 250px; */
        position: absolute;
        top: 5%;
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 8px;
        }
        
        @media only screen and (max-width: 600px) {
            .modal {
                display: flex;
                flex-direction: column;
                justify-content: center;
                gap: 0.4rem;
                width: 350px;
                padding: 0.3rem;
                /* min-height: 250px; */
                position: absolute;
                top: 3%;
                background-color: white;
                border: 1px solid #ddd;
                border-radius: 15px;
            }

        }
        .modal .flex {
        display: flex;
        align-items: center;
        justify-content: space-between;
        }

        .modal input {
        padding: 0.7rem 1rem;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 0.9em;
        }

        .modal p {
        font-size: 0.9rem;
        color: #777;
        margin: 0.4rem 0 0.2rem;
        text-align: center;
        }

        button {
        cursor: pointer;
        border: none;
        font-weight: 600;
        }

        .btn {
        /* display: inline-block; */
        padding: 0.8rem 0.8rem;
        /* font-weight: 700; */
        /* background-color: grey; */
        color: white;
        border-radius: 5px;
        margin: 0.4rem;
        text-align: center;
        font-size: 18px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        float: right;
        }

        .btn-open {
        position: absolute;
        bottom: 150px;
        }

        .btn-close {
        transform: translate(10px, -20px);
        padding: 0.5rem 0.7rem;
        background: #eee;
        border-radius: 50%;
        }
        .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(3px);
            z-index: 1;
        }
        .modal {
            z-index: 2;
        }
        
    </style>
</head>
<body>
    <section class="modal hidden" >
        <div style="padding: 0.3rem;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" >
            <p style="color: #f04e45;font-size: 23px;font-weight:600; padding: 0.3rem;">This Resource Is Not Managed by Bithumb</p>
        </div>
        <div style="border: 1px solid #DEE2E6; width: 100%;"></div>

        <div style="font-family: Lucida Console, Courier New, monospace;">
            <div class="flex" style="justify-content: center;">
                <img src="assets/home/images/cancel.png" width="100px" height="100px" alt="user" />
                <!-- <button class="btn-close">⨉</button> -->
            </div>
            <div style="text-align: justify;">
                <!-- <h3>Stay in touch</h3> -->
                <p style="color: rgb(65, 63, 63);font-weight:500;font-size: 18px;margin: 0.7rem;" >
                    The information you entered 
                        @if (session()->has('name'))
                        (<span style="color: red;">{{session('name')}}</span>)
                        @endif
                    could not be verified by our system and may not be an official Bithumb account or resource. Do not trust any information that is not from an official Bithumb account or resource. Protect the safety of your assets at all times.
                </p>

                <hr style="border-color: lightgray;">

                <p style="color: rgb(65, 63, 63);font-weight:500;font-size: 18px;margin: 0.7rem;" >
                    <span style="color: rgb(37, 35, 35);font-weight: bold;"> To be sure, you can double-check the information you entered and verify again.</span> 
Note: For landline phones, please include the area code in the phone number. Chat or messaging accounts (such as Telegram accounts) can only be checked using account IDs or usernames (rather than nicknames or display names). Double-check capitalization, hyphens, dashes, etc. Only wallet addresses used for Bithumb business transactions can be verified. Personal wallet addresses of users on the Bithumb platform or other types of addresses are not supported at this time.
                </p>
            </div>
            
        </div>
        <div style="border: 1px solid #DEE2E6; width: 100%;"></div>

        <div>
            <button 
            type="submit" 
            onclick="window.location.href='/'"
            class="btn"
            style="background-color: #0B5ED7;"
            >
            Search Again
            </button>

            <button 
            type="submit" 
            onclick="window.location.href='/'"
            class="btn"
            style="background-color: #7d7e80;"
            > 
            Close
            </button>
            <!-- <a href="modal.html" class=".modal">modal</a> -->
        </div>

    </section>
    
      
    <div class="overlay hidden"></div>
    <!-- <button class="btn btn-open">Open Modal</button> -->

    <script src="assets/home/js/jquery.min.js"></script>
    <script src="assets/home/js/jquery.magnific-popup.min.js"></script>
    <script>
        const modal = document.querySelector(".modal");
        const overlay = document.querySelector(".overlay");
        const openModalBtn = document.querySelector(".btn-open");
        const closeModalBtn = document.querySelector(".btn-close");

        $(document).ready(function () {
            
            
            // $('.modal').magnificPopup({
            //     type: 'inline',
            //     src: $('ur papa'),
            //     // Fixed position will be used
            //     fixContentPos: true,
  
            //     // Since disabled, Magnific Popup
            //     // will not put close button
            //     // inside content of popup
            //     closeBtnInside: false,
            //     preloader: false,
  
            //     // Delay in milliseconds before
            //     // popup is removed
            //     // removalDelay: 160,
  
            //     // Class that is added to
            //     // popup wrapper and background
            //     mainClass: 'mfp-fade'
            // });
        });

    </script>
</body>
</html>