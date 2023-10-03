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
        $comics = Comic::findOrFail($id);

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
        $newComics->artists =  json_encode([$data["artists"]]);
        $newComics->writers =json_encode([$data["writers"]]) ;
       
        $newComics->save();

        // dopo che salvo i nuovi dati inseriti da form faccio redirect a pagina index 
        // perchè se l'utente rimane sulla stessa pagina e dovesse fare refresh pagina verrebbe rieseguito salvataggio dei dati appena inseriti
        return redirect()->route("comic.index");
    }

    public function edit($id){
        
        $comics = Comic::findOrFail($id);

        return view("comic.edit", ["comics" => $comics]);
    }

    public function update(Request $request ,$id){

        $comics = Comic::findOrFail($id);
        $data = $request->all();

       $comics->update($data);

       return redirect()->route("comic.show", $comics->id);
    }
}
