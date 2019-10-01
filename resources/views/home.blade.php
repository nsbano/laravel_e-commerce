@extends('layouts.app')

@section('title', 'Home')
@section('content')




      <main role="main">
          <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/carrusel1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carrusel2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carrusel3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carrusel4.jpg" alt="Third slide">
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


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        @foreach ($products as $product)
             <div class="col-md-4">
               <div class="card text-center">
                 <div class="card-body">
                   <img src='{{$product->image}}' width="250" height="180" alt="">
                   <h5 class="card-title">{{$product->name}}</h5>
                   <p class="card-text">{{$product->description}}</p>
                     <h3><span>$</span>{{$product->price}}</h3>
                   <button href="#modal" class="btn btn-primary btn-lg btn-block" type="submit" name="button" data-toggle="modal">Ir al Producto</button>
                 </div>
               </div>
             </div>
             <!--Modal-->
             <div class="modal" id="modal" >
               <div class="modal-de-compra">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close">&times;</button>
                 <div class="container1">
                   <img src='{{$product->image}}' alt="">
                   <p>{{$product->description}}</p>
                 </div>
                 <div class="container2">
                   <h3>{{$product->name}}</h3>
                   <hr style="border: 1px inset;width:90%;">
                   <p>{{$product->description}}</p>
                   <hr style="border: 1px inset;width:90%;">
                   <h4>${{$product->price}}  c/u</h4>
                   <span>Cantidad <input class="contador" type="number" name="numero" value="1" min="0" max="50" step="1"></span>
                   <button class="btn btn-primary btn-lg btn-block" type="submit" name="button">Comprar</button>
                 </div>
               </div>
             </div>
             @endforeach

          <!-- START THE FEATURETTES -------->


          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Ajuste Firme <span class="text-muted">Checkmate.</span></h2>
              <p class="lead">En la parte posterior, la zona del tobillo se ha alejado para que no cree roces en la tendón de Aquiles. Se trata de las Pegasus, pero sin fricción.</p>
            </div>
             <div class="col-md-5">
                <img  class="row_img"  src="img/zapatillas_9.jpg" width="400" height="300" alt="zapa5">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7 order-md-2">

              <h2 class="featurette-heading"> <span class="text-muted">See for yourself.</span></h2>
              <p class="lead2">para corredores de todos los niveles, ya seas un experimentado veterano o estés dando tus primeros pasos. Cuentan con una parte superior de malla transpirable con una zona del tobillo hacia afuera para ofrecer comodidad en el tendón de Aquiles.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img  class="row_img" class="row_featurette_img"  src="img/zapatillas_10.jpg" width="400" height="300" alt="zapa5">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Ajuste Firme <span class="text-muted">Checkmate.</span></h2>
              <p class="lead">La parte superior de malla se ha diseñado para proporcionar
elasticidad y sujeción donde más lo necesitas, y para mantener
tu pie seguro sobre la amortiguación sin limitar el movimiento
ni comodidad. .</p>
            </div>
            <div class="col-md-5">
                <img  class="row_img" src="img/zapatillas_5.jpg" width="400" height="300" alt="zapa5">
            </div>


@endsection
