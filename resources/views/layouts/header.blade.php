<nav class="navbar bg-body-white fixed-top navbar-custom">
    <div class="container justify-content-between">
        <button class="nt-custom" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarstart"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon nav-cust-icon-group"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarstart"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Меню</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    @auth
                        <li class="nav-item">
                            <div class="offcanvas-account">
                                <img src="/storage/image/account.png" alt="account.png">
                                <div class="offcanvas-account-text">
                                    <p class="offcanvas-account-text-name">{{ Auth::user()->name }}</p>
                                    <p class="offcanvas-account-text-balance">Баланс: {{ Auth::user()->balance }}₽</p>
                                </div>
                            </div>
                        </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/catalog">Каталог</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Личный кабинет</a>
                        </li>
                        <form action="/logout" method="POST">
                            @csrf
                            <li class="nav-item">
                                <button class="nav-link" type="submit">Выйти</button>
                            </li>
                        </form>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <button type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Войти
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                Регистрация
                            </button>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
        <a href="/"><img src="/storage/image/logo.png" alt="logo.png"></a>
        <button class="nt-custom" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarend"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon nav-cust-icon-cart"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarend"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Корзина</h5>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    @if (session()->missing('cart'))
                        <li class="nav-item nav-item-cost">
                            <h4>Ты чего то ждешь?</h4>
                        </li>
                    @else
                        @php
                            $total = 0;
                        @endphp

                        @forelse (session('cart') as $item)
                            <li class="nav-item nav-item-cust">
                                <a class="nav-link nav-link-cust" href="#">
                                    <span>{{ $item->title }}</span>
                                    <span>{{ $item->price }}₽</span>
                                </a>
                            </li>
                            @php
                                $total += $item->price; 
                            @endphp
                        @empty
                            <li class="nav-item nav-item-cost">
                                <h4>В корзине пусто</h4>
                            </li>
                        @endforelse
                    @endif
                    @auth
                        <li class="nav-item nav-item-cost">
                            <p>Итого: <span>{{ $total }}₽</span></p>
                        </li>
                        <li class="nav-item nav-item-cost">
                            <a href="" class="btn nav-cart-btn">Оформить заказ</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
