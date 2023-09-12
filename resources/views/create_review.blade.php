<x-layout>

    @include('partials._navbar')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="mb-4" style="color: #FFFFFF; font-weight: bold;">Inserisci la tua recensione per il parcheggio {{ $park->name }}</h2>

                <!-- In caso di errori di validazione -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('reviews.store', ['park' => $park, 'reservation' => $reservation]) }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="feedback" class="form-label">Contenuto</label>
                        <textarea class="form-control" id="feedback" name="feedback" rows="4" required>{{ old('content') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="rating" class="form-label">Valutazione</label>
                        <select class="form-control" id="rating" name="rating" required>
                            <option value="1">1 - Pessimo</option>
                            <option value="2">2 - Insufficiente</option>
                            <option value="3">3 - Mediocre</option>
                            <option value="4">4 - Buono</option>
                            <option value="5">5 - Ottimo</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Invia recensione</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
