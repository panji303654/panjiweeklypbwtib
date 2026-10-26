<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | WEB TI</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: white;
            color: #333;
        }

        .navbar {
            background-color: #536f68;
            padding: 18px 25px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .logo {
            color: white;
            font-size: 24px;
            margin-right: 10px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .container {
            width: 80%;
            margin: 30px auto;
        }

        .container h1 {
            margin: 0 0 8px;
            font-size: 28px;
        }

        .penulis {
            margin: 0 0 20px;
            color: #555;
            font-size: 15px;
        }

        .konten {
            margin: 0 0 25px;
            color: #555;
            font-size: 16px;
            line-height: 1.7;
            text-align: justify;
        }

        .kembali {
            color: #1670c5;
        }

        @media (max-width: 600px) {
            .container {
                width: 90%;
            }

            .navbar {
                gap: 15px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="logo">WEB TI</div>
        <a href="/">HOME</a>
        <a href="/berita">BERITA</a>
        <a href="/profile">PROFILE</a>
        <a href="#">CONTACT</a>
    </nav>

    <main class="container">
        <h1>{{ $berita['judul'] }}</h1>

        <p class="penulis">
            {{ ucfirst($berita['penulis']) }}
        </p>

        <p class="konten">
            {{ $berita['konten'] }}
        </p>

        <a class="kembali" href="/berita">&larr; Kembali ke daftar berita</a>
    </main>

</body>
</html>