<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <h1>Ti consiglio un film</h1>

    <div class="container">
        

        @foreach($data as $movie)
            
        <div class="card">

            <div class="text-card">
                <h2>{{ $movie->title }}</h2>
                <h4>Titolo originale: {{ $movie->original_title }}</h4>
            </div>
            <img src="https://yt3.ggpht.com/ytc/AKedOLR0bEeuRG0wy38tGqXQAyNgwIEfX4gM6N9_lY11=s900-c-k-c0x00ffffff-no-rj" alt="">
            <div class="text-card">
                <div>Data di uscita: {{ $movie->date }}</div>
                <div>Voto: {{ $movie->vote }}</div>
            </div>

        </div>
        @endforeach

    </div>
    
    
</body>
</html>