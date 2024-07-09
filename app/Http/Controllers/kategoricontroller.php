<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
class kategoricontroller extends Controller
{
    public function index()
    {
        return view ('admin.kategori', [
            'kategori'=>kategori::all()
        ]);

    }
    public function create()
    {
        return view('crud kategori.create',[
            'kategori'=>kategori::all()]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipe'=>'required'
        ]);
        
        kategori::create($validatedData);

        return redirect('/kategori/admin');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $kategori = kategori::findOrFail($id);
        return view('crud kategori.update', compact('kategori'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'tipe' => 'required'
        ]);

        // Cari transaksi berdasarkan ID
        $kategori = kategori::findOrFail($id);

        $kategori->update($validatedData);

        // Redirect ke halaman atau route yang sesuai
        return redirect('/kategori/admin');
    }

    public function destroy(string $id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();

        return redirect('/kategori/admin');

    }
}
