  <!-- Barra di navigazione -->
  <div class="navbar">
      <!-- Sezione logo sulla sinistra della navbar -->
      <div class="nav-left">
          <img src="{{asset('images/logo.png')}}" alt="Nome del tuo sito" id="site-logo">
      </div>

      <!-- Link sulla destra della navbar -->
      <div class="nav-right">

          @guest
          <a href="#">About</a>
          <a href="#">Affitta con Shark</a>
          <a href="#">Tutorial</a>
          <a href="/login">Login</a>
          <a href="/register">SignUp</a>
          @endguest
          @auth
          <a href="/prenotazioni">Prenotazioni</a>
          <a href="/manage">BoxAuto</a>

          <a>
              <form class="inline" method="POST" action="/logout">
                  @csrf
                  <button class="logout-button" type="submit">
                      <i class="fa-solid fa-door-closed"></i>
                      <i class="fas fa-door-open" style="display: none;"></i>
                      Logout
                  </button>
              </form>
          </a>
          @endauth

      </div>
  </div>