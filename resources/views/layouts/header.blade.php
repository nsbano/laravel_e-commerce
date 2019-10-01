
  <nav class="navbar navbar-expand-md navbar-light fixed-top">
      <a class="navbar-brand"><img src="img/LogoSporShoes.png"></a>
      <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="nav">
          <ul class="navbar-nav">
              <li class="nav-item" >
                  <a class="nav-link text-light font-weight-bold px-3" href="index.php">HOME</a>
              </li>
              <li class="nav-item dropdown" data-toggle="dropdown">
                  <a class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="index.php">PRODUCTOS</a>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{url('/product')}}">>Hombre</a>
                      <a class="dropdown-item" href="{{url('/product')}}">Mujer</a>
                      <a class="dropdown-item" href="{{url('/product')}}">Niño</a>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-light font-weight-bold px-3" href="contact.php">CONTACTO</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-light font-weight-bold px-3" href="discounts">PROMOCIONES</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-light font-weight-bold px-3" href="register">REGISTRARSE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold px-3" href="login">LOGIN</a>
                  </li>
                </ul>
                <div>
                  <li>
               <a title="carrito" href="{{url('/cart')}}"><img src="img/carrito.png" alt="carrito" /></a>
             </li>

              </div>
          </form>
      </div>
  </nav>
