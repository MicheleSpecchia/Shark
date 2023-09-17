<x-layout>
    @include('partials._navbar')

    <div class="popup-container">
        <div class="popup">
            <h1>Prenotazione Effettuata</h1>
            <a href="{{ route('user.reservations') }}">Visualizza Prenotazioni</a>
            <a href="/">Torna alla Home</a>
        </div>
    </div>
   

</x-layout>

<style>
      .popup-container {
            position: relative;
            margin-top: 200px;
        }

        .popup {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            padding: 20px;
            max-width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .popup h1 {
            font-size: 24px;
            color: #333;
        }

        .popup a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            background: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .popup a:first-child {
            margin-right: 10px;
        }

        .popup a:hover {
            background: #0056b3;
        }
</style>

