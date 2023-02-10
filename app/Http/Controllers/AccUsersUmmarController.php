<?php

namespace App\Http\Controllers;

use App\Models\AccUsersUmmarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccUsersUmmarController extends Controller
{
    public function indexAccUsers()
    {
        $data = [
            'dataAccountUmmar' => AccUsersUmmarModel::all(),
            'title' => 'Data Account Users'
        ];
        return View('components.accusers', $data);
    }

    public function addAccUsers()
    {
        return view('components.form.dataaccusers.addaccusers', [
            'title' => 'Data Account Users'
        ]);
    }

    public function saveAccUsers(Request $r)
    {
        try {
            $validatedData = $r->validate([
                'name' => ['required', 'min:3', 'max:20', 'unique:users'],
                'email' => ['required', 'email:dns', 'unique:users'],
                'password' => ['required', 'min:8', 'max:255'],
                'level' => ['max:255']
            ]);

            $validatedData['password'] = Hash::make($validatedData['password']);

            AccUsersUmmarModel::create($validatedData);

            $r->session()->flash('msg', "New user account has been added");
            return redirect()->back();
        } catch (\Throwable $e) {
            dd($e);
        }
    }

    public function editAccUsers($id)
    {
        $ummar = AccUsersUmmarModel::find($id);
        $data = [
            'title' => 'Data Account Users',
            'id' => $id,
            'name' => $ummar->name,
            'email' => $ummar->email,
            'password' => $ummar->password
        ];

        return View('components.form.dataaccusers.editaccusers', $data);
    }

    public function updateAccUsers(Request $r)
    {
        $id = $r->id;
        $username = $r->name;
        $email = $r->email;
        $password = $r->password;

        try {
            $ummar = AccUsersUmmarModel::find($id);
            $ummar->name = $username;
            $ummar->email = $email;
            $ummar->password = $password;
            $ummar->save();

            $r->session()->flash('msg', "Data account $username has been updated");
            return redirect('/ummar/accusers');
        } catch (\Throwable $e) {
            dd($e);
        }
    }

    public function deleteAccUsers($id)
    {
        AccUsersUmmarModel::find($id)->delete();
        return redirect()->back();
    }

}
