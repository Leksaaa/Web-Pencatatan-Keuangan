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
            justify-content: center; /* Membuat kedua tabel berada di sisi berlawanan */
            gap: 20px; /* Jarak antara kedua tabel */
            padding: 0 0px; /* Padding horizontal untuk container */
            box-sizing: border-box;
            padding-top: 80px; /* Padding tidak menambah lebar container */
        }

        .data-transaksi {
            width: 80%; /* Lebar tabel Data Transaksi */
            background-color: #fff;
            padding: 20px;
            padding-right: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        

        table {
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

        .create {
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

        .create:hover, .update:hover, .delete:hover {
            background-color: #555;
        }
    </style>
    @include('navbar.navigasi')
</head>
<body>
    <div class="container"> 
        <div class="data-transaksi"> <!-- Container untuk Data Transaksi -->
            <h1>Data Transaksi semua user</h1>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Jenis Transaksi</th>
                        <th>Tipe</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{ optional($item->user)->username}}</td>
                        <td>{{$item->jenis_transaksi}}</td>
                        <td>{{optional($item->kategori)->tipe}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>{{$item->total}}</td>
                        <td>
                            <form action="/transaksi/admin/{{$item->id}}/edit" method="GET" style="display: inline;">
                                <button class="update" type="submit" class="btn btn-danger">Update</button>
                            </form>
                            <form action="/transaksi/admin/{{$item->id}}" method="POST" style="display: inline;">
                                @method('delete')
                                @csrf
                                <button class="delete" type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

