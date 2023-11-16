<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monetify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    @extends('layouts.header')
    @extends('layouts.signin')
    @extends('layouts.signup')
    <section>
        <div class="slider-block">
            <div id="carouselExampleIndicators" class="carousel slide">

                <div class="carousel-inner">
                    @foreach ($slider as $key => $sliders)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <div class="d-flex">
                                    <div class="left-slider">
                                        <a href="/game/{{$sliders->id}}">
                                            <img src="/storage/image/{{ $sliders->image }}" alt="{{ $sliders->image }}">
                                        </a>
                                        <a href="/game/{{$sliders->id}}" class="slider-cost">{{ $sliders->price }}₽</a>
                                    </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h2 style="text-align: center;margin:20px 0">Лидеры продаж</h2>
                    @foreach ($games as $item)
                        <a class="maincard-cm-link" href="/game/{{$item->id_game}}">
                            <div class="maincard-cm-body">
                                <div class="maincard-cm-img">
                                    <img src="/storage/image/{{ $item->image }}" alt="{{ $item->image }}">
                                </div>
                                <div class="maincard-cm-text">
                                    <h5 class="maincard-cm-title">{{ $item->title }}</h5>
                                    <h5 class="maincard-cm-genre">
                                        {{ $item->genres }}
                                    </h5>
                                </div>
                                <div class="maincard-cm-figure">
                                    <span>{{ $item->price }}₽</span>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
                <div class="col-4">
                    <h2 style="text-align: center;margin:20px 0">Новинки</h2>
                    @foreach ($newest as $item2)
                        <a class="maincard-cm-link" href="/game/{{$item2->id}}">
                            <div class="litlecard-cm-body">
                                <div class="litlecard-cm-img">
                                    <img src="/storage/image/{{ $item2->image }}" alt="{{ $item2->image }}">
                                </div>
                                <div class="litlecard-cm-text">
                                    <h5 class="litlecard-cm-title">{{ $item2->title }}</h5>
                                </div>
                                <div class="litlecard-cm-figure">
                                    <span>{{ $item2->price }}₽</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div style="text-align: center;margin: 50px 0;">
                <a class="new-g-link" href="/catalog">ещё<img src="/storage/image/Expand_down.svg" alt="Expand_down.svg"></a>
            </div>
        </div>
        <div class="genre-bg">
            <div class="container">
                <h2 class="genre-title">Жанры</h2>
                <div class="row row-cols-6 g-3">
                    <div class="col">
                        <a href="/catalog">
                            <div class="genre-block">
                                <img src="/storage/image/shooter.svg" alt="shooter.svg">
                                <p>Шутеры</p>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/catalog">
                            <div class="genre-block">
                                <img src="/storage/image/ghost.svg" alt="ghost.svg">
                                <p>Хоррор</p>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/catalog">
                            <div class="genre-block">
                                <img src="/storage/image/hand.svg" alt="hand.svg">
                                <p>Файтинги</p>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/catalog">
                            <div class="genre-block">
                                <img src="/storage/image/rpg.svg" alt="rpg.svg">
                                <p>RPG</p>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/catalog">
                            <div class="genre-block">
                                <img src="/storage/image/rubik.svg" alt="rubik.svg">
                                <p>Головоломки</p>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/catalog">
                            <div class="genre-block">
                                <img src="/storage/image/strategy.svg" alt="strategy.svg">
                                <p>Стратегии</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div style="text-align: center;margin-top: 30px;">
                    <a class="genre-link" href="/catalog">другие жанры<img src="/storage/image/Expand_down.svg"
                            alt="Expand_down.svg"></a>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="about-us-title">О нас</h2>
            <p class="about-us-desc">Monetify - это ваш ключ к захватывающему миру виртуальных развлечений. Мы
                предлагаем
                богатый выбор игр на любой вкус и предпочтения. Наши продукты доступны для различных платформ, и мы
                всегда
                готовы помочь вам найти ту игру, которую вы искали.</p>
            <h2 class="about-us-title">Наши преимущества</h2>
            <p class="about-us-plus">• Широкий выбор игр на все платформы.</p>
            <p class="about-us-plus">• Конкурентоспособные цены и регулярные акции.</p>
            <p class="about-us-plus">• Профессиональная поддержка и консультации по выбору игр.</p>
            <p class="about-us-plus">• Быстрая и надежная доставка.</p>
            <p class="about-us-plus">• Гарантированная безопасность ваших данных и платежей.</p>
        </div>
        <footer>
            <div class="container">
                <div class="inside-footer">
                    <div class="left-footer">
                        <p class="footer-title">Свяжитесь с нами</p>
                        <p class="footer-info">Телефон: 89964572147</p>
                        <p class="footer-info">Email: monetifygame@gmail.com</p>
                        <p class="footer-promise">Мы работаем, чтобы сделать ваш игровой опыт незабываемым. Доверьтесь
                            нам,
                            и давайте вместе погрузимся в мир игр!</p>
                    </div>
                    <div class="right-footer">
                        <p class="footer-title">Наши социальные сети</p>
                        <a href=""><img src="/storage/image/X.svg" alt="X.svg"></a>
                        <a href=""><img src="/storage/image/youtube.svg" alt="youtube.svg"></a>
                        <a href=""><img src="/storage/image/telegram.svg" alt="telegram.svg"></a>
                        <a href=""><img src="/storage/image/vk.svg" alt="vk.svg"></a>
                    </div>
                </div>
            </div>
            <div class="under-footer">
                <p>©2023 Monetify|Магазин-игр</p>
            </div>
        </footer>
    </section>
</body>

</html>
