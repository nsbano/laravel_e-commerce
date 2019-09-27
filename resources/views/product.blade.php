@extends('layouts.app')
@section('title') Home @endsection
@section('content')


<body>
<!-- nav -->

<!-- nav -->
<div class="container">
  <div class="container">
    <img src="zapatillas/zapatillas_1.jpg" class="img-fluid my-2"alt="">
  </div>
  <div class="row">
    <div class="col-12 col-md-9 pb-0">
      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4 col-lg-3 h-75 w-75 m-auto">
            <img src="img/zapatillas/zapatillas_1.jpg" class="img-fluid" alt="zapatilla">
          </div>
          <div class="col">
            <div class="card-body pb-0">
              <h3 class="card-title"><a href="{{url('/cart')}}">Nike Air Zoom Pegasus 34 </a></h3>

              <a href="{{url('/cart')}}" class="btn btn-primary btn-block">Comprar</a>
              <p class="card-text mt-2 lead">COMODIDAD TRANSPIRABLE,FIRMEZA SEGURA,GRAN REACTIVIDAD.</p>
              <p class="card-text"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></p>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="card-body col-12 pb-0">
            <div class="card-header">
              <h4 class="card-subtitle"> Caracteristicas</h4>
            </div>
            <div class="list-group list-group-flush">
              <a href="{{url('/cart')}}" class="list-group-item list-group-item-action">
                <li class="d-flex w-100 justify-content-between">
                Contratacón firme para una mayor estabilidad

                </li>
              </a>
              <a href="{{url('/cart')}}" class="list-group-item list-group-item-action">
                <li class="d-flex w-100 justify-content-between">
                  - Funda interior parcial de malla para ofrecer una comodidad adicional

                </li>
              </a>
              <a href="{{url('/cart')}}" class="list-group-item list-group-item-action">
                <li class="d-flex w-100 justify-content-between">
                  - Contratacón firme para una mayor estabilidad

                </li>
              </a>
            </div>

            <div class="list-group list-group-flush">


              <b>Especificaciones:</b><br><br>

              - Peso: 295 gramos (para un número 44 de hombre)<br>
              - Drop: 10 mm<br><br>


              Si estás buscando Nike Air Zoom Pegasus 34 estás de suerte. En nuestra tienda de running y triatlón lo tienes disponible al mejor precio y con la confianza que te da una tienda como runnerinn. No esperes más y hazte ya con tu producto de Zapatillas running y practica tu deporte favorito con la mayor confianza.<br> </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" col">
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Reseñas</h5>
          <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
          <p class="card-text">Las nuevas zapatillas de running Nike Air Zoom Pegasus 34 para hombre cuentan con un tejido Flymesh actualizado para proporcionar transpirabilidad, ligereza y una amortiguación reactiva que te mantiene cómodo kilómetro tras kilómetro.</p>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Reseñas</h5>
          <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
          <p class="card-text">- El tejido Flymesh sin costuras, ligero y transpirable, ofrece comodidad duradera y evita el exceso de calor para proporcionar frescura. </p>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Reseñas</h5>
          <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  </p>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

@endsection
