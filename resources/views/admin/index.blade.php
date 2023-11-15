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
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    @extends('layouts.headerAdmin')
    <div class="container" style="margin-top: 80px">
        <h2>Список игр</h2>
        <table class="table admin-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Фото</th>
                    <th scope="col">Игра</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Жанры</th>
                    <th scope="col">Цена</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allgame as $item)
                    <tr>
                        <th scope="row">{{ $item->id_game }}</th>
                        <td><img src="/storage/image/{{ $item->image }}" alt="{{ $item->image }}"></td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <p class="short-text">{{ $item->description }}</p>
                        </td>
                        <td>{{ $item->genres }}</td>
                        <td>{{ $item->price }}₽</td>
                        <td><a href="/admin/editGame/{{ $item->id_game }}" class="btn btn-edit">Редактировать</a></td>
                        <td><a href="/admin/{{ $item->id_game }}/delete" class="btn btn-del">Удалить</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
