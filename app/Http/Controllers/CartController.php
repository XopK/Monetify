<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
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
            ->select('games.title', 'games.price',)
            ->join('games', 'carts.id_game', '=', 'games.id')
            ->where('id_user','=', $userID)
            ->get();
        
        session(['cart' => $cart]);

        return redirect()->back();
    }
}
