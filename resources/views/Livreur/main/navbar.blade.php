<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>


.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}

.cover{
    width: 100%;
    height: 400px;
    text-align: center;
    margin-top: 20px;
}

</style>
<!------ Include the above in your HEAD tag ---------->

 <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">WEENZEE</h1>
        </div>

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">Categorie</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Commande</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Contact</button>
            <button class="btn btn-default filter-button" data-filter="spray">About</button>
            <button class="btn btn-default filter-button" data-filter="spray">S'inscrire</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Se connecter</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">
                    <a href="{{route('showclientclient')}}" style="color:#42B32F;">Profile
                    </a>
            </button>

        </div>

        <div class="cover">
             <img class=" w-75 h-75" src="{{asset('photo/Carousel/cover1.jpg')}}">
        </div>

        <br/>

        </div>
    </div>
</section>



@yield('content')


</body>

<footer>
 
      @extends('Client.main.footer')
  
</footer>
</html>


