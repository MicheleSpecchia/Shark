<div>
    <x-layout>
        @include('partials._navbar')

        <div class="container-fluid" style="isplay: flex; height: 100%; width: 100%; flex-direction: row-reverse;">
            <div class="container" style="padding: 50px; flex: 1;">
                <!-- Contenuto del secondo container -->
                <div class="row">
                    <div class="col-lg-6 col-md-12" style="padding: 30px;">
                        <div class="profile">
                            <p>PRENOTAZIONI</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" style="padding: 30px;">
                        <div class="profile">
                            <p>GESTISCI I TUOI BOX</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12" style="padding: 30px;">
                        <div class="profile">
                            <p>SALDO: 0.0$</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" style="padding: 30px;">
                        <div class="profile">
                            <p>PASSA A PREMIUM</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="card d-md-block d-sm-none">
                <div class="profile-image">
                    <img src="{{asset('images/sogetto.png')}}" alt="">
                </div>
                <p>Username</p>
                <br>
                <a href="#">Home</a>
                <br>
                <a href="#">Modifica profilo</a>
                <br>
                <a href="#">Log out</a>
            </div>
        </div>





        <!--
        <div class="container-fluid" style="display: flex; flex-wrap: wrap;">
    <div class="card">
        <div class="profile-image">
            <img src="{{asset('images/sogetto.png')}}" alt="Immagine della card">
        </div>
        <p>Username</p>

        <a href="#">Home</a>
        <a href="#">Modifica profilo</a>
        <a href="#">Log out</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12" style="padding: 50px;">
                <div class="profile">
                    <p>LE TUE PRENOTAZIONI</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12" style="padding: 50px;">
                <div class="profile">
                    <p>GESTISCI BOX AUTO</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12" style="padding: 50px;">
                <div class="profile">
                    <p>CERCA BOX AUTO</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12" style="padding: 50px;">
                <div class="profile">
                    <p>AGGIUNGI BOX AUTO</p>
                </div>
            </div>
        </div>
    </div>
</div>
-->

    </x-layout>
</div>