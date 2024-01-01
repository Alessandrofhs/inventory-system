<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login_proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $users = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($users)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('login')->with('failed', 'username or password incorrect');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'you have successfully logged out!');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function register_proses(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'role' => 'required',
            'gender' => 'required',
        ]);

        $users['fullname'] = $request->fullname;
        $users['email'] = $request->email;
        $users['username'] = $request->username;
        $users['password'] = Hash::make($request->password);
        $users['role'] = $request->role;
        $users['gender'] = $request->gender;

        User::create($users);

        $login = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($login)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('login')->with('failed', 'Username or Password incorrect!');
        }

    }
}
