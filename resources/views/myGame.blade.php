<h2>Мои покупки</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Дата покупки</th>
            <th scope="col">Игра</th>
            <th scope="col">Цена</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($userGame as $userGames)
            <tr>
                <th scope="row">{{ $userGames->id }}</th>
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
