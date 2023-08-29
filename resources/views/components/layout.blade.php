<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SHARK</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="100x100" href="{{asset('favicon.ico')}}">
    @vite(['resources/js/app.js'])

</head>


<body>
    <!-- page content area -->
    <div class="pagewrap">
        <div class="head-wrapper">
            <!-- header section -->
            <header class="header theme-bg-white">
                <div class="container">
                    <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-0">
                        <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.png')}}" alt="Brand Logo" width="65" title="Brand Logo" class="img-fluid"></a>
                        <button class="navbar-toggler px-1 btn rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto page-menu" id="nav">
                                <li class="nav-item"><a class="nav-link pe-5 ps-0 ps-lg-5" href="#deals">Deals</a></li>
                                <li class="nav-item"><a class="nav-link pe-5" href="#offers">Offers</a></li>
                                <li class="nav-item"><a class="nav-link pe-5" href="#holidays">Holidays</a></li>
                                <li class="nav-item"><a class="nav-link pe-5" href="#review">Review</a></li>
                            </ul>
                            <ul class="navbar-nav page-menu mb-3 mb-lg-0">
                                <!-- user account  -->
                                <li class="nav-item dropdown my-auto">
                                    <a href="#" class="nav-link dropdown-toggle p-0 user" id="navbarDropdown3" data-bs-toggle="dropdown" aria-expanded="false"><span class="d-inline-block p-2 theme-bg-primary rounded-circle lh-1"><i class="bi bi-person"></i></span></a>
                                    <ul class="dropdown-menu dropdown-menu-end sub-menu" aria-labelledby="navbarDropdown3">
                                        <li><a class="dropdown-item" href="/login">Sign in </a></li>
                                        <li><a class="dropdown-item" href="/register">Sign up</a></li>
                                        @auth
                                        <li>
                                            <form class="inline" method="POST" action="/logout">
                                                @csrf
                                                <button class="hover:text-red-500" type="submit">
                                                    <i class="fa-solid fa-door-closed"></i>
                                                    Logout
                                                </button>
                                            </form>
                                        </li>
                                        @endauth
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
        </div>
    </div>

    <main>
        {{$slot}}
    </main>

</body>

</html>