<?php  

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
//
//Route::get('/navbar',[ClientController::class,'navbar']);


Route::get('/indexcategorieclient',[ClientController::class,'indexcategorie'])->name('indexcategorieclient');
Route::get('/showcategorieclient',  [ClientController::class,'showcategorie'])->name('showcategorieclient');


Route::get('/profileclient',[ClientController::class,'showclient'])->name('profileclient');
Route::get('/deleteclient',[ClientController::class,'deleteclient'])->name('deleteclient');


Route::get('/showcommandeclient',[ClientController::class,'showcommande'])->name('showcommandeclient');


Route::get('/showpanier',[ClientController::class,'showpanier'])->name('showpanier');
Route::get('/deleteproduitpanier',[ClientController::class,'deleteproduitpanier'])->name('deleteproduitpanier');
Route::get('/deletepanier',[ClientController::class,'deletepanier'])->name('deletepanier');


Route::get('/showcommande',[ClientController::class,'showcommande'])->name('showcommande');
Route::get('/deletecommande',[ClientController::class,'deletecommande'])->name('deletecommande');




Route::get('/loginclient',[ClientController::class,'loginin'])->name('loginclient');
Route::get('/signinclient',[ClientController::class,'signin'])->name('signinclient');



Route::get('/aboutclient',[ClientController::class,'about'])->name('aboutclient');
Route::get('/contactclient',[ClientController::class,'contact'])->name('contactclient');



Route::get('/signinclient',[ClientController::class,'signin'])->name('signinclient');
Route::get('/loginclient',[ClientController::class,'login'])->name('loginclient');





