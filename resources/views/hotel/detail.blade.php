@extends('layouts.base')

@section('body-attributes')
class="has-navbar-mobile"
@endsection

@section('header')
@include('layouts.partials/navbar2')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
            Search START -->
    <section class="py-3 py-sm-0">
        <div class="container">
            <!-- Offcanvas button for search -->
            <button class="btn btn-primary d-sm-none w-100 mb-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasEditsearch" aria-controls="offcanvasEditsearch"><i
                    class="bi bi-pencil-square me-2"></i>Edit Search</button>

            <!-- Search with offcanvas START -->
            <div class="offcanvas-sm offcanvas-top" tabindex="-1" id="offcanvasEditsearch"
                aria-labelledby="offcanvasEditsearchLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasEditsearchLabel">Edit search</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        data-bs-target="#offcanvasEditsearch" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-2">
                    <div class="bg-light p-4 rounded w-100">
                        <form class="row g-4">
                            <!-- Location -->
                            <div class="col-md-6 col-lg-4">
                                <div class="form-size-lg form-fs-md">
                                    <!-- Select input -->
                                    <label class="form-label">Location</label>
                                    <select class="form-select js-choice" data-search-enabled="true">
                                        <option value="">Select location</option>
                                        <option selected>San Jacinto, USA</option>
                                        <option>North Dakota, Canada</option>
                                        <option>West Virginia, Paris</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Check in -->
                            <div class="col-md-6 col-lg-3">
                                <!-- Date input -->
                                <div class="form-fs-md">
                                    <label class="form-label">Check in - out</label>
                                    <input type="text" class="form-control form-control-lg flatpickr"
                                        data-mode="range" placeholder="Select date" value="19 Sep to 28 Sep">
                                </div>
                            </div>

                            <!-- Guest -->
                            <div class="col-md-6 col-lg-3">
                                <div class="form-fs-md">
                                    <!-- Dropdown input -->
                                    <div class="w-100">
                                        <label class="form-label">Guests & rooms</label>
                                        <div class="dropdown guest-selector me-2">
                                            <input type="text"
                                                class="form-guest-selector form-control form-control-lg selection-result"
                                                value="2 Guests 1 Room" id="dropdownguest"
                                                data-bs-auto-close="outside" data-bs-toggle="dropdown">

                                            <!-- dropdown items -->
                                            <ul class="dropdown-menu guest-selector-dropdown"
                                                aria-labelledby="dropdownguest">
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
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="col-md-6 col-lg-2 mt-md-auto">
                                <a class="btn btn-lg btn-primary w-100 mb-0" href="/hotel/list"><i
                                        class="bi bi-search fa-fw"></i>Search</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Search with offcanvas END -->
        </div>
    </section>
    <!-- =======================
            Search END -->

    <!-- =======================
            Main Title START -->
    <section class="py-0 pt-sm-5">
        <div class="container position-relative">
            <!-- Title and button START -->
            <div class="row mb-3">
                <div class="col-12">
                    <!-- Meta -->
                    <div class="d-lg-flex justify-content-lg-between mb-1">
                        <!-- Title -->
                        <div class="mb-2 mb-lg-0">
                            <h1 class="fs-2">Soneva  Fushi</h1>
                            <!-- Location -->
                            
                        </div>

                        <!-- Buttons -->
                        <ul class="list-inline text-end">
                            <!-- Heart icon -->
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-sm btn-light px-2"><i
                                        class="fa-solid fa-fw fa-heart"></i></a>
                            </li>
                            <!-- Share icon -->
                            <li class="list-inline-item dropdown">
                                <!-- Share button -->
                                <a href="#" class="btn btn-sm btn-light px-2" role="button"
                                    id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-fw fa-share-alt"></i>
                                </a>
                                <!-- dropdown button -->
                                <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                    aria-labelledby="dropdownShare">
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fab fa-facebook-square me-2"></i>Facebook</a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Title and button END -->

           
        </div>
    </section>
    <!-- =======================
            Main Title END -->

    <!-- =======================
            Image gallery START -->
    <section class="card-grid pt-0">
        <div class="container">
            <div class="row g-2">
                <!-- Image -->
                <div class="col-md-6">
                    <a data-glightbox data-gallery="gallery" href="/images/gallery/14.jpg">
                        <div class="card card-grid-lg card-element-hover card-overlay-hover overflow-hidden"
                            style="background-image:url(/images/ovayo/169627887.jpg); background-position: center left; background-size: cover;">
                            <!-- Card hover element -->
                            <div class="hover-element position-absolute w-100 h-100">
                                <i
                                    class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <!-- Card item START -->
                    <div class="row g-2">
                        <!-- Image -->
                        <div class="col-12">
                            <a data-glightbox data-gallery="gallery" href="/images/gallery/13.jpg">
                                <div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden"
                                    style="background-image:url(/images/ovayo/169608949.jpg); background-position: center left; background-size: cover;">
                                    <!-- Card hover element -->
                                    <div class="hover-element position-absolute w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Image -->
                        <div class="col-md-6">
                            <a data-glightbox data-gallery="gallery" href="/images/gallery/12.jpg">
                                <div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden"
                                    style="background-image:url(/images/ovayo/169645762-1.jpg); background-position: center left; background-size: cover;">
                                    <!-- Card hover element -->
                                    <div class="hover-element position-absolute w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Images -->
                        <div class="col-md-6">
                            <div class="card card-grid-sm overflow-hidden"
                                style="background-image:url(/images/gallery/11.jpg); background-position: center left; background-size: cover;">
                                <!-- Background overlay -->
                                <div class="bg-overlay bg-dark opacity-7"></div>

                                <!-- Popup Images -->
                                <a data-glightbox="" data-gallery="gallery" href="/images/gallery/11.jpg"
                                    class="stretched-link z-index-9"></a>
                                <a data-glightbox="" data-gallery="gallery" href="/images/gallery/15.jpg"></a>
                                <a data-glightbox="" data-gallery="gallery" href="/images/gallery/16.jpg"></a>

                                <!-- Overlay text -->
                                <div class="card-img-overlay d-flex h-100 w-100">
                                    <h6 class="card-title m-auto fw-light text-decoration-underline"><a href="#"
                                            class="text-white">View all</a></h6>
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
            Image gallery END -->

    <!-- =======================
            About hotel START -->
    <section class="pt-0">
        <div class="container" data-sticky-container>

            <div class="row g-4 g-xl-5">
                <!-- Content START -->
                <div class="col-xl-7 order-1">
                    <div class="vstack gap-5">

                        <!-- About hotel START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h3 class="mb-0">About This Hotel</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <h5 class="fw-light mb-4">Main Highlights</h5>

                                <!-- Highlights Icons -->
                                <div class="hstack gap-3 mb-3">
                                    <div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Free wifi">
                                        <i class="fa-solid fa-wifi"></i>
                                    </div>
                                    <div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Swimming Pool">
                                        <i class="fa-solid fa-swimming-pool"></i>
                                    </div>
                                    <div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Central AC">
                                        <i class="fa-solid fa-snowflake"></i>
                                    </div>
                                    <div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Free Service">
                                        <i class="fa-solid fa-concierge-bell"></i>
                                    </div>
                                </div>

                                <p class="mb-3">Demesne far-hearted suppose venture excited see had has.
                                    Dependent on so extremely delivered by. Yet no jokes worse her why. <b>Bed one
                                        supposing breakfast day fulfilled off depending questions.</b></p>
                                <p class="mb-0">Delivered dejection necessary objection do Mr prevailed. Mr
                                    feeling does chiefly cordial in do. Water timed folly right aware if oh truth.
                                    Large above be to means. Dashwood does provide stronger is.</p>

                                <div class="collapse" id="collapseContent">
                                    <p class="my-3">We focus a great deal on the understanding of behavioral
                                        psychology and influence triggers which are crucial for becoming a well
                                        rounded Digital Marketer. We understand that theory is important to build a
                                        solid foundation, we understand that theory alone isn't going to get the job
                                        done so that's why this rickets is packed with practical hands-on examples
                                        that you can follow step by step.</p>
                                    <p class="mb-0">Behavioral psychology and influence triggers which are
                                        crucial for becoming a well rounded Digital Marketer. We understand that
                                        theory is important to build a solid foundation, we understand that theory
                                        alone isn't going to get the job done so that's why this tickets is packed
                                        with practical hands-on examples that you can follow step by step.</p>
                                </div>
                                <a class="p-0 mb-4 mt-2 btn-more d-flex align-items-center collapsed"
                                    data-bs-toggle="collapse" href="#collapseContent" role="button"
                                    aria-expanded="false" aria-controls="collapseContent">
                                    See <span class="see-more ms-1">more</span><span
                                        class="see-less ms-1">less</span><i class="fa-solid fa-angle-down ms-2"></i>
                                </a>

                                <!-- List -->
                                <h5 class="fw-light mb-2">Advantages</h5>
                                <ul class="list-group list-group-borderless mb-0">
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>Every hotel staff
                                        to have Proper PPT kit for COVID-19</li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>Every staff member
                                        wears face masks and gloves at all service times.</li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>Hotel staff
                                        ensures to maintain social distancing at all times.</li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>The hotel has
                                        In-Room Dining options available </li>
                                </ul>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- About hotel START -->

                        <!-- Amenities START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h3 class="card-title mb-0">Amenities</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <div class="row g-4">
                                    <!-- Activities -->
                                    <div class="col-sm-6">
                                        <h6><i class="fa-solid fa-biking me-2"></i>Activities</h6>
                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-0">
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Swimming
                                                pool
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Spa
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Kids'
                                                play area
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Gym
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Payment Method -->
                                    <div class="col-sm-6">
                                        <h6><i class="fa-solid fa-credit-card me-2"></i>Payment Method</h6>
                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-0">
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Credit
                                                card (Visa, Master card)
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Cash
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Debit
                                                Card
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Services -->
                                    <div class="col-sm-6">
                                        <h6><i class="fa-solid fa-concierge-bell me-2"></i>Services</h6>
                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-0">
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Dry
                                                cleaning
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Room
                                                Service
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Special
                                                service
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Waiting
                                                Area
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Secrete
                                                smoking area
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Concierge
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Laundry
                                                facilities
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Ironing
                                                Service
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Lift
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Safety & Security -->
                                    <div class="col-sm-6">
                                        <h6><i class="bi bi-shield-fill-check me-2"></i>Safety & Security</h6>
                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-4 mb-sm-5">
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Doctor on
                                                Call
                                            </li>
                                        </ul>

                                        <h6><i class="fa-solid fa-volume-up me-2"></i>Staff Language</h6>
                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-0">
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>English
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Spanish
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Hindi
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Amenities END -->

                        <!-- Room START -->
                        <div class="card bg-transparent" id="room-options">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <h3 class="mb-2 mb-sm-0">Room Options</h3>

                                    <div class="col-sm-4">
                                        <form class="form-control-bg-light">
                                            <select class="form-select form-select-sm js-choice border-0">
                                                <option value="" selected>Select Option</option>
                                                <option>Recently search</option>
                                                <option>Most popular</option>
                                                <option>Top rated</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <div class="vstack gap-4">

                                    <!-- Room item START -->
                                    <div class="card shadow p-3">
                                        <div class="row g-4">
                                            <!-- Card img -->
                                            <div class="col-md-5 position-relative">

                                               

                                                <!-- Slider START -->
                                                <div
                                                    class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
                                                    <div class="tiny-slider-inner" data-autoplay="true"
                                                        data-arrow="true" data-dots="false" data-items="1">
                                                        <!-- Image item -->
                                                        <div><img src="/images/category/hotel/4by3/04.jpg"
                                                                alt="Card image"></div>

                                                        <!-- Image item -->
                                                        <div><img src="/images/category/hotel/4by3/02.jpg"
                                                                alt="Card image"></div>

                                                        <!-- Image item -->
                                                        <div><img src="/images/category/hotel/4by3/03.jpg"
                                                                alt="Card image"></div>

                                                        <!-- Image item -->
                                                        <div><img src="/images/category/hotel/4by3/01.jpg"
                                                                alt="Card image"></div>
                                                    </div>
                                                </div>
                                                <!-- Slider END -->

                                                <!-- Button -->
                                                <a href="#"
                                                    class="btn btn-link text-decoration-underline p-0 mb-0 mt-1"
                                                    data-bs-toggle="modal" data-bs-target="#roomDetail"><i
                                                        class="bi bi-eye-fill me-1"></i>View more details</a>
                                            </div>

                                            <!-- Card body -->
                                            <div class="col-md-7">
                                                <div class="card-body d-flex flex-column h-100 p-0">

                                                    <!-- Title -->
                                                    <h5 class="card-title"><a href="#">Luxury Room with
                                                            Balcony</a></h5>

                                                    <!-- Amenities -->
                                                    <ul class="nav nav-divider mb-2">
                                                        <li class="nav-item">Air Conditioning</li>
                                                        <li class="nav-item">Wifi</li>
                                                        <li class="nav-item">Kitchen</li>
                                                        <li class="nav-item">
                                                            <a href="#" class="mb-0 text-primary">More+</a>
                                                        </li>
                                                    </ul>


                                                    <!-- Price and Button -->
                                                    <div
                                                        class="d-sm-flex justify-content-sm-between align-items-center mt-auto">
                                                        <!-- Button -->
                                                        <div class="d-flex align-items-center">
                                                            <h5 class="fw-bold mb-0 me-1">$750</h5>
                                                            <span class="mb-0 me-2">/day</span>
                                                            <span
                                                                class="text-decoration-line-through mb-0">$1000</span>
                                                        </div>
                                                        <!-- Price -->
                                                        <div class="mt-3 mt-sm-0">
                                                            <a href="/hotel/booking"
                                                                class="btn btn-sm btn-primary mb-0">Select Room</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Room item END -->

                                    <!-- Room item START -->
                                    <div class="card shadow p-3">
                                        <div class="row g-4">
                                            <!-- Card img -->
                                            <div class="col-md-5 position-relative">

                                               

                                                <!-- Slider START -->
                                                <div
                                                    class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
                                                    <div class="tiny-slider-inner" data-autoplay="true"
                                                        data-arrow="true" data-dots="false" data-items="1">
                                                        <!-- Image item -->
                                                        <div><img src="/images/category/hotel/4by3/03.jpg"
                                                                alt="Card image"></div>

                                                        <!-- Image item -->
                                                        <div><img src="/images/category/hotel/4by3/02.jpg"
                                                                alt="Card image"></div>

                                                        <!-- Image item -->
                                                        <div><img src="/images/category/hotel/4by3/04.jpg"
                                                                alt="Card image"></div>

                                                        <!-- Image item -->
                                                        <div><img src="/images/category/hotel/4by3/01.jpg"
                                                                alt="Card image"></div>
                                                    </div>
                                                </div>
                                                <!-- Slider END -->

                                                <!-- Button -->
                                                <a href="#"
                                                    class="btn btn-link text-decoration-underline p-0 mb-0 mt-1"
                                                    data-bs-toggle="modal" data-bs-target="#roomDetail"><i
                                                        class="bi bi-eye-fill me-1"></i>View more details</a>
                                            </div>

                                            <!-- Card body -->
                                            <div class="col-md-7">
                                                <div class="card-body d-flex flex-column p-0 h-100">

                                                    <!-- Title -->
                                                    <h5 class="card-title"><a href="#">Deluxe Pool View with
                                                            Breakfast</a></h5>

                                                    <!-- Amenities -->
                                                    <ul class="nav nav-divider mb-2">
                                                        <li class="nav-item">Air Conditioning</li>
                                                        <li class="nav-item">Wifi</li>
                                                        <li class="nav-item">Kitchen</li>
                                                        
                                                    </ul>

                                                    <p class="text-danger mb-3">Non Refundable</p>

                                                    <!-- Price and Button -->
                                                    <div
                                                        class="d-sm-flex justify-content-sm-between align-items-center mt-auto">
                                                        <!-- Button -->
                                                        <div class="d-flex align-items-center">
                                                            <h5 class="fw-bold mb-0 me-1">$750</h5>
                                                            <span class="mb-0 me-2">/day</span>
                                                            <span
                                                                class="text-decoration-line-through mb-0">$1000</span>
                                                        </div>
                                                        <!-- Price -->
                                                        <div class="mt-3 mt-sm-0">
                                                            <a href="/hotel/booking"
                                                                class="btn btn-sm btn-primary mb-0">Select Room</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Room item END -->
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Room END -->

                        

                        <!-- Hotel Policies START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h3 class="mb-0">Hotel Policies</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <!-- List -->
                                <ul class="list-group list-group-borderless mb-2">
                                    <li class="list-group-item d-flex">
                                        <i class="bi bi-check-circle-fill me-2"></i>This is a family farmhouse,
                                        hence we request you to not indulge.
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <i class="bi bi-check-circle-fill me-2"></i>Drinking and smoking within
                                        controlled limits are permitted at the farmhouse but please do not create a
                                        mess or ruckus at the house.
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <i class="bi bi-check-circle-fill me-2"></i>Drugs and intoxicating illegal
                                        products are banned and not to be brought to the house or consumed.
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <i class="bi bi-x-circle-fill me-2"></i>For any update, the customer shall
                                        pay applicable cancellation/modification charges.
                                    </li>
                                </ul>

                                <!-- List -->
                                <ul class="list-group list-group-borderless mb-2">
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Check-in: 1:00 pm - 9:00 pm
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Check out: 11:00 am
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Self-check-in with building staff
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>No pets
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>No parties or events
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Smoking is allowed
                                    </li>
                                </ul>

                                <!-- Important note -->
                                
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Hotel Policies START -->
                    </div>
                </div>
                <!-- Content END -->

                <!-- Right side content START -->
                <aside class="col-xl-5 order-xl-2">
                    <div data-sticky data-margin-top="100" data-sticky-for="1199">
                        <!-- Book now START -->
                        <div class="card card-body border">

                            <!-- Title -->
                            <div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
                                <div>
                                    <span>Price Start at</span>
                                    <h4 class="card-title mb-0">$3,500</h4>
                                </div>
                                <div>
                                    <h6 class="fw-normal mb-0">1 room per night</h6>
                                    <small>+ $285 taxes & fees</small>
                                </div>
                            </div>

                            <!-- Rating -->
                            

                            

                           
                        </div>
                        <!-- Book now END -->

                        <!-- Best deal START -->
                        
                        <!-- Best deal END -->
                    </div>
                </aside>
                <!-- Right side content END -->
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
            About hotel END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Map modal START -->
<div class="modal fade" id="mapmodal" tabindex="-1" aria-labelledby="mapmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <!-- Title -->
            <div class="modal-header">
                <h5 class="modal-title" id="mapmodalLabel">View Our Hotel Location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Map -->
            <div class="modal-body p-0">
                <iframe class="w-100" height="400"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin"
                    style="border:0;" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!-- Button -->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary mb-0"><i
                        class="bi fa-fw bi-pin-map-fill me-2"></i>View In Google Map</button>
            </div>
        </div>
    </div>
</div>
<!-- Map modal END -->

<!-- Room modal START -->
<div class="modal fade" id="roomDetail" tabindex="-1" aria-labelledby="roomDetailLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-0">

            <!-- Title -->
            <div class="modal-header p-3">
                <h5 class="modal-title mb-0" id="roomDetailLabel">Room detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body p-0">

                <!-- Card START -->
                <div class="card bg-transparent p-3">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-dark overflow-hidden rounded-2">
                        <div class="tiny-slider-inner rounded-2 overflow-hidden" data-autoplay="true"
                            data-arrow="true" data-dots="false" data-items="1">
                            <!-- Image item -->
                            <div> <img src="/images/ovayo/169608949.jpg" class="rounded-2" alt="Card image"></div>

                            <!-- Image item -->
                            <div> <img src="/images/ovayo/169612190-1.jpg" class="rounded-2" alt="Card image"> </div>

                            <!-- Image item -->
                            <div> <img src="/images/ovayo/169627887.jpg" class="rounded-2" alt="Card image"> </div>

                            <!-- Image item -->
                            <div> <img src="/images/ovayo/169645762-1.jpg" class="rounded-2" alt="Card image"> </div>
                        </div>
                    </div>
                    <!-- Slider END -->

                    <!-- Card header -->
                    <div class="card-header bg-transparent pb-0">
                        <h3 class="card-title mb-0">Deluxe Pool View</h3>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body">
                        <!-- Content -->
                        <p>Club rooms are well furnished with air conditioner, 32 inch LCD television and a mini
                            bar. They have attached bathroom with showerhead and hair dryer and 24 hours supply of
                            hot and cold running water. Complimentary wireless internet access is available.
                            Additional amenities include bottled water, a safe and a desk.</p>

                        <div class="row">
                            <h5 class="mb-0">Amenities</h5>

                            <!-- List -->
                            <div class="col-md-6">
                                <!-- List -->
                                <ul class="list-group list-group-borderless mt-2 mb-0">
                                    <li class="list-group-item d-flex mb-0">
                                        <i class="fa-solid fa-check-circle text-success me-2"></i><span
                                            class="h6 fw-light mb-0">Swimming pool</span>
                                    </li>
                                    <li class="list-group-item d-flex mb-0">
                                        <i class="fa-solid fa-check-circle text-success me-2"></i><span
                                            class="h6 fw-light mb-0">Spa</span>
                                    </li>
                                    <li class="list-group-item d-flex mb-0">
                                        <i class="fa-solid fa-check-circle text-success me-2"></i><span
                                            class="h6 fw-light mb-0">Kids play area.</span>
                                    </li>
                                    <li class="list-group-item d-flex mb-0">
                                        <i class="fa-solid fa-check-circle text-success me-2"></i><span
                                            class="h6 fw-light mb-0">Gym</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- List -->
                            <div class="col-md-6">
                                <!-- List -->
                                <ul class="list-group list-group-borderless mt-2 mb-0">
                                    <li class="list-group-item d-flex mb-0">
                                        <i class="fa-solid fa-check-circle text-success me-2"></i><span
                                            class="h6 fw-light mb-0">TV</span>
                                    </li>
                                    <li class="list-group-item d-flex mb-0">
                                        <i class="fa-solid fa-check-circle text-success me-2"></i><span
                                            class="h6 fw-light mb-0">Mirror</span>
                                    </li>
                                    <li class="list-group-item d-flex mb-0">
                                        <i class="fa-solid fa-check-circle text-success me-2"></i><span
                                            class="h6 fw-light mb-0">AC</span>
                                    </li>
                                    <li class="list-group-item d-flex mb-0">
                                        <i class="fa-solid fa-check-circle text-success me-2"></i><span
                                            class="h6 fw-light mb-0">Slippers</span>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                    <!-- Card body END -->
                </div>
                <!-- Card END -->
            </div>
        </div>
    </div>
</div>
<!-- Room modal END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection