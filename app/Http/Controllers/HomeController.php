<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userID = Auth::id();

        $cart = DB::table('carts')
            ->select('games.title', 'games.price', 'id_game')
            ->join('games', 'carts.id_game', '=', 'games.id')
            ->where('id_user', '=', $userID)
            ->get();

        $games = DB::table('user_games')
            ->select('id_game', 'games.title', 'games.price', 'user_games.created_at')
            ->join('games', 'user_games.id_game', '=', 'games.id')
            ->where('id_user', '=', $userID)
            ->get();

        session(['cart' => $cart]);
        return view('home', ['userGame' => $games]);
    }
}
