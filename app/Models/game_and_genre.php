<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game_and_genre extends Model
{
    protected $fillable =[
        "id_game",
        "id_genre"
    ];
    public function game(){
        return $this->belongsTo(Game::class, 'id_game', 'id');
    }
    public function genre(){
        return $this->belongsTo(Genre::class, 'id_genre', 'id');
    }
   
}
