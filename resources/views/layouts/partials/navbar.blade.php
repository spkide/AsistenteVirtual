<nav class="navbar bg-body-tertiary sticky-top bg-white shadow">
  <div class="container">
    <a class="navbar-brand" href="/">Asistente Virtual</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Asistente Virtual</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Saber Más</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Más Enlaces
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Información</a></li>
              <li><a class="dropdown-item" href="#">Contactanos</a></li>
              <li><a class="dropdown-item" href="#">Reseñas</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Chatbot</a></li>
            </ul>
          </li>
              @auth
              <li class="nav-item dropdown">
                <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li>
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                  </li>
                </ul>
              </li>
              @else
              <li>
                <a href="{{ route('login') }}" class="nav-link">Log in</a>
              </li>
               @if (Route::has('register'))
              <li>
                <a href="{{ route('register') }}" class="nav-link">Register</a>
                </li>
                    @endif
                  @endauth
              </li>
        </ul>
      </div>
    </div>
  </div>
</nav>