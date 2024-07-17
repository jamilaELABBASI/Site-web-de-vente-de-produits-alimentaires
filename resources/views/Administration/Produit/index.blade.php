@extends('Administration.Admin.navbar')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEENZEE Administration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
       a{
        color: white;
       }

       button{
        margin-right: 10px;
        width: 100px;
       }
 
  </style>
  </head>
<body>

<div class="container">
  <h2>Liste des produits</h2>            
  <table class="table table-striped">
    

  <thead class="table-dark">
  <tr>
      <th scope="col">Id</th>
      <th scope="col">Designation</th>
      <th scope="col">Description</th>
      <th scope="col">Prix</th>
      <th scope="col">Photo</th>
      <th>
      <div>  
           <input type="text" class="" placeholder="Search">
            <button type="button" class="btn btn-primary">
                <a href="{{route('showproduitadmin')}}"> Chercher</a>
            </button>
            <button type="button"  class="btn btn-success">
                <a href="{{route('createproduitadmin')}}"> Ajouter</a>
            </button> 
      </div>
      </th>
  </tr>
  </thead>
  <tbody>
    @foreach($produits as $prod)
    <tr>
        <td>{{$prod['id']}}</td>
        <td>{{$prod['designation']}}</td>
        <td>{{$prod['description']}}</td>
        <td>{{$prod['prix']}}</td>
        <td></td>

        <td>
        <!--  <button type="button" class="btn btn-success">Success</button>   -->
          <button type="button" class="btn btn-info">
            <a href="{{route('showproduitadmin')}}">Consulter</a>
          </button>
          <button type="button" class="btn btn-warning">
          <a href="{{route('editproduitadmin')}}">
              Modifier
          </a>
          </button>
          <button type="button" class="btn btn-danger">
            <a href="{{route('deleteproduitadmin',['id'=>$prod['id']])}}">
               Supprimer
            </a>
            </button>
        </td>
    </tr>
    
    @endforeach
  </tbody>
  </table>
</div>

</body>
</html>
@endsection