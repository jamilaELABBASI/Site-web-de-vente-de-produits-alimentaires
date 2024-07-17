<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Livreur;
use App\Models\Produit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function navbar(){
       return redirect()->route('indexcategorieadmin');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function indexcategorie(){
     $cats=Categorie::all();

     //return "index categorie";
     return view('Administration.Categorie.index')->with('categories',$cats);
 }


 public function createcategorie(){
     return view('Administration.Categorie.form');
 }


 public function storecategorie(Request $request){

    //return "store categorie";


     $categorie= new Categorie;
     $categorie->nom=$request->input('nom');
    
     $photo=$categorie->url=$request->file('photo');
    
     $destinationPath='CategoriePhotos/';
     $profilePhoto=date('YmdHis').".".$photo->getExtension();
     $categorie->move($destinationPath,$profilePhoto);
     $categorie['url']= $profilePhoto;
     
     $categorie->save();
     //return view('Administration.Categorie.index');
     return redirect()->route('indexcategorieadmin');
     // return dd($categorie);
 }


 public function editcategorie(){
      return view('Administration.Categorie.edit');
 }


 public function updatecategorie(Request $request){
     $categorie=new Categorie;
     $categorie=Categorie::find($request->input('$id'));
     $categorie->nom=$request->input('nom');
     $categorie->save;
     redirect()->route('indexcategorieadmin');
 }

 public function showcategorie($id){
         $categorie=Categorie::find($id);
         return view('Administration.Categorie.index');
 }

 public function deletecategorie($id){
     
     $categorie=Categorie::find($id);
     $categorie->delete();
     //return view('Administration.Categorie.index');
    //return " deletecategorie ";
    //redirect()->route('allcategorie');
     return redirect()->route('Administration.Categorie.index');
     
 }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function indexclient(){
      $client=Client::all();
      return view('Administration.Client.index')->with('clients',$client);
  }


  public function deleteclient($id){
      $client=Client::find('$id');
      return view('Administration.Client.index');
  }


  public function showclient($id){
     // $client=Client::find($id);
      return view('Administration.Client.index');
  }
 


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function indexproduit(){
     $produit=Produit::all();
     return view('Administration.Produit.index')->with('produits',$produit);
 }

 public function createproduit(){
     return view('Administration.Produit.form');
 }

 public function storeproduit(Request $request){
    // $produit=Produit::find($request->input('$id'));
    $produit =new Produit;
    $produit->designation=$request->input('designation');
    $produit->description=$request->input('description');
    $produit->prix=$request->input('prix');
    
    
    $photo=$produit->url=$request->file('photo');

    $destinationPath='ProduitPhotos/';
    $profilePhoto=date('YmdHis').".".$photo->getClientOriginalExtension();
    $produit->move($destinationPath,$profilePhoto);
    $produit['url']=$profilePhoto;
    
    $produit->save();
    return redirect()->route('indexproduitadmin');
    // return view('Administration.Produit.index');
 }

 public function editproduit(){
     return view('Administration.Produit.edit');
 }

 public function updateproduit(Request $request){
     $produit=new Produit;
     $produit->designation=$request->input('designation');
     $produit->description=$request->input('description');
     $produit->save();
     return redirect()->route('indexproduitadmin');
    }

 public function deleteproduit($id){
     $produit=Produit::find('$id');
     $produit->delete();
     return redirect('indexproduitadmin');
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


public function deletelivreur($id){
    $categorie=Categorie::find($id);
    $categorie->delete();
    return redirect('indexlivreuradmin');
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function indexcommande(){
     $commande=Commande::all();
     return view('Administration.Commande.index')->with('commandes',$commande);
 }


 public function deletecommande($id){
    $commande=Commande::find($id);
    return redirect()->route('indexcommandeadmin');
    }


public function showcommande($id){
    $commande=Commande::find($id);
    return view('Administration.Commande.index');
}





}
