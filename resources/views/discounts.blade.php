@extends('layouts.app')

@section('title', 'Home')
@section('content')


<div class="main">
  <div class="titulo_descuentos">
  <h3>Descubrí nuestros descuentos!</h3>
<div class="card_wrapper">


  <div class="card--hoover">
    <div class="card"><a href="/"  id="bancomacro">
        <div class="card--display">
          <img src="img/bancomacro.png" alt="logo banco Macro" class="img_descuentos" width="100" height="100">
          <p class="porcentaje">-15%</p>
          <p>Hasta 3 cuotas sin interes</p>
        </div>


      <div class="card--border"></div>
    </div>
  </div>

  <div class="card--hoover">
    <div class="card"><a href="index.html"  id="bancoicbc">
        <div class="card--display">
          <img src="img/bancoicbc.png" alt="logo banco ICBC" class="img_descuentos" width="100" height="100">
          <p class="porcentaje">-20%</p>
          <p>Hasta 6 cuotas sin interes</p>
        </div>


      <div class="card--border"></div>
    </div>
  </div>



        <div class="card--hover">
          <img src="img/bancogalicia.png" alt="logo banco Galicia" class="img_descuentos" width="100" height="100">
          <p class="porcentaje">-10%</p>
          <p>Hasta 12 cuotas sin interes</p>
          <p> Lunes, martes, miércoles y viernes</p>
          <p>Pagando con  <strong>Targeta VISA, VISA DEBITO, MASTERCARD</strong></p>
          <p class="linkdescuentos">Ir a promociones!</p>

        </div></a>
      <div class="card--border"></div>
    </div>
  </div>

  <div class="card--hoover">
    <div class="card"><a href="index.html"  id="mercadopago">
        <div class="card--display">
          <img src="img/logomercadopago.png" alt="logo Mercado Pago" class="img_descuentos" width="100" height="100">
          <p class="porcentaje">-35%</p>
          <p>Hasta 3 cuotas sin interes</p>
        </div>

            <div class="card--border"></div>
    </div>
  </div>

</div>
@endsection
