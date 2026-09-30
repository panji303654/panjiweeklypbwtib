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
        }

        .navbar {
            background-color: #536f68;
            padding: 20px 25px;
            display: flex;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 24px;
            margin-right: 30px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            margin-right: 25px;
        }

        .container {
            width: 80%;
            margin: 40px auto;
        }

        h1 {
            text-align: center;
            color: #536f68;
            font-size: 42px;
            margin-bottom: 25px;
        }

        .profile {
            font-size: 20px;
            line-height: 2.5;
        }

        .foto {
            width: 180px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="logo">WEB TI</div>

        <a href="/">Home</a>
        <a href="#">Berita</a>
        <a href="/profile">Profil</a>
        <a href="#">Contact</a>
    </div>

    <div class="container">

        <h1>HALAMAN PROFILE</h1>

        <div class="profile">
            <p>Nama : Panji Satria Pratama</p>
            <p>NIM : 13242520066</p>
            <p>Prodi : Teknologi Informasi</p>

            <img src="{{ asset('img/foto.jpg') }}" class="foto" alt="Foto Profil">
        </div>

    </div>

</body>
</html>