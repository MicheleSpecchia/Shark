<x-layout>

    @include('partials._navbar')


    <div class="content">
        <div class="container">


            <div class="about-header">
                <h1>Noi siamo <span class="highlight">Shark</span></h1>
                <h2>Rivoluzioniamo il concetto di parcheggio nelle città.</h2>
            </div>

            <!-- Sezione About con testo bianco e ombreggiato e in grassetto-->
            <section class="about-details">
                <p class="about-text white-text-shadow">
                    Dalla passione e dalla frustrazione di tre studenti di informatica, nasce <strong>Shark</strong> che combina "sharing" e "park" per portare una soluzione rivoluzionaria al problema del parcheggio.
                </p>
                <p class="about-text white-text-shadow">
                    La nostra piattaforma collega proprietari di spazi di parcheggio non utilizzati con coloro che sono stanchi di girare in cerca di un posto. Convertiamo ogni spazio inutilizzato in un'opportunità e ogni ricerca stressante in un'esperienza fluida.
                </p>
            </section>

            <!-- Sezione Team -->
            <section class="team-section">
                <h2>Il Team <span class="highlight">Shark</span></h2>
                <div class="team-members">
                    <div class="member">
                        <img src="{{ asset('images/michi.jpg') }}" alt="Michele Specchia">
                        <p class="member-name">Michele Specchia</p>
                    </div>
                    <div class="member">
                        <img src="{{ asset('images/richi.jpg') }}" alt="Riccardo Marra">
                        <p class="member-name">Riccardo Marra</p>
                    </div>
                    <div class="member">
                        <img src="{{ asset('images/noty.jpg') }}" alt="Alessandro Notaro">
                        <p class="member-name">Alessandro Notaro</p>
                    </div>
                </div>
            </section>

        </div>
    </div>
</x-layout>