<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\kategori;
use App\Models\transaksi;
use App\Models\admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /** 
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::create();

        User::create([
            'name' => 'Lovy Armanda Rossy',
            'username' => 'Lovy',
            'password' => '123321'
        ]);
        User::create([
            'name' => 'Meisya Ekadyna L',
            'username' => 'Caca',
            'password' => '123321'
        ]);
        User::create([
            'name' => 'Tegar Budi',
            'username' => 'Tegar',
            'password' => '123321'
        ]);
        User::create([
            'name' => 'Septiaka Ronaldot',
            'username' => 'Ronaldo',
            'password' => '123321'
        ]);



        admin::create([
            'name' => 'Danu Ringga',
            'username' => 'Danu',
            'password' => Hash::make('Danu123')
        ]);
        admin::create([
            'name' => 'Saudi',
            'username' => 'Adi',
            'password' => Hash::make('Adi123')
        ]);
        admin::create([
            'name' => 'Saif Radithya',
            'username' => 'Saep',
            'password' => Hash::make('saif123')
        ]);
        admin::create([
            'name' => 'Sendhy praditya',
            'username' => 'Sendi',
            'password' => Hash::make('sendi123')
        ]);
        admin::create([
            'name' => 'Kevin Agustian',
            'username' => 'Agus',
            'password' => Hash::make('kevin123')
        ]);


        transaksi::create([
            'user_id' => '1',
            'jenis_transaksi'=>'Pembelanjaan',
            'kategori_id' => '2',
            'tanggal' => '2007-09-09',
            'total'=>'30000'
        ]);

        transaksi::create([
            'user_id' => '3',
            'jenis_transaksi'=>'Pembayaran Tagihan',
            'kategori_id' => '2',
            'tanggal' => '2008-09-09',
            'total'=>'150000'
        ]);

        transaksi::create([
            'user_id' => '1',
            'jenis_transaksi'=>'Pembayaran barang yang dipesan',
            'kategori_id' => '2',
            'tanggal' => '2008-09-09',
            'total'=>'20000'
        ]);

        transaksi::create([
            'user_id' => '2',
            'jenis_transaksi'=>'Pengembalian Pinjaman',
            'kategori_id' => '1',
            'tanggal' => '2008-09-09',
            'total'=>'100000'
        ]);

        transaksi::create([
            'user_id' => '3',
            'jenis_transaksi'=>'Penggajian',
            'kategori_id' => '1',
            'tanggal' => '2008-09-09',
            'total'=>'1000000'
        ]);


        kategori::create([
            'tipe'=>'pemasukan',
        ]);
        kategori::create([
            'tipe'=>'pengeluaran',
        ]);
        

    }
}