<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMMANDE</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<script src="{{asset('js/app.js')}}"> </script>

<style>



@media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}

.horizontal-timeline .items {
border-top: 2px solid #ddd;
}

.horizontal-timeline .items .items-list {
position: relative;
margin-right: 0;
}

.horizontal-timeline .items .items-list:before {
content: "";
position: absolute;
height: 8px;
width: 8px;
border-radius: 50%;
background-color: #ddd;
top: 0;
margin-top: -5px;
}

.horizontal-timeline .items .items-list {
padding-top: 15px;
}

</style>




<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card border-top border-bottom border-3" style="border-color: #66D012 !important;">
          <div class="card-body p-5">

            <p class="lead fw-bold mb-5" style="color: #66D012;">Commande</p>

            <div class="row">
              <div class="col mb-3">
                <p class="small text-muted mb-1">Date</p>
                <p>10 April 2021</p>
              </div>
              <div class="col mb-3">
                <p class="small text-muted mb-1">Numero de commande.</p>
                <p>012j1gvs356c</p>
              </div>
            </div>

            <div class="mx-n5 px-5 py-4" style="background-color: #eee;">
              <div class="row">
                <div class="col-md-8 col-lg-9">
                  <p>Articles commandes</p>
                </div>
                <div class="col-md-4 col-lg-3">
                  <p>prix</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-lg-9">
                  <p class="mb-0">Shipping</p>
                </div>
                <div class="col-md-4 col-lg-3">
                  <p class="mb-0">A partir de 30dh</p>
                </div>
              </div>
            </div>

            <div class="row my-4">
              <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                <p class="lead fw-bold mb-0" style="color: #66D012;">Total de commande</p>
                <p>1000 DH</p>
              </div>
            </div>

            <p class="lead fw-bold mb-4 pb-2" style="color: #66D012;">Suivie de commande</p>

            <div class="row">
              <div class="col-lg-12">

                <div class="horizontal-timeline">

                  <ul class="list-inline items d-flex justify-content-between">
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #66D012;">Commande</p
                        class="py-1 px-2 rounded text-white" style="background-color: #66D012;">
                    </li>
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #66D012;">Expedition</p
                        class="py-1 px-2 rounded text-white" style="background-color: #66D012;">
                    </li>
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #66D012;">En chemin
                      </p>
                    </li>
                    <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                      <p style="margin-right: -8px;">Livraison</p>
                    </li>
                  </ul>

                </div>

              </div>
            </div>

            <p class="mt-4 pt-2 mb-0">Vous voulez de l'aide ? <a href="#!" style="color: #66D012;">contactez nous</a></p>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>