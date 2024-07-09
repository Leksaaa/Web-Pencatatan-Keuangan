 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pencatatan Keuangan | Transaksi</title>
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            align-items: center;
            min-height: 100vh;
            
        }

        .container {
            display: flex;
            justify-content: space-between; /* Membuat kedua tabel berada di sisi berlawanan */
            gap: 20px; /* Jarak antara kedua tabel */
            padding: 0 0px; /* Padding horizontal untuk container */
            box-sizing: border-box; 
            padding-top: 80px;
        }

        .data-transaksi {
            width: 70%; /* Lebar tabel Data Transaksi */
            background-color: #fff;
            padding: 10px;
            padding-right: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 25px;
            margin-left: 20px;
        }

        .daftar-kategori {
            width: 20%; /* Lebar tabel Daftar Kategori */
            height: 200px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 25px;
        }

        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #ffc01f;
            color: white;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        .action-btn {
            display: flex;
            gap: 10px;
        }

        .update, .delete {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            transition: background-color 0.3s;
        }

        .update {
            background-color: rgb(17, 184, 240);
        }

        .delete {
            background-color: rgb(232, 40, 40);
        }

        #create {
            width: 60px;
            padding: 12px;
            text-align: center;
            border: none;
            border-radius: 5px;
            background-color: rgb(35, 210, 117);
            color: white;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s;
            align-self: flex-end;
        }

        #create:hover, .update:hover, .delete:hover {
            background-color: #555;
        }
        .total {
            display: flex;
            gap: 20px;
            justify-content: right;
        }
    </style>
    @include('navbar.navigasiu')
</head>
<body>
    <div class="container"> 
        <div class="data-transaksi"> 
            <h1>Data Transaksi  {{auth()->user()->name}}</h1>
            <a id="create" class="btn btn-primary" method="post" href="/transaksi/user/create" style="display: inline;">Create</a>
            <div class="total">
                <p>Total Pemasukan : {{$total1}}</p>
                <p>Total Pengeluaran : {{$total2}}</p>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Transaksi</th>
                        <th>Tipe</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->jenis_transaksi}}</td>
                        <td>{{optional($item->kategori)->tipe}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>{{$item->total}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="daftar-kategori"> <!-- Container untuk Daftar Kategori -->
            <h1>Daftar Kategori</h1>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tipe</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->tipe}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
    </div>
</body>
</html>
 
