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