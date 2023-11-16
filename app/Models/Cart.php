<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_game',
        'id_user'
    ];

    public function cart()
    {
        return $this->belongsTo(Game::class);
    }
}
