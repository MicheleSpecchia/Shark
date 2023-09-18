<div class="hero">
    <nav>
        <a href="/">
            <img src="{{asset('images/logo.png')}}" class="logo-img">
        </a>
        <ul>

            <li><a href="#">About</a></li>
            @auth
            <li><a href="/parks/create">Affitta con Shark</a></li>
            @endauth
            <li><a href="/user-reservations">Tutorial</a></li>

            @guest
            <li><a href="/login">Affitta con Shark</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Sing up</a></li>
            @endguest
        </ul>

        @auth
        <img src="{{auth()->user()->avatar}}" class="user-pic" onclick="miaFunction()">

        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu" style="border-radius: 10px">
                <div class="user-info">
                    <img src="{{ auth()->user()->avatar  }}" class="user-pic">
                    <h2 style="margin-top: 30px; transition: none">{{ auth()->user()->nome }}</h2>
                </div>
                <hr>

                <a href="/editProfile" class="sub-menu-link">
                    <img src="{{asset('images/profile.png')}}" alt="">
                    <p>Edit profile</p>
                    <span>></span>
                </a>

                <a href="/parks/manage" class="sub-menu-link">
                    <img src="{{asset('images/setting.png')}}" alt="">
                    <p>I tuoi parcheggi</p>
                </a>

                <a href="#" class="sub-menu-link">
                    <img src="{{asset('images/help.png')}}" alt="">
                    <p>Help and support</p>
                    <span>></span>
                </a>

                <a href="{{ route('user.reservations') }}" class="sub-menu-link">
                    <img src="{{asset('images/reservation.png')}}" alt="">
                    <p>Prenotazioni effettuate</p>
                    <span>></span>
                </a>

                <a href="#" class="sub-menu-link" onclick="performLogout()">
                    <img src="{{asset('images/logout.png')}}" alt="">
                    <p>Logout</p>
                    <span>></span>
                </a>
            </div>
        </div>
        @endauth

    </nav>
</div>

<script>
    function performLogout() {
        // Crea un elemento di modulo nascosto
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = '/logout';

        // Aggiungi un campo nascosto per il token CSRF (assicurati di averlo disponibile)
        var csrfTokenInput = document.createElement('input');
        csrfTokenInput.type = 'hidden';
        csrfTokenInput.name = '_token';
        csrfTokenInput.value = '{{ csrf_token() }}';
        form.appendChild(csrfTokenInput);

        // Aggiungi il modulo al corpo del documento e invialo
        document.body.appendChild(form);
        form.submit();
    }
</script>

<br>
<br>
<br>
<br>