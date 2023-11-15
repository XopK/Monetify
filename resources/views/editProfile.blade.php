<h2>Редактировать профиль</h2>
<form action="" class="edit">
    <div class="form-section">
        <div class="mb-3">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Имя</label>
                <input type="text" class="form-control edit-input" id="exampleFormControlInput1" value="{{ Auth::user()->name }}">
            </div>
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control edit-input" id="exampleFormControlInput1"
                value="{{ Auth::user()->email }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Подтвердите пароль</label>
            <input type="password" class="form-control edit-input" id="exampleFormControlInput1">
        </div>
        <button class="nav-prof-btn">Изменить</button>
    </div>
</form>
