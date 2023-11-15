<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monetify - Админ панель</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    @extends('layouts.headerAdmin')
    <div class="container" style="margin-top: 80px">
        <h2>Редактиование игры</h2>
        @foreach ($edit as $item)
            <form action="#" class="addGame">
                <div class="mb-3">

                    <label for="exampleFormControlInput1" class="form-label">Название игры</label>
                    <input type="text" class="form-control addGame-input" value="{{ $item->title }}"
                        id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                    <textarea class="form-control addGame-input" id="exampleFormControlTextarea1" rows="8">{{ $item->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Жанры</label>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Выберите жанры
                                </button>
                            </h2>
                            <div style="padding: 20px" id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                @foreach ($allgenres as $genres)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $genres->id }}"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{ $genres->title_genre }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3" style="margin-top: 10px">
                    <label for="exampleFormControlInput1" class="form-label">Цена</label>
                    <input type="number" value="{{ $item->price }}" class="form-control addGame-input"
                        id="exampleFormControlInput1">
                </div>

                <input class="nav-prof-btn" type="submit">
            </form>
        @endforeach
    </div>
</body>

</html>
