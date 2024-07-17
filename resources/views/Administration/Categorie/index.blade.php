
@extends('Administration/Admin/navbar')

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
  <h2>Liste des categories</h2>  
        
  <table class="table table-striped">
  
  <thead class="table-dark">
  <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Photo</th>
      <th>  
            <input type="text" class="" placeholder="Search">
            <button type="button" class="btn btn-primary">
                <a href="{{route('showcategorieadmin')}}"> Chercher</a>
            </button>
            <button type="button"  class="btn btn-success">
                <a href="{{route('createcategorieadmin')}}"> Ajouter</a>
            </button> 
      </th>
     
  </tr>
  </thead>
  <tbody>
    @foreach($categories as $cat)
    <tr>
        <td>{{$cat->id}}</td>
        <td>{{$cat->nom}}</td>
        <td>{{$cat->url}}</td>
        <td></td>
        <td></td>
        <td></td>
        <td>
        <!--  <button type="button" class="btn btn-success">Success</button>   -->
                 <a href="{{route('showcategorieadmin',['id'=>$cat->id])}}"><img src="{{asset('photo/Icon/show.png')}}" style="width: 40px;height:40px;"></a>
                 <a href="{{route('editcategorieadmin',['id'=>$cat->id])}}"><img src="{{asset('photo/Icon/edit.png')}}" style="width: 40px;height:40px;"></a>
                 <a href="{{route('deletecategorieadmin',['id'=>$cat['id']])}}"><img src="{{asset('photo/Icon/delete.png')}}" style="width: 40px;height:40px;"></a>
        </td>
    </tr>
    
    @endforeach
   
  </tbody>
  </table>

</div>
@endsection
</body>

<footer>

</footer>
</html>


