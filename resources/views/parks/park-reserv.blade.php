<x-layout>
    @include('partials._navbar')


    <div class="table-container">

    <h2> Le prenotazioni al parcheggio </h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Data di Inizio</th>
                    <th>Data di Fine</th>
                    <th>Ora di Inizio</th>
                    <th>Ora di Fine</th>
                    <th>Prezzo</th>
                    <th>Tipo di Veicolo</th>
                    <th>Stato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prenotazioni as $prenotazione)
                <tr>
                    <td>{{ $prenotazione->data_inizio }}</td>
                    <td>{{ $prenotazione->data_fine }}</td>
                    <td>{{ $prenotazione->start_time }}</td>
                    <td>{{ $prenotazione->end_time }}</td>
                    <td>{{ $prenotazione->price }}</td>
                    <td>{{ $prenotazione->veicolo }}</td>
                    <td>
                        @php
                        $now = now();
                        $dataInizio = \Carbon\Carbon::parse($prenotazione->data_inizio . ' ' . $prenotazione->start_time);
                        $dataFine = \Carbon\Carbon::parse($prenotazione->data_fine . ' ' . $prenotazione->end_time);
                        if ($now < $dataInizio) { $statusClass='blue' ; $statusText='Non iniziata' ; } elseif ($now>= $dataInizio && $now <= $dataFine) { $statusClass='yellow' ; $statusText='In Corso' ; } else { $statusClass='green' ; $statusText='Completata' ; }@endphp <span class="status-circle {{ $statusClass }}" title="{{ $statusText }}"></span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>