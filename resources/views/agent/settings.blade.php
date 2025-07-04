@extends('layouts.base')

@section('header')
<!-- Header START -->
<header class="navbar-light header-sticky">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{ route('root') }}">
                <img class="light-mode-item navbar-brand-item" src="/images/logo.svg" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="/images/logo-light.svg" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto mx-3 me-md-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse"
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
                <ul class="navbar-nav navbar-nav-scroll">

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
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hero', 'inline-form']) }}">Hero Inline Form</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hero', 'multiple-search']) }}">Hero Multiple
                                            Search</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hero' , 'image-gallery']) }}">Hero Image
                                            Gallery</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hero', 'split']) }}">Hero Split</a></li>
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

                    <!-- Nav item Account -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accounntMenu"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
                        <ul class="dropdown-menu" aria-labelledby="accounntMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">User Profile</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['account', 'profile']) }}">My Profile</a> </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['account', 'bookings']) }}">My Bookings</a>
                                    </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['account', 'travelers']) }}">Travelers</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="account-payment-details.html">Payment
                                            Details</a> </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['account', 'wishlist']) }}">Wishlist</a> </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['account', 'settings']) }}">Settings</a> </li>
                                    <li> <a class="dropdown-item" href="account-delete.html">Delete Profile</a> </li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Agent Dashboard</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['agent', 'dashboard']) }}">Dashboard</a> </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['agent', 'listings']) }}">Listings</a> </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['agent', 'bookings']) }}">Bookings</a> </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['agent', 'activities']) }}">Activities</a>
                                    </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['agent', 'earnings']) }}">Earnings</a> </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['agent', 'reviews']) }}">Reviews</a> </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['agent', 'settings']) }}">Settings</a> </li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="{{ route('second', ['admin', 'dashboard']) }}">Master
                                    Admin</a> </li>
                        </ul>
                    </li>

                    <!-- Nav item Contact -->
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('second', ['pages', 'contact']) }}">Contact Us</a> </li>
                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Profile and Notification START -->
            <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

                <!-- Notification dropdown START -->
                <li class="nav-item ms-0 ms-md-3 dropdown">
                    <!-- Notification button -->
                    <a class="nav-link p-0" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside">
                        <i class="bi bi-bell fa-fw fs-5"></i>
                    </a>
                    <!-- Notification dote -->
                    <span class="notif-badge animation-blink"></span>

                    <!-- Notification dropdown menu START -->
                    <div
                        class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg">
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
                    <a class="avatar avatar-xs p-0" href="#" id="profileDropdown" role="button"
                        data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg" alt="avatar">
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

                <!-- Button -->
                <li class="nav-item ms-3 d-none d-sm-block">
                    <a class="btn btn-sm btn-primary-soft mb-0" href="#"><i class="bi bi-lightning-charge"></i>
                        Upgrade now</a>
                </li>
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
        Menu item START -->
    <section class="pt-4">
        <div class="container">
            <div class="card rounded-3 border p-3 pb-2">
                <!-- Avatar and info START -->
                <div class="d-sm-flex align-items-center">
                    <div class="avatar avatar-xl mb-2 mb-sm-0">
                        <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg" alt="">
                    </div>
                    <h4 class="mb-2 mb-sm-0 ms-sm-3"><span class="fw-light">Hi</span> Jacqueline Miller</h4>
                    <a href="{{ route('second', ['listing', 'add-listing']) }}"
                        class="btn btn-sm btn-primary-soft mb-0 ms-auto flex-shrink-0"><i
                            class="bi bi-plus-lg fa-fw me-2"></i>Add New Listing</a>
                </div>
                <!-- Avatar and info START -->

                <!-- Responsive navbar toggler -->
                <button class="btn btn-primary w-100 d-block d-xl-none mt-2" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#dashboardMenu" aria-controls="dashboardMenu">
                    <i class="bi bi-list"></i> Dashboard Menu
                </button>

                <!-- Nav links START -->
                <div class="offcanvas-xl offcanvas-end mt-xl-3" tabindex="-1" id="dashboardMenu">
                    <div class="offcanvas-header border-bottom p-3">
                        <h5 class="offcanvas-title">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            data-bs-target="#dashboardMenu" aria-label="Close"></button>
                    </div>
                    <!-- Offcanvas body -->
                    <div class="offcanvas-body p-3 p-xl-0">
                        @include('layouts.partials.agent-nav')

                    </div>
                </div>
                <!-- Nav links END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Menu item END -->

    <!-- =======================
        Content START -->
    <section class="pt-0">
        <div class="container vstack gap-4">
            <!-- Title START -->
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-4 mb-0"><i class="bi bi-gear fa-fw me-1"></i>Settings</h1>
                </div>
            </div>
            <!-- Title END -->

            <!-- Tabs START -->
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-light pb-0 px-2 px-lg-0 rounded-top">
                        <ul class="nav nav-tabs nav-bottom-line nav-responsive border-0 nav-justified" role="tablist">
                            <li class="nav-item"> <a class="nav-link mb-0 active" data-bs-toggle="tab"
                                    href="#tab-1"><i class="fas fa-cog fa-fw me-2"></i>Edit Profile</a> </li>
                            <li class="nav-item"> <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-2"><i
                                        class="fas fa-bell fa-fw me-2"></i>Notification Settings</a> </li>
                            <li class="nav-item"> <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3"><i
                                        class="fas fa-user-circle fa-fw me-2"></i>Account Settings</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Tabs END -->

            <!-- Tabs Content START -->
            <div class="row g-4">
                <div class="col-12">
                    <div class="tab-content">
                        <!-- Tab content 1 START -->
                        <div class="tab-pane show active" id="tab-1">
                            <div class="row g-4">
                                <!-- Edit profile START -->
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-header border-bottom">
                                            <h5 class="card-header-title">Edit Profile</h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- Full name -->
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" value="Jacqueline Miller"
                                                    placeholder="Name">
                                            </div>
                                            <!-- Profile picture -->
                                            <div class="mb-3">
                                                <label class="form-label">Profile picture</label>
                                                <!-- Avatar upload START -->
                                                <div class="d-flex align-items-center">
                                                    <label class="position-relative me-4" for="uploadfile-1"
                                                        title="Replace this pic">
                                                        <!-- Avatar place holder -->
                                                        <span class="avatar avatar-xl">
                                                            <img id="uploadfile-1-preview"
                                                                class="avatar-img rounded-circle border border-white border-3 shadow"
                                                                src="/images/avatar/01.jpg" alt="">
                                                        </span>
                                                    </label>
                                                    <!-- Upload button -->
                                                    <label class="btn btn-sm btn-primary-soft mb-0"
                                                        for="uploadfile-1">Change</label>
                                                    <input id="uploadfile-1" class="form-control d-none"
                                                        type="file">
                                                </div>
                                                <!-- Avatar upload END -->
                                            </div>
                                            <!-- Email id -->
                                            <div class="mb-3">
                                                <label class="form-label">Email id</label>
                                                <input type="email" class="form-control" value="hello@gmail.com"
                                                    placeholder="Enter your email id">
                                            </div>
                                            <!-- Mobile number -->
                                            <div class="mb-3">
                                                <label class="form-label">Mobile number</label>
                                                <input type="text" class="form-control" value="222 555 666"
                                                    placeholder="Enter your mobile number">
                                            </div>
                                            <!-- Location -->
                                            <div class="mb-3">
                                                <label class="form-label">Location</label>
                                                <input class="form-control" type="text" value="New Hampshire">
                                            </div>
                                            <!-- Birthday -->
                                            <div>
                                                <label class="form-label">Birthday</label>
                                                <input type="text" class="form-control flatpickr"
                                                    value="29 Aug 1994" placeholder="Enter your birth-date"
                                                    data-date-format="d M Y">
                                            </div>
                                            <!-- Save button -->
                                            <div class="d-flex justify-content-end mt-4">
                                                <a href="#" class="btn text-secondary border-0 me-2">Discard</a>
                                                <a href="#" class="btn btn-primary">Save change</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit profile END -->

                                <!-- Update Email START -->
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-header border-bottom">
                                            <h5 class="card-header-title">Update Email</h5>
                                            <p class="mb-0 small">Your current email address is <span
                                                    class="text-primary">example@gmail.com</span></p>
                                        </div>
                                        <form class="card-body">
                                            <!-- Email -->
                                            <label class="form-label">Enter your new email id</label>
                                            <input type="email" class="form-control"
                                                placeholder="Enter your email id">

                                            <div class="text-end mt-3">
                                                <a href="#" class="btn btn-primary mb-0">Save Email</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Update Email END -->

                                <!-- Update Password START -->
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-header border-bottom">
                                            <h5 class="card-header-title">Update Password</h5>
                                            <p class="mb-0 small">Your current email address is <span
                                                    class="text-primary">example@gmail.com</span></p>
                                        </div>
                                        <!-- Card body START -->
                                        <form class="card-body">
                                            <!-- Current password -->
                                            <div class="mb-3">
                                                <label class="form-label">Current password</label>
                                                <input class="form-control" type="password"
                                                    placeholder="Enter current password">
                                            </div>
                                            <!-- New password -->
                                            <div class="mb-3">
                                                <label class="form-label"> Enter new password</label>
                                                <div class="input-group">
                                                    <input class="form-control fakepassword" type="password"
                                                        id="psw-input" placeholder="Enter new password">
                                                    <span class="input-group-text p-0 bg-transparent">
                                                        <i
                                                            class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- Confirm -->
                                            <div>
                                                <label class="form-label">Confirm new password</label>
                                                <input class="form-control" type="password"
                                                    placeholder="Confirm new password">
                                            </div>

                                            <div class="text-end mt-3">
                                                <a href="#" class="btn btn-primary mb-0">Change Password</a>
                                            </div>
                                        </form>
                                        <!-- Card body END -->
                                    </div>
                                </div>
                                <!-- Update Password END -->
                            </div>
                        </div>
                        <!-- Tab content 1 END -->

                        <!-- Tab content 2 START -->
                        <div class="tab-pane" id="tab-2">
                            <div class="card border mb-4">
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom">
                                    <h5 class="card-header-title">Notification Settings</h5>
                                    <p class="mb-0">Figure what you want to be notified about, and unsubscribe from
                                        what you don't.</p>
                                </div>

                                <!-- Form START -->
                                <form class="card-body">
                                    <!-- Radio -->
                                    <div class="mb-4">
                                        <label class="form-label">Newsletter *</label>
                                        <div class="d-flex gap-4 flex-wrap">
                                            <div class="form-check radio-bg-light">
                                                <input class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDaily" checked="">
                                                <label class="form-check-label" for="flexRadioDaily">
                                                    Daily
                                                </label>
                                            </div>
                                            <div class="form-check radio-bg-light">
                                                <input class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Twice a week
                                                </label>
                                            </div>
                                            <div class="form-check radio-bg-light">
                                                <input class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Weekly
                                                </label>
                                            </div>
                                            <div class="form-check radio-bg-light">
                                                <input class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Never
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Switch -->
                                    <div
                                        class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                        <label class="form-check-label ps-0 pe-4" for="checkPrivacy1">Notify me via
                                            email when logging in</label>
                                        <input class="form-check-input flex-shrink-0" type="checkbox"
                                            id="checkPrivacy1" checked="">
                                    </div>

                                    <!-- Switch -->
                                    <div
                                        class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                        <label class="form-check-label ps-0 pe-4" for="checkPrivacy2">I would like to
                                            receive booking assist reminders</label>
                                        <input class="form-check-input flex-shrink-0" type="checkbox"
                                            id="checkPrivacy2" checked="">
                                    </div>

                                    <!-- Switch -->
                                    <div
                                        class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                        <label class="form-check-label ps-0 pe-4" for="checkPrivacy3">I would like to
                                            receive emails about Booking promotions</label>
                                        <input class="form-check-input flex-shrink-0" type="checkbox"
                                            id="checkPrivacy3" checked="">
                                    </div>

                                    <!-- Switch -->
                                    <div
                                        class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                        <label class="form-check-label ps-0 pe-4" for="checkPrivacy7">I would like to
                                            know about information and offers related to my upcoming trip</label>
                                        <input class="form-check-input flex-shrink-0" type="checkbox"
                                            id="checkPrivacy7" checked="">
                                    </div>

                                    <!-- Switch -->
                                    <div
                                        class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                        <label class="form-check-label ps-0 pe-4" for="checkPrivacy4">Show your
                                            profile publicly</label>
                                        <input class="form-check-input flex-shrink-0" type="checkbox"
                                            id="checkPrivacy4">
                                    </div>

                                    <!-- Switch -->
                                    <div
                                        class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                        <label class="form-check-label ps-0 pe-4" for="checkPrivacy6">Send SMS
                                            confirmation for all online payments</label>
                                        <input class="form-check-input flex-shrink-0" type="checkbox"
                                            id="checkPrivacy6">
                                    </div>

                                    <!-- Switch -->
                                    <div
                                        class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                        <label class="form-check-label ps-0 pe-4" for="checkPrivacy5">Check which
                                            device(s) access your account</label>
                                        <input class="form-check-input flex-shrink-0" type="checkbox"
                                            id="checkPrivacy5" checked="">
                                    </div>

                                    <!-- Button -->
                                    <div class="d-sm-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-primary me-2 mb-0">Save
                                            changes</button>
                                        <a href="#" class="btn btn-sm btn-outline-secondary mb-0">Cancel</a>
                                    </div>
                                </form>
                                <!-- Form END -->
                            </div>
                        </div>
                        <!-- Tab content 2 END -->

                        <!-- Tab content 3 START -->
                        <div class="tab-pane" id="tab-3">
                            <div class="row g-4">
                                <!-- Security settings START -->
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-header border-bottom">
                                            <h5 class="card-header-title">Security settings</h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- Two step -->
                                            <form class="mb-3">
                                                <h6>Two-factor authentication</h6>
                                                <label class="form-label">Add a phone number to set up two-factor
                                                    authentication</label>
                                                <input type="text" class="form-control mb-2"
                                                    placeholder="Enter your mobile number">
                                                <button class="btn btn-sm btn-primary mb-0">Send Code</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Security settings END -->

                                <!-- Linked account START -->
                                <div class="col-lg-6">
                                    <div class="card border rounded-3">
                                        <!-- Card header -->
                                        <div class="card-header border-bottom">
                                            <h5 class="card-header-title">Linked account</h5>
                                        </div>
                                        <!-- Card body START -->
                                        <div class="card-body pb-0">
                                            <!-- Google -->
                                            <div
                                                class="position-relative mb-4 d-sm-flex bg-success bg-opacity-10 border border-success p-3 rounded">
                                                <!-- Title and content -->
                                                <h2 class="fs-1 mb-0 me-3"><i
                                                        class="fab fa-google text-google-icon"></i></h2>
                                                <div>
                                                    <div
                                                        class="position-absolute top-0 start-100 translate-middle bg-white rounded-circle lh-1 h-20px">
                                                        <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                                    </div>
                                                    <h6 class="mb-1">Google</h6>
                                                    <p class="mb-1 small">You are successfully connected to your Google
                                                        account</p>
                                                    <!-- Button -->
                                                    <button type="button"
                                                        class="btn btn-sm btn-danger mb-0">Invoke</button>
                                                    <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn
                                                        more</a>
                                                </div>
                                            </div>

                                            <!-- Linkedin -->
                                            <div class="mb-4 d-sm-flex border p-3 rounded">
                                                <!-- Title and content -->
                                                <h2 class="fs-1 mb-0 me-3"><i
                                                        class="fab fa-linkedin-in text-linkedin"></i></h2>
                                                <div>
                                                    <h6 class="mb-1">Linkedin</h6>
                                                    <p class="mb-1 small">Connect with Linkedin account for a
                                                        personalized experience</p>
                                                    <!-- Button -->
                                                    <button type="button" class="btn btn-sm btn-primary mb-0">Connect
                                                        Linkedin</button>
                                                    <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn
                                                        more</a>
                                                </div>
                                            </div>

                                            <!-- Facebook -->
                                            <div class="mb-4 d-sm-flex border p-3 rounded">
                                                <!-- Title and content -->
                                                <h2 class="fs-1 mb-0 me-3"><i
                                                        class="fab fa-facebook text-facebook"></i></h2>
                                                <div>
                                                    <h6 class="mb-1">Facebook</h6>
                                                    <p class="mb-1 small">Connect with Facebook account for a
                                                        personalized experience</p>
                                                    <!-- Button -->
                                                    <button type="button" class="btn btn-sm btn-primary mb-0">Connect
                                                        Facebook</button>
                                                    <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card body END -->
                                    </div>
                                </div>
                                <!-- Linked account END -->

                                <!-- Social account END -->
                                <div class="col-lg-6">
                                    <div class="card border rounded-3">
                                        <!-- Card header -->
                                        <div class="card-header border-bottom">
                                            <h5 class="card-header-title">Social media profile</h5>
                                        </div>
                                        <!-- Card body START -->
                                        <div class="card-body">
                                            <!-- Facebook username -->
                                            <div class="mb-3">
                                                <label class="form-label"><i
                                                        class="fab fa-facebook text-facebook me-2"></i>Enter facebook
                                                    username</label>
                                                <input class="form-control" type="text" value="loristev"
                                                    placeholder="Enter username">
                                            </div>

                                            <!-- Twitter username -->
                                            <div class="mb-3">
                                                <label class="form-label"><i
                                                        class="bi bi-twitter text-twitter me-2"></i>Enter twitter
                                                    username</label>
                                                <input class="form-control" type="text" value="loristev"
                                                    placeholder="Enter username">
                                            </div>

                                            <!-- Instagram username -->
                                            <div class="mb-3">
                                                <label class="form-label"><i
                                                        class="fab fa-instagram text-instagram-gradient me-2"></i>Enter
                                                    instagram username</label>
                                                <input class="form-control" type="text" value="loristev"
                                                    placeholder="Enter username">
                                            </div>

                                            <!-- Youtube -->
                                            <div class="mb-3">
                                                <label class="form-label"><i
                                                        class="fab fa-youtube text-youtube me-2"></i>Add your youtube
                                                    profile URL</label>
                                                <input class="form-control" type="text"
                                                    value="https://www.youtube.com/in/Booking-05620abc"
                                                    placeholder="Enter username">
                                            </div>

                                            <!-- Button -->
                                            <div class="d-flex justify-content-end mt-4">
                                                <button type="button" class="btn btn-primary mb-0">Save
                                                    change</button>
                                            </div>
                                        </div>
                                        <!-- Card body END -->
                                    </div>
                                </div>
                                <!-- Social account END -->

                                <!-- Active logs START -->
                                <div class="col-12">
                                    <div class="card border">

                                        <!-- Card header -->
                                        <div class="card-header border-bottom">
                                            <h5 class="card-header-title">Active Logs</h5>
                                        </div>

                                        <!-- Card body START -->
                                        <div class="card-body">
                                            <!-- Table START -->
                                            <div class="table-responsive border-0">
                                                <table class="table align-middle p-4 mb-0 table-hover">

                                                    <!-- Table head -->
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col" class="border-0 rounded-start">Browser
                                                            </th>
                                                            <th scope="col" class="border-0">IP</th>
                                                            <th scope="col" class="border-0">Time</th>
                                                            <th scope="col" class="border-0 rounded-end">Action
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <!-- Table body START -->
                                                    <tbody>
                                                        <!-- Table row -->
                                                        <tr>
                                                            <td> Chrome On Window </td>
                                                            <td> 173.238.198.108 </td>
                                                            <td> 12 Nov 2021 </td>
                                                            <td> <button
                                                                    class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                                                    out</button> </td>
                                                        </tr>

                                                        <!-- Table row -->
                                                        <tr>
                                                            <td> Mozilla On Window </td>
                                                            <td> 107.222.146.90 </td>
                                                            <td> 08 Nov 2021 </td>
                                                            <td> <button
                                                                    class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                                                    out</button> </td>
                                                        </tr>

                                                        <!-- Table row -->
                                                        <tr>
                                                            <td> Chrome On iMac </td>
                                                            <td> 231.213.125.55 </td>
                                                            <td> 06 Nov 2021 </td>
                                                            <td> <button
                                                                    class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                                                    out</button> </td>
                                                        </tr>

                                                        <!-- Table row -->
                                                        <tr>
                                                            <td>Mozilla On Window </td>
                                                            <td> 37.242.105.138 </td>
                                                            <td> 02 Nov 2021 </td>
                                                            <td> <button
                                                                    class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                                                    out</button> </td>
                                                        </tr>
                                                    </tbody>
                                                    <!-- Table body END -->
                                                </table>
                                            </div>
                                            <!-- Table END -->

                                            <!-- Active session -->
                                            <form class="mt-4">
                                                <h6 class="mb-0">Active sessions</h6>
                                                <p class="mb-2">Selecting "Sign out" will sign you out from all
                                                    devices except this one. This can take up to 10 minutes.</p>
                                                <button class="btn btn-sm btn-danger mb-0">Sign Out of all
                                                    devices</button>
                                            </form>
                                        </div>
                                        <!-- Card body END -->
                                    </div>
                                </div>
                                <!-- Active logs END -->
                            </div>
                        </div>
                        <!-- Tab content 3 END -->
                    </div>
                </div>
            </div>
            <!-- Tabs Content END -->
        </div>
    </section>
    <!-- =======================
        Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection