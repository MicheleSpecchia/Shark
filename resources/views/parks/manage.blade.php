<x-layout>
    @include('partials._navbar')

    @if(session('message'))
    <div class="notification mb-4">
        {{ session('message') }}
    </div>
    @endif

    <div class="container">
        <div class="row d-flex mt-5">

            @unless(count($parks)==0)
            @foreach($parks as $park)
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <div class="card-wrap p-3" style="background-color: white; border-radius: 15px;">

                    <div class="con-img-wrap m-auto">
                        <img src="{{$park->foto ? asset('storage/' . $park->foto) : asset('/images/vision.png')}}" class="img-fluid mx-auto d-block" style="border-radius: 15px;" alt="product picture">
                    </div>

                    <div class="con-wrap mt-4">
                        <h2 class="fs-4 mt-4 fw-bold text-truncate" style="color: #1a2a6c; max-width: 100%;">{{$park->location}}</h2>
                        <div class="d-flex bottom mb-2">
                            <div class="rating-cover">
                                @for ($i = 1; $i <= 5; $i++) @if ($i <=round($park->average_rating))
                                    <i class="fas fa-star" style="color: #1a2a6c;"></i>
                                    @else
                                    <i class="far fa-star" style="color: #1a2a6c;"></i>
                                    @endif
                                    @endfor
                                    <span class="ml-2 small" style="color: #1a2a6c;">{{ $park->reviews_count }} reviews</span>
                            </div>
                        </div>
                        <p class="mb-0 fs-5" style="color: #1a2a6c;">A partire da {{ $park->price }}€ l'ora</p>
                    </div>

                    <div class="manage-btn-container">
                        <form method="POST" action="/parks/{{$park->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ">
                                <i class="fa-solid fa-trash"></i>

                            </button>
                        </form>


                        <a href="/parks/{{$park->id}}/edit" class="btn btn-success ">
                            <i class="fa-solid fa-pen-to-square"></i>  
                        </a>

                        <a href="/parks/{{$park->id}}/reservation" class="btn btn-secondary ">
                            <i class="fa-solid fa-eye"></i>
                        </a>

                    </div>

                </div>
            </div>

            @endforeach
            @endunless

        </div>
    </div>

</x-layout>