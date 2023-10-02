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

    public function create(Request $request){
        $comics = $request->all();
        
    }

    public function store(){

    }
}
