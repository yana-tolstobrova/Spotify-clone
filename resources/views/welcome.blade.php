<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Spotify</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
    .logo {
        width: 50%;
    }

    * {
        background-color: black;
    }

    a {
        text-align: center;
    }

    div {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>

</head>

<body>
    <div>
        <a href="{{ url('/songs') }}"><img
                src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_Green.png"
                class="logo"></a>
    </div>

</body>

</html>