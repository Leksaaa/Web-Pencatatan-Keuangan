<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\kategori;
class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('admin.transaksi', [
            'transaksi' => transaksi::with('user')->get(),
            'kategori'=>kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {

        $transaksi = transaksi::findOrFail($id);
        return view('crud transaksi.update',compact('transaksi'),[
            'kategori'=>kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'user_id'=>'required',
            'jenis_transaksi'=>'required',
            'kategori_id'=>'required',
            'tanggal'=>'required',
            'total'=>'required'
        ]);


        $transaksi = transaksi::findOrFail($id);
        $transaksi->update($validatedData);

        return redirect('/transaksi/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = transaksi::findOrFail($id);
        $transaksi->delete();
    
        return redirect('/transaksi/admin');
    }
}
