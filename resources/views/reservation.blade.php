<x-layout>
    <div class="container">
        <div class="row mt-5">
            @foreach ($reservations as $reservation)
            <p>Ora di inizio: {{ $reservation->start_time }}</p>
            <p>Ora di fine: {{ $reservation->end_time }}</p>
            <!-- Altri dettagli della prenotazione -->
            @endforeach
        </div>
    </div>
</x-layout>