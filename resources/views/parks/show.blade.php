<x-layout>
    
    @include('partials._navbar')
    
    @if($park)
    <div class="show-park">
        <div class="row">
            <div class="col-lg-4 col-sm-12">                
                <img src="{{asset('images/vision.png')}}" alt="" style="width: 95%">
            </div>
            <div class="col-lg-4 col-sm-12" style="margin-top: 20px">
                <h2 style="">{{ $park->location }} </h2> <br> {{ $park->address }} <br><br> Descrizione: <br>{{ $park->description }}</h3>
            </div>
            <div class="col-lg-4" style="justify-content: center; align-items: center;display: flex">

                <form action="" style="background: #fff; border: 2px solid white; border-radius: 20px; width: 320px; height: 500px">
                        <img src="{{asset('images/logo.png')}}" alt="" class="logo">
                        
                        <div class="form-group">
                            <label for="check-in">Check-in</label> 
                            <input type="date" id="check-in">
                        </div>
                        
                        <div class="form-group">
                            <label for="check-out">Check-out</label>
                            <input type="date" id="check-out">
                        </div>
                        
                        <div class="form-group">
                            <label for="start-time">Ora inizio</label>
                            <input type="time" id="start-time">
                        </div>
                        
                        <div class="form-group">
                            <label for="end-time">Ora fine</label>
                            <input type="time" id="end-time">
                        </div>
                        
                        <button class="btn-book">Prenota</button>
                    </form>
            </div>
        </div>
    </div>
    
    

    @else
        <h1>Parco non trovato</h1>



    @endif

    <style>
        .show-park {
    padding: 20px;
    margin: 10px;
}

.show-park img {
    border-radius: 20px;
}

.show-park h3 {
    color: #333;
    font-family: 'Roboto', sans-serif;
}

.reservation-card {
    border: 2px solid #f0f0f0;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.logo {
    width: 40%;
    margin: 0 auto;
    display: block;
}

.form-heading {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="date"],
input[type="time"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn-book {
    background-color: #ff5a5f;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

.btn-book:hover {
    background-color: #d9534f;
}

    </style>
</x-layout>