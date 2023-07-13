<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center">
    </div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            SH<span class="text-black">ARK</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Il futuro nel park sharing
        </p>
        @guest
        <div>
            <a href="/register" class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">
                Diventa uno squalo
            </a>
        </div>
        @endguest
    </div>
</section>
<div class="container">
    <div class="product-container">
        <div class="product bg-laravel">
            <div class="product-right">
                <div class="product-title" style="
                                font-size: 48px;
                                margin-top: 20px;
                                color: #ffffff;
                            ">
                    Un nuovo modo di parcheggiare
                </div>
                <div class="product-description" style="color:white">
                    SHARK si propone di promuovere l'utilizzo e la condivisione di box auto privati
                    in modo più accessibile ed economicamente conveniente rispetto ad altre alternative,
                    offrendone una sostenibile e pratica per tutti gli automobilisti e i possessori di box auto.
                </div>
                <div class="product-button product-button-white hover:text-black hover:border-black" style="margin-top: 40px">
                    <a href="/"> Leggi di più </a>
                </div>
            </div>
            <div class="product-left">
                <img alt="" class="block" src="{{asset('images/squalo.png')}}" />
            </div>
        </div>
    </div>
    <div class="product-container">
        <div class="product" style="background-color: white">
            <div class="product-left">
                <img alt="" class="block" src="{{asset('images/vision.png')}}" />
            </div>
            <div class="product-right">
                <div class="product-title" style="
                                font-size: 48px;
                                margin-top: 60px;
                                color: black;
                            ">
                    Pensiamo all'ambiente
                </div>
                <div class="product-description" style="color: black; font-size: 22px">
                    SHARK pensa all'ambiente contribuendo a ridurre il traffico,
                    il consumo di carburante e l'impatto ambientale complessivo.
                </div>
                <div class="product-button product-button-black hover:text-laravel hover:border-laravel" style="margin-top: 40px">
                    <a href="/"> Leggi di più </a>
                </div>
            </div>
        </div>
    </div>

    <div class="product-container">
        <div class="product bg-laravel">
            <div class="product-right">
                <img class="block" src="{{asset('images/sec.png')}}" />
            </div>
            <div class="product-left">
                <div class="product-title" style="
                                font-size: 48px;
                                margin-top: 60px;
                                color: #ffffff;
                            ">
                    Tutto ciò di cui hai bisogno
                </div>
                <div class="product-description" style="color: #ffffff; font-size: 22px">
                    Diventa uno Sharker premium per ricevere tutti i gadget necessari
                    per offrire la massima sicurezza e libertà.
                </div>
                <div class="product-button product-button-white hover:text-black hover:border-black" style="margin-top: 40px">
                    <a href="/"> Pacchetto premium </a>
                </div>
            </div>
        </div>
    </div>

    <div class="product-container">
        <div class="product bg-white">
            <div class="product-left">
                <div class="product-title" style="
                                font-size: 48px;
                                margin-top: 60px;
                                color: black;
                            ">
                    Squali Responsabili
                </div>
                <div class="product-description" style="
                                font-size: 24px;
                                max-width: 500px;
                                text-align: center;
                                color:black
                            ">

                    SHARK si impegna a fornire un servizio di qualità
                    ma anche i suoi membri devono impegnarsi a operare
                    nel rispetto di tutti.
                </div>
                <div class="product-button product-button-black hover:text-laravel hover:border-laravel" style="margin-top: 40px">
                    <a href="/"> Leggi di più </a>
                </div>
            </div>
            <div class="product-right">
                <img alt="" class="block" src="{{asset('images/value.png')}}" />
            </div>
        </div>
    </div>
</div>