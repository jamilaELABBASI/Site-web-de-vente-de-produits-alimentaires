<?php  

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreurController;
//
//Route::get('/navbar',[ClientController::class,'navbar']);


Route::get('/indexcommande',[LivreurController::class,'indexcommande'])->name('indexcommandelivreur');
Route::get('/showcommande',  [LivreurController::class,'showcommande'])->name('showcommandelivreur');


Route::get('/showlivreur',[LivreurController::class,'showlivreur'])->name('showlivreurlivreur');
Route::get('/deletelivreur',[LivreurController::class,'deletelivreur'])->name('deletelivreurlivreur');



Route::get('/signinlivreur',[LivreurController::class,'signinlivreur'])->name('signinlivreur');
Route::get('/loginlivreur',[LivreurController::class,'loginlivreur'])->name('loginlivreur');











