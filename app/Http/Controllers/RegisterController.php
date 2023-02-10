<?php

namespace App\Http\Controllers;

use App\Models\AccUsersUmmarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function indexRegister()
    {
        return view('layouts.formregister', [
            'title' => 'Registration'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
           'name' => ['required', 'min:3', 'max:20', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255'],
            'level' => ['max:255']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        AccUsersUmmarModel::create($validatedData);

        return redirect('/ummar/login')->with('success', 'Registration success, please login!');
    }



}
