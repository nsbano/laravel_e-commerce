@extends('layouts.app')

@section('title') Home @endsection

@section('content')

<body>
  <div class="container-fluid">
      <div class="col col-md-9 m-auto">
        <div class="row">
          <div class="w-100">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Carrito</li>
              </ol>
            </nav>
          </div>
        </div>

        <!-- Carrito -->
        <div class="row">
          <div class="col-md-8 offset-md-2 mb-2 bg-white border rounded p-3">
            <h4 class="d-flex justify-content-between align-items-center mb-3 mw-500">
              <span class="text-muted">Carrito</span>
              <span class="badge badge-secondary badge-pill">2</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Producto</h6>
                  <small class="text-muted">Pequeña descripcion del producto</small>
                </div>
                <span class="text-muted">$300</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Producto</h6>
                  <small class="text-muted">Pequeña descripcion del producto</small>
                </div>
                <span class="text-muted">$3000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Codigo de descuento</h6>
                  <small>Codigo de ejemplo</small>
                </div>
                <span class="text-success">-$2000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
                <strong>$400</strong>
              </li>
            </ul>
            <form>
              <div class="card p-2">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Codigo de descuento">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">Ingresar</button>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block mt-3" name="button">Finalizar compra</button>
              <p class="text-center mt-2 "><a href="listado.php" class="text-secondary">Seguir comprando</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
    </body>

    @endsection
