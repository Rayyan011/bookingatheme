@extends('layouts.base')

@section('header')
<!-- Header START -->
<header>
    <!-- Logo Nav START -->
    <nav class="navbar navbar-light navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{ route('root') }}">
                <img class="light-mode-item navbar-brand-item" src="/images/logo.svg" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="/images/logo-light.svg" alt="logo">
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

                    <!-- Nav item Listing -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="listingMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Listings</a>
                        <ul class="dropdown-menu" aria-labelledby="listingMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Hotel</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('root') }}">Hotel Home</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'index-chain']) }}">Hotel Chain</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'index-resort']) }}">Hotel Resort</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hotel', 'grid']) }}">Hotel
                                            Grid</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hotel', 'list']) }}">Hotel
                                            List</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'detail']) }}">Hotel Detail</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'room-detail']) }}">Room Detail</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'booking']) }}">Hotel Booking</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Flight</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['flight', 'index-flight']) }}">Flight Home</a>
                                    </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['flight', 'list']) }}">Flight List</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['flight', 'detail']) }}">Flight Detail</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['flight', 'booking']) }}">Flight Booking</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Tour</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['tour', 'index-tour']) }}">Tour Home</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['tour', 'grid']) }}">Tour
                                            Grid</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['tour', 'detail']) }}">Tour
                                            Detail</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['tour', 'booking']) }}">Tour Booking</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Cab</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['cab', 'index-cab']) }}">Cab Home</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['cab', 'list']) }}">Cab
                                            List</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['cab', 'detail']) }}">Cab
                                            Detail</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['cab', 'booking']) }}">Cab
                                            Booking</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Directory</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['directory', 'index-directory']) }}">Directory
                                            Home</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['directory', 'detail']) }}">Directory Detail</a>
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

                    <!-- Nav item Pages -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu" aria-labelledby="pagesMenu">

                            <li> <a class="dropdown-item" href="{{ route('second', ['pages' , 'about']) }}">About</a></li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['pages' , 'contact']) }}">Contact</a></li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['pages' , 'contact-2']) }}">Contact 2</a></li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['pages' , 'team']) }}">Our Team</a></li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('second', ['auth' , 'sign-in']) }}">Sign In</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['auth' , 'sign-up']) }}">Sign Up</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['auth' , 'forgot-password']) }}">Forgot Password</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['auth' , 'two-factor-auth']) }}">Two factor
                                            authentication</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Blog</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('second', ['blog' , 'blog']) }}">Blog</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['blog' , 'detail']) }}">Blog Detail</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Help</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('second', ['help' , 'center']) }}">Help Center</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['help' , 'detail']) }}">Help Detail</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['help' , 'privacy-policy']) }}">Privacy Policy</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['help' , 'terms-of-service']) }}">Terms of Service</a>
                                    </li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="{{ route('second', ['pages' , 'pricing']) }}">Pricing</a></li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['pages' , 'faq']) }}">FAQs</a></li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['pages' , 'error']) }}">Error 404</a></li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['pages' , 'coming-soon']) }}">Coming Soon</a></li>
                        </ul>
                    </li>

                    <!-- Nav item Link -->
                    <li class="nav-item"> <a class="nav-link" href="#">Contact us</a> </li>

                    <!-- Nav item Link -->
                    <li class="nav-item"> <a class="nav-link" href="#">About us</a> </li>

                    <!-- Nav item link-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu min-w-auto" data-bs-popper="none">
                            <li>
                                <a class="dropdown-item" href="https://support.stackbros.in/" target="_blank">
                                    <i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://booking.stackbros.in/" target="_blank">
                                    <i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    target="_blank">
                                    <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Booking!
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Profile and Notification START -->
            <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

                <!-- Notification dropdown START -->
                <li class="nav-item dropdown ms-0 ms-md-3">
                    <!-- Notification button -->
                    <a class="nav-notification btn btn-light p-0 mb-0" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="bi bi-bell fa-fw"></i>
                    </a>
                    <!-- Notification dote -->
                    <span class="notif-badge animation-blink"></span>

                    <!-- Notification dropdown menu START -->
                    <div
                        class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md shadow-lg p-0">
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div
                                class="card-header bg-transparent d-flex justify-content-between align-items-center border-bottom">
                                <h6 class="m-0">Notifications <span
                                        class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                                <a class="small" href="#">Clear all</a>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush list-unstyled p-2">
                                    <!-- Notification item -->
                                    <li>
                                        <a href="#"
                                            class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
                                            <h6 class="mb-2">New! Booking flights from New York ✈️</h6>
                                            <p class="mb-0 small">Find the flexible ticket on flights around the world.
                                                Start searching today</p>
                                            <span>Wednesday</span>
                                        </a>
                                    </li>
                                    <!-- Notification item -->
                                    <li>
                                        <a href="#"
                                            class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
                                            <h6 class="mb-2">Sunshine saving are here 🌞 save 30% or more on a stay
                                            </h6>
                                            <span>15 Nov 2022</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent text-center border-top">
                                <a href="#" class="btn btn-sm btn-link mb-0 p-0">See all incoming activity</a>
                            </div>
                        </div>
                    </div>
                    <!-- Notification dropdown menu END -->
                </li>
                <!-- Notification dropdown END -->

                <!-- Profile dropdown START -->
                <li class="nav-item ms-3 dropdown">
                    <!-- Avatar -->
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                        data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="avatar-img rounded-2" src="/images/avatar/01.jpg" alt="avatar">
                    </a>

                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                        aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle shadow" src="/images/avatar/01.jpg"
                                        alt="avatar">
                                </div>
                                <div>
                                    <a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
                                    <p class="small m-0">example@gmail.com</p>
                                </div>
                            </div>
                        </li>

                        <!-- Links -->
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My
                                Bookings</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My
                                Wishlist</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help
                                Center</a></li>
                        <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i
                                    class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <!-- Dark mode options START -->
                        <li>
                            <div
                                class="nav-pills-primary-soft theme-icon-active d-flex justify-content-between align-items-center p-2 pb-0">
                                <span>Mode:</span>
                                <button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0"
                                    data-bs-theme-value="light" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                        <use href="#"></use>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0"
                                    data-bs-theme-value="dark" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                                        <path
                                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                                        <use href="#"></use>
                                    </svg>
                                </button>
                                <button type="button"
                                    class="btn btn-link nav-link text-primary-hover mb-0 p-0 active"
                                    data-bs-theme-value="auto" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                        viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                        <use href="#"></use>
                                    </svg>
                                </button>
                            </div>
                        </li>
                        <!-- Dark mode options END-->
                    </ul>
                </li>
                <!-- Profile dropdown END -->
            </ul>
            <!-- Profile and Notification START -->

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
    <section class="py-0">
        <div class="container-fluid px-0">
            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-blur">
                <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-gutter="0"
                    data-edge="0" data-dots="false" data-items="3" data-items-md="2" data-items-xs="1">
                    <!-- Slider item -->
                    <div>
                        <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                            href="/images/category/directory/03.jpg">
                            <div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/directory/03.jpg" class="" alt="">
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
                        <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                            href="/images/category/directory/06.jpg">
                            <div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/directory/06.jpg" class="" alt="">
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
                        <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                            href="/images/category/directory/05.jpg">
                            <div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/directory/05.jpg" class="" alt="">
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
                        <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                            href="/images/category/directory/04.jpg">
                            <div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/directory/04.jpg" class="" alt="">
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
            <!-- Slider START -->
        </div>
    </section>
    <!-- =======================
            Main banner END -->

    <!-- =======================
            Title and tabs START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-light p-0 pb-0">
                        <!-- Card body -->
                        <div class="card-body d-flex justify-content-between flex-wrap">
                            <!-- Title and badge -->
                            <div>
                                <!-- Badge -->
                                <div class="badge text-bg-dark"><i class="fa-solid fa-spa fa-fw text-warning"></i> Spa
                                </div>
                                <div class="badge text-bg-dark"><i class="bi bi-scissors fa-fw text-warning"></i>
                                    Salon</div>
                                <div class="badge text-bg-dark"><i class="fas fa-star fa-fw text-warning"></i> 4.5
                                </div>

                                <!-- Title -->
                                <h1 class="h3 mt-2 mb-1">Emperor Salon & Spa</h1>
                                <p class="mb-2 mb-sm-0"><i class="bi bi-geo-alt me-1 text-primary"></i>5855 W Century
                                    Blvd, Los Angeles - 90045</p>
                            </div>
                            <!-- Buttons -->
                            <ul class="list-inline mb-0">
                                <!-- wishlist -->
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-sm btn-white px-2"><i
                                            class="fa-solid fa-fw fa-heart"></i></a>
                                </li>
                                <!-- Share -->
                                <li class="list-inline-item dropdown">
                                    <!-- Share button -->
                                    <a href="#" class="btn btn-sm btn-white px-2" role="button"
                                        id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-fw fa-share-alt"></i>
                                    </a>
                                    <!-- dropdown button -->
                                    <ul class="dropdown-menu min-w-auto shadow rounded"
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
                                <!-- Report -->
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-sm btn-white px-2"><i
                                            class="bi bi-exclamation-triangle-fill fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer bg-transparent border-top py-0">
                            <ul class="nav nav-tabs nav-bottom-line nav-responsive border-0" role="tablist">
                                <li class="nav-item"> <a class="nav-link mb-0 active" data-bs-toggle="tab"
                                        href="#tab-1">About</a> </li>
                                <li class="nav-item"> <a class="nav-link mb-0" data-bs-toggle="tab"
                                        href="#tab-2">Deals</a> </li>
                                <li class="nav-item"> <a class="nav-link mb-0" data-bs-toggle="tab"
                                        href="#tab-3">Services</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            Title and tabs END -->

    <!-- =======================
            Content START -->
    <section class="pt-0">
        <div class="container">
            <!-- Tabs contents START -->
            <div class="tab-content mb-0" id="tour-pills-tabContent">

                <!-- Content item START -->
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                    <div class="row g-4 g-lg-5">
                        <!-- Left side START -->
                        <div class="col-lg-7 col-xl-8">
                            <!-- Card START -->
                            <div class="card bg-transparent mb-4">
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom px-0 pt-0">
                                    <h4 class="mb-0">Description</h4>
                                </div>
                                <!-- Card body -->
                                <div class="card-body px-0 pb-0">
                                    <p class="mb-3">Demesne far-hearted suppose venture excited see had has.
                                        Dependent on so extremely delivered by. Yet no jokes worse her why. <b>Bed one
                                            supposing breakfast day fulfilled off depending questions.</b> As it so
                                        contrasted oh estimating instrument. Size like body some one had. Are conduct
                                        viewing boy minutes warrant the expense? Tolerably behavior may admit daughters
                                        offending her ask own. Praise effect wishes change way and any wanted. Lively
                                        use looked latter regard had. Do he it part more last in. We understand that
                                        theory is important to build a solid foundation, we understand that theory alone
                                        isn’t going to get the job done so that’s why this is packed with practical
                                        hands-on examples that you can follow step by step.</p>

                                    <p class="mb-0">Delivered dejection necessary objection do Mr prevailed. Mr
                                        feeling does chiefly cordial in do. Water timed folly right aware if oh truth.
                                        Large above be to means. Dashwood does provide stronger is.</p>
                                </div>
                            </div>
                            <!-- Card END -->

                            <!-- Card START -->
                            <div class="card bg-transparent">
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom px-0">
                                    <h4 class="mb-0">Image Gallery</h4>
                                </div>
                                <!-- Card body -->
                                <div class="card-body px-0 pb-0">
                                    <div class="row g-4">
                                        <div class="col-md-4">
                                            <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                href="/images/category/directory/11.jpg">
                                                <div
                                                    class="card card-element-hover card-overlay-hover overflow-hidden">
                                                    <!-- Image -->
                                                    <img src="/images/category/directory/11.jpg" class="card-img"
                                                        alt="">
                                                    <!-- Full screen button -->
                                                    <div class="hover-element w-100 h-100">
                                                        <i
                                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                href="/images/category/directory/09.jpg">
                                                <div
                                                    class="card card-element-hover card-overlay-hover overflow-hidden">
                                                    <!-- Image -->
                                                    <img src="/images/category/directory/09.jpg" class="card-img"
                                                        alt="">
                                                    <!-- Full screen button -->
                                                    <div class="hover-element w-100 h-100">
                                                        <i
                                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                href="/images/category/directory/02.jpg">
                                                <div
                                                    class="card card-element-hover card-overlay-hover overflow-hidden">
                                                    <!-- Image -->
                                                    <img src="/images/category/directory/02.jpg" class="card-img"
                                                        alt="">
                                                    <!-- Full screen button -->
                                                    <div class="hover-element w-100 h-100">
                                                        <i
                                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                href="/images/category/directory/03.jpg">
                                                <div
                                                    class="card card-element-hover card-overlay-hover overflow-hidden">
                                                    <!-- Image -->
                                                    <img src="/images/category/directory/03.jpg" class="card-img"
                                                        alt="">
                                                    <!-- Full screen button -->
                                                    <div class="hover-element w-100 h-100">
                                                        <i
                                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                href="/images/category/directory/10.jpg">
                                                <div
                                                    class="card card-element-hover card-overlay-hover overflow-hidden">
                                                    <!-- Image -->
                                                    <img src="/images/category/directory/10.jpg" class="card-img"
                                                        alt="">
                                                    <!-- Full screen button -->
                                                    <div class="hover-element w-100 h-100">
                                                        <i
                                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                href="/images/category/directory/08.jpg">
                                                <div
                                                    class="card card-element-hover card-overlay-hover overflow-hidden">
                                                    <!-- Image -->
                                                    <img src="/images/category/directory/08.jpg" class="card-img"
                                                        alt="">
                                                    <!-- Full screen button -->
                                                    <div class="hover-element w-100 h-100">
                                                        <i
                                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                href="/images/category/directory/07.jpg">
                                                <div
                                                    class="card card-element-hover card-overlay-hover overflow-hidden">
                                                    <!-- Image -->
                                                    <img src="/images/category/directory/07.jpg" class="card-img"
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
                            </div>
                            <!-- Card END -->
                        </div>
                        <!-- Left side END -->

                        <!-- Right side START -->
                        <div class="col-lg-5 col-xl-4">
                            <!-- Direction START -->
                            <div class="card shadow mb-4">
                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="mb-0">Get Direction</h5>
                                </div>

                                <!-- Card body -->
                                <div class="card-body">
                                    <!-- Map START -->
                                    <iframe class="w-100 grayscale rounded"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin"
                                        height="200" style="border:0;" aria-hidden="false"
                                        tabindex="0"></iframe>

                                    <!-- Info -->
                                    <ul class="list-group list-group-borderless my-3">
                                        <!-- Address -->
                                        <li class="list-group-item">
                                            <a href="#" class="h6 fw-normal mb-0">
                                                <i class="bi fa-fw bi-geo-alt me-2"></i>5855 W Century Blvd, Los
                                                Angeles
                                            </a>
                                        </li>
                                        <!-- Call no -->
                                        <li class="list-group-item">
                                            <a href="#" class="h6 fw-normal mb-0">
                                                <i class="bi fa-fw bi-telephone-forward me-2"></i>+31 123 456 789
                                            </a>
                                        </li>
                                        <!-- Email -->
                                        <li class="list-group-item">
                                            <a href="#" class="h6 fw-normal mb-0">
                                                <i class="bi fa-fw bi-envelope me-2"></i>example@gmail.com
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Social button -->
                                    <ul class="list-inline mb-0 mt-3">
                                        <li class="list-inline-item">Follow us on: </li>
                                        <li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0"
                                                href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                                        <li class="list-inline-item"> <a
                                                class="btn btn-sm shadow px-2 bg-instagram mb-0" href="#"><i
                                                    class="fab fa-fw fa-instagram"></i></a> </li>
                                        <li class="list-inline-item"> <a
                                                class="btn btn-sm shadow px-2 bg-twitter mb-0" href="#"><i
                                                    class="fab fa-fw fa-twitter"></i></a> </li>
                                        <li class="list-inline-item"> <a
                                                class="btn btn-sm shadow px-2 bg-linkedin mb-0" href="#"><i
                                                    class="fab fa-fw fa-linkedin-in"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Direction END -->

                            <!-- Time table START -->
                            <div class="card shadow">
                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="mb-0">Working Hours</h5>
                                </div>

                                <!-- Card body -->
                                <div class="card-body">
                                    <ul class="list-group list-group-borderless mb-0">
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Monday</span>
                                            <span>Day off</span>
                                        </li>

                                        <li class="list-group-item py-0">
                                            <hr class="my-1">
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Tuesday</span>
                                            <span>9:00 AM to 8:00 PM</span>
                                        </li>

                                        <li class="list-group-item py-0">
                                            <hr class="my-1">
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Wednesday</span>
                                            <span>9:00 AM to 8:00 PM</span>
                                        </li>

                                        <li class="list-group-item py-0">
                                            <hr class="my-1">
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Thursday</span>
                                            <span>9:00 AM to 8:00 PM</span>
                                        </li>

                                        <li class="list-group-item py-0">
                                            <hr class="my-1">
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Friday</span>
                                            <span>9:00 AM to 8:00 PM</span>
                                        </li>

                                        <li class="list-group-item py-0">
                                            <hr class="my-1">
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Saturday</span>
                                            <span>Open all day</span>
                                        </li>

                                        <li class="list-group-item py-0">
                                            <hr class="my-1">
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Sunday</span>
                                            <span>Open all day</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Time table END -->
                        </div>
                        <!-- Right side END -->
                    </div>
                </div>
                <!-- Content item END -->

                <!-- Content item START -->
                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                    <div class="row g-4">
                        <!-- Left side START -->
                        <div class="col-lg-8">
                            <!-- Card item -->
                            <div class="card card-body border mb-4">
                                <!-- Badge -->
                                <div class="d-sm-flex justify-content-between mb-2">
                                    <div class="mb-2 mb-sm-0">
                                        <div class="badge text-bg-dark"><i
                                                class="bi bi-scissors fa-fw text-warning"></i> Salon</div>
                                        <div class="badge text-bg-success">40% off</div>
                                    </div>
                                    <span class="text-success">Free Cancellation</span>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title mb-2"><a href="#">Monsoon Offer: Men: Global Hair Color
                                        With Free Manicure / Pedicure / Haircut</a></h5>
                                <!-- List -->
                                <div class="d-flex align-items-center flex-wrap">
                                    <span class="me-2">Valid for:</span>
                                    <ul class="nav nav-divider h6 fw-light mb-0">
                                        <li class="nav-item"><i class="bi bi-person me-1"></i>1 Male</li>
                                        <li class="nav-item"><i class="bi bi-calendar me-1"></i>Mon - Fri</li>
                                        <li class="nav-item"><i class="bi bi-clock me-1"></i>11 AM - 6 PM</li>
                                    </ul>
                                </div>

                                <!-- Price and button -->
                                <div class="d-sm-flex justify-content-between mt-4">
                                    <div class="hstack gap-1">
                                        <h5 class="mb-0">$1500</h5>
                                        <span class="text-decoration-line-through">$1800</span>
                                    </div>
                                    <div class="mt-2 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-light mb-0" data-bs-toggle="modal"
                                            data-bs-target="#detailModal">View Details</a>
                                        <a href="#" class="btn btn-sm btn-primary mb-0"><i
                                                class="bi bi-plus-lg"></i> Add</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card item -->
                            <div class="card card-body border mb-4">
                                <!-- Badge -->
                                <div class="d-sm-flex justify-content-between mb-2">
                                    <div class="mb-2 mb-sm-0">
                                        <div class="badge text-bg-dark"><i
                                                class="fa-solid fa-spa fa-fw text-warning"></i> Spa</div>
                                        <div class="badge text-bg-success">30% off</div>
                                    </div>
                                    <span class="text-success">Free Cancellation</span>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title mb-2"><a href="#">Women Special Offer (Aroma Therapy - 30
                                        min)</a></h5>
                                <!-- List -->
                                <div class="d-flex align-items-center flex-wrap">
                                    <span class="me-2">Valid for:</span>
                                    <ul class="nav nav-divider h6 fw-light mb-0">
                                        <li class="nav-item"><i class="bi bi-person me-1"></i>1 Female</li>
                                        <li class="nav-item"><i class="bi bi-calendar me-1"></i>Mon - Fri</li>
                                        <li class="nav-item"><i class="bi bi-clock me-1"></i>11 AM - 6 PM</li>
                                    </ul>
                                </div>

                                <!-- Price and button -->
                                <div class="d-sm-flex justify-content-between mt-4">
                                    <div class="hstack gap-1">
                                        <h5 class="mb-0">$820</h5>
                                        <span class="text-decoration-line-through">$900</span>
                                    </div>
                                    <div class="mt-2 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-light mb-0" data-bs-toggle="modal"
                                            data-bs-target="#detailModal">View Details</a>
                                        <a href="#" class="btn btn-sm btn-primary mb-0"><i
                                                class="bi bi-plus-lg"></i> Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Left side END -->

                        <!-- Right side START -->
                        <div class="col-lg-4">
                            <!-- Buy now widget -->
                            <div class="card shadow mb-4">
                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="mb-0">Your Order</h5>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <!-- Price -->
                                    <ul class="list-group list-group-borderless mb-3">
                                        <li class="list-group-item d-flex justify-content-between py-2">
                                            <span class="h6 fw-light mb-0">Monsoon Offer</span>
                                            <span class="h6 fw-light mb-0">$260 (x1)</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between py-2">
                                            <span class="h6 fw-light mb-0">Monsoon Offer:global</span>
                                            <span class="h6 fw-light mb-0">$50</span>
                                        </li>
                                        <li class="list-group-item py-2">
                                            <hr class="my-0">
                                        </li>
                                        <!-- Divider -->
                                        <li class="list-group-item d-flex justify-content-between pb-0">
                                            <div>
                                                <h5 class="fw-normal mb-0">Total</h5>
                                                <small>Inc. of all taxes</small>
                                            </div>
                                            <span class="h5 fw-normal mb-0">$310</span>
                                        </li>
                                    </ul>

                                    <!-- Button -->
                                    <a href="#" class="btn btn-primary-soft w-100 mb-0">Buy now</a>
                                </div>
                            </div>

                            <!-- Coupon code widget -->
                            <div class="card card-body shadow">
                                <div class="cardt-title">
                                    <h5>Save $70 instant of code</h5>
                                </div>

                                <ul class="list-group list-group-borderless mb-0">
                                    <li class="list-group-item small pb-0"><i
                                            class="bi bi-patch-check-fill text-success me-1"></i>Valid on all prepaid
                                        deals</li>
                                    <li class="list-group-item small pb-0"><i
                                            class="bi bi-patch-check-fill text-success me-1"></i>No minimum purchase
                                    </li>
                                </ul>
                                <!-- Input group -->
                                <div class="input-group mt-3">
                                    <input class="form-control form-control border-dashed" placeholder="Coupon code"
                                        value="BOOK56">
                                    <button type="button" class="btn btn-primary">Copy</button>
                                </div>
                            </div>
                        </div>
                        <!-- Right side END -->

                    </div>
                </div>

                <!-- Content item START -->
                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                    <!-- Spa services -->
                    <h5 class="mb-3"><i class="fa-solid fa-spa fa-fw text-warning"></i> Spa Services</h5>
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <ul class="list-group list-group-borderless mb-0">
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Foot Treatments </a>
                                </li>
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Body Massage </a>
                                </li>
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i class="bi fa-fw bi-arrow-right me-1"></i>Our
                                        Special Massage</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <ul class="list-group list-group-borderless mb-0">
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Head & Foot Treatments </a>
                                </li>
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Body Spa - Scrubs</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <ul class="list-group list-group-borderless mb-0">
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Body DE-Tanning</a>
                                </li>
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Body Polishing </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <ul class="list-group list-group-borderless mb-0">
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Back Treatments </a>
                                </li>
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Manicure & Pedicure</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Salon services -->
                    <h5 class="mb-3 mt-5"><i class="bi bi-scissors fa-fw text-warning"></i> Salon Services</h5>
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <ul class="list-group list-group-borderless mb-0">
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Threading</a>
                                </li>
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Bleach</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <ul class="list-group list-group-borderless mb-0">
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Waxing</a>
                                </li>
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Blow Dry</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <ul class="list-group list-group-borderless mb-0">
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Hair Colour</a>
                                </li>
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Facial & Cleanup</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <ul class="list-group list-group-borderless mb-0">
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i class="bi fa-fw bi-arrow-right me-1"></i>Pre
                                        Bridal</a>
                                </li>
                                <li class="list-group-item h6 fw-normal mb-0">
                                    <a href="#" class="mb-0"> <i
                                            class="bi fa-fw bi-arrow-right me-1"></i>Bridal Makeup</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabs contents END -->
        </div>
    </section>
    <!-- =======================
            Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
            Footer START -->
<footer class="bg-dark py-7">
    <div class="container">
        <div class="row mx-auto">
            <div class="col-md-10 col-xl-6 mx-auto text-center">
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

<!-- Detail modal START -->
<div class="modal fade" id="detailModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="mb-0">Free Cancellation</h6>
                <p>One click Cancellation available within 15 days of purchase</p>

                <h6 class="mb-0">Validity details</h6>
                <p>Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water
                    timed folly right aware if oh truth. Large above be to means.</p>

                <h6>How to use offer</h6>
                <ul class="ps-4">
                    <li class="mb-2">Get up with a delicious lunch and a beautiful view from your room.</li>
                    <li class="mb-2">Son agreed to others Exeter period myself few yet nature. Mention Mr manners
                        opinion if garrets enabled.</li>
                    <li class="mb-2">Insipidity the sufficient discretion imprudence resolution sir him decisively.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Detail modal END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection