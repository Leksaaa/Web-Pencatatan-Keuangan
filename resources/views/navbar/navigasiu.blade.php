<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        /* CSS untuk navigation bar */
        nav {
            background-color: #333;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 90px;
            position: fixed;
            z-index: 100;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            margin-right: -25rem;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li:last-child {
            margin-right: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            position: relative;
            transition: color 0.3s, background-color 0.3s;
        }

        nav ul li a:hover {
            color: #ffc107; /* Warna kuning */
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 100%;
            height: 2px;
            background-color: transparent;
            transition: background-color 0.3s;
        }

        nav ul li a:focus::after,
        nav ul li a:hover::after {
            background-color: #ffc107; /* Warna kuning */
        }

        /* CSS untuk gambar */
        .logo {
            margin-right: auto; /* agar logo berada di kiri */
            display: flex; /* Membuat isi logo menjadi flex */
            align-items: center; /* Membuat isi logo berada di tengah secara vertikal */
        }

        .logo img {
            height: 40px;
            margin-right: 10px; /* Menambahkan jarak antara gambar dan teks */
        }

        /* CSS untuk tombol logout */
        .logout-btn-form {
            margin-left: auto; /* agar tombol Log Out berada di kanan */
        }

        .logout-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        /* CSS untuk tombol logout ketika dihover */
        .logout-btn:hover {
            background-color: #c82333;
        }

        span {
            color: white;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>

<nav>
    <div class="logo">
        <img src="{{ asset('upload/Coin.png') }}" alt="Logo">
        <span>Pencatatan Keuangan</span>
    </div>
    <ul>
        <li><a href="/beranda/user">Beranda</a></li>
        <li><a href="/transaksi/user">Transaksi</a></li>
        <li><a href="/kategori/user">Kategori</a></li>
        <li><a href="/account/user">Account</a></li>
        <li><a href="/about/user">About Us</a></li>
    </ul>
    <form action="/logout" method="post" class="logout-btn-form">
        @csrf
        <button type="submit" class="logout-btn">Log Out</button>
    </form>
</nav>

</body>
</html>
