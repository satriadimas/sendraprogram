<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function index()
    {
        
        return view('login');
    }


    public function authenticate(Request $request)
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
       
        if (Auth::attempt($credentials)) {
            if (Auth::user()->email_verified_at == null) {
                Session::flush();
                Auth::logout();
                $user = User::where('email', $request->email)->first();

                Mail::send('verif-email', ['token' => $user->remember_token, 'email' => $user->email], function ($message) use ($user) {
                    $message->to($user->email);
                    $message->from($address = 'contact@sakata-id.site', $name = 'SAKATA');
                    $message->subject('Email verification');
                });
                // dd($user);
                return redirect('login')->with('Silahkan','Silahkan verifikasi email terlebih dahulu');
            }
            return redirect()->intended('/dashboard')->withSuccess('Signed in');
        }

        return redirect('login')->with('WrongPass','Mohon periksa kembali username dan password.');
    }


    public function logout(Request $request)
        {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('login');
    }

}
