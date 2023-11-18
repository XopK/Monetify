<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content reg">
            <div class="modal-header">
                <h1 class="modal-title">Регистрация</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="FormControlInput0" class="form-label">Имя</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="FormControlInput1" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="FormControlInput2" class="form-label">Пароль</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="FormControlInput3" class="form-label">Подтверждение пароля</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>

                    <div class="mb-3 form-control d-flex" style="align-items: center; margin-top: 20px">
                        <input class="form-check-input" required type="checkbox" value="" id="flexCheckDefault">
                        <span class="user-pol">Я ознакомлен с <a href="">пользовательским соглашением</a>, <a
                                href="">политикой конфиденциальности</a> и даю согласие
                            на <a href="">обработку персональных данных</a>.</span>
                    </div>

                    <button class="login-btn btn-reg" type="submit">Регистрация</button>
                </form>
            </div>
        </div>
    </div>
</div>
