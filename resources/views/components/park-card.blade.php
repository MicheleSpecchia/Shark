@props(['park'])

<div class="col-12  col-md-4 mb-4 mb-lg-0" onclick="window.location.href='/parks/{{$park->id}}';" style="cursor: pointer;">
    <div class="card-wrap">
        <div class="con-img-wrap m-auto">
            <img src="{{$park->foto ? asset('storage/' . $park->foto) : asset('/images/vision.png')}}" class="img-fluid mx-auto d-block" alt="product picture">
            <span class="wishlist-tag"><i class="bi bi-heart"></i></span>
        </div>
        <div class="con-wrap mt-4">
            <h2 class="fs-6 mt-4 fw-bold text-truncate">{{$park->address}}</h2>
            <p class="mb-2 theme-text-accent-two small">{{$park->location}}</p>
            <div class="d-flex bottom mb-2">
                <div class="rating-cover">
                    <span class="p-1 small rounded-1 bg-info theme-text-white">4.5</span>
                    <span class="me-2 small theme-text-accent-one">Exceptional</span>
                    <span class="small">2,914 reviews</span>
                </div>
            </div>
            <p class="mb-0 theme-text-accent-one">Starting from US$69</p>
        </div>
    </div>
</div>