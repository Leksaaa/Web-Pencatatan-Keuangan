<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\kategori;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class post1controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    
    
    public function index()
    {
        $userId = Auth::id();
        $transaksi = transaksi::where('user_id', $userId)->with('user', 'kategori')->get();
        $tipe1 = '1'; //pemasukan
        $tipe2 = '2'; //pengeluaran
        $total1 = $transaksi->where('kategori_id', $tipe1)->sum('total');
        $total2 = $transaksi->where('kategori_id', $tipe2)->sum('total');

        return view('user.transaksi', [ 
            'transaksi' => $transaksi,  
            'kategori' => kategori::all(),
            'total1' => $total1,
            'total2'=>$total2

        ]);
    }
       
    public function create()
    {
        return view('crud transaksi.create',[
            'transaksi'=>transaksi::all(),
            'kategori'=>kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id',
            'jenis_transaksi'=>'required',
            'kategori_id'=>'required',
            'tanggal'=>'required',
            'total'=>'required'

        ]);
        $userId = Auth::id();

    
        transaksi::create([
            'user_id' => $userId,
            'jenis_transaksi' => $request->jenis_transaksi,
            'kategori_id' => $request->kategori_id,
            'total' => $request->total,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('/transaksi/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
