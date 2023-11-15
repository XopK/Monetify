<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        "title_genre"
    ];
    public function game()
    {
        return $this->belongsToMany(Game::class, 'game_and_genre');
    }
}

