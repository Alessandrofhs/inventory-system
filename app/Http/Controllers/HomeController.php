<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home()
    {
        return view('content.home');
    }
    public function index()
    {
        $users = User::all();
        return view('content.user.list', compact('users'));
    }
    public function create()
    {
        return view('content.user.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
            'gender' => 'required',
            'photo' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);

        dd($request->all());
        $photo = $request->file('photo');
        $filename = date('Y-m-d').$photo->getClientOriginalName();
        $path = 'photo-user/'.$filename;

        Storage::disk('public')->put($path, file_get_contents($photo));

        $users['fullname'] = $request->fullname;
        $users['email'] = $request->email;
        $users['username'] = $request->username;
        $users['password'] = Hash::make($request->password);
        $users['role'] = $request->role;
        $users['gender'] = $request->gender;
        $users['image'] = $filename;


        User::create($users);
        return redirect()->route('admin.user.index');
    }
    public function edit(Request $request, $id)
    {
        $users = User::find($id);

        return view('content.user.edit', compact('users'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'nullable',
            'role' => 'required',
            'gender' => 'required',
            'photo' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);

        dd($request->all());
        $photo = $request->file('photo');
        $filename = date('Y-m-d').$photo->getClientOriginalName();
        $path = 'photo-user/'.$filename;

        Storage::disk('public')->put($path, file_get_contents($photo));

        $users['fullname'] = $request->fullname;
        $users['email'] = $request->email;
        $users['username'] = $request->username;
        $users['password'] = Hash::make($request->password);
        $users['role'] = $request->role;
        $users['gender'] = $request->gender;
        $users['image'] = $filename;

        if ($request->password) {
            $users['password'] = Hash::make($request->password);
        }
        User::whereId($id)->update($users);

        return redirect()->route('admin.user.index');
    }
    public function delete(Request $request, $id)
    {
        $users = User::find($id);
        if ($users) {
            $users->delete();
        }
        return redirect()->route('admin.user.index');
    }
}