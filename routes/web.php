<?php

use App\Http\Controllers\AdminnController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ClasseImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\StudioImageController;
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



Route::get('/admin',[AdminnController::class,"index"])->name("home.index");

// & cette partie c'est pour les studios
Route::get("/admin/studio",[StudioController::class,"index"])->name("studio.index");
// Route::get("/",[HomeController::class,"index"])->name("home.index");
// & route pour index de le studioimages
Route::get("/admin/studio/image",[StudioImageController::class,"index"])->name("studio_image.index");

//& route pour l ajout des studios
Route::post("/admin/studio/store",[StudioController::class,"store"])->name("index.store");
Route::post("/admin/studio/image/store/{studio}",[StudioImageController::class,"store"])->name("image.store");

Route::delete('/admin/studio/image/destroy/{studioImg}',[StudioImageController::class,"destroy"])->name("image.destroy");
// * la suppression de studio
Route::delete('/admin/studio/destroy/{studio}',[StudioController::class,"destroy"])->name("studio.destroy");
//* la modification du studio
Route::put('/admin/studio/update/{studio}',[StudioController::class,"update"])->name("studio.update");


// ! cette partie et pour les classes
Route::get("/admin/classe",[ClasseController::class,"index"])->name("classe.index");
// & route pour index de la classeimages
Route::get("/admin/studio/image",[ClasseImageController::class,"index"])->name("classe_image.index");
//& route pour l ajout des classes
Route::post("/admin/classe/store",[ClasseController::class,"store"])->name("indexc.store");
Route::post("/admin/classe/image/store/{classe}",[ClasseImageController::class,"store"])->name("imagec.store");
Route::delete('/admin/classe/image/destroy/{classeImg}',[ClasseImageController::class,"destroy"])->name("imagec.destroy");
// * la suppression de classe
Route::delete('/admin/classe/destroy/{classe}',[ClasseController::class,"destroy"])->name("classe.destroy");
//* la modification du classe
Route::put('/admin/classe/update/{classe}',[ClasseController::class,"update"])->name("classe.update");
