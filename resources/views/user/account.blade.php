<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Page</title>
    @include('navbar.navigasiu')

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        
        .account-container {
            margin-left: 200px;
            max-width: 800px;
            background-color: #ff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }
        
        .kotak {
            margin-top: 150px;
            text-align: center;
        }
        .account-heading {
            text-align: center;
            color: #333; /* Warna teks */
        }
        
        .account-info {
            margin-bottom: 20px;
            color: #666; /* Warna teks */
        }
        
        .account-info p {
            margin: 10px 0;
        }
        
        .logout-btn {
            display: block;
            width: 100%;
            max-width: 200px;
            margin: 0 auto;
            text-align: center;
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        
        .logout-btn-account:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="account-container">
        <div class="kotak">
            <h1 class="account-heading">Account Information</h1>
            <div class="account-info">
                    <p>Nama: {{ $user->name }}</p>
                    <p>Username: {{ $user->username }}</p>
                    <p>Password: {{ $user->password }}</p>
            </div>
        </div>    
        <form action="/logout" method="post" class="logout-btn-form">
            @csrf
            <button type="submit" class="logout-btn">Log Out</button>
        </form>
    </div>
</body>
</html>
