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
  <h2>Liste des clients</h2>            
  <table class="table table-striped">


  <thead class="table-dark">
  <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Telephone</th>
      <th scope="col">Date de naissance</th>

      <th>
          <input type="text" class="" placeholder="Search">
          <button type="button" class="btn btn-primary">Chercher</button>
      </th>
  </tr>
  </thead>
  <tbody>
    @foreach($clients as $cli)
    <tr>
        <td>{{$cli['id']}}</td>
        <td>{{$cli['nom']}}</td>
        <td>{{$cli['prenom']}}</td>
        <td>{{$cli['adresse']}}</td>
        <td>{{$cli['tel']}}</td>
        <td>{{$cli['datenaissance']}}</td>
        <td></td>
        <td>
        <!--  <button type="button" class="btn btn-success">Success</button>   -->
          <button type="button" class="btn btn-info">Consulter</button>
          <button type="button" class="btn btn-danger">Supprimer</button>
        </td>
    </tr>
    @endforeach
  </tbody>
  </table>
</div>

</body>
</html>
@endsection