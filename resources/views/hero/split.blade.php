@extends('layouts.base')

@section('header')
<!-- Header START -->
<header class="navbar-light header-sticky">
    <!-- Nav START -->
    <nav class="navbar navbar-expand-xl z-index-9 navbar-divider">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{ route('root') }}">
                <img class="light-mode-item navbar-brand-item" src="/images/logo.svg" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="/images/logo-light.svg" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-search fs-4"> </i>
            </button>

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse2"
                aria-controls="navbarCollapse2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <!-- Nav Search START -->
                <div class="col-xxl-6">
                    <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                        <div class="nav-item w-100">
                            <form class="rounded position-relative">
                                <input class="form-control pe-5 bg-secondary bg-opacity-10" type="search"
                                    placeholder="Search" aria-label="Search">
                                <button
                                    class="btn btn-link bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                    type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Nav Search END -->
            </div>
            <!-- Main navbar END -->

            <!-- Profile and notification START -->
            <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

                <!-- Notification dropdown START -->
                <li class="nav-item ms-0 ms-md-3 dropdown">
                    <!-- Notification button -->
                    <a class="nav-notification btn btn-light p-0 mb-0" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="bi bi-bell fa-fw"></i>
                    </a>
                    <!-- Notification dote -->
                    <span class="notif-badge animation-blink"></span>

                    <!-- Notification dropdown menu START -->
                    <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg">
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

                    <!-- Profile dropdown START -->
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
                    <!-- Profile dropdown END -->
                </li>
                <!-- Profile dropdown END -->
            </ul>
            <!-- Profile and notification END -->
        </div>
    </nav>
    <!-- Nav END -->

    <!--Main menu link START -->
    <nav class="navbar navbar-expand-xl navbar-divider">
        <div class="container px-0">
            <!-- Main navbar START -->
            <div class="navbar-collapse w-100 collapse" id="navbarCollapse2">
                <!-- Nav Main menu START -->
                <ul class="navbar-nav nav-active-line navbar-nav-scroll mx-auto">

                    <!-- Nav item -->
                    <li class="nav-item"> <a class="nav-link active" href="#">Hotels</a> </li>

                    <!-- Nav item -->
                    <li class="nav-item"> <a class="nav-link" href="#">Flights</a> </li>

                    <!-- Nav item -->
                    <li class="nav-item"> <a class="nav-link" href="#">Holiday homes</a> </li>

                    <!-- Nav item -->
                    <li class="nav-item"> <a class="nav-link" href="#">Cab Hire</a> </li>

                    <!-- Nav item Listing -->
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
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['tour', 'detail']) }}">Tour Detail</a></li>
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
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['cab', 'booking']) }}">Cab Booking</a></li>
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
                                            href="{{ route('second', ['directory', 'detail']) }}">Directory
                                            Detail</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Add Listing</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['listing', 'join-us']) }}">Join us</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['listing', 'add-listing']) }}">Add Listing</a>
                                    </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['listing', 'add-listing-minimal']) }}">Add
                                            Listing Minimal</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['listing', 'listing-added']) }}">Listing
                                            Added</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Hero</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hero', 'inline-form']) }}">Hero Inline Form</a>
                                    </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hero', 'multiple-search']) }}">Hero Multiple
                                            Search</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hero', 'image-gallery']) }}">Hero Image
                                            Gallery</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hero', 'split']) }}">Hero Split</a></li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item"
                                    href="{{ route('second', ['listing', 'booking-confirm']) }}">Booking
                                    Confirmed</a></li>
                            <li> <a class="dropdown-item"
                                    href="{{ route('second', ['listing', 'compare-listing']) }}">Compare Listing</a>
                            </li>
                            <li> <a class="dropdown-item"
                                    href="{{ route('second', ['listing', 'offer-detail']) }}">Offer Detail</a></li>
                        </ul>
                    </li>

                    <!-- Nav item Pages -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu" aria-labelledby="pagesMenu">

                            <li> <a class="dropdown-item" href="{{ route('second', ['pages', 'about']) }}">About</a>
                            </li>
                            <li> <a class="dropdown-item"
                                    href="{{ route('second', ['pages', 'contact']) }}">Contact</a></li>
                            <li> <a class="dropdown-item"
                                    href="{{ route('second', ['pages', 'contact-2']) }}">Contact 2</a></li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['pages', 'team']) }}">Our
                                    Team</a></li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['auth', 'sign-in']) }}">Sign In</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['auth', 'sign-up']) }}">Sign Up</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['auth', 'forgot-password']) }}">Forgot
                                            Password</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['auth', 'two-factor-auth']) }}">Two factor
                                            authentication</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Blog</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['blog', 'blog']) }}">Blog</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['blog', 'detail']) }}">Blog Detail</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Help</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['help', 'center']) }}">Help Center</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['help', 'detail']) }}">Help Detail</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['help', 'privacy-policy']) }}">Privacy
                                            Policy</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['help', 'terms-of-service']) }}">Terms of
                                            Service</a></li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item"
                                    href="{{ route('second', ['pages', 'pricing']) }}">Pricing</a></li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['pages', 'faq']) }}">FAQs</a>
                            </li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['pages', 'error']) }}">Error
                                    404</a></li>
                            <li> <a class="dropdown-item"
                                    href="{{ route('second', ['pages', 'coming-soon']) }}">Coming Soon</a></li>
                        </ul>
                    </li>

                    <!-- Nav item Components -->


                    <!-- Nav item link-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
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
        </div>
    </nav>
    <!--Main menu link END -->
</header>
<!-- Header END -->
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Main Banner START -->
    <section class="position-relative">

        <!-- Svg decoration -->
        <div class="position-absolute top-50 start-0 translate-middle-y d-none d-md-block">
            <img src="/images/element/decoration.svg" alt="">
        </div>

        <div class="container">
            <!-- Content and Image START -->
            <div class="row g-4 g-lg-5 align-items-center">
                <!-- Content -->
                <div class="col-lg-6 position-relative">
                    <h6 class="text-uppercase">🤩 Easy Way To Conform Ticket</h6>
                    <!-- Title -->
                    <h1 class="mb-2">Book Your Tour Ticket Now!</h1>
                    <!-- Info -->
                    <p class="mb-4">Speedily say has suitable disposal add boy. On forth doubt miles of child.
                        Exercise joy man children rejoiced.</p>

                    <!-- Form START -->
                    <form class="row g-4">
                        <!-- Destination -->
                        <div class="col-12">
                            <label class="small">Destination</label>
                            <div class="form-border-bottom form-control-transparent d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <!-- Icon -->
                                    <i class="bi bi-geo-alt text-secondary d-block"></i>
                                </div>
                                <!-- Input field -->
                                <div class="flex-grow-1">
                                    <!-- Cities -->
                                    <div class="form-fs-lg">
                                        <select class="form-select js-choice h5" data-search-enabled="true"
                                            aria-label=".form-select-sm">
                                            <option value="" selected>Select location</option>
                                            <option>San Jacinto, USA</option>
                                            <option>North Dakota, Canada</option>
                                            <option>West Virginia, Paris</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Check in -->
                        <div class="col-md-6">
                            <label class="small">Check in</label>
                            <div class="form-border-bottom form-control-transparent d-flex align-items-center">
                                <!-- Icon -->
                                <i class="bi bi-calendar text-secondary d-block me-2"></i>
                                <!-- Cities -->
                                <div class="form-fs-lg">
                                    <input type="text" class="form-control flatpickr" data-date-format="d/M/Y"
                                        placeholder="Select Date">
                                </div>
                            </div>
                        </div>

                        <!-- Check Out -->
                        <div class="col-md-6">
                            <label class="small">Check Out</label>
                            <div class="form-border-bottom form-control-transparent d-flex align-items-center">
                                <!-- Icon -->
                                <i class="bi bi-calendar text-secondary d-block me-2"></i>
                                <!-- Cities -->
                                <div class="form-fs-lg">
                                    <input type="text" class="form-control flatpickr" data-date-format="d/M/Y"
                                        placeholder="Select Date">
                                </div>
                            </div>
                        </div>

                        <!-- Occupant -->
                        <div class="col-md-6">
                            <label class="small">Occupant</label>
                            <div class="form-border-bottom form-control-transparent d-flex align-items-center">
                                <!-- Icon -->
                                <i class="fa-solid fa-user-group text-secondary d-block me-2"></i>
                                <!-- Cities -->
                                <div class="form-fs-lg">
                                    <div class="dropdown guest-selector me-2">
                                        <input type="text"
                                            class="form-guest-selector form-control selection-result"
                                            placeholder="Select occupant" id="dropdownShare"
                                            data-bs-auto-close="outside" data-bs-toggle="dropdown">

                                        <!-- dropdown items -->
                                        <ul class="dropdown-menu guest-selector-dropdown"
                                            aria-labelledby="dropdownShare">
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
                                                    <button type="button"
                                                        class="btn btn-link child-remove p-0 mb-0"><i
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
                                                    <button type="button"
                                                        class="btn btn-link room-remove p-0 mb-0"><i
                                                            class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                                    <h6 class="guest-selector-count mb-0 rooms">1</h6>
                                                    <button type="button" class="btn btn-link room-add p-0 mb-0"><i
                                                            class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tour type -->
                        <div class="col-md-6">
                            <label class="small">Tour type</label>
                            <div class="form-border-bottom form-control-transparent d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <!-- Icon -->
                                    <i class="fa-solid fa-torii-gate text-secondary d-block"></i>
                                </div>
                                <!-- Input field -->
                                <div class="flex-grow-1">
                                    <!-- Cities -->
                                    <div class="form-fs-lg">
                                        <select class="form-select js-choice h5" data-search-enabled="true"
                                            aria-label=".form-select-sm">
                                            <option value="" selected>Select type</option>
                                            <option>Adventure</option>
                                            <option>Beach</option>
                                            <option>Desert</option>
                                            <option>History</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="col-12">
                            <button class="btn btn-primary w-100 mb-0">Check Availability</button>
                        </div>
                    </form>
                    <!-- Form END -->
                </div>

                <!-- Image -->
                <div class="col-lg-6 position-relative">
                    <img src="/images/bg/09.jpg" class="rounded" alt="">
                </div>
            </div>
            <!-- Content and Image END -->
        </div>
    </section>
    <!-- =======================
        Main Banner END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')    

<!-- Back to top -->
<div class="back-top"></div>
@endsection