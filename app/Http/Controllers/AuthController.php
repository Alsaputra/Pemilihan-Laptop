<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class AuthController extends Controller
{
    public function getLogin()
    {
        if(!session('login')){
            return view("auth.login");
        }
        return redirect("/");
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'email' => "required",
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }else{
            session()->forget('email');
            session()->forget('login');
            $user = User::where('email', $request->get('email'))->firstOrFail();
            if($user){
                if(Hash::check($request->get('password'), $user->password)){
                    session(['login'=>true]);
                    Auth::user();
                    session(['email'=>$user->email]);
                    if($user->role == "admin"){
                        return redirect("admin");
                    }else{
                        return redirect("/");
                    }

                }
            }

            return redirect("login")->with('error', 'wrong email or password');
        }
    }

    public function logout()
    {
        if(session()->has('email')){
            session()->forget('email');
            session()->forget('login');
            return redirect("/");
        }
    }

    public function logoutFrontend()
    {
        if(session()->has('email')){
            session()->forget('email');
            session()->forget('login');
            return redirect("/");
        }
    }

    public function getRegister()
    {
        return view("auth.register");
    }

    public function register(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'name' => "required",
            'email' => "required",
            'password' => 'required|same:password_confirm',
            'password_confirm'=>'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }else{
            $user = new User();
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->username = $request->get('username');
            $user->ktp = $request->get('ktp');
            $user->no_phone = $request->get('phone');
            $user->location = $request->get('location');
            $user->email = $request->get('email');
            $user->role = "customer";
            $user->password = Hash::make($request->get('password'));
            $user->save();
            return redirect("register")->with('success', 'Successfully register');
        }
    }
}
