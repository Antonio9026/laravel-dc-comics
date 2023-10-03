<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
class ComicController extends Controller
{

    // con la funzione index andiamo a leggere tutti i dati dal nostro db 
    public function index(){
        // usiamo metodo all per prendere tutti i record della nostra tabella
        $comics = Comic::all();
      
        // indirizza i nostri dati alla view index 
        return view("comic.index", ["comics" => $comics]);
    }


    // con lo show possiamo viisualizzare i dati di una singola entità e vedere i dettagli tramite il suo id 
    public function show($id){
        //  con il find cerchiamo la nostra record tramite il suo id,
        //  con findOrFail invece se l'id non corrisponde a nessuna record del db ci darà un error 404/page not found
        $comics = Comic::findOrFail($id);

        return view("comic.show", ["comics" => $comics]);
    } 

    // con il create tramite un form sulla view possiamo creare nuovi record da aggiungere al db 
    public function create(){
        return view ("comic.create");
        
    }
//    nello store vengono passati i dati inseriti nel form del create tramite un'istanza di classe Request $request
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
       
        // con il metodo save salviamo tutti i dati 
        $newComics->save();

        // dopo che salvo i nuovi dati inseriti da form faccio redirect a pagina index 
        // perchè se l'utente rimane sulla stessa pagina e dovesse fare refresh pagina verrebbe rieseguito salvataggio dei dati appena inseriti
        return redirect()->route("comic.index");
    }

    // con L'edit posssiamo modificare dei dati già esistenti tramite un form nella view
    public function edit($id){
        
        $comics = Comic::findOrFail($id);

        return view("comic.edit", ["comics" => $comics]);
    }
 
    // come nello store leggiamo i dati passati dal form in questo caso dell'edit che verranno aggiornati grazie al metodo update
    public function update(Request $request ,$id){

        $comics = Comic::findOrFail($id);
        $data = $request->all();

       $comics->update($data);

       return redirect()->route("comic.show", $comics->id);
    }

    // destroy ci permette di cancellare una record dalla nostra tabella
    public function destroy($id){
        $comics = Comic::findOrFail($id);

        $comics->delete();
        
        return redirect()->route("comic.index");
    }
}
