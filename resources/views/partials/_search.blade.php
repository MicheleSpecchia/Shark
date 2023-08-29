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
                <ul class="nav nav-tabs d-flex justify-content-center border-0 cust-tab" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="flight-tab" data-bs-toggle="tab" data-bs-target="#flight-tab-pane" type="button" role="tab" aria-controls="flight-tab-pane" aria-selected="true">Ricerca Box Auto</button>
                    </li>
                </ul>
                <!-- product main tab content -->
                <div class="tab-content mt-3" id="myTabContent">
                    <!-- flight search tab -->
                    <div class="tab-pane fade show active" id="flight-tab-pane" role="tabpanel" aria-labelledby="flight-tab" tabindex="0">

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-oneway" role="tabpanel" aria-labelledby="pills-oneway-tab" tabindex="0">
                                <!-- one way search -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="search-pan row mx-0 theme-border-radius">
                                            <div class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                                                <div class="form-group">
                                                    <label for="exampleDataList" class="form-label">Depart
                                                        From</label>
                                                    <input class="form-control" list="datalistOptions1" id="exampleDataList" placeholder="New Delhi">
                                                    <datalist id="datalistOptions1">
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
                                                    <label for="exampleDataList2" class="form-label">Arrival
                                                        To</label>
                                                    <input class="form-control" list="datalistOptions2" id="exampleDataList2" placeholder="London">
                                                    <datalist id="datalistOptions2">
                                                        <option value="San Francisco">
                                                        <option value="New York">
                                                        <option value="Seattle">
                                                        <option value="Los Angeles">
                                                        <option value="Chicago">
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-xl-3 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-0 pe-xl-2">
                                                <div class="form-group">
                                                    <label class="form-label">Departure Date</label>
                                                    <input type="text" class="form-control" placeholder="Wed 2 Mar">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xl-3 ps-0 mb-2 mb-lg-0 mb-xl-0 pe-0 pe-lg-2">
                                                <div class="form-group border-0">
                                                    <label class="form-label">Traveller's
                                                    </label>
                                                    <div class="dropdown" id="myDD1">
                                                        <button class="dropdown-toggle form-control" type="button" id="travellerInfoOneway11" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <span class="text-truncate">2 adults - 1
                                                                childeren - 1 Infants
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="travellerInfoOneway11">
                                                            <ul class="drop-rest">
                                                                <li>
                                                                    <div class="d-flex small">Adults
                                                                    </div>
                                                                    <div class="ms-auto input-group plus-minus-input">
                                                                        <div class="input-group-button">
                                                                            <button type="button" class="circle" data-quantity="minus" data-field="onewayAdult">
                                                                                <i class="bi bi-dash"></i>
                                                                            </button>
                                                                        </div>
                                                                        <input class="input-group-field" type="number" name="onewayAdult" value="0">
                                                                        <div class="input-group-button">
                                                                            <button type="button" class="circle" data-quantity="plus" data-field="onewayAdult">
                                                                                <i class="bi bi-plus"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex small">Child
                                                                    </div>
                                                                    <div class="ms-auto input-group plus-minus-input">
                                                                        <div class="input-group-button">
                                                                            <button type="button" class="circle" data-quantity="minus" data-field="onewayChild">
                                                                                <i class="bi bi-dash"></i>
                                                                            </button>
                                                                        </div>
                                                                        <input class="input-group-field" type="number" name="onewayChild" value="0">
                                                                        <div class="input-group-button">
                                                                            <button type="button" class="circle" data-quantity="plus" data-field="onewayChild">
                                                                                <i class="bi bi-plus"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex small">Infants
                                                                    </div>
                                                                    <div class="ms-auto input-group plus-minus-input">
                                                                        <div class="input-group-button">
                                                                            <button type="button" class="circle" data-quantity="minus" data-field="onewayInfant">
                                                                                <i class="bi bi-dash"></i>
                                                                            </button>
                                                                        </div>
                                                                        <input class="input-group-field" type="number" name="onewayInfant" value="0">
                                                                        <div class="input-group-button">
                                                                            <button type="button" class="circle" data-quantity="plus" data-field="onewayInfant">
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
                                                <button type="submit" class="btn btn-search" onclick="window.location.href='#';">
                                                    <span class="fw-bold"><i class="bi bi-search me-2"></i>Search</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /oneway search -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>