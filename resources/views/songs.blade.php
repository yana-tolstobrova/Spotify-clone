<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
    body {
        background-color: black;
        color: white;
    }

    a {
        text-align: center;
    }

    table {
        border-collapse: collapse;
        color: #B9B8BC;
    }

    .hero-box {
        border-radius: 15px 15px 0 0;
        background-color: #463286;
        width: 75%;
        margin: 0 auto 0 auto;
        display: flex;
        padding: 1.5em;
        align-items: end;
    }


    table thead th {
        border-bottom: 1px solid white;
        padding-bottom: 0.5em;

    }

    .main-text-box {
        background-color: #463286;
        margin-left: 1em;
    }

    .main-text-box p,
    h1 {
        background-color: #463286;
    }

    h1 {
        font-size: 4em;
        font-weight: 400;
        margin: 0;
    }

    .gradient-box {
        background: linear-gradient(to bottom, #20173E, black);
        width: 75%;
        margin: 0 auto 0 auto;
        padding: 1.5em;
    }

    table tbody td {
        padding-right: 1em;
    }

    .title {
        color: white;
    }
    </style>
</head>

<body>
    <div class="hero-box">
        <img src=" {{ asset('images/heart.png') }}" alt="heart">
        <div class="main-text-box">
            <p>Lista</p>
            <h1>Canciones que te gustan</h1>
            <p>Yana Tolstobrova . 10 canciones</p>
        </div>
    </div>
    <div class="gradient-box">
        <p class="button-play"><img src=" {{ asset('images/play.png') }}" alt="play button"></p>

        <table>

            <thead>

                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th></th>
                    <th align="start">Álbum</th>
                    <th align="start">Fecha en la que se añadió</th>
                    <th></th>
                    <th> <img src=" {{ asset('images/clock.svg') }}" alt="clock">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($songs as $song)
                <tr>
                    <td class="title">{{ $song->id }}</td>
                    <td><img src="{{ $song->image }}" alt="Song Image" class="album-cover"></td>
                    <td><span class="title">{{ $song->title }}</span><br> {{ $song->author }}</td>
                    <td>{{ $song->album }}</td>
                    <td>{{ $song->add_time }}</td>
                    <td> <img src=" {{ asset('images/heart-green.png') }}" alt="heart">
                    </td>
                    <td>{{ $song->duration }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>