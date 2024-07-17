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
    

    <div align="center" style="background-color:#42B32F;">

    <button class="btn btn-default filter-button" data-filter="all" style="background-color: #42B32F;">
        <a href="{{route('profileclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold;">Categorie</a>
    </button>
    <button class="btn btn-default filter-button" data-filter="hdpe" style="background-color: #42B32F;">
        <a href="{{route('profileclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold;">Categorie</a>
    </button>
    <button class="btn btn-default filter-button" data-filter="sprinkle"style="background-color: #42B32F;">
        <a href="{{route('contactclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold;">Contact</a>
    </button>
    <button class="btn btn-default filter-button" data-filter="spray" style="background-color: #42B32F;">
             <a href="{{route('aboutclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold; ">About</a>
    </button>
    <button class="btn btn-default filter-button" data-filter="spray" style="background-color: #42B32F;">
        <a href="{{route('signinclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold; ">S'inscrire</a>
    </button>
    <button class="btn btn-default filter-button" data-filter="hdpe" style="background-color: #42B32F;">
        <a href="{{route('loginclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold;">Se connecter</a>
    </button>
        <button class="btn btn-default filter-button" data-filter="hdpe" style="background-color: #42B32F;">
                <a href="{{route('profileclient')}}" style="color:white; text-decoration: none; font-size: 24px;font-weight: bold;">Profile</a>
        </button>

            <input type="search" class="search" placeholder="Chercher">
            <button class="btn btn-default filter-button" data-filter="hdpe" style="background-color: orange;">
                <a href="{{route('profileclient')}}" style="color:white; text-decoration: none; color: white; font-weight: bold;">Chercher</a>
            </button>
            
            <a href="{{route('showpanier')}}" style="color:#42B32F;">
                <img class="cart" src="{{asset('photo/Icon/cart.png')}}" style="width: 40px; height:40px;margin-left: 90px;"> 
            </a>
        </div>
        
    </div>

    </nav>
</header>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  style=" margin: 40px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('photo/Carousel/cover1.jpg')}}" alt="First slide" style="height:500px;margin-bottom:40px"> 
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<main role="main" style="margin-bottom: 90px;">

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row" style="margin-bottom: 40px;">
        <div class="col-lg-4" style="text-align: center;">
        <img  class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4" style="text-align: center;">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4" style="text-align: center;">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <div class="container" style="width: 100%; height:280px; margin-bottom:40px">
    <div class="row">
        <div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="text-align: center;">
                <img src="{{asset('photo/Icon/person.png')}}" class="img-responsive"><br>
                <button  type="button" class="btn btn-warning" id="voir" style="color:#ffffff; width:80px;font-size:16px;margin-top: 40px;">Voir</button>
            </div>
        </div>
    </div>
   
        </div>

    </div><!-- /.container -->


    <!-- FOOTER -->
  @extends('Administration.Admin.footer')