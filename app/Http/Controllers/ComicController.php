<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();

        return view("comic.index", ["comics" => $comics]);
    }

    public function show($id){
        $comics = Comic::find($id);

        return view("comic.show", ["comics" => $comics]);
    } 

    public function create(){
        return view ("comic.create");
        
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();

        $newComics = new Comic();

        $newComics->title = $data["title"];
        $newComics->description = $data["description"];
        $newComics->thumb = $data["thumb"];
        $newComics->price = $data["price"];
        $newComics->series = $data["series"];
        $newComics->sale_date = $data["sale_date"];
        $newComics->type = $data["type"];
        $newComics->artists = $data["artists"];
        $newComics->writers = $data["writers"];

        $newComics->save();
    }
}
