<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function indexGenres(){

        $genres = Genre::all();
        return view("admin.genres", ["allGenres"=> $genres]);
    }

    public function storeGenres(Request $request){
        $genre = $request->all();
        Genre::create([
            "title_genre"=> $genre['title_genr'],
        ]);
        return redirect('/admin/genres')->with("success","Жанр успешно создан");
    }
    public function destroy(Genre $genre){
        $genre->delete();
        return redirect("/admin/genres");
    }

    public function updateGenres(Request $request){

    }
}
