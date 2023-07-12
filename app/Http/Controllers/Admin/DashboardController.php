<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }

    // public function product(){
    //     return view('admin.product');
    // }

    // public function showFormRegister()
    // {
    //     return view ('admin.register');
    // }

    // public function register(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'firstname' => 'required|alpha|min:2|max:30',
    //         'lastname' => 'required|alpha|min:2|max:30',
    //         'phone' => 'required|min:11|numeric',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:8',
    //         'Confirm-Password' => 'required|same:password',
    //     ]);
    //     $user = new User();
    //     $user->firstname =$request->firstname;
    //     $user->lastname =$request->lastname;
    //     $user->phone =$request->phone;
    //     $user->email =$request->email;
    //     $user->password =bcrypt($request->password);

    //     $user->save();
    //     return  redirect()->route('show-form-login')->with('success','Dang ki thanh cong');
    // }

    // public function showFormLogin()
    // {
    //     return view('admin.login');
    // }

    // public function login(Request $request)
    // {
    //     if(Auth::attempt(['email'=> $request->email,'password'=>$request->password])){
    //         return redirect()->route('home');
    //     }
    //     return redirect()->route('show-form-login')->with('error','Email hoac mk sai');
    // }

    // public function showProfile()
    // {
    //     return view('admin.profile'); 
    // }
    // public function profile(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'firstname' => 'required|alpha|min:2|max:30',
    //         'lastname' => 'required|alpha|min:2|max:30',
    //         'phone' => 'required|min:11|numeric',
    //         'password' => 'nullable|min:8',
    //         'address' => 'required',
    //     ]);

    //     $user= User::find(\auth()->id());
    //     $user->firstname =$request->firstname;
    //     $user->lastname =$request->lastname;
    //     $user->phone =$request->phone;
    //     $user->address =$request->address;
    //     $user->password = bcrypt($request->input('password')); 


    //     $user->save();
    //     return redirect()->route('home')->with('success','cap nhat thanh cong');
    // }

    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('home');
    // }
}
