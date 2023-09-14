<div>
<x-layout>
    
    @if($park)
    <div class="show-park">
        <div class="row">
            <div class="col-lg-4 col-sm-12">                
                <img src="{{asset('images/vision.png')}}" alt="" style="width: 95%">
            </div>
            <div class="col-lg-4 col-sm-12" style="margin-top: 20px">
                <h2>{{ $park->location }} </h2> <br> {{ $park->address }} <br><br> Descrizione: <br>{{ $park->description }}</h3>
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

</x-layout>