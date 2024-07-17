<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
<link rel="stylesheet"  href="{{asset('css/app.css')}}">

<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

<!-- Bootstrap core CSS -->
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="carousel.css" rel="stylesheet">
<script  src="{{asset('js/app.js')}}">
</script>
</head>



<body>

<header>
    <nav>
    <div class="row">
    

    <div align="center" style="background-color:#6DAB53;" >

    <button class="btn btn-default filter-button" data-filter="hdpe">
        <a href="{{route('profileclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold;">Categorie</a>
    </button>
    <button class="btn btn-default filter-button" data-filter="sprinkle">
        <a href="{{route('contactclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold;">Contact</a>
    </button>
    <button class="btn btn-default filter-button" data-filter="spray" >
             <a href="{{route('aboutclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold; ">About</a>
    </button>
    <button class="btn btn-default filter-button" data-filter="spray" >
        <a href="{{route('signinclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold; ">S'inscrire</a>
    </button>
    <button class="btn btn-default filter-button" data-filter="hdpe" >
        <a href="{{route('loginclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold;">Se connecter</a>
    </button>
        <button class="btn btn-default filter-button" data-filter="hdpe" >
                <a href="{{route('profileclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold;">Profile</a>
        </button>

            <input type="search" class="search" placeholder="Chercher" style=" width: 290px; font-size: 20px;border: white;" >
            <button class="btn btn-default filter-button" data-filter="hdpe" " >
                <a href="{{route('profileclient')}}" style="color:white; text-decoration: none; color: white; font-weight: bold;font-size:20px;">Chercher</a>
            </button>
            
            <a href="{{route('showpanier')}}" style="color:#42B32F;">
                <img class="cart" src="{{asset('photo/Icon/cart.png')}}" style="width: 40px; height:40px;margin-left: 90px;"> 
            </a>
        </div>
        
    </div>

    </nav>
</header>




@yield('content')


</body>

<footer>

    @extends('Client.main.footer')

</footer>
</html>



