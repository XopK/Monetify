<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monetify - Каталог</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    @extends('layouts.header')
    @extends('layouts.signin')
    @extends('layouts.signup')
    <div class="container cust-mt">
        <h2>Каталог игр</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="filters-catalog">
                    <h2 class="filters-title">Сортировка</h2>
                    <div class="sort-block-check">
                        <form action="/filter" method="POST">
                        <select class="form-select" aria-label="Default select example" name="sort">
                            <option value="0">По дате добавления</option>
                            <option value="1">По цене ↑</option>
                            <option value="2">По цене ↓</option>
                            <option value="3">По названию</option>
                        </select>
                    </div>
                    <h2 class="filters-title">Цена</h2>
                    <div class="filters-input">
                            <span>От</span>
                            <input type="number" name="min_price" min="1">
                            <span>До</span>
                            <input type="number" name="max_price" min="2">
                            <span style="font-size: 24px">₽</span>
                    </div>
                    <h2 class="filters-title">Жанры</h2>
                    @csrf
                    @foreach ($genre as $genres)
                        <div class="filters-block-check">
                            <input class="filters-checkbox" name="genr[]" value="{{ $genres->id }}" type="checkbox"
                                id="genre{{ $genres->id }}">
                            <label class="filters-label"
                                for="genre{{ $genres->id }}">{{ $genres->title_genre }}</label>
                        </div>
                    @endforeach
                    <button class="nav-prof-btn" type="submit" style="margin-top: 10px">Применить</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                @isset($filter)
                    @foreach ($filter as $filters)
                        <a class="maincard-cm-link" href="/game/{{$filters->id_game}}">
                            <div class="maincard-cm-body">
                                <div class="maincard-cm-img">
                                    <img src="/storage/image/{{ $filters->image }}" alt="{{ $filters->image }}">
                                </div>
                                <div class="maincard-cm-text">
                                    <h5 class="maincard-cm-title">{{ $filters->title }}</h5>
                                    <h5 class="maincard-cm-genre">{{ $filters->genres }}</h5>
                                </div>
                                <div class="maincard-cm-figure">
                                    <span>{{ $filters->price }}₽</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endisset
                @isset($allgame)
                    @foreach ($allgame as $games)
                        <a class="maincard-cm-link" href="/game/{{$games->id_game}}">
                            <div class="maincard-cm-body">
                                <div class="maincard-cm-img">
                                    <img src="/storage/image/{{ $games->image }}" alt="{{ $games->image }}">
                                </div>
                                <div class="maincard-cm-text">
                                    <h5 class="maincard-cm-title">{{ $games->title }}</h5>
                                    <h5 class="maincard-cm-genre">{{ $games->genres }}</h5>
                                </div>
                                <div class="maincard-cm-figure">
                                    <span>{{ $games->price }}₽</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endisset

            </div>
        </div>

    </div>
</body>

</html>
