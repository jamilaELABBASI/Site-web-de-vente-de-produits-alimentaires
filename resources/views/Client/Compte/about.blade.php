<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>


body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content:"";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


</style>
</head>


@extends('Client.main.navbar')


@section('content')

    <body>

<div class="about-section" style="height: 400px; background-color: #6DAB53;font-family: Georgia, 'Times New Roman', Times, serif;border-radius:0px 90px 0px 90px;margin: 60px;"> 
    <h1>A propos de nous</h1>
    <img src="{{asset('photo/Icon/casquette.png')}}" style="width: 190px ;height:190px; margin-top: 0px;">
    <div class="center">
        <p style="font-size:larger;color: white;">Application de livraison </p>
        <p style="font-size: x-large;color: white;">WEENZEE est une solution web et mobile a mise en relation des clients avec des coursiers <b>libres</b>.</p>
    </div>
</div>

    <h2 style="text-align:center">Our Team</h2>

<div class="row">
  <div class="column">
    <div class="card">
        <img src=""  style="width:100%">
      <div class="container" >
        <img src="{{asset('photo/Icon/IMAGE.png')}}" style="width: 120px;height: 140px;margin:auto;display: block;border-radius: 50%;" >
            <h2>Jamila EL ABBASI</h2>
            <B> <p class="title">Directrice</p></B>
            <p>Future ingenieur developpement internet et mobile</p>
            <p>jamilaelabbasi@gmail.com</p>
            <img src="{{asset('photo/Icon/logo.png')}}" style="width: 170px;height:90px;margin:auto;display: block;" >
      </div>
    </div>
  </div>
</div>
@endsection



