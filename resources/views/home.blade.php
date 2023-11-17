<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monetify - Личный кабинет</title>
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
    @extends('layouts.header')
    <div class="container d-flex" style="margin-top:110px">
        <div class="navigation">
            <div class="info-acc">
                <img src="/storage/image/account.png" alt="account.png">
                <div class="info-nav">
                    <p>{{ Auth::user()->name }}</p>
                    <span>Баланс: {{ Auth::user()->balance }}₽</span>
                </div>
            </div>
            <ul class="none-margin" id="nav">
                <div class="nav-item-top" style="margin-top:15px">
                    <a class="nav-link profile-font" aria-current="page" href="/home">Мои покупки</a>
                </div>
                <li class="nav-item-top">
                    <a class="nav-link profile-font" aria-current="page" href="/edit">Редактировать профиль</a>
                </li>
                <li class="nav-item-top">
                    <a class="nav-link profile-font" aria-current="page" href="/balance">Пополнить баланс</a>
                </li>
                <hr>
            </ul>
        </div>
        <div class="content">
            <div class="container" id="change" style="padding:20px;">
                <h2>Мои покупки</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Дата покупки</th>
                            <th scope="col">Игра</th>
                            <th scope="col">Цена</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($userGame as $userGames)
                            <tr>
                                <td>{{ $userGames->created_at }}</td>
                                <td><a href="#">{{ $userGames->title }}</a></td>
                                <td>{{ $userGames->price }}₽</td>
                            </tr>
                        @empty
                            <tr>
                                <h4>Пусто...</h4>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    let links = document.querySelectorAll('li>a');
    let output = document.getElementById('change');

    let ajax = new XMLHttpRequest();
    ajax.addEventListener('readystatechange', function() {
        if (this.readyState == 4 && this.status == 200)
            output.innerHTML = this.responseText;
    });

    function loadHTML(evt) {
        ajax.open('GET', this.href, true);
        ajax.send();
        evt.preventDefault();
    }
    links.forEach((el) => {
        el.addEventListener('click', loadHTML);
    });
</script>

</html>
