
<x-layout>

@include('partials._navbar')


<?php    

    session()->put('park_owner', $park->user->id);
    session()->put('search.id', $park->id);

    require_once __DIR__.'/../../../vendor/autoload.php';

    $stripe = new \Stripe\StripeClient('sk_test_51Nqy3OE170HprCCokbkqEcvfni4Rxp8d0MGSawjcL6uryUjqRclA01e40rPgUmpMSME4qkZlohHOET1nQLYQWaxI00Fz1hoCnH');

    $checkout_session = $stripe->checkout->sessions->create([
        'line_items' => [[
          'price_data' => [
            'currency' => 'eur',
            'product_data' => [
              'name' => $park->location .', id: ' . $park->id,
              'images' => ['https://cdn.pixabay.com/photo/2016/03/21/23/25/link-1271843_1280.png', ],
            ],
            'unit_amount' => $costoTotale * 100,
          ],
          'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => route('payment.success'), 
        'cancel_url' => route('payment.cancel')
        
      ]);

      $images = $park->images;

?>

<script>
  $(document).ready(function() {
    $('#imageCarousel').carousel(); // Inizializza il carousel

    // Aggiorna il carousel ogni 5 secondi (puoi personalizzare l'intervallo)
    setInterval(function() {
      $('#imageCarousel').carousel('next');
    }, 3000); // 5000 millisecondi (5 secondi)
  });
</script>







<div class="container mt-5">
    <div class="row">
        
        <div class="col-lg-6">
            <br>
            <br>
            <div class="park-details" style="height: 955px">

            <div id="imageCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach ($images as $key => $image)
      <li data-target="#imageCarousel" data-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"></li>
    @endforeach
  </ol>
  <div class="carousel-inner">
    @foreach ($images as $key => $image)
      <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
        <img src="{{ asset($image->image_path) }}" class="d-block w-100" alt="Image">
      </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



                <h1>{{ $park->location }} </h1>
                <p>{{ $park->address }}</p>
                <p>{{ $park->description }}</p>
                <div class="park-rating">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $park->stars)
                            <i class="fas fa-star"></i>
                        @else
                            <i class="far fa-star"></i>
                        @endif
                    @endfor
                </div>
                <p class="park-price">A partire da {{ $park->price }}€ l'ora</p>
                
                <!-- Aggiungi immagine profilo e nome dell'utente qui -->
                <div class="owner-details">
                    <img src="{{ asset($park->user->avatar) }}" alt="Avatar" class="avatar">
                    <div class="owner-info">
                        <h4 class="owner-name">   {{ $park->user->nome }} </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <br>
            <br>
            <div class="booking-form">
                <form method="POST" action="/create-checkout-session" style="background: #fff; border: 2px solid white; border-radius: 20px;" readonly>
                    @csrf
                    <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                    <input type="hidden" value="{{ $park->id }}" name="park_id">
                    <div class="form-group">
                        <label for="check-in">Check-in</label>
                        <input type="date" name="data_inizio" class="form-control" value="{{ session('search.date-input') }}" readonly >
                    </div>
                    <div class="form-group">
                        <label for="check-out">Check-out</label>
                        <input type="date" name="data_fine" class="form-control" value="{{ session('search.date-output') }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="start-time">Ora inizio</label>
                        <input type="time" name="start_time" class="form-control" value="{{ session('search.time-input') }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="end-time">Ora fine</label>
                        <input type="time" name="end_time" class="form-control" value="{{ session('search.time-output') }}" readonly>
                    </div>

                    <br>
                    <br>
                    

                    <button id="checkout-button" type="button" class="btn btn-primary btn-book">Procedi al pagamento</button>
                </form>
            </div>

            <br>
            <div id="google-map"></div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-12">
            <h2 style="font-size: 30px; font-weight: bold;">Recensioni</h2>
            <div class="reviews">
                @foreach ($reviews as $review)
                    <div class="review">
                        <div class="review-rating">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $review->rating)
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                        </div>
                        <h3>{{ $review->title }}</h3>
                        <p>{{ $review->feedback }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('pk_test_51Nqy3OE170HprCCoEC9V2cfuddNFtuBxyYavedqEZa4fEuV2X7M5IK7aejhkkORm1sDSt44M5zg8yrn1OSFWSwjD0018JYulB5');
    const btn = document.getElementById("checkout-button");
    btn.addEventListener('click', function(e){
        e.preventDefault();
        stripe.redirectToCheckout({
            sessionId: "<?php  echo  $checkout_session->id ?>"
        });
    })
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDncvVdJPnvpnO55knsADnEEdyvxgM1ZYw&callback=initMap" async defer></script>
<script>
    function initMap() {
        // Imposta l'indirizzo del parco (sostituisci con l'indirizzo effettivo)
        
        var parkAddress = "{{$park->address}}";

        // Crea un oggetto geocoder per convertire l'indirizzo in coordinate
        var geocoder = new google.maps.Geocoder();

        // Seleziona l'elemento HTML in cui verrà visualizzata la mappa
        var mapElement = document.getElementById('google-map');

        // Inizializza la mappa centrata sull'indirizzo del parco
        var map = new google.maps.Map(mapElement, {
            zoom: 15,
            center: { lat: 0, lng: 0 } // Le coordinate verranno aggiornate successivamente
        });

        // Converte l'indirizzo in coordinate geografiche
        geocoder.geocode({ 'address': parkAddress }, function(results, status) {
            if (status === 'OK') {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    title: "Posizione del parco"
                });
            } else {
                console.error('Impossibile trovare l\'indirizzo: ' + status);
            }
        });
    }
</script>



<style>
    #google-map {
    width: 100%;
    height: 400px; /* Altezza della mappa */
    border: 2px solid #ccc; /* Bordo sottile grigio */
    border-radius: 10px; /* Bordi arrotondati */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombra leggera */

    
}

</style>













</x-layout>