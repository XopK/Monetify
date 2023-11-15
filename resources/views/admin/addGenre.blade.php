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
        <h2>Добавление жанра</h2>
        <form action="/admin/addGenre/create" method="POST" class="addGame">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Название жанра</label>
                <input type="text" name="title_genr" class="form-control addGame-input" id="exampleFormControlInput1">
            </div>
            <input class="nav-prof-btn" type="submit">
        </form>
    </div>
</body>

</html>
