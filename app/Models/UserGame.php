<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGame extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_game',
    ];

    public function UserGame()
    {
        return $this->belongsTo(Game::class);
    }
}
