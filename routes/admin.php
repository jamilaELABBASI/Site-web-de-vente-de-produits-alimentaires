<?php  

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

//Route::get('/navbar',[AdminController::class,'navbar']);



    
 Route::get('/indexcategorieadmin',[AdminController::class,'indexcategorie'])->name('indexcategorieadmin');
Route::get('/createcategorie',[AdminController::class,'createcategorie'])->name('createcategorieadmin');
Route::post('/storecategorie',[AdminController::class,'storecategorie'])->name('storecategorieadmin');
  Route::get('/editcategorie',[AdminController::class,'editcategorie'])->name('editcategorieadmin');
Route::post('/updatecategorie',[AdminController::class,'updatecategorie'])->name('updatecategorieadmin');
Route::get('/showcategorie',[AdminController::class,'showcategorie'])->name('showcategorieadmin');
Route::get('/deletecategorie',[AdminController::class,'deletecategorie'])->name('deletecategorieadmin');



Route::get('/indexclient', [AdminController::class,'indexclient'])->name('indexclientadmin');
   Route::get('/showclient',[AdminController::class,'showclient'])->name('showclientadmin');
Route::get('/deleteclient',[AdminController::class,'deleteclient'])->name('deleteclientadmin');



Route::get('/indexlivreur', [AdminController::class,'indexlivreur'])->name('indexlivreuradmin');
Route::get('/deletelivreur',[AdminController::class,'deletelivreur'])->name('deletelivreuradmin');
  Route::get('/showlivreur',[AdminController::class,'showlivreur'])->name('showlivreuradmin');




Route::get('/indexproduit', [AdminController::class,'indexproduit'])->name('indexproduitadmin');
Route::get('/createproduit',[AdminController::class,'createproduit'])->name('createproduitadmin');
Route::post('/storeproduit',[AdminController::class,'storeproduit'])->name('storeproduitadmin');
 Route::get('/editproduit', [AdminController::class, 'editproduit'])->name('editproduitadmin');
 Route::post('/updateproduit',[AdminController::class,'updateproduit'])->name('updateproduitadmin');
  Route::get('/showproduit',[AdminController::class,'showproduit'])->name('showproduitadmin');
Route::get('/deleteproduit',[AdminController::class,'deleteproduit'])->name('deleteproduitadmin');



Route::get('/indexcommande', [AdminController::class,'indexcommande'])->name('indexcommandeadmin');
Route::get('/deletecommande',[AdminController::class,'deletecommande'])->name('deletecommandeadmin');
  Route::get('/showcommande',[AdminController::class,'showcommande'])->name('showcommandeadmin');









