
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB TI | Berita</title>

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

        .berita {
            margin-bottom: 25px;
        }

        .berita h2 {
            margin: 0 0 5px;
            font-size: 24px;
            font-weight: normal;
        }

        .berita h2 a {
            color: #1670c5;
            text-decoration: underline;
        }

        .penulis {
            margin: 0 0 8px;
            color: #555;
            font-size: 15px;
        }

        .konten {
            margin: 0;
            color: #555;
            font-size: 14px;
            line-height: 1.6;
            text-align: justify;
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

        @foreach ($data_berita as $berita)
            <article class="berita">
                <h2>
                    <a href="/berita">{{ $berita['judul'] }}</a>
                </h2>

                <p class="penulis">
                    {{ ucfirst($berita['penulis']) }}
                </p>

                <p class="konten">
                    {{ $berita['konten'] }}
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Informasi dan perkembangan teknologi memberikan manfaat
                    bagi mahasiswa dalam kegiatan belajar dan kehidupan sehari-hari.
                </p>
            </article>
        @endforeach

    </main>

</body>
</html>
