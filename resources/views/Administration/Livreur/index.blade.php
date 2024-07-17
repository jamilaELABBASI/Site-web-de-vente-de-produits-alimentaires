@extends('Administration.Admin.navbar')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEENZEE Administration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  </head>
<body>

<div class="container">
  <h2>Liste des livreurs</h2>            
  <table class="table table-striped">
  

  <thead class="table-dark">
  <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Etat</th>
      <th scope="col">Adresse</th>
      <th scope="col">Telephone</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Matricule</th>
      <th>
        <input type="text" class="" placeholder="Search">
      </th>
      <th>
        <button type="button" class="btn btn-primary">Chercher</button>
      </th>

  </tr>
  </thead>
  <tbody>
    @foreach($livreurs as $liv)
    <tr>
        <td>{{$liv['id']}}</td>
        <td>{{$liv['nom']}}</td>
        <td>{{$liv['prenom']}}</td>
        <td>{{$liv['etat']}}</td>
        <td>{{$liv['adresse']}}</td>
        <td>{{$liv['tel']}}</td>
        <td>{{$liv['datenaissance']}}</td>
        <td>{{$liv['matricule']}}</td>
        <td></td>
        <td>
          <a href="{{route('showlivreuradmin')}}">
              <img src="photo/Icon/add.png">
          </a>

           
            <button type="button" class="btn btn-danger">
            <a href="{{route('deletelivreuradmin')}}">Supprime</a>
            </button>
        </td>
        
       
        <!--  <button type="button" class="btn btn-success">Success</button>   -->
    
    </tr>
    @endforeach
  </tbody>
  </table>
</div>

</body>
</html>

@endsection