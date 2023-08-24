<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ThemesLay">
    <title>RoundTours - Tours and Travel Landing Page</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="80x80" href="assets/images/favicon.png">
    <!-- Main CSS -->
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
                        <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.png')}}" alt="Brand Logo" width="65"
                                title="Brand Logo" class="img-fluid"></a>
                        <button class="navbar-toggler px-1 btn rounded-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
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
                                <!-- language list -->
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link mein-link dropdown-toggle" id="navbarDropdown1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-globe me-2"></i>Eng</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <li><a class="dropdown-item" href="#">Russian</a></li>
                                        <li><a class="dropdown-item" href="#">French</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Currency list -->
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link mein-link dropdown-toggle" id="navbarDropdown2"
                                        data-bs-toggle="dropdown" aria-expanded="false">INR</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <li><a class="dropdown-item" href="#">USD</a></li>
                                        <li><a class="dropdown-item" href="#">EUR</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- user account  -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link mein-link d-inline-block position-relative">
                                        <i class="bi bi-bell"></i>
                                        <span
                                            class="position-absolute translate-middle p-1 bg-success border border-light rounded-circle">
                                            <span class="visually-hidden">New alerts</span>
                                        </span>
                                    </a>
                                </li>
                                <!-- user account  -->
                                <li class="nav-item dropdown my-auto">
                                    <a href="#" class="nav-link dropdown-toggle p-0 user" id="navbarDropdown3"
                                        data-bs-toggle="dropdown" aria-expanded="false"><span
                                            class="d-inline-block p-2 theme-bg-primary rounded-circle lh-1"><i
                                                class="bi bi-person"></i></span></a>
                                    <ul class="dropdown-menu dropdown-menu-end sub-menu"
                                        aria-labelledby="navbarDropdown3">
                                        <li><a class="dropdown-item" href="#">Sign in</a></li>
                                        <li><a class="dropdown-item" href="#">Register</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- search engine section-->
            <div class="search-engine">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12 mb-5 text-center position-relative">
                            <h1 class="display-3 fw-bold mb-4 theme-text-white theme-text-shadow">
                                A Journey to Adventurous
                            </h1>
                            <p class="mb-0 theme-text-white">Discover amzaing places at exclusive deals</p>
                        </div>
                    </div>
                    <!-- search engine tabs -->
                    <div class="row mt-0 mt-lg-5">
                        <div class="col-12 col-lg-10 offset-lg-1 mb-5 text-center position-relative">
                            <!-- product main tab list -->
                            <ul class="nav nav-tabs d-flex justify-content-center border-0 cust-tab" id="myTab"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="flight-tab" data-bs-toggle="tab"
                                        data-bs-target="#flight-tab-pane" type="button" role="tab"
                                        aria-controls="flight-tab-pane" aria-selected="true">Flights</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="hotel-tab" data-bs-toggle="tab"
                                        data-bs-target="#hotel-tab-pane" type="button" role="tab"
                                        aria-controls="hotel-tab-pane" aria-selected="false">Hotel</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="holiday-tab" data-bs-toggle="tab"
                                        data-bs-target="#holiday-tab-pane" type="button" role="tab"
                                        aria-controls="holiday-tab-pane" aria-selected="false">Holidays</button>
                                </li>
                            </ul>
                            <!-- product main tab content -->
                            <div class="tab-content mt-3" id="myTabContent">
                                <!-- flight search tab -->
                                <div class="tab-pane fade show active" id="flight-tab-pane" role="tabpanel"
                                    aria-labelledby="flight-tab" tabindex="0">
                                    <!-- flight multiple search tab -->
                                    <ul class="nav nav-pills cust-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-oneway-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-oneway" type="button" role="tab"
                                                aria-controls="pills-oneway" aria-selected="true">
                                                <span
                                                    class="d-inline-block p-2 rounded-circle bg-white align-middle me-2"></span>
                                                One Way</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-Round-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-Round" type="button" role="tab"
                                                aria-controls="pills-Round" aria-selected="false">
                                                <span
                                                    class="d-inline-block p-2 rounded-circle bg-white align-middle me-2"></span>
                                                Round Trip</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-multiCity-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-multiCity" type="button" role="tab"
                                                aria-controls="pills-multiCity" aria-selected="false">
                                                <span
                                                    class="d-inline-block p-2 rounded-circle bg-white align-middle me-2"></span>
                                                Multi City</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-oneway" role="tabpanel"
                                            aria-labelledby="pills-oneway-tab" tabindex="0">
                                            <!-- one way search -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="search-pan row mx-0 theme-border-radius">
                                                        <div
                                                            class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                            <div class="form-group">
                                                                <label for="exampleDataList" class="form-label">Depart
                                                                    From</label>
                                                                <input class="form-control" list="datalistOptions1"
                                                                    id="exampleDataList" placeholder="New Delhi">
                                                                <datalist id="datalistOptions1">
                                                                    <option value="San Francisco">
                                                                    <option value="New York">
                                                                    <option value="Seattle">
                                                                    <option value="Los Angeles">
                                                                    <option value="Chicago">
                                                                </datalist>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                            <div class="form-group">
                                                                <label for="exampleDataList2" class="form-label">Arrival
                                                                    To</label>
                                                                <input class="form-control" list="datalistOptions2"
                                                                    id="exampleDataList2" placeholder="London">
                                                                <datalist id="datalistOptions2">
                                                                    <option value="San Francisco">
                                                                    <option value="New York">
                                                                    <option value="Seattle">
                                                                    <option value="Los Angeles">
                                                                    <option value="Chicago">
                                                                </datalist>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-lg-4 col-xl-3 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-0 pe-xl-2">
                                                            <div class="form-group">
                                                                <label class="form-label">Departure Date</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Wed 2 Mar">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-lg-6 col-xl-3 ps-0 mb-2 mb-lg-0 mb-xl-0 pe-0 pe-lg-2">
                                                            <div class="form-group border-0">
                                                                <label class="form-label">Traveller's
                                                                </label>
                                                                <div class="dropdown" id="myDD1">
                                                                    <button class="dropdown-toggle form-control"
                                                                        type="button" id="travellerInfoOneway11"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <span class="text-truncate">2 adults - 1
                                                                            childeren - 1 Infants
                                                                        </span>
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="travellerInfoOneway11">
                                                                        <ul class="drop-rest">
                                                                            <li>
                                                                                <div class="d-flex small">Adults
                                                                                </div>
                                                                                <div
                                                                                    class="ms-auto input-group plus-minus-input">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="minus"
                                                                                            data-field="onewayAdult">
                                                                                            <i class="bi bi-dash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <input class="input-group-field"
                                                                                        type="number" name="onewayAdult"
                                                                                        value="0">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="plus"
                                                                                            data-field="onewayAdult">
                                                                                            <i class="bi bi-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="d-flex small">Child
                                                                                </div>
                                                                                <div
                                                                                    class="ms-auto input-group plus-minus-input">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="minus"
                                                                                            data-field="onewayChild">
                                                                                            <i class="bi bi-dash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <input class="input-group-field"
                                                                                        type="number" name="onewayChild"
                                                                                        value="0">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="plus"
                                                                                            data-field="onewayChild">
                                                                                            <i class="bi bi-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="d-flex small">Infants
                                                                                </div>
                                                                                <div
                                                                                    class="ms-auto input-group plus-minus-input">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="minus"
                                                                                            data-field="onewayInfant">
                                                                                            <i class="bi bi-dash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <input class="input-group-field"
                                                                                        type="number"
                                                                                        name="onewayInfant" value="0">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="plus"
                                                                                            data-field="onewayInfant">
                                                                                            <i class="bi bi-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6 col-xl-2 px-0">
                                                            <button type="submit" class="btn btn-search"
                                                                onclick="window.location.href='#';">
                                                                <span class="fw-bold"><i
                                                                        class="bi bi-search me-2"></i>Search</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- flight class section -->
                                                <div class="col-12 mt-2">
                                                    <div class="d-flex flex-sm-row flex-column">
                                                        <div class="me-2 mb-2 mb-lg-0">
                                                            <div class="switch mode-switch">
                                                                <input type="checkbox" name="stop_mode" id="stop_mode"
                                                                    value="1">
                                                                <label for="stop_mode" data-on="NonStop" data-off="Stop"
                                                                    class="mode-switch-inner"></label>
                                                            </div>
                                                        </div>
                                                        <div class="me-2">
                                                            <div class="switch mode-switch">
                                                                <input type="checkbox" name="class_mode" id="class_mode"
                                                                    value="1">
                                                                <label for="class_mode" data-on="Premium"
                                                                    data-off="Economy"
                                                                    class="mode-switch-inner"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /oneway search -->
                                        </div>
                                        <div class="tab-pane fade" id="pills-Round" role="tabpanel"
                                            aria-labelledby="pills-Round-tab" tabindex="0">
                                            <!-- round trip  search -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="search-pan row mx-0 theme-border-radius">
                                                        <div
                                                            class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                            <div class="form-group">
                                                                <label for="exampleDataList1" class="form-label">Depart
                                                                    From</label>
                                                                <input class="form-control" list="datalistOptions3"
                                                                    id="exampleDataList1" placeholder="New Delhi">
                                                                <datalist id="datalistOptions3">
                                                                    <option value="San Francisco">
                                                                    <option value="New York">
                                                                    <option value="Seattle">
                                                                    <option value="Los Angeles">
                                                                    <option value="Chicago">
                                                                </datalist>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                            <div class="form-group">
                                                                <label for="exampleDataList3" class="form-label">Arrival
                                                                    To</label>
                                                                <input class="form-control" list="datalistOptions4"
                                                                    id="exampleDataList3" placeholder="London">
                                                                <datalist id="datalistOptions4">
                                                                    <option value="San Francisco">
                                                                    <option value="New York">
                                                                    <option value="Seattle">
                                                                    <option value="Los Angeles">
                                                                    <option value="Chicago">
                                                                </datalist>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-lg-4 col-xl-3 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-0 pe-xl-2">
                                                            <div class="form-group">
                                                                <label class="form-label">Departure Date - Arrival
                                                                    Date</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Wed 2 Mar  -  Fri 11 Apr">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-lg-6 col-xl-3 ps-0 mb-2 mb-lg-0 mb-xl-0 pe-0 pe-lg-2">
                                                            <div class="form-group border-0">
                                                                <label class="form-label">Traveller's
                                                                </label>
                                                                <div class="dropdown" id="myDD2">
                                                                    <button class="dropdown-toggle form-control"
                                                                        type="button" id="travellerInfoOneway51"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <span class="text-truncate">2 adults - 1
                                                                            childeren - 1 Infants
                                                                        </span>
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="travellerInfoOneway51">
                                                                        <ul class="drop-rest">
                                                                            <li>
                                                                                <div class="d-flex small">Adults
                                                                                </div>
                                                                                <div
                                                                                    class="ms-auto input-group plus-minus-input">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="minus"
                                                                                            data-field="onewayAdult">
                                                                                            <i class="bi bi-dash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <input class="input-group-field"
                                                                                        type="number" name="onewayAdult"
                                                                                        value="0">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="plus"
                                                                                            data-field="onewayAdult">
                                                                                            <i class="bi bi-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="d-flex small">Child
                                                                                </div>
                                                                                <div
                                                                                    class="ms-auto input-group plus-minus-input">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="minus"
                                                                                            data-field="onewayChild">
                                                                                            <i class="bi bi-dash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <input class="input-group-field"
                                                                                        type="number" name="onewayChild"
                                                                                        value="0">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="plus"
                                                                                            data-field="onewayChild">
                                                                                            <i class="bi bi-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="d-flex small">Infants
                                                                                </div>
                                                                                <div
                                                                                    class="ms-auto input-group plus-minus-input">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="minus"
                                                                                            data-field="onewayInfant">
                                                                                            <i class="bi bi-dash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <input class="input-group-field"
                                                                                        type="number"
                                                                                        name="onewayInfant" value="0">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="plus"
                                                                                            data-field="onewayInfant">
                                                                                            <i class="bi bi-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6 col-xl-2 px-0">
                                                            <button type="submit" class="btn btn-search"
                                                                onclick="window.location.href='#';">
                                                                <span class="fw-bold"><i
                                                                        class="bi bi-search me-2"></i>Search</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /round trip search -->
                                        </div>
                                        <div class="tab-pane fade" id="pills-multiCity" role="tabpanel"
                                            aria-labelledby="pills-multiCity-tab" tabindex="0">
                                            <!-- multicity search -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="search-pan row mx-0 theme-border-radius">
                                                        <div
                                                            class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                            <div class="form-group">
                                                                <label for="exampleDataList13" class="form-label">Depart
                                                                    From</label>
                                                                <input class="form-control" list="datalistOptions14"
                                                                    id="exampleDataList13" placeholder="New Delhi">
                                                                <datalist id="datalistOptions14">
                                                                    <option value="San Francisco">
                                                                    <option value="New York">
                                                                    <option value="Seattle">
                                                                    <option value="Los Angeles">
                                                                    <option value="Chicago">
                                                                </datalist>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                            <div class="form-group">
                                                                <label for="exampleDataList4" class="form-label">Arrival
                                                                    To</label>
                                                                <input class="form-control" list="datalistOptions5"
                                                                    id="exampleDataList4" placeholder="London">
                                                                <datalist id="datalistOptions5">
                                                                    <option value="San Francisco">
                                                                    <option value="New York">
                                                                    <option value="Seattle">
                                                                    <option value="Los Angeles">
                                                                    <option value="Chicago">
                                                                </datalist>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-0 pe-xl-2">
                                                            <div class="form-group">
                                                                <label class="form-label">Departure Date</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Wed 2 Mar">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-lg-6 col-xl-3 ps-0 mb-2 mb-lg-0 mb-xl-0 pe-0 pe-lg-2">
                                                            <div class="form-group border-0">
                                                                <label class="form-label">Traveller's
                                                                </label>
                                                                <div class="dropdown" id="myDD3">
                                                                    <button class="dropdown-toggle form-control"
                                                                        type="button" id="travellerInfoOneway21"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <span class="text-truncate">2 adults - 1
                                                                            childeren - 1 Infants
                                                                        </span>
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="travellerInfoOneway21">
                                                                        <ul class="drop-rest">
                                                                            <li>
                                                                                <div class="d-flex small">Adults
                                                                                </div>
                                                                                <div
                                                                                    class="ms-auto input-group plus-minus-input">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="minus"
                                                                                            data-field="onewayAdult">
                                                                                            <i class="bi bi-dash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <input class="input-group-field"
                                                                                        type="number" name="onewayAdult"
                                                                                        value="0">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="plus"
                                                                                            data-field="onewayAdult">
                                                                                            <i class="bi bi-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="d-flex small">Child
                                                                                </div>
                                                                                <div
                                                                                    class="ms-auto input-group plus-minus-input">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="minus"
                                                                                            data-field="onewayChild">
                                                                                            <i class="bi bi-dash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <input class="input-group-field"
                                                                                        type="number" name="onewayChild"
                                                                                        value="0">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="plus"
                                                                                            data-field="onewayChild">
                                                                                            <i class="bi bi-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="d-flex small">Infants
                                                                                </div>
                                                                                <div
                                                                                    class="ms-auto input-group plus-minus-input">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="minus"
                                                                                            data-field="onewayInfant">
                                                                                            <i class="bi bi-dash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <input class="input-group-field"
                                                                                        type="number"
                                                                                        name="onewayInfant" value="0">
                                                                                    <div class="input-group-button">
                                                                                        <button type="button"
                                                                                            class="circle"
                                                                                            data-quantity="plus"
                                                                                            data-field="onewayInfant">
                                                                                            <i class="bi bi-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6 col-xl-3 px-0">
                                                            <div class="d-flex">
                                                                <button type="button" class="btn sector-add me-1">+ Add
                                                                    Sector</button>
                                                                <button type="submit" class="btn btn-search"
                                                                    onclick="window.location.href='#';">
                                                                    <span class="fw-bold"><i
                                                                            class="bi bi-search me-2"></i>Search</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- add sector form -->
                                                    <div class="row mt-2">
                                                        <div class="col-12 col-lg-6">
                                                            <div class="search-pan row mx-0 theme-border-radius">
                                                                <div
                                                                    class="col-12 col-lg-4 col-xl-4 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                                    <div class="form-group">
                                                                        <label for="exampleDataList5"
                                                                            class="form-label">Depart
                                                                            From</label>
                                                                        <input class="form-control"
                                                                            list="datalistOptions24"
                                                                            id="exampleDataList5"
                                                                            placeholder="New Delhi">
                                                                        <datalist id="datalistOptions24">
                                                                            <option value="San Francisco">
                                                                            <option value="New York">
                                                                            <option value="Seattle">
                                                                            <option value="Los Angeles">
                                                                            <option value="Chicago">
                                                                        </datalist>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-lg-4 col-xl-4 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                                    <div class="form-group">
                                                                        <label for="exampleDataList6"
                                                                            class="form-label">Arrival
                                                                            To</label>
                                                                        <input class="form-control"
                                                                            list="datalistOptions16"
                                                                            id="exampleDataList6" placeholder="London">
                                                                        <datalist id="datalistOptions16">
                                                                            <option value="San Francisco">
                                                                            <option value="New York">
                                                                            <option value="Seattle">
                                                                            <option value="Los Angeles">
                                                                            <option value="Chicago">
                                                                        </datalist>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-lg-4 col-xl-4 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-0 pe-xl-2">
                                                                    <div class="form-group border-0">
                                                                        <label class="form-label">Departure Date</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Wed 2 Mar">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /multicity search -->
                                        </div>
                                    </div>

                                </div>
                                <!-- /flight tab end -->

                                <!-- hotel search tab -->
                                <div class="tab-pane fade" id="hotel-tab-pane" role="tabpanel"
                                    aria-labelledby="hotel-tab" tabindex="0">
                                    <!-- hotel search -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="search-pan row mx-0 theme-border-radius">
                                                <div class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                    <div class="form-group">
                                                        <label for="exampleDataList7" class="form-label">Country
                                                            <i class="bi bi-caret-down-fill small"></i>
                                                        </label>
                                                        <input class="form-control" list="datalistOptions15"
                                                            id="exampleDataList7" placeholder="India">
                                                        <datalist id="datalistOptions15">
                                                            <option value="San Francisco">
                                                            <option value="New York">
                                                            <option value="Seattle">
                                                            <option value="Los Angeles">
                                                            <option value="Chicago">
                                                        </datalist>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                    <div class="form-group">
                                                        <label for="exampleDataList8" class="form-label">Location
                                                            <i class="bi bi-caret-down-fill small"></i>
                                                        </label>
                                                        <input class="form-control" list="datalistOptions7"
                                                            id="exampleDataList8" placeholder="New Delhi">
                                                        <datalist id="datalistOptions7">
                                                            <option value="San Francisco">
                                                            <option value="New York">
                                                            <option value="Seattle">
                                                            <option value="Los Angeles">
                                                            <option value="Chicago">
                                                        </datalist>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-12 col-lg-4 col-xl-3 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-0 pe-xl-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Check in Date - Check out Date</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Wed 2 Mar  -  Fri 11 Apr">
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-12 col-lg-6 col-xl-3 ps-0 mb-2 mb-lg-0 mb-xl-0 pe-0 pe-lg-2">
                                                    <div class="form-group border-0">
                                                        <label class="form-label">Guest
                                                        </label>
                                                        <div class="dropdown" id="myDD4">
                                                            <button class="dropdown-toggle form-control" type="button"
                                                                id="travellerInfoOneway" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="text-truncate">2 adults - 1 childeren - 1
                                                                    room
                                                                </span>
                                                            </button>
                                                            <div class="dropdown-menu"
                                                                aria-labelledby="travellerInfoOneway">
                                                                <ul class="drop-rest">
                                                                    <li>
                                                                        <div class="d-flex small">Adults
                                                                        </div>
                                                                        <div
                                                                            class="ms-auto input-group plus-minus-input">
                                                                            <div class="input-group-button">
                                                                                <button type="button" class="circle"
                                                                                    data-quantity="minus"
                                                                                    data-field="onewayAdult">
                                                                                    <i class="bi bi-dash"></i>
                                                                                </button>
                                                                            </div>
                                                                            <input class="input-group-field"
                                                                                type="number" name="onewayAdult"
                                                                                value="0">
                                                                            <div class="input-group-button">
                                                                                <button type="button" class="circle"
                                                                                    data-quantity="plus"
                                                                                    data-field="onewayAdult">
                                                                                    <i class="bi bi-plus"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex small">Child
                                                                        </div>
                                                                        <div
                                                                            class="ms-auto input-group plus-minus-input">
                                                                            <div class="input-group-button">
                                                                                <button type="button" class="circle"
                                                                                    data-quantity="minus"
                                                                                    data-field="onewayChild">
                                                                                    <i class="bi bi-dash"></i>
                                                                                </button>
                                                                            </div>
                                                                            <input class="input-group-field"
                                                                                type="number" name="onewayChild"
                                                                                value="0">
                                                                            <div class="input-group-button">
                                                                                <button type="button" class="circle"
                                                                                    data-quantity="plus"
                                                                                    data-field="onewayChild">
                                                                                    <i class="bi bi-plus"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex small">Rooms
                                                                        </div>
                                                                        <div
                                                                            class="ms-auto input-group plus-minus-input">
                                                                            <div class="input-group-button">
                                                                                <button type="button" class="circle"
                                                                                    data-quantity="minus"
                                                                                    data-field="onewayInfant">
                                                                                    <i class="bi bi-dash"></i>
                                                                                </button>
                                                                            </div>
                                                                            <input class="input-group-field"
                                                                                type="number" name="onewayInfant"
                                                                                value="0">
                                                                            <div class="input-group-button">
                                                                                <button type="button" class="circle"
                                                                                    data-quantity="plus"
                                                                                    data-field="onewayInfant">
                                                                                    <i class="bi bi-plus"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-xl-2 px-0">
                                                    <button type="submit" class="btn btn-search"
                                                        onclick="window.location.href='flight-listing-oneway.html';">
                                                        <span class="fw-bold"><i
                                                                class="bi bi-search me-2"></i>Search</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /hotel search -->
                                </div>

                                <!-- holiday search tab -->
                                <div class="tab-pane fade" id="holiday-tab-pane" role="tabpanel"
                                    aria-labelledby="holiday-tab" tabindex="0">
                                    <!-- holidays search -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="search-pan row mx-0 theme-border-radius">
                                                <div class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                    <div class="form-group">
                                                        <label for="exampleDataList9" class="form-label">Country
                                                            <i class="bi bi-caret-down-fill small"></i>
                                                        </label>
                                                        <input class="form-control" list="datalistOptions6"
                                                            id="exampleDataList9" placeholder="India">
                                                        <datalist id="datalistOptions6">
                                                            <option value="San Francisco">
                                                            <option value="New York">
                                                            <option value="Seattle">
                                                            <option value="Los Angeles">
                                                            <option value="Chicago">
                                                        </datalist>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                    <div class="form-group">
                                                        <label for="exampleDataList10" class="form-label">Location
                                                            <i class="bi bi-caret-down-fill small"></i>
                                                        </label>
                                                        <input class="form-control" list="datalistOptions8"
                                                            id="exampleDataList10" placeholder="New Delhi">
                                                        <datalist id="datalistOptions8">
                                                            <option value="San Francisco">
                                                            <option value="New York">
                                                            <option value="Seattle">
                                                            <option value="Los Angeles">
                                                            <option value="Chicago">
                                                        </datalist>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-12 col-lg-4 col-xl-3 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-0 pe-xl-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Check in Date - Check out Date</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Wed 2 Mar  -  Fri 11 Apr">
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-12 col-lg-6 col-xl-3 ps-0 mb-2 mb-lg-0 mb-xl-0 pe-0 pe-lg-2">
                                                    <div class="form-group border-0">
                                                        <label class="form-label">Guest
                                                        </label>
                                                        <div class="dropdown" id="myDD5">
                                                            <button class="dropdown-toggle form-control" type="button"
                                                                id="travellerInfoOneway31" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="text-truncate">2 adults - 1 childeren - 1
                                                                    room
                                                                </span>
                                                            </button>
                                                            <div class="dropdown-menu"
                                                                aria-labelledby="travellerInfoOneway31">
                                                                <ul class="drop-rest">
                                                                    <li>
                                                                        <div class="d-flex small">Adults
                                                                        </div>
                                                                        <div
                                                                            class="ms-auto input-group plus-minus-input">
                                                                            <div class="input-group-button">
                                                                                <button type="button" class="circle"
                                                                                    data-quantity="minus"
                                                                                    data-field="onewayAdult">
                                                                                    <i class="bi bi-dash"></i>
                                                                                </button>
                                                                            </div>
                                                                            <input class="input-group-field"
                                                                                type="number" name="onewayAdult"
                                                                                value="0">
                                                                            <div class="input-group-button">
                                                                                <button type="button" class="circle"
                                                                                    data-quantity="plus"
                                                                                    data-field="onewayAdult">
                                                                                    <i class="bi bi-plus"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex small">Child
                                                                        </div>
                                                                        <div
                                                                            class="ms-auto input-group plus-minus-input">
                                                                            <div class="input-group-button">
                                                                                <button type="button" class="circle"
                                                                                    data-quantity="minus"
                                                                                    data-field="onewayChild">
                                                                                    <i class="bi bi-dash"></i>
                                                                                </button>
                                                                            </div>
                                                                            <input class="input-group-field"
                                                                                type="number" name="onewayChild"
                                                                                value="0">
                                                                            <div class="input-group-button">
                                                                                <button type="button" class="circle"
                                                                                    data-quantity="plus"
                                                                                    data-field="onewayChild">
                                                                                    <i class="bi bi-plus"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex small">Rooms
                                                                        </div>
                                                                        <div
                                                                            class="ms-auto input-group plus-minus-input">
                                                                            <div class="input-group-button">
                                                                                <button type="button" class="circle"
                                                                                    data-quantity="minus"
                                                                                    data-field="onewayInfant">
                                                                                    <i class="bi bi-dash"></i>
                                                                                </button>
                                                                            </div>
                                                                            <input class="input-group-field"
                                                                                type="number" name="onewayInfant"
                                                                                value="0">
                                                                            <div class="input-group-button">
                                                                                <button type="button" class="circle"
                                                                                    data-quantity="plus"
                                                                                    data-field="onewayInfant">
                                                                                    <i class="bi bi-plus"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-xl-2 px-0">
                                                    <button type="submit" class="btn btn-search"
                                                        onclick="window.location.href='flight-listing-oneway.html';">
                                                        <span class="fw-bold"><i
                                                                class="bi bi-search me-2"></i>Search</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /holidays search -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recommended section -->
    <section class="recommended" id="deals">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="fs-2 fw-bold theme-text-secondary mb-0">Recommended</h4>
                    <p class="mb-0 theme-text-accent-one">International & Domestic fames ac ante ipsum</p>
                </div>
                <div class="col-12 col-lg-6 align-self-center justify-content-end d-flex">
                    <div class="d-flex">
                        <div class="dropdown-center">
                            <button class="btn btn-secondary dropdown-toggle recomended-btn" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Hotels
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Hotels</a></li>
                                <li><a class="dropdown-item" href="#">Flight</a></li>
                                <li><a class="dropdown-item" href="#">Holidays</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- recomended tours card -->
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="card-wrap">
                        <div class="con-img-wrap m-auto">
                            <img src="assets/images/recommended/offers01.png" class="img-fluid mx-auto d-block"
                                alt="product picture">
                            <div class="offer-tag bg-warning">Best Deal</div>
                            <span class="wishlist-tag"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="con-wrap mt-4">
                            <h2 class="fs-6 mt-4 fw-bold text-truncate">The Montcalm At Brewery London City</h2>
                            <p class="mb-2 theme-text-accent-two small">Westminster Borough, London</p>
                            <div class="d-flex bottom mb-2">
                                <div class="rating-cover">
                                    <span class="p-1 small rounded-1 bg-warning theme-text-white">4.8</span>
                                    <span class="me-2 small theme-text-accent-one">Exceptional</span>
                                    <span class="small">3,014 reviews</span>
                                </div>
                            </div>
                            <p class="mb-0 theme-text-accent-one">Starting from US$72</p>
                        </div>
                    </div>
                </div>
                <!-- repetable -->
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="card-wrap">
                        <div class="con-img-wrap m-auto">
                            <img src="assets/images/recommended/offers02.png" class="img-fluid mx-auto d-block"
                                alt="product picture">
                            <div class="offer-tag  bg-info">Best Deal</div>
                            <span class="wishlist-tag"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="con-wrap mt-4">
                            <h2 class="fs-6 mt-4 fw-bold text-truncate">Flying Over Bali</h2>
                            <p class="mb-2 theme-text-accent-two small">Beautiful Lands, Indonasia</p>
                            <div class="d-flex bottom mb-2">
                                <div class="rating-cover">
                                    <span class="p-1 small rounded-1 bg-danger theme-text-white">4.7</span>
                                    <span class="me-2 small theme-text-accent-one">Exceptional</span>
                                    <span class="small">4,114 reviews</span>
                                </div>
                            </div>
                            <p class="mb-0 theme-text-accent-one">Starting from US$89</p>
                        </div>
                    </div>
                </div>
                <!-- repetable -->
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="card-wrap">
                        <div class="con-img-wrap m-auto">
                            <img src="assets/images/recommended/offers03.png" class="img-fluid mx-auto d-block"
                                alt="product picture">
                            <div class="offer-tag bg-success">Best Deal</div>
                            <span class="wishlist-tag"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="con-wrap mt-4">
                            <h2 class="fs-6 mt-4 fw-bold text-truncate">American Landscapes</h2>
                            <p class="mb-2 theme-text-accent-two small">Pestminster Worough, USA</p>
                            <div class="d-flex bottom mb-2">
                                <div class="rating-cover">
                                    <span class="p-1 small rounded-1 bg-success theme-text-white">4.9</span>
                                    <span class="me-2 small theme-text-accent-one">Exceptional</span>
                                    <span class="small">3,894 reviews</span>
                                </div>
                            </div>
                            <p class="mb-0 theme-text-accent-one">Starting from US$88</p>
                        </div>
                    </div>
                </div>
                <!-- repetable -->
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="card-wrap">
                        <div class="con-img-wrap m-auto">
                            <img src="assets/images/recommended/offers04.png" class="img-fluid mx-auto d-block"
                                alt="product picture">
                            <div class="offer-tag">Best Deal</div>
                            <span class="wishlist-tag"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="con-wrap mt-4">
                            <h2 class="fs-6 mt-4 fw-bold text-truncate">The Beauty of Scotland</h2>
                            <p class="mb-2 theme-text-accent-two small">Mestminster Gorough, UK</p>
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
                <!-- repetable -->
            </div>
        </div>
    </section>
    <!-- special offers section -->
    <section class="special-offers" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h4 class="fs-2 fw-bold theme-text-secondary mb-0">Special Offers</h4>
                    <p class="mb-0 theme-text-accent-one">These popular destinations have a lot to offer</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-3 mb-md-0 overflow-hidden hoverShine">
                    <div class="box product01">
                        <div class="content">
                            <p class="fs-1 theme-heading theme-text-white mb-4">Things to do on <br>
                                your trip</p>
                            <div class="custom-button">
                                <a href="javascript:void(0)" class="btn btn-shop small">
                                    Learn More
                                    <i class="bi bi-arrow-up-right fs-6 ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3 mb-md-0 overflow-hidden hoverShine">
                    <div class="box product02">
                        <div class="content">
                            <p class="fs-6 mb-2 theme-text-white">Enjoy Summer Deals</p>
                            <p class="fs-1 theme-heading theme-text-white mb-4">Up to 70% Discount!</p>
                            <div class="custom-button">
                                <a href="javascript:void(0)" class="btn btn-shop small">
                                    View Deal
                                    <i class="bi bi-arrow-up-right fs-6 ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- destinations section -->
    <section class="destinations" id="holidays">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h4 class="fs-2 fw-bold theme-text-secondary mb-0">Most loved Destinations</h4>
                    <p class="mb-0 theme-text-accent-one">International & Domestic fames ac ante ipsum</p>
                </div>
                <!-- destination tab -->
                <div class="col-12">
                    <ul class="nav nav-pills mb-3 destination-pill" id="pills-tab2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-regions-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-regions" type="button" role="tab" aria-controls="pills-regions"
                                aria-selected="true">Regions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-cities-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-cities" type="button" role="tab" aria-controls="pills-cities"
                                aria-selected="false">Cities</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Places of interest</button>
                        </li>
                    </ul>
                    <!-- destination content -->
                    <div class="tab-content mt-5" id="pills-tab2Content">
                        <div class="tab-pane fade show active" id="pills-regions" role="tabpanel"
                            aria-labelledby="pills-regions-tab" tabindex="0">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination01.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Hawai</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination02.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Turkey</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination03.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Iceland</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination04.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Maldives</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination05.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Australia</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination06.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Rome</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination07.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">England</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination08.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">London</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination09.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Zealand</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination10.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Peru</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination11.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">France</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination12.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Paris</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-cities" role="tabpanel" aria-labelledby="pills-cities-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination01.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Hawai</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination02.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Turkey</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination03.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Iceland</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination04.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Maldives</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination05.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Australia</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination06.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Rome</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination07.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">England</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination08.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">London</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination09.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Zealand</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination10.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Peru</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination11.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">France</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination12.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Paris</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination01.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Hawai</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination02.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Turkey</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination03.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Iceland</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination04.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Maldives</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination05.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Australia</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination06.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Rome</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination07.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">England</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination08.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">London</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination09.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Zealand</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination10.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Peru</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination11.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">France</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                                <div class="col-12 col-lg-3">
                                    <div class="theme-bg-white mb-5">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                                <div class="overflow-hidden">
                                                    <figure class="mb-0 img-effect">
                                                        <img src="assets/images/destinations/destination12.jpg"
                                                            class="img-fluid" alt="flight-destination-one"
                                                            title="flight-destination-one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-8 col-xxl-10">
                                                <div
                                                    class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="d-flex fs-6">Paris</span>
                                                        <span
                                                            class="d-flex small fw-normal theme-text-accent-one">12,683
                                                            Hotels</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="#" class="link-btn"><span><i
                                                                    class="bi bi-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- repetable -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wonderful experience -->
    <section class="experience">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap">
                        <div class="row">
                            <div class="col-12 position-relative align-self-center">
                                <h4 class="display-4 theme-text-white mb-0 fw-bold text-center">Wonderful Travel
                                    Experiences with<br>
                                    AFA Tourism</h4>
                                <div class="group custom-button">
                                    <div class="d-flex align-items-center">
                                        <a href="https://www.youtube.com/watch?v=oNxCporOofo"
                                            class="video-icon video-icon2 mr-30 ml-20 video_model">
                                            <i class="bi bi-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="d-flex align-items-center p-4 p-md-0">
                        <i class="bi bi-airplane fs-4 theme-text-primary"></i>
                        <h3 class="fs-2 mb-0 mx-3">4259</h3>
                        <p class="fs-4 mb-0 theme-text-accent-one">Flights</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="d-flex align-items-center p-4 p-md-0">
                        <i class="bi bi-hospital fs-4 theme-text-primary"></i>
                        <h3 class="fs-2 mb-0 mx-3">8289</h3>
                        <p class="fs-4 mb-0 theme-text-accent-one">Hotels</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="d-flex align-items-center p-4 p-md-0">
                        <i class="bi bi-award fs-4 theme-text-primary"></i>
                        <h3 class="fs-2 mb-0 mx-3">9789</h3>
                        <p class="fs-4 mb-0 theme-text-accent-one">Packages</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="d-flex align-items-center p-4 p-md-0">
                        <i class="bi bi-star fs-4 theme-text-primary"></i>
                        <h3 class="fs-2 mb-0 mx-3">9999</h3>
                        <p class="fs-4 mb-0 theme-text-accent-one">Ratings</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular routes section -->
    <section class="popular-routes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                    <h4 class="fs-2 fw-bold theme-text-secondary mb-0">Popular Routes</h4>
                    <p class="mb-0 theme-text-accent-one">International &amp; Domestic fames ac ante ipsum</p>
                </div>
                <div class="col-12 col-lg-6 align-self-center justify-content-end d-flex">
                    <div class="d-flex">
                        <div class="dropdown-center">
                            <button class="btn recomended-btn" type="button">More <i
                                    class="bi bi-arrow-up-right ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <!-- popular routes stip -->
                <div class="col-12 mb-3">
                    <div class="p-3 theme-border-radius border">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-4 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="assets/images/icons/1.png" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="fs-6">14:00</div>
                                                <div class="small theme-text-accent-one">DEL</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="small theme-text-accent-two">4h 05m- Nonstop</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="fs-6">22:00</div>
                                                <div class="small theme-text-accent-one">LHR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 my-5 my-lg-0">
                                <div class="row align-items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="assets/images/icons/2.png" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="fs-6">15:00</div>
                                                <div class="small theme-text-accent-one">ABD</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="small theme-text-accent-two">2h 00m- Nonstop</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="fs-6">17:00</div>
                                                <div class="small theme-text-accent-one">AEH</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="d-flex justify-content-between">
                                    <div class="me-4">
                                        <div class="fs-6">US$934</div>
                                        <div class="small theme-text-accent-one">16 deals</div>
                                    </div>
                                    <a href="#" class="theme-btn-outline p-2">
                                        View Deal <i class="bi bi-arrow-up-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- repetable -->
                <div class="col-12 mb-3">
                    <div class="p-3 theme-border-radius border">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-4 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="assets/images/icons/5.png" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="fs-6">12:00</div>
                                                <div class="small theme-text-accent-one">AAR</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="small theme-text-accent-two">2h 05m- Nonstop</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="fs-6">14:50</div>
                                                <div class="small theme-text-accent-one">LHR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 my-5 my-lg-0">
                                <div class="row align-items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="assets/images/icons/4.png" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="fs-6">14:00</div>
                                                <div class="small theme-text-accent-one">LHR</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="small theme-text-accent-two">3h 00m- Nonstop</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="fs-6">17:00</div>
                                                <div class="small theme-text-accent-one">AAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="d-flex justify-content-between">
                                    <div class="me-4">
                                        <div class="fs-6">US$734</div>
                                        <div class="small theme-text-accent-one">12 deals</div>
                                    </div>
                                    <a href="#" class="theme-btn-outline p-2">
                                        View Deal <i class="bi bi-arrow-up-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- repetable -->
                <div class="col-12 mb-3">
                    <div class="p-3 theme-border-radius border">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-4 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="assets/images/icons/1.png" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="fs-6">20:00</div>
                                                <div class="small theme-text-accent-one">DXB</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="small theme-text-accent-two">2h 15m- Nonstop</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="fs-6">22:15</div>
                                                <div class="small theme-text-accent-one">LHR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 my-5 my-lg-0">
                                <div class="row align-items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="assets/images/icons/3.png" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="fs-6">14:00</div>
                                                <div class="small theme-text-accent-one">LHR</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="small theme-text-accent-two">2h 20m- Nonstop</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="fs-6">18:50</div>
                                                <div class="small theme-text-accent-one">DXB</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="d-flex justify-content-between">
                                    <div class="me-4">
                                        <div class="fs-6">US$534</div>
                                        <div class="small theme-text-accent-one">20 deals</div>
                                    </div>
                                    <a href="#" class="theme-btn-outline p-2">
                                        View Deal <i class="bi bi-arrow-up-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- repetable -->
                <div class="col-12 mb-3">
                    <div class="p-3 theme-border-radius border">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-4 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="assets/images/icons/3.png" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="fs-6">12:00</div>
                                                <div class="small theme-text-accent-one">MUB</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="small theme-text-accent-two">10h 05m- Nonstop</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="fs-6">22:05</div>
                                                <div class="small theme-text-accent-one">LAS</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 my-5 my-lg-0">
                                <div class="row align-items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="assets/images/icons/4.png" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="fs-6">14:00</div>
                                                <div class="small theme-text-accent-one">LAS</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="small theme-text-accent-two">10h 00m- Nonstop</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="fs-6">24:00</div>
                                                <div class="small theme-text-accent-one">MUM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="d-flex justify-content-between">
                                    <div class="me-4">
                                        <div class="fs-6">US$998</div>
                                        <div class="small theme-text-accent-one">20 deals</div>
                                    </div>
                                    <a href="#" class="theme-btn-outline p-2">
                                        View Deal <i class="bi bi-arrow-up-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- repetable -->
            </div>
        </div>
    </section>
    <!-- testimonials section -->
    <section class="testimonials py-5" id="review">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="fs-2 fw-bold theme-text-secondary mb-0">What our customers are saying us?
                    </h4>
                    <p class="mb-0 theme-text-accent-one">These popular destinations have a lot to
                        offer</p>
                </div>
                <div class="col-12 col-lg-6 align-self-center justify-content-end d-flex">
                    <div class="d-flex">
                        <div class="d-flex flex-column text-end mt-3 mt-lg-0">
                            <span class="fs-3 theme-text-accent-one">13m+</span>
                            <span class="font-extra-small theme-text-accent-one">Happy People</span>
                        </div>
                        <div class="d-flex flex-column text-end mt-3 mt-lg-0 ms-5">
                            <span class="fs-3 theme-text-accent-one">4.88</span>
                            <span class="font-extra-small theme-text-accent-one">Overall rating</span>
                            <span class="text-warning"><i class="bi bi-star-fill me-1 extra-text-color"></i>
                                <i class="bi bi-star-fill me-1 extra-text-color"></i>
                                <i class="bi bi-star-fill me-1 extra-text-color"></i>
                                <i class="bi bi-star-fill me-1 extra-text-color"></i>
                                <i class="bi bi-star-fill me-1 extra-text-color"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonials-->
            <div class="mt-5">
                <div class="row">
                    <div class="col-12 col-lg-4 position-relative">
                        <div class="client-con p-5 mt-5 mt-lg-0 theme-box-shadow">
                            <h4 class="mb-3 fs-6 theme-text-primary">Hotel Equatorial Jwelqc</h4>
                            <p class="mb-0 theme-text-accent-two lh-lg small">"Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                quae ab illo inventore sunt explicabo."
                            </p>
                            <div class="d-flex flex-column justify-content-center mt-3 pt-3 border-top">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <figure class="mb-0 avatar">
                                            <img src="assets/images/customer/avatar01.png" class="img-fluid"
                                                alt="client review">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="mt-2 theme-text-accent-one">Client Johna</span>
                                        <p class="mb-0 theme-text-accent-two small">Expert Guide</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- repeatable-->
                    <div class="col-12 col-lg-4 position-relative">
                        <div class="client-con p-5 mt-5 mt-lg-0 theme-box-shadow">
                            <h4 class="mb-3 fs-6 theme-text-primary">Holiday Places ptx</h4>
                            <p class="mb-0 theme-text-accent-two lh-lg small">"Our family was traveling via bullet train
                                between cities in Japan with our luggage - the location for this hotel made that so
                                easy. Agoda price was fantastic."</p>
                            <div class="d-flex flex-column justify-content-center mt-3 pt-3 border-top">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <figure class="mb-0 avatar">
                                            <img src="assets/images/customer/avatar02.png" class="img-fluid"
                                                alt="client review">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="mt-2 theme-text-accent-one">Courtney Henry</span>
                                        <p class="mb-0 theme-text-accent-two small">Water Coolers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- repeatable-->
                    <div class="col-12 col-lg-4 position-relative">
                        <div class="client-con p-5 mt-5 mt-lg-0 theme-box-shadow">
                            <h4 class="mb-3 fs-6 theme-text-primary">Flight Wdaatorial Melaka</h4>
                            <p class="mb-0 theme-text-accent-two lh-lg small">"quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur."</p>
                            <div class="d-flex flex-column justify-content-center mt-3 pt-3 border-top">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <figure class="mb-0 avatar">
                                            <img src="assets/images/customer/avatar03.png" class="img-fluid"
                                                alt="client review">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="mt-2 theme-text-accent-one">Mustafa Ahamad</span>
                                        <p class="mb-0 theme-text-accent-two small">Travel World</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- repeatable-->
                </div>
            </div>
        </div>
    </section>
    <!-- blog/news section -->
    <section class="blog py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fs-2 fw-bold text-center theme-text-secondary mb-0">Get inspiration for your next trip
                    </h2>
                    <p class="mb-0 theme-text-accent-one">Interdum et malesuada fames</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-lg-4 mb-4">
                    <div class="blog-card row g-0">
                        <div class="overflow-hidden position-relative col-12 theme-border-radius">
                            <figure class="mb-0 img-effect">
                                <img src="assets/images/news/post01.png" class="img-fluid" alt="news articles">
                            </figure>
                        </div>
                        <div class="col-12 mt-3">
                            <h2 class="fs-5 fw-bold theme-heading my-3">10 European ski destinations you should visit
                                this winter</h2>
                            <div class="my-3">
                                <a href="javascript:void(0)" class="small fw-bold theme-text-accent-one">
                                    <i class="bi bi-calendar4-week me-2 theme-text-primary"></i>
                                    April 06, 2022
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- repeate -->
                <div class="col-12 col-lg-4 mb-4">
                    <div class="blog-card row g-0">
                        <div class="overflow-hidden position-relative col-12 theme-border-radius">
                            <figure class="mb-0 img-effect">
                                <img src="assets/images/news/post02.png" class="img-fluid" alt="news articles">
                            </figure>
                        </div>
                        <div class="col-12 mt-3">
                            <h2 class="fs-5 fw-bold theme-heading my-3">Where can I go? 5 amazing countries that are
                                open right now</h2>
                            <div class="my-3">
                                <a href="javascript:void(0)" class="small fw-bold theme-text-accent-one">
                                    <i class="bi bi-calendar4-week me-2 theme-text-primary"></i>
                                    April 16, 2022
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- repeate -->
                <div class="col-12 col-lg-4 mb-4">
                    <div class="blog-card row g-0">
                        <div class="overflow-hidden position-relative col-12 theme-border-radius">
                            <figure class="mb-0 img-effect">
                                <img src="assets/images/news/post03.png" class="img-fluid" alt="news articles">
                            </figure>
                        </div>
                        <div class="col-12 mt-3">
                            <h2 class="fs-5 fw-bold theme-heading my-3">Booking travel during Corona: good advice in an
                                uncertain time</h2>
                            <div class="my-3">
                                <a href="javascript:void(0)" class="small fw-bold theme-text-accent-one">
                                    <i class="bi bi-calendar4-week me-2 theme-text-primary"></i>
                                    April 23, 2022
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- repeate -->
            </div>
        </div>
    </section>
    <!-- subscription section -->
    <section class="py-5 theme-bg-primary">
        <div class="container">
            <div class="row justify-between items-center">
                <div class="col-12 col-lg-6">
                    <div class="d-flex  align-items-center">
                        <img src="assets/images/icons/subscribe-icon.png" alt="subscribe" class="img-fluid">
                        <div class="ms-3">
                            <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
                            <p class="text-white">Sign up and we'll send the best deals to you</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1 align-self-center">
                    <div class="input-group subs-form">
                        <input type="text" class="form-control border-0" placeholder="Your Email"
                            aria-label="Your Email" aria-describedby="button-addon2">
                        <button class="btn btn-search" type="button" id="button-addon2">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <h5 class="mb-5 fs-6">Contact Us</h5>
                    <div class="flex-grow-1">
                        Customer Care<br>
                        <span class="fs-5 theme-text-primary">+(1) 123 456 7890</span>
                    </div>
                    <div class="flex-grow-1 mt-3">
                        Need live support?<br>
                        <a href="#" class="fs-5 theme-text-primary">hi@example.com</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-5 mb-lg-0">
                    <div class="d-flex">
                        <h5 class="mb-5 fs-6">Company</h5>
                    </div>
                    <div class="d-flex">
                        <ul class="fl-menu">
                            <li class="nav-item"><a href="javascript:void(0)">About Us</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Careers</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Blog</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Press</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Offers</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Deals</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-5 mb-lg-0">
                    <h5 class="mb-5 fs-6">Support</h5>
                    <div class="mt-5">
                        <ul class="fl-menu">
                            <li class="nav-item"><a href="javascript:void(0)">Contact</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Legal Notice</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Privacy Policy</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Terms and Conditions</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex justify-content-lg-center">
                        <h5 class="mb-5 fs-6">Other Services</h5>
                    </div>
                    <div class="d-flex justify-content-lg-center">
                        <ul class="fl-menu">
                            <li class="nav-item"><a href="javascript:void(0)">Bus</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Activity Finder</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Tour List</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Flight Search</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Cruise Ticket</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Holidays</a></li>
                            <li class="nav-item"><a href="javascript:void(0)">Travel Agents</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-5 mb-lg-0">
                    <h5 class="mb-5 fs-6">Download App</h5>
                    <a href="javascript:void(0)"
                        class="d-inline-flex align-items-center border px-3 py-2 theme-border-radius min-w-150">
                        <div class="flex-shrink-0">
                            <img src="assets/images/icons/play-icon.png" class="img-fluid" alt="Google-Play"
                                title="Google-Play">
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <p class="mb-0 small theme-text-accent-two">Get it on</p>
                            <p class="mb-0 small theme-text-accent-one fw-bold">Google Play</p>
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="d-inline-flex align-items-center border px-3 py-2 theme-border-radius mt-2 min-w-150">
                        <div class="flex-shrink-0">
                            <img src="assets/images/icons/apple.png" class="img-fluid" alt="apple" title="apple">
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <p class="mb-0 small theme-text-accent-two">Get it on</p>
                            <p class="mb-0 small theme-text-accent-one fw-bold">App Store</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-3 mt-lg-5">
                    <p class="pt-2 mb-0 small theme-text-accent-one">&copy; 2022 AFA Tourism All rights reserved.
                    </p>
                </div>
                <div class="col-12 col-lg-6 mt-5">
                    <ul class="footer-link d-flex flex-row flex-wrap justify-content-lg-center align-items-center">
                        <li><a href="javascript:void(0)">Privacy</a></li>
                        <li><a href="javascript:void(0)">Terms</a></li>
                        <li><a href="javascript:void(0)">Site Map</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 mt-5">
                    <div class="d-flex social justify-content-lg-end">
                        <a href="javascript:void(0)" class="fs-4 pe-3"><i class="bi bi-facebook"></i></a>
                        <a href="javascript:void(0)" class="fs-4 pe-3"><i class="bi bi-twitter"></i></a>
                        <a href="javascript:void(0)" class="fs-4 pe-3"><i class="bi bi-linkedin"></i></a>
                        <a href="javascript:void(0)" class="fs-4 pe-3"><i class="bi bi-instagram"></i></a>
                        <a href="javascript:void(0)" class="fs-4"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scroll To Top Start-->
        <a href="javascript:void(0)" class="scrollToTop"><i class="bi bi-chevron-double-up"></i></a>
    </footer>

    <!-- js file -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        // Scroll Top
        $(document).ready(function () {
            var ScrollTop = $(".scrollToTop");
            $(window).on('scroll', function () {
                if ($(this).scrollTop() < 500) {
                    ScrollTop.removeClass("active");
                } else {
                    ScrollTop.addClass("active");
                }
            });
            $('.scrollToTop').on('click', function () {
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
                return false;
            });
        });
    </script>
</body>

</html>