<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Livreur;
use Illuminate\Http\Request;

class LivreurController extends Controller
{
public function indexcommande(){
    //$com=Commande::all();
    return view('Livreur.Commande.index'); //->with('commande',$com)
}


public function showcommande($id){
      //  $com=Commande::find($id);
        return view('LivreurController.Categorie.index');
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 public function showclient(){
    // $client=Client::find($id);
     return view('Livreur.Compte.profile');
 }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


}
