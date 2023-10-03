<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// redirect padina comics 

Route::get("/",function (){
    return redirect()->route("comic.index");
    });
    





// CREATE 
Route::get("/comic/create", [ComicController::class,"create"])->name("comic.create");
Route::post("/comic", [ComicController::class,"store"])->name("comic.store");


// READ 
// route index
Route::get("/comic", [ComicController::class,"index"])->name("comic.index");
// route show 
Route::get("/comic/{comic}", [ComicController::class,"show"])->name("comic.show");

// UPDATE 
// Mostra un form dove l'utente può fare modifiche 
Route::get("/comic/{id}/edit",[ComicController::class,"edit"])->name("comic.edit");
// la route dell'update posso chiamarla in put o path è indifferente, questa rotta riceverà i dati di edit e aggiornare l'elemento nel database a differenza dello store che crea l'elemento
Route::put("/comic/{id}", [ComicController::class,"update"])->name("comic.update");

// DESTROY 
Route::delete("/comic/{id}",[ComicController::class, "destroy"])->name("comic.destroy");