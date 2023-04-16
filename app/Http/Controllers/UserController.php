<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function signin()
    {
        return view('signin');
    }

    public function signin_post(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $email_table = DB::table('UserTable')->where('email', $email)->first()->email;
        // dd($email_table);
        
        if ($email == $email_table) {
            return response()->json([
                'data' => $email_table
            ]);
        }
        // return view('signin');
    }

    public function signup()
    {
        return view('signup');
    }
    public function signup_post(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        // dd($email);
        DB::table('UserTable')->insert([
            'email' => $email,
            'password' => bcrypt($password),
        ]);
        return redirect('/signin');
    }
}
