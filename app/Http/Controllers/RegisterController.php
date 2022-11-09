<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
        public function index()
        {
            return view('hello.register.index');
        }
    public function store(Request $request)
    {

        $validateData=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/register')->with('success', 'Register Berhasil!, silahkan login');
    }
}