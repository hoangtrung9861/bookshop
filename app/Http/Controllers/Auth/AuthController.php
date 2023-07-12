<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\Mail;
use App\Http\Controllers\Auth\Str;
use App\Http\Controllers\Auth\UserVerify;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Route;
use Session;

class AuthController extends Controller
{
    /**
     * Write code on Method

     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Write code on Method

     */
    public function registration()
    {
        return view('auth.registration');
    }

    /**
     * Write code on Method

     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                ->withSuccess('You have Successfully loggedin');
        }
        
        return redirect("login")->with('error','Email or Password is inconnect');
    }
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->withSuccess('Great! You have Successfully loggedin');
    }

    /**

     */
    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('dashboard');
    //     }

    //     return redirect("login")->withSuccess('Opps! You do not have access');
    // }

    /**
     * Write code on Method
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Write code on Method
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    // public function verifyAccount($token)
    // {
    //     $verifyUser = UserVerify::where('token', $token)->first();

    //     $message = 'Sorry your email cannot be identified.';

    //     if (!is_null($verifyUser)) {
    //         $user = $verifyUser->user;

    //         if (!$user->is_email_verified) {
    //             $verifyUser->user->is_email_verified = 1;
    //             $verifyUser->user->save();
    //             $message = "Your e-mail is verified. You can now login.";
    //         } else {
    //             $message = "Your e-mail is already verified. You can now login.";
    //         }
    //     }

    //     return redirect()->route('login')->with('message', $message);
    // }
}