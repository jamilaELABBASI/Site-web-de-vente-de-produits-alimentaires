<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Livreur;
use App\Models\Produit;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    

public function indexcategorie(){
     $cats=Categorie::all();

     //return "index categorie";
     return view('Client.Categorie.index')->with('categories',$cats);
 }




 public function showcategorie($id){
         $categorie=Categorie::find($id);
         return view('ClientController.Categorie.index');
 }



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



  public function deleteclient($id){
      $client=Client::find('$id');
      return view('ClientController.Client.index');
  }


  public function showclient(){
     // $client=Client::find($id);
      return view('Client.Compte.profile');
    // return "profile client";
  }
 


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function indexproduit(){
     $produit=Produit::all();
     return view('Administration.Produit.index')->with('produits',$produit);
 }



 public function showproduit($id){
     $produit=Produit::find($id);
     return view('Administration.Produit.index');
 }



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function indexlivreur(){
      $livreur=Livreur::all();
      return view('Administration.Livreur.index')->with('livreurs',$livreur);
  }


  public function showlivreur($id){
    $livreur=Livreur::find($id);
    return view('Administration.Livreur.index');
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function showcommande(){
    // $commande=Commande::all();
     return view('Client.Commande.commande');  //->with('commandes',$commande)
 }


 public function deletecommande($id){
    $commande=Commande::find($id);
    return redirect()->route('indexcommande');
    }


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function showpanier(){
    // $commande=Commande::all();
     return view('Client.Commande.panier');  //->with('commandes',$commande)
 }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function contact(){
    // $commande=Commande::all();
     return view('Client.Compte.contact');  //->with('commandes',$commande)
 }


 
public function about(){
    // $commande=Commande::all();
     return view('Client.Compte.about');  //->with('commandes',$commande)
 }


 
public function login(){
    // $commande=Commande::all();
     return view('Client.Compte.login');  //->with('commandes',$commande)
 }

 
public function signin(){
    // $commande=Commande::all();
     return view('Client.Compte.signin');  //->with('commandes',$commande)
 }
}
