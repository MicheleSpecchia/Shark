<div>
<x-layout>



<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="park-details">
                <img src="{{ asset('/images/vision.png')}}" alt="Park Image" class="img-fluid">
                <h1>{{ $park->location }}</h1>
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
                        <h4 class="owner-name">   {{ $park->user->nome }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="booking-form">
                <form method="POST" action="/prenota" style="background: #fff; border: 2px solid white; border-radius: 20px;" readonly>
                    @csrf
                    <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                    <input type="hidden" value="{{ $park->id }}" name="park_id">

                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
                    <div class="form-group">
                        <label for="check-in">Check-in</label>
                        <input type="date" name="data_inizio" class="form-control" value="{{ session('search.date-input') }}" >
                    </div>
                    <div class="form-group">
                        <label for="check-out">Check-out</label>
                        <input type="date" name="data_fine" class="form-control" value="{{ session('search.date-output') }}" >
                    </div>
                    <div class="form-group">
                        <label for="start-time">Ora inizio</label>
                        <input type="time" name="start_time" class="form-control" value="{{ session('search.time-input') }}" >
                    </div>
                    <div class="form-group">
                        <label for="end-time">Ora fine</label>
                        <input type="time" name="end_time" class="form-control" value="{{ session('search.time-output') }}" >
                    </div>

                    <input type="hidden" value="{{ session('search.date-input') }}" name="veicolo">

                    <button type="submit" class="btn btn-primary btn-book">Prenota ora</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-12">
            <h2>Recensioni</h2>
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





</x-layout>