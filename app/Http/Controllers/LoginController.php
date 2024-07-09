<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }

        public function authenticate(Request $request) {
            $credentials = $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]);

            if (Auth::guard('admin')->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/beranda/admin');
            }

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/beranda/user');
            }

            return back()->with('loginerror', 'Login failed!');
        }


    public function logout(Request $request){
        
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}
 