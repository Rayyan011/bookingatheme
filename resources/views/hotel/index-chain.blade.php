@extends('layouts.base')

@section('header')
<!-- Header START -->
<header class="navbar-light py-3">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-lg">
        <div class="container d-block">
            <div class="row align-items-center">
                <div class="col-4">
                    <!-- Logo START -->
                    <a class="navbar-brand" href="{{ route('root') }}">
                        <img class="light-mode-item navbar-brand-item d-inline h-40px h-md-60px"
                            src="/images/logo-hotel.svg" alt="logo">
                        <img class="dark-mode-item navbar-brand-item d-inline h-40px h-md-60px"
                            src="/images/logo-hotel-light.svg" alt="logo">
                    </a>
                    <!-- Logo END -->
                </div>

                <div class="col-8">
                    <!-- Navbar top Right-->
                    <div class="align-items-center justify-content-end d-none d-lg-flex">
                        <ul class="nav border-bottom">
                            <li class="dropdown nav-item">
                                <a class="nav-link small pb-2" href="#" role="button" id="languageDropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="bi bi-globe fa-fw me-2"></i>Language</a>
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end min-w-auto"
                                    aria-labelledby="languageDropdown">
                                    <li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                src="/images/flags/uk.svg" alt="">English</a> </li>
                                    <li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                src="/images/flags/sp.svg" alt="">Español</a> </li>
                                    <li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                src="/images/flags/fr.svg" alt="">Français</a> </li>
                                    <li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                src="/images/flags/gr.svg" alt="">Deutsch</a> </li>
                                </ul>
                            </li>
                            <li class="nav-item"> <a href="{{ route('second', ['account' , 'bookings']) }}" class="nav-link small pb-2"><i
                                        class="bi bi-briefcase me-2"></i>My Trip</a> </li>
                            <li class="nav-item"> <a href="{{ route('second', ['help' , 'center']) }}" class="nav-link small pb-2"><i
                                        class="bi bi-info-circle me-2"></i>Help</a> </li>
                            <li class="nav-item"> <a href="{{ route('second', ['auth' , 'sign-in']) }}" class="nav-link small pb-2"><i
                                        class="far fa-user me-2"></i>Sign In or Login</a> </li>
                            <!-- Dark mode option START -->
                            <li class="nav-item dropdown">
                                <button class="btn btn-link text-warning lh-3 p-0 mb-0" id="bd-theme" type="button"
                                    aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-circle-half theme-icon-active fa-fw"
                                        viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                        <use href="#"></use>
                                    </svg>
                                </button>

                                <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                                    <li class="mb-1">
                                        <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="light">
                                            <svg width="16" height="16" fill="currentColor"
                                                class="bi bi-brightness-high-fill fa-fw mode-switch me-1"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                                <use href="#"></use>
                                            </svg>Light
                                        </button>
                                    </li>
                                    <li class="mb-1">
                                        <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                                                <path
                                                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                                                <use href="#"></use>
                                            </svg>Dark
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center active"
                                            data-bs-theme-value="auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1"
                                                viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                                <use href="#"></use>
                                            </svg>Auto
                                        </button>
                                    </li>
                                </ul>
                            </li>
                            <!-- Dark mode option END -->
                        </ul>
                    </div>

                    <div class="d-sm-flex align-items-center justify-content-end">
                        <!-- Main navbar START -->
                        <div class="navbar-collapse collapse" id="navbarCollapse">
                            <ul class="navbar-nav navbar-nav-scroll ms-auto">
                                <!-- Nav item Find hotel -->
                                <li class="nav-item dropdown dropdown-fullwidth">
                                    <a class="nav-link dropdown-toggle" href="#" id="hotelMenu"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Find a
                                        hotel</a>
                                    <div class="dropdown-menu" aria-labelledby="hotelMenu">
                                        <div class="container">
                                            <div class="row g-4 justify-content-between p-lg-3">
                                                <!-- Destination -->
                                                <div class="col-lg-5">
                                                    <h6 class="mb-3"><i
                                                            class="bi bi-pin-map-fill text-primary me-2"></i>Destination
                                                    </h6>
                                                    <hr class="my-2">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li> <a class="dropdown-item" href="#">New
                                                                        York</a> </li>
                                                                <li> <a class="dropdown-item"
                                                                        href="#">California</a> </li>
                                                                <li> <a class="dropdown-item" href="#">New
                                                                        Jersey</a> </li>
                                                                <li> <a class="dropdown-item"
                                                                        href="#">Canada</a> </li>
                                                                <li> <a class="dropdown-item" href="#">Las
                                                                        vegas</a> </li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li> <a class="dropdown-item"
                                                                        href="#">London</a> </li>
                                                                <li> <a class="dropdown-item"
                                                                        href="#">Singapore</a> </li>
                                                                <li> <a class="dropdown-item"
                                                                        href="#">Malaysia</a> </li>
                                                                <li> <a class="dropdown-item"
                                                                        href="#">manhattan</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Hotel type -->
                                                <div class="col-lg-3">
                                                    <h6 class="mb-3"><i
                                                            class="bi bi-list-ul text-primary me-2"></i>Hotel type</h6>
                                                    <hr class="my-2">
                                                    <ul class="list-unstyled">
                                                        <li> <a class="dropdown-item" href="#">All</a> </li>
                                                        <li> <a class="dropdown-item" href="#">Hotels</a> </li>
                                                        <li> <a class="dropdown-item" href="#">Villas</a> </li>
                                                        <li> <a class="dropdown-item" href="#">Palace</a> </li>
                                                        <li> <a class="dropdown-item" href="#">Resorts</a> </li>
                                                        <li> <a class="dropdown-item" href="#">Restaurants</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- Category -->
                                                <div class="col-lg-3">
                                                    <h6 class="mb-3"><i
                                                            class="bi bi-grid-3x3-gap text-primary me-2"></i>Category
                                                    </h6>
                                                    <hr class="my-2">
                                                    <ul class="list-unstyled">
                                                        <li> <a class="dropdown-item" href="#"><i
                                                                    class="fa-solid fa-umbrella-beach fa-fw me-2"></i>Beach</a>
                                                        </li>
                                                        <li> <a class="dropdown-item" href="#"><i
                                                                    class="fa-solid fa-city fa-fw me-2"></i>City</a>
                                                        </li>
                                                        <li> <a class="dropdown-item" href="#"><i
                                                                    class="fa-solid fa-spa fa-fw me-2"></i>Spa</a>
                                                        </li>
                                                        <li> <a class="dropdown-item" href="#"><i
                                                                    class="fa-solid fa-mountain-sun fa-fw me-2"></i>Wildlife</a>
                                                        </li>
                                                        <li> <a class="dropdown-item" href="#"><i
                                                                    class="fa-solid fa-golf-ball-tee fa-fw me-2"></i>Golf</a>
                                                        </li>
                                                        <li> <a class="dropdown-item" href="#"><i
                                                                    class="fa-solid fa-gopuram fa-fw me-2"></i>Heritage</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- Action box -->
                                                <div class="col-12">
                                                    <div class="card overflow-hidden"
                                                        style="background-image:url(/images/bg/05.jpg); background-position: center left; background-size: cover;">
                                                        <div class="bg-overlay bg-dark opacity-5"></div>
                                                        <div
                                                            class="card-body d-lg-flex justify-content-between align-items-center position-relative z-index-9">
                                                            <!-- Meta -->
                                                            <div class="mb-3 mb-lg-0">
                                                                <h5 class="text-white">Enjoy Great Times with us</h5>
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item text-white me-2"> <i
                                                                            class="bi bi-patch-check-fill me-1"></i>Get
                                                                        1000 bonus points on every stay</li>
                                                                    <li class="list-inline-item text-white me-2"> <i
                                                                            class="bi bi-patch-check-fill me-1"></i>Earn
                                                                        through Dec 15</li>
                                                                    <li class="list-inline-item text-white"> <i
                                                                            class="bi bi-patch-check-fill me-1"></i>Redeem
                                                                        for free night and more</li>
                                                                </ul>
                                                            </div>
                                                            <!-- Button -->
                                                            <a href="#" class="btn btn-white mb-0">Register
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Nav item Facilities -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="pagesFacilities"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hotel
                                        Facilities</a>
                                    <ul class="dropdown-menu" aria-labelledby="pagesFacilities">

                                        <li> <a class="dropdown-item" href="#">Banquet</a></li>
                                        <li> <a class="dropdown-item" href="#">Conference and meeting</a></li>
                                        <li> <a class="dropdown-item" href="#">Fitness room</a></li>
                                        <li> <a class="dropdown-item" href="#">Health club</a></li>
                                        <li> <a class="dropdown-item" href="#">Sauna and steam bath</a></li>
                                        <li> <a class="dropdown-item" href="#">Luggage storage</a></li>
                                        <li> <a class="dropdown-item" href="#">Summer terrace</a></li>
                                        <li> <a class="dropdown-item" href="#">Non-smoking rooms</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Main navbar END -->

                        <!-- Toggler button and stay button -->
                        <div class="d-flex align-items-center justify-content-end">
                            <!-- Responsive navbar toggler -->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-animation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="d-none d-sm-inline-block small">Menu</span>
                            </button>

                            <!-- Booking form dropdown START -->
                            <div class="nav-item dropdown form-control-bg-light">
                                <!-- Stay button -->
                                <a class="btn btn-sm btn-primary mb-0" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    Book a stay <i class="fa-solid fa-angle-down"></i>
                                </a>

                                <!-- Form START -->
                                <div
                                    class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 mt-2">
                                    <!-- Card START -->
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header border-bottom">
                                            <h6 class="mb-0">Search your Destination</h6>
                                        </div>

                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <!-- Pickup -->
                                                <div class="col-12">
                                                    <label class="form-label mb-0">Hotel or Destination</label>
                                                    <select class="form-select js-choice" data-search-enabled="true"
                                                        aria-label=".form-select-sm">
                                                        <option value="" selected>Select location</option>
                                                        <option>San Jacinto, USA</option>
                                                        <option>North Dakota, Canada</option>
                                                        <option>West Virginia, Paris</option>
                                                    </select>
                                                </div>

                                                <!-- Date -->
                                                <div class="col-md-6">
                                                    <label class="form-label mb-0">Check in</label>
                                                    <input type="text" class="form-control flatpickr"
                                                        data-date-format="d M Y" placeholder="Select date">
                                                </div>

                                                <!-- Date -->
                                                <div class="col-md-6">
                                                    <label class="form-label mb-0">Check out</label>
                                                    <input type="text" class="form-control flatpickr"
                                                        data-date-format="d M Y" placeholder="Select date">
                                                </div>

                                                <!-- Occupant -->
                                                <div class="col-12">
                                                    <!-- Dropdown input -->
                                                    <label class="form-label mb-0">Guests & rooms</label>
                                                    <div class="dropdown guest-selector me-2">
                                                        <input type="text"
                                                            class="form-guest-selector form-control selection-result"
                                                            value="2 Guests 1 Room" data-bs-auto-close="outside"
                                                            data-bs-toggle="dropdown">

                                                        <!-- dropdown items -->
                                                        <ul class="dropdown-menu guest-selector-dropdown">
                                                            <!-- Adult -->
                                                            <li class="d-flex justify-content-between">
                                                                <div>
                                                                    <h6 class="mb-0">Adults</h6>
                                                                    <small>Ages 13 or above</small>
                                                                </div>

                                                                <div class="hstack gap-1 align-items-center">
                                                                    <button type="button"
                                                                        class="btn btn-link adult-remove p-0 mb-0"><i
                                                                            class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                                                    <h6 class="guest-selector-count mb-0 adults">2</h6>
                                                                    <button type="button"
                                                                        class="btn btn-link adult-add p-0 mb-0"><i
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
                                                                    <button type="button"
                                                                        class="btn btn-link child-remove p-0 mb-0"><i
                                                                            class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                                                    <h6 class="guest-selector-count mb-0 child">0</h6>
                                                                    <button type="button"
                                                                        class="btn btn-link child-add p-0 mb-0"><i
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
                                                                    <button type="button"
                                                                        class="btn btn-link room-remove p-0 mb-0"><i
                                                                            class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                                                    <h6 class="guest-selector-count mb-0 rooms">1</h6>
                                                                    <button type="button"
                                                                        class="btn btn-link room-add p-0 mb-0"><i
                                                                            class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Buttons -->
                                                <div class="col-12 text-center">
                                                    <a href="#"
                                                        class="text-primary-hover text-decoration-underline">Have a
                                                        promo code?</a>
                                                    <button class="btn btn-primary-soft w-100 mt-3 mb-0">Check
                                                        Availability</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card END -->
                                </div>
                                <!-- Form END -->
                            </div>
                            <!-- Booking form dropdown END -->
                        </div>
                    </div>
                </div>
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
        Main Banner START -->
    <section class="py-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
                        <div class="tiny-slider-inner" data-gutter="0" data-arrow="true" data-dots="false"
                            data-items="1">
                            <!-- Card item START -->
                            <div class="card overflow-hidden h-400px h-sm-600px rounded-0"
                                style="background-image:url(/images/category/hotel/06.jpg); background-position: center left; background-size: cover;">
                                <!-- Background dark overlay -->
                                <div class="bg-overlay bg-dark opacity-3"></div>
                                <!-- Card image overlay -->
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-11 col-lg-7">
                                                <h6 class="text-white fw-normal mb-0">💖 Fall in love with the City
                                                </h6>
                                                <!-- Title -->
                                                <h1 class="text-white display-6">Modern Luxury In Manhattan</h1>
                                                <a href="#" class="btn btn-primary mb-0">Reserve Today</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="card overflow-hidden h-400px h-sm-600px bg-parallax text-center rounded-0"
                                data-jarallax-video="https://www.youtube.com/watch?v=j56YlCXuPFU">
                                <!-- Background dark overlay -->
                                <div class="bg-overlay bg-dark opacity-3"></div>
                                <!-- Card image overlay -->
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="container w-100 my-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-11 col-lg-8">
                                                <!-- Title -->
                                                <h1 class="text-white">Taking luxury hospitality to new heights</h1>
                                                <a href="#" class="btn btn-dark mb-0">Take Me There</a>
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
            </div>
        </div>
    </section>
    <!-- =======================
        Main Banner END -->

    <!-- =======================
        Special offer START -->
    <section class="pb-0">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h3 class="mb-0">Special Offers</h3>
                </div>
            </div>

            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                <div class="tiny-slider-inner mb-8" data-autoplay="true" data-arrow="true" data-edge="2"
                    data-dots="false" data-items-xl="3" data-items-lg="3" data-items-md="2" data-items-sm="1">

                    <!-- Offer card START -->
                    <div>
                        <div class="card">
                            <img src="/images/offer/06.jpg" class="card-img" alt="">
                            <!-- Card body -->
                            <div class="position-absolute top-100 start-50 translate-middle w-100">
                                <div class="card-body text-center bg-mode shadow rounded mx-4 p-3">
                                    <h6 class="card-title mb-1"><a href="#">Spa Package Offer</a></h6>
                                    <small>Valid through Dec 2022</small>
                                    <div class="mt-2"><a href="#" class="btn btn-sm btn-dark mb-0">View
                                            Offer</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Offer card END -->

                    <!-- Offer card START -->
                    <div>
                        <div class="card">
                            <img src="/images/offer/07.jpg" class="card-img" alt="">
                            <!-- Card body -->
                            <div class="position-absolute top-100 start-50 translate-middle w-100">
                                <div class="card-body text-center bg-mode shadow rounded mx-4 p-3">
                                    <h6 class="card-title mb-1"><a href="#">Elevate Your Stay</a></h6>
                                    <small>Valid through Feb 2023</small>
                                    <div class="mt-2"><a href="#" class="btn btn-sm btn-dark mb-0">View
                                            Offer</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Offer card END -->

                    <!-- Offer card START -->
                    <div>
                        <div class="card">
                            <img src="/images/offer/08.jpg" class="card-img" alt="">
                            <!-- Card body -->
                            <div class="position-absolute top-100 start-50 translate-middle w-100">
                                <div class="card-body text-center bg-mode shadow rounded mx-4 p-3">
                                    <h6 class="card-title mb-1"><a href="#">Pass Holder Package</a></h6>
                                    <small>Valid through Feb 2023</small>
                                    <div class="mt-2"><a href="#" class="btn btn-sm btn-dark mb-0">View
                                            Offer</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Offer card END -->

                    <!-- Offer card START -->
                    <div>
                        <div class="card">
                            <img src="/images/offer/05.jpg" class="card-img" alt="">
                            <!-- Card body -->
                            <div class="position-absolute top-100 start-50 translate-middle w-100">
                                <div class="card-body text-center bg-mode shadow rounded mx-4 p-3">
                                    <h6 class="card-title mb-1"><a href="#">2023 Golf Tournament Package</a>
                                    </h6>
                                    <small>Valid through Jan 2021</small>
                                    <div class="mt-2"><a href="#" class="btn btn-sm btn-dark mb-0">View
                                            Offer</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Offer card END -->
                </div>
            </div>
            <!-- Slider END -->
        </div>
    </section>
    <!-- =======================
        Special offer END -->

    <!-- =======================
        About START -->
    <section class="py-0 py-lg-7">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12">
                    <h2>We always provide the best for our hotel visitors. We are happy to help you.</h2>
                    <p class="mb-0">We focus a great deal on the understanding of behavioral psychology and influence
                        triggers which are crucial for becoming a well-rounded Digital Marketer. We understand that
                        theory is important to build a solid foundation, we understand that theory alone isn't going to
                        get the job done.</p>
                </div>
            </div>

            <!-- Counters and features START -->
            <div class="row g-4">
                <!-- Counter -->
                <div class="col-xl-4">
                    <div class="card card-body bg-primary bg-opacity-10 vstack gap-4 justify-content-center h-100 p-4">
                        <!-- Counter item -->
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="purecounter text-primary mb-0" data-purecounter-start="0"
                                data-purecounter-end="10" data-purecounter-delay="200">0</h3>
                            <h6 class="fw-normal mb-0">Total Hotels</h6>
                        </div>

                        <!-- Counter item -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-center me-3">
                                <h3 class="purecounter text-primary mb-0" data-purecounter-start="0"
                                    data-purecounter-end="200" data-purecounter-delay="300">0</h3>
                                <span class="h3 text-primary mb-0">+</span>
                            </div>
                            <h6 class="fw-normal mb-0">Total Staff</h6>
                        </div>

                        <!-- Counter item -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-center me-3">
                                <h3 class="purecounter text-primary mb-0" data-purecounter-start="0"
                                    data-purecounter-end="50" data-purecounter-delay="300">0</h3>
                                <span class="h3 text-primary mb-0">+</span>
                            </div>
                            <h6 class="fw-normal mb-0">Amazing Services</h6>
                        </div>

                    </div>
                </div>

                <!-- Location -->
                <div class="col-md-6 col-xl-4">
                    <div class="card  overflow-hidden">
                        <!-- Image -->
                        <img src="/images/about/07.jpg" class="rounded-3" alt="">
                        <!-- Full screen button -->
                        <div class="w-100 h-100">
                            <button class="btn btn-dark position-absolute top-50 start-50 translate-middle mb-0"
                                data-bs-toggle="modal" data-bs-target="#map360">
                                <i class="bi bi-eye me-2"></i>View 360
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Features -->
                <div class="col-md-6 col-xl-4">
                    <ul class="list-group list-group-borderless">
                        <li class="list-group-item py-3">
                            <h6 class="mb-0 fw-normal">
                                <i class="bi bi-cash-coin fa-fw text-info me-2"></i>Best Rate Guaranteed
                            </h6>
                        </li>

                        <li class="list-group-item py-3">
                            <h6 class="mb-0 fw-normal">
                                <i class="bi bi-credit-card-2-back fa-fw text-warning me-2"></i>Payment at Hotel
                            </h6>
                        </li>

                        <li class="list-group-item py-3">
                            <h6 class="mb-0 fw-normal">
                                <i class="bi bi-wallet fa-fw text-success me-2"></i>Exclusive Members Rewards
                            </h6>
                        </li>

                        <li class="list-group-item py-3">
                            <h6 class="mb-0 fw-normal">
                                <i class="bi bi-wifi fa-fw text-danger me-2"></i>WIFI Access
                            </h6>
                        </li>

                        <li class="list-group-item pt-3 pb-0">
                            <h6 class="mb-0 fw-normal">
                                <i class="bi bi-tags fa-fw text-orange me-2"></i>No Hidden Changes
                            </h6>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- Counters and features END -->
        </div>
    </section>
    <!-- =======================
        About END -->

    <!-- =======================
        Near by START -->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Explore Nearby</h2>
                </div>
            </div>

            <div class="row g-4 g-md-5">
                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/01.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">San Francisco</a></h5>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/02.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Los Angeles</a></h5>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/03.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Miami</a></h5>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/04.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Sanjosh</a></h5>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/05.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">New York</a></h5>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/06.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">North Justen</a></h5>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/07.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Rio</a></h5>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/08.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Las Vegas</a></h5>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/09.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Texas</a></h5>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/10.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Chicago</a></h5>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/11.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">New Keagan</a></h5>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/01.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Oslo</a></h5>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Near by END -->

    <!-- =======================
        Services START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <!-- Title -->
                    <h2>We Provide Our Best Facilities For You</h2>
                    <p>Book your hotel with us and don't forget to grab an awesome hotel deal to save massive on your
                        stay.</p>
                    <!-- Button -->
                    <a href="#" class="btn btn-dark mb-4">Contact Us</a>
                    <!-- Services -->
                    <div class="row g-sm-4">
                        <div class="col-sm-6">
                            <ul class="list-group list-group-borderless mt-2 mb-0">
                                <li class="list-group-item">
                                    <h6 class="fw-normal mb-0"><i
                                            class="fa-solid fa-wifi fa-fw text-primary me-2"></i>Free Wifi</h6>
                                </li>

                                <li class="list-group-item">
                                    <h6 class="fw-normal mb-0"><i
                                            class="fa-solid fa-person-swimming fa-fw text-primary me-2"></i>Swimming
                                        Pool</h6>
                                </li>

                                <li class="list-group-item">
                                    <h6 class="fw-normal mb-0"><i
                                            class="fa-solid fa-person-shelter fa-fw text-primary me-2"></i>Private
                                        Workshop</h6>
                                </li>

                                <li class="list-group-item">
                                    <h6 class="fw-normal mb-0"><i
                                            class="fa-solid fa-utensils fa-fw text-primary me-2"></i>Breakfast</h6>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item">
                                    <h6 class="fw-normal mb-0"><i
                                            class="fa-solid fa-bolt fa-fw text-primary me-2"></i>Free Electricity</h6>
                                </li>

                                <li class="list-group-item">
                                    <h6 class="fw-normal mb-0"><i
                                            class="fa-solid fa-dumbbell fa-fw text-primary me-2"></i>Gym Space</h6>
                                </li>

                                <li class="list-group-item">
                                    <h6 class="fw-normal mb-0"><i
                                            class="fa-solid fa-spa fa-fw text-primary me-2"></i>Spa</h6>
                                </li>

                                <li class="list-group-item">
                                    <h6 class="fw-normal mb-0"><a href="#"><i
                                                class="fa-solid fa-ellipsis fa-fw text-primary me-2"></i>Other
                                            Services</a></h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="bg-light rounded-3 h-100 p-4">
                        <!-- Slider START -->
                        <div class="tiny-slider arrow-round arrow-blur">
                            <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="2"
                                data-dots="false" data-items-xl="1" data-items-md="1">

                                <!-- Card START -->
                                <div class="card bg-transparent">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-6">
                                            <img src="/images/category/flight/02.jpg" class="img-fluid card-img"
                                                alt="...">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card-body p-0">
                                                <h6 class="fw-normal mb-3">Honeymoon Sweets</h6>
                                                <h4 class="card-title mb-3"><a href="#"
                                                        class="stretched-link">Maldives Sunshine Hotel</a></h4>
                                                <a href="#" class="btn btn-link p-0">Explore Now <i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card END -->

                                <!-- Card START -->
                                <div class="card bg-transparent">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-6">
                                            <img src="/images/category/flight/01.jpg" class="img-fluid card-img"
                                                alt="...">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card-body p-0">
                                                <h6 class="fw-normal mb-3">Royal Stay</h6>
                                                <h4 class="card-title mb-3"><a href="#"
                                                        class="stretched-link">Booking Grad Palace Japan</a></h4>
                                                <a href="#" class="btn btn-link p-0">Explore Now <i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card END -->

                                <!-- Card START -->
                                <div class="card bg-transparent">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-6">
                                            <img src="/images/category/flight/03.jpg" class="img-fluid card-img"
                                                alt="...">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card-body p-0">
                                                <h6 class="fw-normal mb-3">Adventure Stay</h6>
                                                <h4 class="card-title mb-3"><a href="#"
                                                        class="stretched-link">Golf & Spa Resort in New York</a></h4>
                                                <a href="#" class="btn btn-link p-0">Explore Now <i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card END -->
                            </div>
                        </div>
                        <!-- Slider END -->
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Services END -->

    <!-- =======================
        Action box START -->
    <section class="py-0 py-md-5">
        <div class="container">
            <div class="position-relative rounded-3 overflow-hidden p-3 p-sm-5"
                style="background-image:url(/images/about/08.jpg); background-position: center left; background-size: cover;">
                <div class="row position-relative z-index-9">
                    <div class="col-md-7 col-xl-5 ms-auto">
                        <div class="card card-body p-sm-5">
                            <div class="d-sm-flex justify-content-between align-items-center mb-2">
                                <h6 class="text-primary mb-0">Exclusive Offer</h6>
                                <!-- Rating -->
                                <ul class="list-inline small mb-0">
                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fa-solid fa-star text-warning"></i></li>
                                </ul>
                            </div>
                            <!-- Title -->
                            <h5>Enjoy Your Dream Vacation In Switzerland</h5>
                            <p class="mb-3">Book your hotel with us and don't forget to grab an awesome hotel deal to
                                save massive on your stay.</p>

                            <!-- Price -->
                            <h6 class="fw-normal mb-1">2 Days / 3 Nights</h6>
                            <div class="d-flex align-items-center">
                                <h5 class="text-success mb-0 me-1">$750</h5>
                                <span class="mb-0 me-2">/day</span>
                                <span class="text-decoration-line-through">$1000</span>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-primary-soft mb-0 mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Action box END -->

    <!-- =======================
        Gallery START -->
    <section>
        <div class="container-fluid">
            <!-- Title -->
            <div class="row mb-md-4">
                <div class="col-12 mx-auto text-center mb-4">
                    <h2 class="mb-0">Our Hotel Precious Moments</h2>
                </div>
            </div>

            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
                <div class="tiny-slider-inner d-flex align-items-end" data-autoplay="true" data-edge="2"
                    data-arrow="true" data-dots="false" data-items="6" data-items-lg="4" data-items-sm="2">
                    <!-- Slider item -->
                    <div>
                        <a data-glightbox="" data-gallery="gallery" href="/images/category/hotel/gallery/01.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/hotel/gallery/01.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a data-glightbox="" data-gallery="gallery" href="/images/category/hotel/gallery/02.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/hotel/gallery/02.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a data-glightbox="" data-gallery="gallery" href="/images/category/hotel/gallery/03.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/hotel/gallery/03.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a data-glightbox="" data-gallery="gallery" href="/images/category/hotel/gallery/05.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/hotel/gallery/05.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a data-glightbox="" data-gallery="gallery" href="/images/category/hotel/gallery/08.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/hotel/gallery/08.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a data-glightbox="" data-gallery="gallery" href="https://www.youtube.com/embed/tXHviS-4ygo">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/hotel/gallery/04.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <span
                                        class="btn text-danger btn-round btn-white position-absolute top-50 start-50 translate-middle mb-0">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a data-glightbox="" data-gallery="gallery" href="/images/category/hotel/gallery/06.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/hotel/gallery/06.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slider item -->
                    <div>
                        <a data-glightbox="" data-gallery="gallery" href="/images/category/hotel/gallery/07.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/hotel/gallery/07.jpg" class="rounded-3" alt="">
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
            <!-- Slider END	 -->
        </div>
    </section>
    <!-- =======================
        Gallery END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Modal START -->
<div class="modal fade" id="map360" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Title -->
            <div class="modal-header">
                <h5 class="modal-title" id="map360label">Hotel 360 View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Body -->
            <div class="modal-body p-3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!4v1664190302197!6m8!1m7!1sgWjBbRwH2wMmQTbvyZwkGw!2m2!1d51.49712857925994!2d-0.1593322776188391!3f348.1837813715552!4f17.07463868756892!5f0.8485845663286693"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Modal END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection