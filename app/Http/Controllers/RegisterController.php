<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required',
            'username'=>'required|unique:users',
            'password'=>'required'  

        ]);
        $validatedData['password']= Hash::make($validatedData['password']);
        user::create($validatedData);
        return redirect('/login')->with('success','Register Berhasil, Silahkan Login');
    }

}
