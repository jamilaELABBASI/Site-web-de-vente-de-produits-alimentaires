
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEENZEE Administration</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<script src="{{asset('js/app.js')}}"> </script>
    


<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('indexcategorieadmin')}}">Categorie</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link " href="{{route('indexcommandeadmin')}}">Commande</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('indexproduitadmin')}}">Produit</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{route('indexclientadmin')}}">Client</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('indexlivreuradmin')}}">Livreur</a>
  </li>
</ul>

@yield('content')


</body>

<footer>
 
      @extends('Administration.Admin.footer')
  
</footer>
</html>



