<nav class="navbar navbar-expand-lg navbar-dark skin-navbar">
  <a class="navbar-brand" href="#">SCI-UNSSA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
         <a class="nav-link" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/reportes') }}">Reportes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/ventas') }}">Ventas</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-danger my-2 my-sm-0 custom-btn" type="submit">Cerrar Sesión</button>
    </form>
  </div>
</nav>