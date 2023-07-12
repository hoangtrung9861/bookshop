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
    public function index()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

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

        return redirect("login")->with('error', 'Email or Password is inconnect');
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

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function showProfile()
    {
        return view('admin.profile');
    }
    public function profile(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|alpha|min:2|max:30',
            'phone' => 'required|min:11|numeric',
            'password' => 'nullable|min:8',
            'address' => 'required',
        ]);

        $user = User::find(\auth()->id());
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = bcrypt($request->input('password'));


        $user->save();
        return redirect()->route('home')->with('success', 'cap nhat thanh cong');
    }
}
