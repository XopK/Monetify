<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\UserGame;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart($cart)
    {
        $userID = Auth::id();
        Cart::create([
            'id_game' => $cart,
            'id_user' => $userID,
        ]);

        $cart = DB::table('carts')
            ->select('games.title', 'games.price', 'id_game')
            ->join('games', 'carts.id_game', '=', 'games.id')
            ->where('id_user', '=', $userID)
            ->get();

        session(['cart' => $cart]);

        return redirect()->back();
    }

    public function destroy($cart)
    {
        $userID = Auth::id();
        Cart::where('id_game', '=', $cart)->where('id_user', '=', $userID)->delete();

        $carts = DB::table('carts')
            ->select('games.title', 'games.price', 'id_game')
            ->join('games', 'carts.id_game', '=', 'games.id')
            ->where('id_user', '=', $userID)
            ->get();

        session(['cart' => $carts]);
        return redirect()->back();
    }

    public function createOrder()
    {
        $userID = Auth::id();
        $balance = Auth::user()->balance;

        $info = DB::table('carts')
            ->select('id_user', 'id_game', 'games.price')
            ->join('games', 'carts.id_game', '=', 'games.id')
            ->where('id_user', '=', $userID)
            ->get();

        foreach ($info as $cartItem) {
            $idGame[] = $cartItem->id_game;
            $total = 0;
            $total += $cartItem->price;
        }
        foreach ($idGame as $item) {
            UserGame::create([
                'id_user' => $userID,
                'id_game' => $item,
            ]);
        }

        session()->forget('cart');

        Cart::where('id_user', '=', $userID)->delete();
        return redirect()->back();
    }
}
