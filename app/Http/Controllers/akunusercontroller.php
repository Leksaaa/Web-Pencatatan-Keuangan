<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class akunusercontroller extends Controller
{
    public function index() {
        $userId = Auth::id();

        // Mendapatkan data akun pengguna berdasarkan ID
        $user = user::find($userId);

        // Kirim data akun ke halaman akun untuk ditampilkan
        return view('user.account', ['user' => $user]);
    }
}
