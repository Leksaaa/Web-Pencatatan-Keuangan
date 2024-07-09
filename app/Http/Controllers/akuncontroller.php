<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\admin;
class akuncontroller extends Controller
{
   
    public function index()
    {
        return view ('admin.account', [
            'user'=>user::all(),
            'admin'=>admin::all()
        ]);
        
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        //
    }
    public function destroy(string $id)
    {
        $user = user::findOrFail($id);
        $user->delete();

        return redirect('/account/admin');
    }
}
