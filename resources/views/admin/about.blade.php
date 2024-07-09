@include('navbar.navigasi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        /* Reset CSS */
        body, h1, p {
            margin: 0;
            padding: 0;
        }

        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: black;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            border-radius: 8px 8px 0 0;
            
            padding-top: 90px;
        }

        section {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 0 0 8px 8px;
        }

        h1 {
            margin-bottom: 10px;
            font-size: 36px;
        }

        p {
            margin-bottom: 20px;
            font-size: 18px;
            line-height: 1.6;
        }

        .team {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .member {
            width: calc(50% - 20px);
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            box-sizing: border-box;
            overflow: hidden; /* Menghilangkan overflow saat kotak memanjang */
            transition: height 0.5s ease; /* Transisi lambat saat dihover */
        }

        .member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 10px;
            object-fit: cover;
            object-position: center;
        }

        .member h3 {
            margin-bottom: 5px;
            font-size: 24px;
        }

        .member p {
            font-size: 16px;
            color: #666;
        }
        
        .quote-box {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            margin-top: 20px;
        }
        
        .quote-box h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .quote-box p {
            font-size: 18px;
            line-height: 1.6;
        }
        
        /* Efek hover */
       /* Efek hover */
.member {
    transition: height 0.5 ease-in-out, box-shadow 0.8s ease;
    height: 260px; /* Tinggi awal kotak */
    overflow: hidden; /* Menyembunyikan konten yang melebihi tinggi kotak */
}

.member:hover {
    height: auto; /* Kotak akan memanjang sesuai konten saat dihover */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Efek bayang saat dihover */
}

.member .options {
    display: none; /* Awalnya disembunyikan */
    margin-top: 10px;
    opacity: 0; /* Awalnya transparan */
    transition: opacity 0.5s ease; /* Transisi untuk opacity */
}

.member:hover .options {
    display: block; /* Ditampilkan saat dihover */
    opacity: 1; /* Menjadi tidak transparan saat dihover */
}

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>About Us</h1>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="team">
                <div class="member">
                    <img src="{{ asset('upload/01.jpg') }}"  alt="Team Member 1">
                    <h3>Lovy Arsy</h3>
                    <p>Full Stack Developer</p>
                    <!-- Opsi email, nomor, dan alamat -->
                    <div class="options">
                        <p>Email: lovy@example.com</p>
                        <p>Phone: +1234567890</p>
                        <p>Address: 123 Main Street, City</p>
                    </div>
                </div>
                <div class="member">
                    <img src="{{ asset('upload/01.jpg') }}"  alt="Team Member 2">
                    <h3>Lissa Anggraini</h3>
                    <p>Content Writer</p>
                    <!-- Opsi email, nomor, dan alamat -->
                    <div class="options">
                        <p>Email: lissa@example.com</p>
                        <p>Phone: +1234567890</p>
                        <p>Address: 123 Main Street, City</p>
                    </div>
                </div>
                <div class="member">
                    <img src="{{ asset('upload/01.jpg') }}"  alt="Team Member 3">
                    <h3>Laluna Chrystya</h3>
                    <p>Quality Assurance</p>
                    <!-- Opsi email, nomor, dan alamat -->
                    <div class="options">
                        <p>Email: laluna@example.com</p>
                        <p>Phone: +1234567890</p>
                        <p>Address: 123 Main Street, City</p>
                    </div>
                </div>
                <div class="member">
                    <img src="{{ asset('upload/01.jpg') }}"  alt="Team Member 4">
                    <h3>Meisya Ekadyna</h3>
                    <p>UI/UX Designer</p>
                    <!-- Opsi email, nomor, dan alamat -->
                    <div class="options">
                        <p>Email: meisya@example.com</p>
                        <p>Phone: +1234567890</p>
                        <p>Address: 123 Main Street, City</p>
                    </div>
                </div>
            </div>
            <div class="quote-box">
                <h2>Our Vision</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
            </div>
        </div>
    </section>
</body>
</html>
