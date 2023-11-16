<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\game_and_genre;
use App\Models\Genre;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GameController extends Controller
{
    public function index()
    {
        $games = DB::table('game_and_genres')
            ->select(DB::raw('GROUP_CONCAT(genres.title_genre) as genres'), 'games.title', 'games.description', 'games.image', 'games.price', 'id_game')
            ->join('genres', 'genres.id', '=', 'game_and_genres.id_genre')
            ->join('games', 'games.id', '=', 'game_and_genres.id_game')
            ->groupBy('id_game')
            ->limit(5)
            ->get();

        $new = DB::table('games')
            ->select('id', 'title', 'image', 'price')
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get();

        $slider = DB::table('games')
            ->select('id', 'title', 'image', 'price')
            ->get();

        return view('index', ['games' => $games, 'newest' => $new, 'slider' => $slider]);
    }

    public function catalog()
    {
        $games = DB::table('game_and_genres')
            ->select(DB::raw('GROUP_CONCAT(genres.title_genre) as genres'), 'games.title', 'games.description', 'games.image', 'games.price', 'games.created_at', 'id_game')
            ->join('genres', 'genres.id', '=', 'game_and_genres.id_genre')
            ->join('games', 'games.id', '=', 'game_and_genres.id_game')
            ->groupBy('id_game')
            ->orderBy('games.created_at', 'desc')
            ->get();

        $genres = DB::table('genres')
            ->select('id', 'title_genre')
            ->get();

        return view('catalog', ['allgame' => $games, 'genre' => $genres]);
    }

    public function filter(Request $request)
    {
        $idSort = $request->input('sort');
        $idGenr = $request->input('genr');
        switch ($idSort) {
            case '1':
                $filter = DB::table('game_and_genres')
                    ->select(DB::raw('GROUP_CONCAT(genres.title_genre) as genres'), 'games.title', 'games.description', 'games.image', 'games.price', 'games.created_at', 'id_game')
                    ->join('genres', 'genres.id', '=', 'game_and_genres.id_genre')
                    ->join('games', 'games.id', '=', 'game_and_genres.id_game')
                    ->when($idGenr, function ($query) use ($idGenr) {
                        return $query->whereIn('id_genre', $idGenr);
                    })
                    ->when(request()->filled('min_price') && request()->filled('max_price'), function ($query) {
                        return $query->whereBetween('games.price', [request('min_price'), request('max_price')]);
                    })
                    ->when(request()->filled('min_price') && !request()->filled('max_price'), function ($query) {
                        return $query->where('games.price', '>=', request('min_price'));
                    })
                    ->when(!request()->filled('min_price') && request()->filled('max_price'), function ($query) {
                        return $query->where('games.price', '<=', request('max_price'));
                    })
                    ->groupBy('id_game')
                    ->orderBy('games.price', 'DESC')
                    ->get();
                break;
            case '2':
                $filter = DB::table('game_and_genres')
                    ->select(DB::raw('GROUP_CONCAT(genres.title_genre) as genres'), 'games.title', 'games.description', 'games.image', 'games.price', 'games.created_at', 'id_game')
                    ->join('genres', 'genres.id', '=', 'game_and_genres.id_genre')
                    ->join('games', 'games.id', '=', 'game_and_genres.id_game')
                    ->when($idGenr, function ($query) use ($idGenr) {
                        return $query->whereIn('id_genre', $idGenr);
                    })
                    ->when(request()->filled('min_price') && request()->filled('max_price'), function ($query) {
                        return $query->whereBetween('games.price', [request('min_price'), request('max_price')]);
                    })
                    ->when(request()->filled('min_price') && !request()->filled('max_price'), function ($query) {
                        return $query->where('games.price', '>=', request('min_price'));
                    })
                    ->when(!request()->filled('min_price') && request()->filled('max_price'), function ($query) {
                        return $query->where('games.price', '<=', request('max_price'));
                    })
                    ->groupBy('id_game')
                    ->orderBy('games.price', 'ASC')
                    ->get();
                break;
            case '3':
                $filter = DB::table('game_and_genres')
                    ->select(DB::raw('GROUP_CONCAT(genres.title_genre) as genres'), 'games.title', 'games.description', 'games.image', 'games.price', 'games.created_at', 'id_game')
                    ->join('genres', 'genres.id', '=', 'game_and_genres.id_genre')
                    ->join('games', 'games.id', '=', 'game_and_genres.id_game')
                    ->when($idGenr, function ($query) use ($idGenr) {
                        return $query->whereIn('id_genre', $idGenr);
                    })
                    ->when(request()->filled('min_price') && request()->filled('max_price'), function ($query) {
                        return $query->whereBetween('games.price', [request('min_price'), request('max_price')]);
                    })
                    ->when(request()->filled('min_price') && !request()->filled('max_price'), function ($query) {
                        return $query->where('games.price', '>=', request('min_price'));
                    })
                    ->when(!request()->filled('min_price') && request()->filled('max_price'), function ($query) {
                        return $query->where('games.price', '<=', request('max_price'));
                    })
                    ->groupBy('id_game')
                    ->orderBy('games.title', 'ASC')
                    ->get();
                break;
            default:
                $filter = DB::table('game_and_genres')
                    ->select(DB::raw('GROUP_CONCAT(genres.title_genre) as genres'), 'games.title', 'games.description', 'games.image', 'games.price', 'games.created_at', 'id_game')
                    ->join('genres', 'genres.id', '=', 'game_and_genres.id_genre')
                    ->join('games', 'games.id', '=', 'game_and_genres.id_game')
                    ->when($idGenr, function ($query) use ($idGenr) {
                        return $query->whereIn('id_genre', $idGenr);
                    })
                    ->when(request()->filled('min_price') && request()->filled('max_price'), function ($query) {
                        return $query->whereBetween('games.price', [request('min_price'), request('max_price')]);
                    })
                    ->when(request()->filled('min_price') && !request()->filled('max_price'), function ($query) {
                        return $query->where('games.price', '>=', request('min_price'));
                    })
                    ->when(!request()->filled('min_price') && request()->filled('max_price'), function ($query) {
                        return $query->where('games.price', '<=', request('max_price'));
                    })
                    ->groupBy('id_game')
                    ->orderBy('games.created_at', 'desc')
                    ->get();
                break;
        }
        $genres = DB::table('genres')
            ->select('id', 'title_genre')
            ->get();

        return view('catalog', ['filter' => $filter, 'genre' => $genres]);
    }

    public function adminIndex()
    {
        $games = DB::table('game_and_genres')
            ->select(DB::raw('GROUP_CONCAT(genres.title_genre) as genres'), 'games.title', 'games.description', 'games.image', 'games.price', 'id_game')
            ->join('genres', 'genres.id', '=', 'game_and_genres.id_genre')
            ->join('games', 'games.id', '=', 'game_and_genres.id_game')
            ->groupBy('id_game')
            ->get();

        return view('admin.index', ['allgame' => $games]);
    }

    public function addGame()
    {
        $genres = Genre::all();
        return view('admin.addGame', ['allGenres' => $genres]);
    }

    public function store(Request $request)
    {
        $game = $request->all();
        $genres = $request->input('genres');

        $name = $request->file('photo')->hashName();
        $path = $request->file('photo')->store('/public/image');

        $currentDateTime = Carbon::now();

        Game::create([
            'title' => $game['title'],
            'description' => $game['description'],
            'image' => $name,
            'price' => $game['price'],
        ]);

        $newGame = DB::table('games')
            ->select('id')
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();

        $gameId = $newGame->first()->id;

        foreach ($genres as $item2) {
            DB::table('game_and_genres')->insert([
                'id_game' => $gameId,
                'id_genre' => $item2,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ]);
        }

        return redirect('/admin')->with('success', 'Игра успешно добавлена');
    }
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect('/admin');
    }
    public function editShow($gameEdit)
    {
        $games = DB::table('game_and_genres')
            ->select(DB::raw('GROUP_CONCAT(genres.id) as genres'), 'games.title', 'games.description', 'games.image', 'games.price', 'id_game')
            ->join('genres', 'genres.id', '=', 'game_and_genres.id_genre')
            ->join('games', 'games.id', '=', 'game_and_genres.id_game')
            ->where('id_game', $gameEdit)
            ->groupBy('id_game')
            ->get();

        $Allgenres = DB::table('genres')
            ->select('id', 'title_genre')
            ->get();

        // $genres = $games->first()->genres;
        // $genresArray = explode(',', $genres);
        // dd($genresArray);
        // dd($games);
        return view('admin.editGame', ['edit' => $games, 'allgenres' => $Allgenres]);
    }
    public function detailGame($game_id)
    {
        $games = DB::table('game_and_genres')
            ->select(DB::raw('GROUP_CONCAT(genres.title_genre) as genres'), 'games.title', 'games.description', 'games.image', 'games.price', 'id_game')
            ->join('genres', 'genres.id', '=', 'game_and_genres.id_genre')
            ->join('games', 'games.id', '=', 'game_and_genres.id_game')
            ->where('id_game', $game_id)
            ->groupBy('id_game')
            ->get();
        return view('game', ['games' => $games]);
    }
    public function updateGame(Request $request, Game $games)
    {
        $id = $request->id;
        $games = Game::find($id);
        $currentDateTime = Carbon::now();
        if ($request->hasFile('photo')) {
            $name = $request->file('photo')->hashName();
            $path = $request->file('photo')->store('/public/image');
        } else {
            $nameImage = DB::table('games')
                ->select('image')
                ->where('id', $id)
                ->first();
            $name = $nameImage->image;
        }

        $games->fill(['title' => $request->title, 'description' => $request->description, 'image' => $name, 'price' => $request->price, 'updated_at' => $currentDateTime]);
        $games->save();
        return redirect('/admin');
        // dd($name);
    }
}
