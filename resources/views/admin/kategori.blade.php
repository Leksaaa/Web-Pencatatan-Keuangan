<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pencatatan Keuangan | Kategori</title>
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

        

        .daftar-kategori {
            width: 30%; /* Lebar tabel Daftar Kategori */
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            margin-top: 30px;
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
            padding: 15px 30px;
            text-align: relative;
            border: none;
            border-radius: 5px;
            background-color: rgb(35, 210, 117);
            color: white;
            text-decoration: none;
            margin-top: 10px;
            transition: background-color 0.3s;
            align-self: flex-end;
        }

        #create:hover, .update:hover, .delete:hover {
            background-color: #555;
        }
    </style>
    @include('navbar.navigasi')
</head>
<body>
    <div class="container"> 
        
        <div class="daftar-kategori"> 
            <h1>Daftar Kategori</h1>
            <a id="create" class="btn btn-primary" method="GET" href="/kategori/admin/create" style="display: inline;">Create</a>
             <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tipe</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->tipe}}</td>


                        <td>
                            <form action="/kategori/admin/{{$item->id}}/edit" method="GET" style="display: inline;">
                                @method('PUT')
                                @csrf
                                <button class="update" type="submit" class="btn btn-danger">Update</button>
                            </form>
                            <form action="/kategori/admin/{{$item->id}}" method="POST" style="display: inline;">
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

