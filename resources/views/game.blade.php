<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monetify - Elden Ring</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    @extends('layouts.header')
    @extends('layouts.signin')
    @extends('layouts.signup')
    <div class="container">
        @foreach($games as $game)
        <div class="game-block">
            <div style="display: flex;">
                <div class="game-block-left">
                    <div class="game-block-img">
                        <img src="/storage/image/{{$game->image}}" alt="{{$game->image}}">
                    </div>
                </div>
                <div class="game-block-right">
                    <div class="game-block-right-t">
                        <h2 class="game-title">{{$game->title}}</h2>
                        <p class="game-genres">Жанры: {{$game->genres}}</p>
                        <p class="game-cost">Цена: {{$game->price}}₽</p>
                    </div>
                    <div class="game-block-right-b">
                        <button class="game-btn">В корзину</button>
                    </div>
                </div>
            </div>
            <h2 class="game-desc-title">Описание</h2>
            <p class="game-desc">{{$game->description}}</p>
        </div>
        @endforeach
    </div>
</body>