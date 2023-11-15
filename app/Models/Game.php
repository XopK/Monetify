<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        "title",
        "description",
        "image",
        "price",
    ];
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'game_and_genre');
    }
}
