
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB TI - Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: white;
            color: #333;
        }

        .navbar {
            background: #536f68;
            padding: 18px 25px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .logo {
            color: white;
            font-size: 24px;
            margin-right: 10px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .container {
            width: 80%;
            margin: 40px auto;
        }

        h1 {
            text-align: center;
            color: #536f68;
            font-size: 36px;
            margin-bottom: 25px;
        }

        .profile {
            font-size: 19px;
            line-height: 2;
        }

        .foto {
            display: block;
            width: 250px;
            height: auto;
            margin-top: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="logo">WEB TI</div>
        <a href="/">Home</a>
        <a href="/berita">Berita</a>
        <a href="/profile">Profil</a>
        <a href="#">Contact</a>
    </div>

    <div class="container">
        <h1>HALAMAN PROFILE</h1>

        <div class="profile">
            <p>Nama : Panji Satria Pratama</p>
            <p>NIM : 13242520066</p>
            <p>Prodi : Teknologi Informasi</p>

            <img
                src="{{ asset('img/0909-01.jpg') }}"
                class="foto"
                alt="Foto Mesin Motor"
            >
        </div>
    </div>

</body>
</html>
