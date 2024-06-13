<nav class="navbar navbar-expand-lg bg-dark" style="background-color: #0a0a0a; border-bottom: 2px solid #1f1f1f; box-shadow: 0 4px 10px rgba(0, 255, 255, 0.6);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #00ffff; font-family: 'Orbitron', sans-serif; font-size: 1.5rem;">CYBERSHOP</a>
    <img src="images/miniso_icon.png" class="d-block" style="width: 3%; filter: hue-rotate(180deg);" alt="Cyber Icon">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: #00ffff;"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        @if (Auth::guard('web')->guest())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}" style="color: #ff00ff; font-family: 'Orbitron', sans-serif;">Acceso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}" style="color: #ff00ff; font-family: 'Orbitron', sans-serif;">Registro</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link active" href="/" style="color: #00ffff; font-family: 'Orbitron', sans-serif;">Home <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('clientes.index')}}" style="color: #00ff00; font-family: 'Orbitron', sans-serif;">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('perfiles.index')}}" style="color: #00ff00; font-family: 'Orbitron', sans-serif;">Perfiles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('facturas.index')}}" style="color: #00ff00; font-family: 'Orbitron', sans-serif;">Facturación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('productos.index')}}" style="color: #00ff00; font-family: 'Orbitron', sans-serif;">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('carrito.index')}}" style="color: #ff00ff; font-family: 'Orbitron', sans-serif;"><i class="bi bi-cart4"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color: #00ffff; font-family: 'Orbitron', sans-serif;">{{Auth::User()->name}}</a>
            <ul class="dropdown-menu" role="menu" style="background-color: #1a1a1a; border: 1px solid #00ffff;">
              <li>
                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #ff0000; font-family: 'Orbitron', sans-serif;">Logout</a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                  {{csrf_field()}}
                </form>
              </li>
            </ul>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

  .navbar-nav .nav-item .nav-link:hover {
    color: #ff00ff;
    text-shadow: 0 0 5px #ff00ff;
  }

  .dropdown-menu a:hover {
    background-color: #2a2a2a;
    color: #00ffff;
  }

  .nav-link {
    transition: all 0.3s ease;
  }

  .navbar-toggler-icon {
    color: #00ffff;
  }

  .navbar-toggler-icon::before {
    content: "\2630"; /* Unicode for the hamburger icon */
    font-size: 1.5rem;
  }
</style>
