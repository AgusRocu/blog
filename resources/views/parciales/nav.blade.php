<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

    <a class="navbar-brand" href="{{ route('inicio') }}">Mi Blog</a>

    <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('inicio') }}" style="background-color: rgb(66, 180, 247); display: inline-block; padding:0.5rem;">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.index') }}" style="background-color: rgb(66, 180, 247); display: inline-block; padding:0.5rem;">Listado de posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.create') }}" style="background-color: rgb(66, 180, 247); display: inline-block; padding:0.5rem;">Nuevo posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.edit', ['id' => 1]) }}" style="background-color: rgb(66, 180, 247); display: inline-block; padding:0.5rem;">Edición de post</a> <!-- aca en el id ponemos uno para que funcione temporal...esto ira el id 1 -->
        </li>
      </ul>
    </div>

  </div>
</nav>