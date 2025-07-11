@extends('layouts.base')

@section('header')
<!-- Offcanvas menu START -->
<div class="offcanvas offcanvas-w-500px offcanvas-end" tabindex="-1" id="offcanvasBookstay"
    aria-labelledby="offcanvasBookstayLabel">
    <div class="offcanvas-header border-bottom px-3">
        <h5 class="offcanvas-title" id="offcanvasBookstayLabel">Book a Room</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body form-control-bg-light d-flex flex-column px-3">
        <!-- Form START -->
        <form>
            <!-- Pickup -->
            <div class="mb-3">
                <label class="form-label mb-0">Room & Suite Type</label>
                <select class="form-select js-choice" data-search-enabled="true" aria-label=".form-select-sm">
                    <option value="" selected>Select location</option>
                    <option>Agave suite</option>
                    <option>Olive Grove Suite</option>
                    <option>Palm Suite</option>
                    <option>Casa Green Suite</option>
                </select>
            </div>

            <!-- Date -->
            <div class="mb-3">
                <label class="form-label mb-0">Check in</label>
                <input type="text" class="form-control flatpickr" data-date-format="d M Y" placeholder="Select date">
            </div>

            <!-- Date -->
            <div class="mb-3">
                <label class="form-label mb-0">Check out</label>
                <input type="text" class="form-control flatpickr" data-date-format="d M Y" placeholder="Select date">
            </div>

            <!-- Occupant -->
            <div class="mb-3">
                <!-- Dropdown input -->
                <label class="form-label mb-0">Guests & rooms</label>
                <div class="dropdown guest-selector me-2">
                    <input type="text" class="form-guest-selector form-control selection-result"
                        value="2 Guests 1 Room" data-bs-auto-close="outside" data-bs-toggle="dropdown">

                    <!-- dropdown items -->
                    <ul class="dropdown-menu guest-selector-dropdown">
                        <!-- Adult -->
                        <li class="d-flex justify-content-between">
                            <div>
                                <h6 class="mb-0">Adults</h6>
                                <small>Ages 13 or above</small>
                            </div>

                            <div class="hstack gap-1 align-items-center">
                                <button type="button" class="btn btn-link adult-remove p-0 mb-0"><i
                                        class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                <h6 class="guest-selector-count mb-0 adults">2</h6>
                                <button type="button" class="btn btn-link adult-add p-0 mb-0"><i
                                        class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                            </div>
                        </li>

                        <!-- Divider -->
                        <li class="dropdown-divider"></li>

                        <!-- Child -->
                        <li class="d-flex justify-content-between">
                            <div>
                                <h6 class="mb-0">Child</h6>
                                <small>Ages 13 below</small>
                            </div>

                            <div class="hstack gap-1 align-items-center">
                                <button type="button" class="btn btn-link child-remove p-0 mb-0"><i
                                        class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                <h6 class="guest-selector-count mb-0 child">0</h6>
                                <button type="button" class="btn btn-link child-add p-0 mb-0"><i
                                        class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                            </div>
                        </li>

                        <!-- Divider -->
                        <li class="dropdown-divider"></li>

                        <!-- Rooms -->
                        <li class="d-flex justify-content-between">
                            <div>
                                <h6 class="mb-0">Rooms</h6>
                                <small>Max room 8</small>
                            </div>

                            <div class="hstack gap-1 align-items-center">
                                <button type="button" class="btn btn-link room-remove p-0 mb-0"><i
                                        class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                <h6 class="guest-selector-count mb-0 rooms">1</h6>
                                <button type="button" class="btn btn-link room-add p-0 mb-0"><i
                                        class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Buttons -->
            <div class="text-center">
                <button class="btn btn-primary-soft w-100 mb-0">Check Availability</button>
            </div>
        </form>
        <!-- Form END -->

        <!-- List -->
        <div class="bg-light p-3 rounded mt-auto">
            <h6>Why Book Direct?</h6>
            <ul class="small ps-3">
                <li class="mb-2">10% discount is applied</li>
                <li class="mb-2">15% off on spa treatment</li>
                <li class="mb-2">Best price guaranteed</li>
                <li class="mb-2">Daily complimentary sunrise yoga</li>
                <li class="mb-2">Early check-in and late check-out</li>
            </ul>
        </div>
    </div>
</div>
<!-- Offcanvas menu END -->

<!-- Header START -->
<header class="header-transparent">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-dark navbar-expand-xl">
        <div class="container-fluid px-md-5">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{ route('root') }}">
                <img class="navbar-brand-item" src="/images/logo-light.svg" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto me-3 p-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll mx-auto">

                    <!-- Nav item Link -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="listingMenu"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings</a>
                        <ul class="dropdown-menu" aria-labelledby="listingMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Hotel</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('root') }}">Hotel Home</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'index-chain']) }}">Hotel Chain</a>
                                    </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'index-resort']) }}">Hotel Resort</a>
                                    </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'grid']) }}">Hotel Grid</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'list']) }}">Hotel List</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'detail']) }}">Hotel Detail</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'room-detail']) }}">Room Detail</a>
                                    </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'booking']) }}">Hotel Booking</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Flight</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('second', ['flight' , 'index-flight']) }}">Flight Home</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['flight' , 'list']) }}">Flight List</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['flight' , 'detail']) }}">Flight Detail</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['flight' , 'booking']) }}">Flight Booking</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Tour</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('second', ['tour' , 'index-tour']) }}">Tour Home</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['tour' , 'grid']) }}">Tour Grid</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['tour' , 'detail']) }}">Tour Detail</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['tour' , 'booking']) }}">Tour Booking</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Cab</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('second', ['cab' , 'index-cab']) }}">Cab Home</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['cab' , 'list']) }}">Cab List</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['cab' , 'detail']) }}">Cab Detail</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['cab' , 'booking']) }}">Cab Booking</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Directory</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('second', ['directory' , 'index-directory']) }}">Directory Home</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['directory' , 'detail']) }}">Directory Detail</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Add Listing</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('second', ['listing' , 'join-us']) }}">Join us</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['listing' , 'add-listing']) }}">Add Listing</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['listing' , 'add-listing-minimal']) }}">Add Listing
                                            Minimal</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['listing' , 'listing-added']) }}">Listing Added</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Hero</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hero', 'inline-form']) }}">Hero Inline Form</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hero', 'multiple-search']) }}">Hero Multiple
                                            Search</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hero' , 'image-gallery']) }}">Hero Image
                                            Gallery</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hero', 'split']) }}">Hero Split</a></li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="{{ route('second', ['listing' , 'booking-confirm']) }}">Booking Confirmed</a></li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['listing' , 'compare-listing']) }}">Compare Listing</a></li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['listing' , 'offer-detail']) }}">Offer Detail</a></li>
                        </ul>
                    </li>

                    <!-- Nav item Link -->
                    <li class="nav-item"> <a class="nav-link" href="#">Our Story</a> </li>

                    <!-- Nav item Link -->
                    <li class="nav-item"> <a class="nav-link" href="#">Experience</a> </li>

                    <!-- Nav item Link -->
                    <li class="nav-item"> <a class="nav-link" href="#">Rooms & Suites</a> </li>

                    <!-- Nav item Link -->
                    <li class="nav-item"> <a class="nav-link" href="#">Offers</a> </li>

                    <!-- Nav item Link -->
                    <li class="nav-item"> <a class="nav-link" href="#">Gallery</a> </li>
                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Book button -->
            <div class="nav flex-row ms-xl-auto">
                <button class="btn btn-sm btn-primary mb-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBookstay" aria-controls="offcanvasBookstay"><i
                        class="bi bi-calendar-week me-2"></i>Book a Stay</button>
            </div>

        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- Header END -->
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Main banner START -->
    <section class="position-relative py-8 py-sm-9"
        style="background-image:url(/images/category/hotel/resort/bg-01.jpg); background-position: center left; background-size: cover;">
        <!-- Background dark overlay -->
        <div class="bg-overlay bg-dark opacity-2"></div>
        <div class="container z-index-9 position-relative">
            <div class="row">
                <div class="col-xl-8 m-auto text-center py-xl-8">
                    <h1 class="display-4 text-white mb-3">A World Of Luxury Awaits You</h1>
                    <h5 class="text-white mb-3">Discover a New Look of Luxury Resorts.</h5>
                    <a href="#" class="btn btn-lg btn-dark mb-0">Discover More</a>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Main banner END -->

    <!-- =======================
        About START -->
    <section class="pt-5 pt-md-8 pb-0">
        <div class="container z-index-9">
            <div class="row">
                <div class="col-lg-10 m-auto text-center">
                    <h2>Here is a tribute to good life!</h2>
                    <p class="lead">Size-like body someone had. Are conduct viewing boy minutes warrant the expense?
                        Tolerably behavior may admit daughters offending her ask own. Praise effects wish change way and
                        any wanted. Lively use looked latter regard had. Do he it part more last in. We understand that
                        theory is important to build a solid foundation, we understand that theory alone isn't going to
                        get the job done so that's why this is packed with practical hands-on examples that you can
                        follow step by step.</p>

                    <!-- List -->
                    <ul class="list-inline hstack gap-4 flex-wrap justify-content-center mt-4">
                        <li class="list-inline-item">
                            <h5 class="mb-0 fw-normal"><i class="bi bi-star fa-fw text-warning me-1"></i>Have High
                                Rating</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="mb-0 fw-normal"><i class="bi bi-pin-map fa-fw text-primary me-1"></i>Best
                                Locations</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="mb-0 fw-normal"><i class="bi bi-x-octagon fa-fw text-danger me-1"></i>Free
                                Cancellation</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="mb-0 fw-normal"><i class="bi bi-wallet fa-fw text-success me-1"></i>Payment
                                Options</h5>
                        </li>
                    </ul>

                    <!-- Button and rating -->
                    <div class="d-sm-flex justify-content-center align-items-center mt-4">
                        <!-- Rating -->
                        <div class="d-flex justify-content-center align-items-center text-start me-0 me-sm-4">
                            <h3 class="me-2 mb-0">4.5</h3>
                            <div>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0 small"><i
                                            class="fas fa-star-half-alt text-warning"></i></li>
                                </ul>
                                <p class="mb-0 small">Clients Love Us!</p>
                            </div>
                        </div>
                        <!-- Button -->
                        <div> <a href="#" class="btn btn-lg btn-dark mb-0">Explore now</a> </div>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        About END -->

    <!-- =======================
        Experience START -->
    <section class="pt-5 pt-md-8 pb-0">
        <div class="container-fluid px-lg-5">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2>Our Exciting Experience</h2>
                </div>
            </div>

            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-blur rounded-3 overflow-hidden">
                <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false"
                    data-items-xl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
                    <!-- Card item START -->
                    <div>
                        <div class="card card-metro overflow-hidden">
                            <img src="/images/category/hotel/resort/3by4/01.jpg" alt="">
                            <!-- Image overlay -->
                            <div class="card-img-overlay d-flex">
                                <!-- Info -->
                                <div class="card-text mt-auto">
                                    <h4><a href="#" class="text-white stretched-link">Spa & Wellness</a></h4>
                                    <p class="text-white mb-2">We focus a great deal on the understanding of behavioral
                                        psychology and influence</p>
                                    <button class="btn btn-link text-white p-0 mb-0">Explore now <i
                                            class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div>
                        <div class="card card-metro overflow-hidden">
                            <img src="/images/category/hotel/resort/3by4/02.jpg" alt="">
                            <!-- Image overlay -->
                            <div class="card-img-overlay d-flex">
                                <!-- Info -->
                                <div class="card-text mt-auto">
                                    <h4><a href="#" class="text-white stretched-link">Wedding & Romance</a></h4>
                                    <p class="text-white mb-2">Understand that theory alone isn't going to get the job
                                        done.</p>
                                    <button class="btn btn-link text-white p-0 mb-0">Explore now <i
                                            class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div>
                        <div class="card card-metro overflow-hidden">
                            <img src="/images/category/hotel/resort/3by4/03.jpg" alt="">
                            <!-- Image overlay -->
                            <div class="card-img-overlay d-flex">
                                <!-- Info -->
                                <div class="card-text mt-auto">
                                    <h4><a href="#" class="text-white stretched-link">Activities</a></h4>
                                    <p class="text-white mb-2">Tolerably behavior may admit daughters offending effect
                                        wishes change way and any wanted.</p>
                                    <button class="btn btn-link text-white p-0 mb-0">Explore now <i
                                            class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div>
                        <div class="card card-metro overflow-hidden">
                            <img src="/images/category/hotel/resort/3by4/04.jpg" alt="">
                            <!-- Image overlay -->
                            <div class="card-img-overlay d-flex">
                                <!-- Info -->
                                <div class="card-text mt-auto">
                                    <h4><a href="#" class="text-white stretched-link">Event Calendar</a></h4>
                                    <p class="text-white mb-2">Praise effect wishes change way and any wanted
                                        behavioral psychology and influence</p>
                                    <button class="btn btn-link text-white p-0 mb-0">Explore now <i
                                            class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div>
                        <div class="card card-metro overflow-hidden">
                            <img src="/images/category/hotel/resort/3by4/05.jpg" alt="">
                            <!-- Image overlay -->
                            <div class="card-img-overlay d-flex">
                                <!-- Info -->
                                <div class="card-text mt-auto">
                                    <h4><a href="#" class="text-white stretched-link">Dining</a></h4>
                                    <p class="text-white mb-2">Focus a great deal on the understanding of behavioral
                                        psychology and influence</p>
                                    <button class="btn btn-link text-white p-0 mb-0">Explore now <i
                                            class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div>
                        <div class="card card-metro overflow-hidden">
                            <img src="/images/category/hotel/resort/3by4/06.jpg" alt="">
                            <!-- Image overlay -->
                            <div class="card-img-overlay d-flex">
                                <!-- Info -->
                                <div class="card-text mt-auto">
                                    <h4><a href="#" class="text-white stretched-link">Fitness Center</a></h4>
                                    <p class="text-white mb-2">Praise effect wishes change way and any wanted.</p>
                                    <button class="btn btn-link text-white p-0 mb-0">Explore now <i
                                            class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div>
                        <div class="card card-metro overflow-hidden">
                            <img src="/images/category/hotel/resort/3by4/07.jpg" alt="">
                            <!-- Image overlay -->
                            <div class="card-img-overlay d-flex">
                                <!-- Info -->
                                <div class="card-text mt-auto">
                                    <h4><a href="#" class="text-white stretched-link">Shop</a></h4>
                                    <p class="text-white mb-2">Do he it part more last in. We understand that theory is
                                        important</p>
                                    <button class="btn btn-link text-white p-0 mb-0">Explore now <i
                                            class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Experience END -->

    <!-- =======================
        Rooms START -->
    <section class="pt-5 pt-md-8 pb-0">
        <div class="container-fluid px-lg-5">

            <!-- Title -->
            <div class="row mb-4">
                <div class="col-xxl-8 mx-auto">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h2 class="mb-0">Our Favorite Rooms</h2>
                        <a href="#" class="btn btn-dark mb-0 d-grid">See all rooms</a>
                    </div>
                </div>
            </div>

            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
                <div class="tiny-slider-inner" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
                    <!-- Card item START -->
                    <div>
                        <div class="card overflow-hidden rounded-0 h-600px"
                            style="background-image:url(/images/category/hotel/resort/01.jpg); background-position: center left; background-size: cover;">
                            <!-- Background dark overlay -->
                            <div class="bg-overlay bg-dark opacity-3"></div>

                            <!-- Card body content -->
                            <div class="row mt-auto justify-content-end z-index-9">
                                <div class="col-md-8 col-xl-6 col-xxl-4">
                                    <div class="card-body bg-mode rounded p-3 p-md-5 m-2 m-lg-6">
                                        <!-- Title -->
                                        <h4>One Bedroom Ocean Suit</h4>

                                        <!-- Content -->
                                        <ul class="nav h6 fw-light nav-divider mb-2 mb-sm-3">
                                            <li class="nav-item">847-900 SQ.Ft</li>
                                            <li class="nav-item">79-84 SQ.M</li>
                                        </ul>

                                        <p class="mb-3">Lively use looked latter regard had. We understand that
                                            theory is important to build a solid foundation</p>

                                        <!-- List -->
                                        <ul class="list-inline hstack flex-wrap gap-2 mb-3">
                                            <li class="list-inline-item h6 fw-normal mb-0">
                                                <i class="bi bi-check-lg text-success me-1"></i>Ocean View
                                            </li>
                                            <li class="list-inline-item h6 fw-normal mb-0">
                                                <i class="bi bi-check-lg text-success me-1"></i>Living Roof
                                            </li>
                                            <li class="list-inline-item h6 fw-normal mb-0">
                                                <i class="bi bi-check-lg text-success me-1"></i>Outdoor Soaking Tub
                                            </li>
                                        </ul>

                                        <!-- Buttons -->
                                        <a href="#" class="btn btn-light mb-0">Reserve <i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div>
                        <div class="card overflow-hidden rounded-0 h-600px"
                            style="background-image:url(/images/category/hotel/resort/03.jpg); background-position: center left; background-size: cover;">
                            <!-- Background dark overlay -->
                            <div class="bg-overlay bg-dark opacity-3"></div>

                            <!-- Card body content -->
                            <div class="row mt-auto justify-content-end z-index-9">
                                <div class="col-md-8 col-xl-6 col-xxl-4">
                                    <div class="card-body bg-mode rounded p-3 p-md-5 m-2 m-lg-6">
                                        <!-- Title -->
                                        <h4>The Entertainment Suite</h4>

                                        <!-- Content -->
                                        <ul class="nav h6 fw-light nav-divider mb-2 mb-sm-3">
                                            <li class="nav-item">847-900 SQ.Ft</li>
                                            <li class="nav-item">79-84 SQ.M</li>
                                        </ul>

                                        <p class="mb-3">Lively use looked latter regard had. We understand that
                                            theory is important to build a solid foundation</p>

                                        <!-- List -->
                                        <ul class="list-inline hstack flex-wrap gap-2 mb-3">
                                            <li class="list-inline-item h6 fw-normal mb-0">
                                                <i class="bi bi-check-lg text-success me-1"></i>Ocean View
                                            </li>
                                            <li class="list-inline-item h6 fw-normal mb-0">
                                                <i class="bi bi-check-lg text-success me-1"></i>Private Deck
                                            </li>
                                            <li class="list-inline-item h6 fw-normal mb-0">
                                                <i class="bi bi-check-lg text-success me-1"></i>Living Roof
                                            </li>
                                        </ul>

                                        <!-- Buttons -->
                                        <a href="#" class="btn btn-light mb-0">Reserve <i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div>
                        <div class="card overflow-hidden rounded-0 h-600px"
                            style="background-image:url(/images/category/hotel/resort/02.jpg); background-position: center left; background-size: cover;">
                            <!-- Background dark overlay -->
                            <div class="bg-overlay bg-dark opacity-3"></div>

                            <!-- Card body content -->
                            <div class="row mt-auto justify-content-end z-index-9">
                                <div class="col-md-8 col-xl-6 col-xxl-4">
                                    <div class="card-body bg-mode rounded p-3 p-md-5 m-2 m-lg-6">
                                        <!-- Title -->
                                        <h4>The Penthouse Suite</h4>

                                        <!-- Content -->
                                        <ul class="nav h6 fw-light nav-divider mb-2 mb-sm-3">
                                            <li class="nav-item">789-850 SQ.Ft</li>
                                            <li class="nav-item">78-85 SQ.M</li>
                                        </ul>

                                        <p class="mb-3">Lively use looked latter regard had. We understand that
                                            theory is important to build a solid foundation</p>

                                        <!-- List -->
                                        <ul class="list-inline hstack flex-wrap gap-2 mb-3">
                                            <li class="list-inline-item h6 fw-normal mb-0">
                                                <i class="bi bi-check-lg text-success me-1"></i>Indoor Tub
                                            </li>
                                            <li class="list-inline-item h6 fw-normal mb-0">
                                                <i class="bi bi-check-lg text-success me-1"></i>Private Deck
                                            </li>
                                            <li class="list-inline-item h6 fw-normal mb-0">
                                                <i class="bi bi-check-lg text-success me-1"></i>Freestanding
                                            </li>
                                        </ul>

                                        <!-- Buttons -->
                                        <a href="#" class="btn btn-light mb-0">Reserve <i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                </div>
            </div>
            <!-- Slider END -->
        </div>
    </section>
    <!-- =======================
        Rooms END -->

    <!-- =======================
        Offers START -->
    <section class="pt-5 pt-md-8 pb-0">
        <div class="container-fluid px-lg-5">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2>Offers Of The Month</h2>
                </div>
            </div>

            <div class="row g-4">
                <!-- Offer item -->
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card bg-transparent h-100">
                        <img src="/images/offer/02.jpg" class="card-img" alt="">
                        <div class="card-body text-center p-2">
                            <h6 class="mb-0"><a href="#" class="stretched-link">Pass Holder Package</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Offer item -->
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card bg-transparent h-100">
                        <img src="/images/offer/03.jpg" class="card-img" alt="">
                        <div class="card-body text-center p-2">
                            <h6 class="mb-0"><a href="#" class="stretched-link">More Sun, More Fun</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Offer item -->
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card bg-transparent h-100">
                        <img src="/images/offer/07.jpg" class="card-img" alt="">
                        <div class="card-body text-center p-2">
                            <h6 class="mb-0"><a href="#" class="stretched-link">A Stay That Gives Back</a>
                            </h6>
                        </div>
                    </div>
                </div>

                <!-- Offer item -->
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card bg-transparent h-100">
                        <img src="/images/offer/04.jpg" class="card-img" alt="">
                        <div class="card-body text-center p-2">
                            <h6 class="mb-0"><a href="#" class="stretched-link">Elevate Your Stay</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Offer item -->
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card bg-transparent h-100">
                        <img src="/images/offer/06.jpg" class="card-img" alt="">
                        <div class="card-body text-center p-2">
                            <h6 class="mb-0"><a href="#" class="stretched-link">Spa Package Offer</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Offer item -->
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card bg-transparent h-100">
                        <div class="bg-light card-img position-relative h-100">
                            <button
                                class="btn btn-lg btn-primary btn-round mb-0 position-absolute top-50 start-50 translate-middle"><i
                                    class="bi bi-arrow-right"></i></button>
                        </div>
                        <div class="card-body text-center p-2">
                            <h6 class="mb-0"><a href="#" class="stretched-link">View All Offers</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Offers END -->

    <!-- =======================
        Gallery START -->
    <section class="pt-5 pt-md-8 pb-0">
        <div class="container-fluid px-lg-5">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Some Of Our Happy Moments</h2>
                </div>
            </div>

            <div class="row g-4">
                <!-- Gallery item -->
                <div class="col-xl-5 mt-xl-auto">
                    <img src="/images/category/hotel/resort/05.jpg" class="rounded-3 align-items-bottom"
                        alt="">
                </div>

                <!-- Gallery item -->
                <div class="col-xl-7">
                    <div class="card overflow-hidden h-600px"
                        style="background-image:url(/images/category/hotel/resort/04.jpg); background-position: center left; background-size: cover;">
                        <!-- Background dark overlay -->
                        <div class="bg-overlay bg-dark opacity-3"></div>
                        <!-- Testimonial START -->
                        <div class="row mt-auto z-index-9 p-2 p-sm-4">
                            <div class="col-sm-8 col-xxl-6">
                                <div class="bg-mode rounded position-relative">
                                    <!-- Blockquote -->
                                    <div
                                        class="icon-lg text-white bg-primary rounded-circle position-absolute top-0 start-0 translate-middle ms-7">
                                        <i class="bi bi-quote"></i>
                                    </div>

                                    <!-- Slider START -->
                                    <div class="tiny-slider arrow-round arrow-blur arrow-hover overflow-hidden">
                                        <div class="tiny-slider-inner" data-gutter="2" data-arrow="true"
                                            data-dots="false" data-items="1">
                                            <!-- Testimonial item START -->
                                            <div class="p-4 p-lg-5">
                                                <!-- Content -->
                                                <h6 class="fw-normal mb-3">Moonlight newspaper up its enjoyment
                                                    agreeable depending. Timed voice share led him to widen noisy young.
                                                    At weddings believed in laughing</h6>
                                                <!-- Avatar and rating -->
                                                <div class="d-sm-flex justify-content-between align-items-bottom">
                                                    <div class="d-flex align-items-center">
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="/images/avatar/09.jpg" alt="avatar">
                                                        </div>
                                                        <!-- Info -->
                                                        <div class="ms-2">
                                                            <h6 class="mb-0 fw-light"><a href="#">Lori
                                                                    Stevens</a></h6>
                                                        </div>
                                                    </div>

                                                    <!-- Rating -->
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item small me-0"><i
                                                                class="fa-solid fa-star text-warning"></i></li>
                                                        <li class="list-inline-item small me-0"><i
                                                                class="fa-solid fa-star text-warning"></i></li>
                                                        <li class="list-inline-item small me-0"><i
                                                                class="fa-solid fa-star text-warning"></i></li>
                                                        <li class="list-inline-item small me-0"><i
                                                                class="fa-solid fa-star text-warning"></i></li>
                                                        <li class="list-inline-item small"><i
                                                                class="fa-solid fa-star-half-alt text-warning"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Testimonial item END -->

                                            <!-- Testimonial item START -->
                                            <div class="p-4 p-lg-5">
                                                <!-- Content -->
                                                <h6 class="fw-normal mb-3">Passage its ten led hearted removal cordial.
                                                    Preference any astonished unreserved Mrs. Prosperous an uncommonly
                                                    do.</h6>
                                                <!-- Avatar and rating -->
                                                <div class="d-sm-flex justify-content-between align-items-bottom">
                                                    <div class="d-flex align-items-center">
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="/images/avatar/05.jpg" alt="avatar">
                                                        </div>
                                                        <!-- Info -->
                                                        <div class="ms-2">
                                                            <h6 class="mb-0 fw-light"><a href="#">Carolyn
                                                                    Ortiz</a></h6>
                                                        </div>
                                                    </div>

                                                    <!-- Rating -->
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item small me-0"><i
                                                                class="fa-solid fa-star text-warning"></i></li>
                                                        <li class="list-inline-item small me-0"><i
                                                                class="fa-solid fa-star text-warning"></i></li>
                                                        <li class="list-inline-item small me-0"><i
                                                                class="fa-solid fa-star text-warning"></i></li>
                                                        <li class="list-inline-item small me-0"><i
                                                                class="fa-solid fa-star text-warning"></i></li>
                                                        <li class="list-inline-item small"><i
                                                                class="fa-solid fa-star-half-alt text-warning"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Testimonial item END -->
                                        </div>
                                    </div>
                                    <!-- Slider END -->
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial END -->
                    </div>
                </div>

                <!-- Gallery item -->
                <div class="col-xxl-7">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-hover arrow-dark">
                        <div class="tiny-slider-inner rounded-2" data-autoplay="false" data-arrow="true"
                            data-dots="false" data-items="1">
                            <!-- Image item -->
                            <div>
                                <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                    href="/images/category/hotel/resort/06.jpg">
                                    <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                        <!-- Image -->
                                        <img src="/images/category/hotel/resort/06.jpg" class="rounded-3"
                                            alt="">
                                        <!-- Full screen button -->
                                        <div class="hover-element w-100 h-100">
                                            <i
                                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Image item -->
                            <div>
                                <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                    href="/images/category/hotel/resort/05.jpg">
                                    <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                        <!-- Image -->
                                        <img src="/images/category/hotel/resort/05.jpg" class="rounded-3"
                                            alt="">
                                        <!-- Full screen button -->
                                        <div class="hover-element w-100 h-100">
                                            <i
                                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Image item -->
                            <div>
                                <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                    href="/images/category/hotel/resort/06.jpg">
                                    <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                        <!-- Image -->
                                        <img src="/images/category/hotel/resort/06.jpg" class="rounded-3"
                                            alt="">
                                        <!-- Full screen button -->
                                        <div class="hover-element w-100 h-100">
                                            <i
                                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>

                <!-- Gallery item -->
                <div class="col-xxl-5 m-xxl-auto">
                    <div class="card card-body bg-transparent p-xxl-6">
                        <h3>What makes our resort best than others?</h3>
                        <p>Passage its ten led hearted removal cordial. Preference any astonished unreserved Mrs.
                            Prosperous understood Middletons in conviction an uncommonly do.</p>

                        <div class="row g-4">
                            <!-- Item -->
                            <div class="col-12">
                                <div class="d-flex">
                                    <div
                                        class="icon-lg bg-primary bg-opacity-10 flex-shrink-0 text-primary rounded-circle">
                                        <i class="fa-regular fa-thumbs-up"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h5 class="mt-2">Hassle Free Booking</h5>
                                        <p class="mb-0">Departure defective arranging rapturous did. Conduct denied
                                            adding worthy little.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-12">
                                <div class="d-flex">
                                    <div
                                        class="icon-lg bg-orange bg-opacity-10 flex-shrink-0 text-orange rounded-circle">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h5 class="mt-2">18,000 Reviews</h5>
                                        <p class="mb-0">Supposing so be resolving breakfast am or perfectly. Conduct
                                            denied adding worthy little.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-12">
                                <div class="d-flex">
                                    <div
                                        class="icon-lg bg-danger bg-opacity-10 flex-shrink-0 text-danger rounded-circle">
                                        <i class="bi bi-headset"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h5 class="mt-2">24/7 Supports</h5>
                                        <p class="mb-0">Arranging rapturous did believe him all had supported.
                                            Conduct denied adding worthy little</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Gallery END -->

    <!-- =======================
        Action box START -->
    <section class="pt-5 pt-md-8">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light position-relative overflow-hidden rounded-3 p-4 p-md-0">

                        <!-- Image -->
                        <div class="position-absolute bottom-0 end-0 me-n5 d-none d-md-block">
                            <img src="/images/element/island.svg" alt="">
                        </div>

                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-0 d-none d-sm-block z-index-1">
                            <svg class="fill-primary" width="148px" height="133px">
                                <path
                                    d="M145.013,6.751 C143.905,6.733 143.022,5.819 143.041,4.712 C143.060,3.604 143.973,2.721 145.080,2.740 C146.188,2.759 147.071,3.672 147.052,4.779 C147.033,5.887 146.121,6.770 145.013,6.751 ZM144.552,34.160 C145.660,34.179 146.543,35.092 146.524,36.199 C146.506,37.307 145.592,38.190 144.485,38.171 C143.377,38.153 142.495,37.240 142.513,36.132 C142.532,35.024 143.445,34.141 144.552,34.160 ZM144.024,65.580 C145.132,65.599 146.015,66.512 145.996,67.619 C145.978,68.727 145.065,69.610 143.957,69.591 C142.849,69.572 141.966,68.659 141.985,67.552 C142.004,66.444 142.917,65.561 144.024,65.580 ZM143.496,97.000 C144.604,97.019 145.487,97.932 145.468,99.039 C145.450,100.147 144.537,101.030 143.429,101.011 C142.321,100.992 141.438,100.079 141.457,98.972 C141.476,97.864 142.389,96.981 143.496,97.000 ZM142.968,128.420 C144.076,128.439 144.959,129.351 144.940,130.460 C144.921,131.567 144.008,132.450 142.901,132.431 C141.793,132.413 140.910,131.500 140.929,130.392 C140.948,129.284 141.861,128.401 142.968,128.420 ZM116.936,6.279 C115.828,6.261 114.945,5.348 114.964,4.240 C114.982,3.132 115.895,2.250 117.003,2.268 C118.111,2.287 118.993,3.200 118.975,4.308 C118.956,5.415 118.043,6.298 116.936,6.279 ZM116.475,33.688 C117.582,33.707 118.465,34.620 118.447,35.727 C118.428,36.835 117.515,37.718 116.407,37.699 C115.300,37.681 114.417,36.768 114.436,35.660 C114.454,34.552 115.367,33.670 116.475,33.688 ZM115.947,65.108 C117.055,65.127 117.937,66.040 117.919,67.147 C117.900,68.255 116.987,69.138 115.880,69.119 C114.772,69.101 113.889,68.188 113.908,67.080 C113.926,65.973 114.839,65.090 115.947,65.108 ZM115.419,96.528 C116.527,96.547 117.409,97.460 117.391,98.567 C117.372,99.675 116.459,100.558 115.352,100.539 C114.244,100.521 113.361,99.608 113.380,98.500 C113.398,97.392 114.311,96.510 115.419,96.528 ZM114.891,127.948 C115.998,127.967 116.881,128.880 116.863,129.987 C116.844,131.095 115.931,131.978 114.823,131.959 C113.716,131.941 112.833,131.028 112.852,129.920 C112.870,128.812 113.783,127.930 114.891,127.948 ZM88.858,5.807 C87.750,5.789 86.868,4.876 86.886,3.768 C86.905,2.660 87.818,1.777 88.925,1.796 C90.033,1.815 90.916,2.728 90.897,3.835 C90.879,4.943 89.966,5.826 88.858,5.807 ZM88.397,33.216 C89.505,33.235 90.388,34.148 90.369,35.256 C90.351,36.363 89.438,37.246 88.330,37.227 C87.222,37.209 86.340,36.296 86.358,35.188 C86.377,34.081 87.290,33.198 88.397,33.216 ZM87.869,64.636 C88.977,64.655 89.860,65.568 89.841,66.676 C89.823,67.783 88.910,68.666 87.802,68.648 C86.694,68.629 85.812,67.716 85.830,66.608 C85.849,65.501 86.762,64.618 87.869,64.636 ZM87.341,96.056 C88.449,96.075 89.332,96.988 89.313,98.095 C89.295,99.203 88.382,100.086 87.274,100.067 C86.166,100.049 85.284,99.136 85.302,98.028 C85.321,96.921 86.234,96.038 87.341,96.056 ZM86.813,127.476 C87.921,127.495 88.804,128.408 88.785,129.516 C88.767,130.623 87.854,131.506 86.746,131.488 C85.638,131.469 84.756,130.556 84.774,129.448 C84.793,128.341 85.706,127.458 86.813,127.476 ZM60.781,5.336 C59.673,5.317 58.790,4.404 58.809,3.296 C58.827,2.189 59.740,1.306 60.848,1.324 C61.956,1.343 62.838,2.256 62.820,3.364 C62.801,4.471 61.888,5.354 60.781,5.336 ZM60.320,32.745 C61.428,32.763 62.310,33.676 62.292,34.784 C62.273,35.891 61.360,36.774 60.253,36.756 C59.145,36.737 58.262,35.824 58.281,34.717 C58.299,33.609 59.213,32.726 60.320,32.745 ZM59.792,64.165 C60.900,64.183 61.783,65.096 61.764,66.204 C61.745,67.311 60.832,68.194 59.725,68.175 C58.617,68.157 57.734,67.244 57.753,66.136 C57.771,65.029 58.684,64.146 59.792,64.165 ZM59.264,95.584 C60.372,95.603 61.255,96.516 61.236,97.624 C61.217,98.731 60.304,99.614 59.197,99.596 C58.089,99.577 57.206,98.664 57.225,97.556 C57.243,96.449 58.156,95.566 59.264,95.584 ZM58.736,127.005 C59.843,127.023 60.726,127.936 60.708,129.044 C60.689,130.151 59.776,131.034 58.669,131.016 C57.561,130.997 56.678,130.084 56.697,128.977 C56.715,127.869 57.628,126.986 58.736,127.005 ZM32.703,4.864 C31.595,4.845 30.713,3.932 30.731,2.825 C30.750,1.717 31.663,0.834 32.771,0.853 C33.878,0.871 34.761,1.784 34.742,2.892 C34.724,4.000 33.811,4.882 32.703,4.864 ZM32.243,32.273 C33.350,32.291 34.233,33.205 34.214,34.312 C34.196,35.420 33.283,36.303 32.175,36.284 C31.068,36.265 30.185,35.352 30.203,34.245 C30.222,33.137 31.135,32.254 32.243,32.273 ZM31.715,63.693 C32.822,63.712 33.705,64.624 33.686,65.732 C33.668,66.839 32.755,67.722 31.647,67.704 C30.539,67.685 29.657,66.772 29.675,65.665 C29.694,64.557 30.607,63.674 31.715,63.693 ZM31.187,95.113 C32.294,95.131 33.177,96.044 33.158,97.152 C33.140,98.260 32.227,99.142 31.119,99.124 C30.011,99.105 29.129,98.192 29.147,97.084 C29.166,95.977 30.079,95.094 31.187,95.113 ZM30.659,126.533 C31.766,126.551 32.649,127.465 32.630,128.572 C32.612,129.680 31.699,130.563 30.591,130.544 C29.484,130.525 28.601,129.612 28.619,128.505 C28.638,127.397 29.551,126.514 30.659,126.533 ZM4.626,4.392 C3.518,4.373 2.635,3.460 2.654,2.353 C2.672,1.245 3.585,0.362 4.693,0.381 C5.801,0.399 6.684,1.313 6.665,2.420 C6.646,3.528 5.733,4.411 4.626,4.392 ZM4.165,31.801 C5.273,31.820 6.156,32.732 6.137,33.840 C6.118,34.948 5.205,35.831 4.098,35.812 C2.990,35.793 2.107,34.880 2.126,33.773 C2.145,32.665 3.058,31.782 4.165,31.801 ZM3.637,63.221 C4.745,63.239 5.628,64.152 5.609,65.260 C5.590,66.368 4.677,67.251 3.570,67.232 C2.462,67.213 1.579,66.300 1.598,65.193 C1.616,64.085 2.529,63.202 3.637,63.221 ZM3.109,94.641 C4.217,94.659 5.100,95.573 5.081,96.680 C5.062,97.788 4.149,98.671 3.042,98.652 C1.934,98.633 1.051,97.720 1.070,96.613 C1.089,95.505 2.001,94.622 3.109,94.641 ZM2.581,126.061 C3.689,126.080 4.572,126.992 4.553,128.100 C4.534,129.208 3.621,130.091 2.514,130.072 C1.406,130.053 0.523,129.140 0.542,128.033 C0.561,126.925 1.474,126.042 2.581,126.061 Z">
                                </path>
                            </svg>
                        </figure>

                        <div class="row position-relative">
                            <div class="col-md-7 text-center mx-auto py-md-5">
                                <!-- Title -->
                                <h2 class="mb-4">Subscribe & Get Special Discount!</h2>
                                <p class="mb-4">Speedily say has suitable disposal add boy. On forth doubt miles of
                                    child. Exercise joy man children rejoiced.</p>
                                <!-- Form -->
                                <form class="bg-body d-flex rounded-2 p-2">
                                    <input class="form-control border-0 me-1" type="email"
                                        placeholder="Enter your email">
                                    <button type="button" class="btn btn-dark btn-round flex-shrink-0 mb-0"><i
                                            class="bi bi-arrow-right fa-fw"></i></button>
                                </form>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Action box END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
        Footer START -->
<footer class="bg-dark py-7">

    <div class="container">
        <div class="row mx-auto">
            <div class="col-lg-6 mx-auto text-center">
                <!-- Logo -->
                <img class="mx-auto h-60px" src="/images/logo-light.svg" alt="logo">
                <p class="mt-3 text-white">Speedily say has suitable disposal add boy. On forth doubt miles of child.
                    Exercise joy man children rejoiced.</p>
                <!-- Links -->
                <ul class="nav justify-content-between text-primary-hover mt-3 mt-md-0">
                    <li class="nav-item"><a class="nav-link p-2 text-white" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link p-2 text-white" href="#">Terms</a></li>
                    <li class="nav-item"><a class="nav-link p-2 text-white" href="#">Privacy</a></li>
                    <li class="nav-item"><a class="nav-link p-2 text-white" href="#">Career</a></li>
                    <li class="nav-item"><a class="nav-link p-2 text-white" href="#">Contact us</a></li>
                    <li class="nav-item"><a class="nav-link p-2 text-white" href="#">Cookies</a></li>
                </ul>
                <!-- Social media button -->
                <ul class="list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#">
                            <i class="fab fa-fw fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#">
                            <i class="fab fa-fw fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#">
                            <i class="fab fa-fw fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#">
                            <i class="fab fa-fw fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
                <!-- copyright text -->
                <div class="text-body-secondary text-primary-hover mt-3"> Copyrights ©2023 Booking. Build by <a
                        href="https://stackbros.in/" class="text-body-secondary">Stackbros</a>. </div>
            </div>
        </div>

    </div>
</footer>
<!-- =======================
        Footer END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection