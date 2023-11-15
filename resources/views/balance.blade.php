<h2>Пополнить баланс</h2>
<form id="prof" method="POST" action="{{route('balance')}}">
    @csrf
    @method('PATCH')
    <div class="input-group input-group-lg" style="margin-top: 20px">
        <span class="input-group-text" id="inputGroup-sizing-lg">Введите сумму</span>
        <input type="text" name="balance" class="form-control balance-input" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-lg">
    </div>
</form>
<h3 style="margin-top: 30px">Выберите способ пополнения</h3>
<select class="form-select" aria-label="Default select example">
    <option selected>Банковская карта МИР, Visa, MasterCard </option>
    <option>Кошелек qiwi</option>
    <option>СБП</option>
</select>
<button class="nav-prof-btn" type="submit" form="prof" style="margin-top: 35px">Пополнить</button>
