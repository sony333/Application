<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'username' => ['required', 'min:3', 'max:100', 'unique:users'],
            'email'  => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:25'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successful, Please sign in');

        return redirect('/login')->with('success', 'Registration Successful,  try to sign in');
    }
}
