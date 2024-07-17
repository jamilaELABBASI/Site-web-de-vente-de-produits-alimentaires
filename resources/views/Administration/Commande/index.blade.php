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
  <h2>Liste des commandes</h2>            
  <table class="table table-striped">
 

  <thead class="table-dark">
  <tr>
      <th scope="col">Id</th>
      <th scope="col">Date</th>
      <th scope="col">Etat</th>
      <th scope="col">Prix total</th>
      <th scope="col">Id client</th>
      <th>
       <input type="text" class="" placeholder="Search">
       <button type="button" class="btn btn-primary">Chercher</button>
      </th>
  </tr>
  </thead>
  <tbody>
    @foreach($commandes as $com)
    <tr>
        <td>{{$com['id']}}</td>
        <td>{{$com['date']}}</td>
        <td>{{$com['etat']}}</td>
        <td>{{$com['prixtotal']}}</td>
        <td></td>
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