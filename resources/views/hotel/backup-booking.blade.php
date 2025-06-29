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
            <button class="navbar-toggler ms-auto mx-3 p-0 p-sm-2" type="button" data-bs-toggle="collapse"
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
                                    <li> <a class="dropdown-item" href="{{ route('second', ['directory' , 'detail']) }}">Directory Detail</a></li>
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

                    <!-- Nav item Account -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accounntMenu"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
                        <ul class="dropdown-menu" aria-labelledby="accounntMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">User Profile</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('second', ['account' , 'profile']) }}">My Profile</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['account' , 'bookings']) }}">My Bookings</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['account' , 'travelers']) }}">Travelers</a> </li>
                                    <li> <a class="dropdown-item" href="account-payment-details.html">Payment
                                            Details</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['account' , 'wishlist']) }}">Wishlist</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['account' , 'settings']) }}">Settings</a> </li>
                                    <li> <a class="dropdown-item" href="account-delete.html">Delete Profile</a> </li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Agent Dashboard</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('second', ['agent' , 'dashboard']) }}">Dashboard</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['agent' , 'listings']) }}">Listings</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['agent' , 'bookings']) }}">Bookings</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['agent' , 'activities']) }}">Activities</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['agent' , 'earnings']) }}">Earnings</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['agent' , 'reviews']) }}">Reviews</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['agent' , 'settings']) }}">Settings</a> </li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="{{ route('second', ['admin' , 'dashboard']) }}">Master Admin</a> </li>
                        </ul>
                    </li>

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
                <!-- Search dropdown START -->
                <li class="nav-item dropdown nav-search me-3 d-none d-sm-block">
                    <a class="nav-notification btn btn-light mb-0 p-0" href="#" id="searchDropdown"
                        role="button" data-bs-auto-close="outside" data-bs-display="static"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-search"> </i>
                    </a>
                    <div class="dropdown-menu dropdown-animation dropdown-menu-end p-2"
                        aria-labelledby="searchDropdown">
                        <div class="nav flex-nowrap align-items-center">
                            <div class="nav-item w-100">
                                <form class="input-group">
                                    <input class="form-control border-primary" type="search" placeholder="Search..."
                                        aria-label="Search">
                                    <button class="btn btn-primary m-0" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Search dropdown END -->

                <!-- Notification dropdown START -->
                <li class="nav-item dropdown me-3">
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
                <li class="nav-item dropdown">
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
            Page banner START -->
    <section class="py-0">
        <div class="container">
            <!-- Card START -->
            <div class="card bg-light overflow-hidden px-sm-5">
                <div class="row align-items-center g-4">

                    <!-- Content -->
                    <div class="col-sm-9">
                        <div class="card-body">
                            <!-- Breadcrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('root') }}"><i
                                                class="bi bi-house me-1"></i> Home</a></li>
                                    <li class="breadcrumb-item">Hotel detail</li>
                                    <li class="breadcrumb-item active">Booking</li>
                                </ol>
                            </nav>
                            <!-- Title -->
                            <h1 class="m-0 h2 card-title">Review your Booking</h1>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="col-sm-3 text-end d-none d-sm-block">
                        <img src="/images/element/17.svg" class="mb-n4" alt="">
                    </div>
                </div>
            </div>
            <!-- Card END -->
        </div>
    </section>
    <!-- =======================
            Page banner END -->

    <!-- =======================
            Page content START -->
    <section>
        <div class="container">
            <div class="row g-4 g-lg-5">

                <!-- Left side content START -->
                <div class="col-xl-8">
                    <div class="vstack gap-5">
                        <!-- Hotel information START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header p-4 border-bottom">
                                <!-- Title -->
                                <h3 class="mb-0"><i class="fa-solid fa-hotel me-2"></i>Hotel Information</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-4">
                                <!-- Card list START -->
                                <div class="card mb-4">
                                    <div class="row align-items-center">
                                        <!-- Image -->
                                        <div class="col-sm-6 col-md-3">
                                            <img src="/images/category/hotel/4by3/02.jpg" class="card-img"
                                                alt="">
                                        </div>

                                        <!-- Card Body -->
                                        <div class="col-sm-6 col-md-9">
                                            <div class="card-body pt-3 pt-sm-0 p-0">
                                                <!-- Title -->
                                                <h5 class="card-title"><a href="#">Pride moon Village Resort &
                                                        Spa</a></h5>
                                                <p class="small mb-2"><i class="bi bi-geo-alt me-2"></i>5855 W Century
                                                    Blvd, Los Angeles - 90045</p>

                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fa-solid fa-star-half-alt text-warning"></i></li>
                                                    <li class="list-inline-item ms-2 h6 small fw-bold mb-0">4.5/5.0
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Card list END -->

                                <!-- Information START -->
                                <div class="row g-4">
                                    <!-- Item -->
                                    <div class="col-lg-4">
                                        <div class="bg-light py-3 px-4 rounded-3">
                                            <h6 class="fw-light small mb-1">Check-in</h6>
                                            <h5 class="mb-1">4 March 2022</h5>
                                            <small><i class="bi bi-alarm me-1"></i>12:30 pm</small>
                                        </div>
                                    </div>

                                    <!-- Item -->
                                    <div class="col-lg-4">
                                        <div class="bg-light py-3 px-4 rounded-3">
                                            <h6 class="fw-light small mb-1">Check out</h6>
                                            <h5 class="mb-1">8 March 2022</h5>
                                            <small><i class="bi bi-alarm me-1"></i>4:30 pm</small>
                                        </div>
                                    </div>

                                    <!-- Item -->
                                    <div class="col-lg-4">
                                        <div class="bg-light py-3 px-4 rounded-3">
                                            <h6 class="fw-light small mb-1">Rooms & Guests</h6>
                                            <h5 class="mb-1">2 G - 1 R</h5>
                                            <small><i class="bi bi-brightness-high me-1"></i>3 Nights - 4 Days</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Information END -->

                                <!-- Card START -->
                                <div class="card border mt-4">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom d-md-flex justify-content-md-between">
                                        <h5 class="card-title mb-0">Deluxe Pool View with Breakfast</h5>
                                        <a href="#" class="btn btn-link p-0 mb-0">View Cancellation Policy</a>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body">
                                        <h6>Price Included</h6>
                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                    class="bi bi-patch-check-fill text-success me-2"></i>Free Breakfast
                                                and Lunch/Dinner.</li>
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                    class="bi bi-patch-check-fill text-success me-2"></i>Great Small
                                                Breaks.</li>
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                    class="bi bi-patch-check-fill text-success me-2"></i>Free Stay for
                                                Kids Below the age of 12 years.</li>
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                    class="bi bi-patch-check-fill text-success me-2"></i>On
                                                Cancellation, You will not get any refund</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Card END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Hotel information END -->

                        <!-- Guest detail START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header border-bottom p-4">
                                <h4 class="card-title mb-0"><i class="bi bi-people-fill me-2"></i>Guest Details</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-4">
                                <!-- Form START -->
                                <form class="row g-4">
                                    <!-- Title -->
                                    <div class="col-12">
                                        <div class="bg-light rounded-2 px-4 py-3">
                                            <h6 class="mb-0">Main Guest</h6>
                                        </div>
                                    </div>

                                    <!-- Select -->
                                    <div class="col-md-2">
                                        <div class="form-size-lg">
                                            <label class="form-label">Title</label>
                                            <select class="form-select js-choice">
                                                <option selected>Mr</option>
                                                <option>Mrs</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Input -->
                                    <div class="col-md-5">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Enter your name">
                                    </div>

                                    <!-- Input -->
                                    <div class="col-md-5">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Enter your name">
                                    </div>

                                    <!-- Button -->
                                    <div class="col-12">
                                        <a href="#" class="btn btn-link mb-0 p-0"><i
                                                class="fa-solid fa-plus me-2"></i>Add New Guest</a>
                                    </div>

                                    <!-- Input -->
                                    <div class="col-md-6">
                                        <label class="form-label">Email id</label>
                                        <input type="email" class="form-control form-control-lg"
                                            placeholder="Enter your email">
                                        <div id="emailHelp" class="form-text">(Booking voucher will be sent to this
                                            email ID)</div>
                                    </div>

                                    <!-- Input -->
                                    <div class="col-md-6">
                                        <label class="form-label">Mobile number</label>
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Enter your mobile number">
                                    </div>
                                </form>
                                <!-- Form END -->

                                <!-- Alert START -->
                                <div class="alert alert-info my-4" role="alert">
                                    <a href="{{ route('second', ['auth' , 'sign-up']) }}" class="alert-heading h6">Login</a> to prefill all details
                                    and get access to secret deals
                                </div>
                                <!-- Alert END -->

                                <!-- Special request START -->
                                <div class="card border mt-4">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="card-title mb-0">Special request</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <form class="hstack flex-wrap gap-3">
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="hotelType1">
                                                <label class="form-check-label" for="hotelType1">Smoking room</label>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="hotelType2">
                                                <label class="form-check-label" for="hotelType2">Late check-in</label>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="hotelType3">
                                                <label class="form-check-label" for="hotelType3">Early
                                                    check-in</label>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="hotelType4">
                                                <label class="form-check-label" for="hotelType4">Room on a high
                                                    floor</label>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="hotelType5">
                                                <label class="form-check-label" for="hotelType5">Large bed</label>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="hotelType6">
                                                <label class="form-check-label" for="hotelType6">Airport
                                                    transfer</label>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="hotelType8">
                                                <label class="form-check-label" for="hotelType8">Twin beds</label>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Card body END -->
                                </div>
                                <!-- Special request END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Guest detail END -->

                        <!-- Payment Options START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header border-bottom p-4">
                                <!-- Title -->
                                <h4 class="card-title mb-0"><i class="bi bi-wallet-fill me-2"></i>Payment Options</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-4 pb-0">
                                <!-- Action box START -->
                                <div class="bg-primary bg-opacity-10 rounded-3 mb-4 p-3">
                                    <div class="d-md-flex justify-content-md-between align-items-center">
                                        <!-- Image and title -->
                                        <div class="d-sm-flex align-items-center mb-2 mb-md-0">
                                            <!-- Image -->
                                            <img src="/images/element/16.svg" class="h-50px" alt="">
                                            <!-- Title -->
                                            <div class="ms-sm-3 mt-2 mt-sm-0">
                                                <h5 class="card-title mb-0">Get Additional Discount</h5>
                                                <p class="mb-0">Login to access saved payments and discounts!</p>
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <a href="{{ route('second', ['auth' , 'sign-in']) }}" class="btn btn-primary mb-0">Login now</a>
                                    </div>
                                </div>
                                <!-- Action box END -->

                                <!-- Accordion START -->
                                <div class="accordion accordion-icon accordion-bg-light" id="accordioncircle">
                                    <!-- Credit or debit card START -->
                                    <div class="accordion-item mb-3">
                                        <h6 class="accordion-header" id="heading-1">
                                            <button class="accordion-button rounded collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                                aria-expanded="true" aria-controls="collapse-1">
                                                <i class="bi bi-credit-card text-primary me-2"></i> <span
                                                    class="me-5">Credit or Debit Card</span>
                                            </button>
                                        </h6>
                                        <div id="collapse-1" class="accordion-collapse collapse show"
                                            aria-labelledby="heading-1" data-bs-parent="#accordioncircle">
                                            <!-- Accordion body -->
                                            <div class="accordion-body">

                                                <!-- Card list -->
                                                <div class="d-sm-flex justify-content-sm-between my-3">
                                                    <h6 class="mb-2 mb-sm-0">We Accept:</h6>
                                                    <ul class="list-inline my-0">
                                                        <li class="list-inline-item"> <a href="#"><img
                                                                    src="/images/element/visa.svg" class="h-30px"
                                                                    alt=""></a></li>
                                                        <li class="list-inline-item"> <a href="#"><img
                                                                    src="/images/element/mastercard.svg"
                                                                    class="h-30px" alt=""></a></li>
                                                        <li class="list-inline-item"> <a href="#"><img
                                                                    src="/images/element/expresscard.svg"
                                                                    class="h-30px" alt=""></a></li>
                                                    </ul>
                                                </div>

                                                <!-- Form START -->
                                                <form class="row g-3">
                                                    <!-- Card number -->
                                                    <div class="col-12">
                                                        <label class="form-label"><span class="h6 fw-normal">Card
                                                                Number *</span></label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control" maxlength="14"
                                                                placeholder="XXXX XXXX XXXX XXXX">
                                                            <img src="/images/element/visa.svg"
                                                                class="w-30px position-absolute top-50 end-0 translate-middle-y me-2 d-none d-sm-block"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <!-- Expiration Date -->
                                                    <div class="col-md-6">
                                                        <label class="form-label"><span
                                                                class="h6 fw-normal">Expiration date *</span></label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" maxlength="2"
                                                                placeholder="Month">
                                                            <input type="text" class="form-control" maxlength="4"
                                                                placeholder="Year">
                                                        </div>
                                                    </div>
                                                    <!--Cvv code  -->
                                                    <div class="col-md-6">
                                                        <label class="form-label"><span class="h6 fw-normal">CVV / CVC
                                                                *</span></label>
                                                        <input type="text" class="form-control" maxlength="3"
                                                            placeholder="xxx">
                                                    </div>
                                                    <!-- Card name -->
                                                    <div class="col-12">
                                                        <label class="form-label"><span class="h6 fw-normal">Name on
                                                                Card *</span></label>
                                                        <input type="text" class="form-control"
                                                            aria-label="name of card holder"
                                                            placeholder="Enter card holder name">
                                                    </div>

                                                    <!-- Alert box START -->
                                                    <div class="col-12">
                                                        <div class="alert alert-success alert-dismissible fade show my-3"
                                                            role="alert">

                                                            <!-- Title -->
                                                            <div class="d-sm-flex align-items-center mb-3">
                                                                <img src="/images/element/12.svg"
                                                                    class="w-40px me-3 mb-2 mb-sm-0" alt="">
                                                                <h5 class="alert-heading mb-0">$50,000 Covid Cover &
                                                                    More</h5>
                                                            </div>

                                                            <!-- Content -->
                                                            <p class="mb-2">Aww yeah, you successfully read this
                                                                important alert message. This example text is going to
                                                                run a bit longer so that you can see how spacing within
                                                                an alert works with this kind of content.</p>

                                                            <!-- Button and price -->
                                                            <div class="d-sm-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-success mb-2 mb-sm-0 me-3"><i
                                                                        class="fa-regular fa-plus me-2"></i>Add</a>
                                                                <h6 class="mb-0">$69 per person</h6>
                                                            </div>

                                                            <!-- Close button -->
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>
                                                    </div>
                                                    <!-- Alert box END -->

                                                    <!-- Buttons -->
                                                    <div class="col-12">
                                                        <div
                                                            class="d-sm-flex justify-content-sm-between align-items-center">
                                                            <h4>$1800 <span class="small fs-6">Due now</span></h4>
                                                            <button class="btn btn-primary mb-0">Pay Now</button>
                                                        </div>
                                                    </div>

                                                </form>
                                                <!-- Form END -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Credit or debit card END -->

                                    <!-- Net banking START -->
                                    <div class="accordion-item mb-3">
                                        <h6 class="accordion-header" id="heading-2">
                                            <button class="accordion-button collapsed rounded" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                                aria-expanded="false" aria-controls="collapse-2">
                                                <i class="bi bi-globe2 text-primary me-2"></i> <span
                                                    class="me-5">Pay with Net Banking</span>
                                            </button>
                                        </h6>
                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            aria-labelledby="heading-2" data-bs-parent="#accordioncircle">
                                            <!-- Accordion body -->
                                            <div class="accordion-body">

                                                <!-- Form START -->
                                                <form class="row g-3 mt-1">

                                                    <!-- Popular bank -->
                                                    <ul class="list-inline mb-0">

                                                        <li class="list-inline-item">
                                                            <h6 class="mb-0">Popular Bank:</h6>
                                                        </li>
                                                        <!-- Rent -->
                                                        <li class="list-inline-item">
                                                            <input type="radio" class="btn-check" name="options"
                                                                id="option1">
                                                            <label class="btn btn-light btn-primary-soft-check"
                                                                for="option1">
                                                                <img src="/images/element/13.svg" class="h-20px me-2"
                                                                    alt="">Bank of America
                                                            </label>
                                                        </li>
                                                        <!-- Sale -->
                                                        <li class="list-inline-item">
                                                            <input type="radio" class="btn-check" name="options"
                                                                id="option2">
                                                            <label class="btn btn-light btn-primary-soft-check"
                                                                for="option2">
                                                                <img src="/images/element/15.svg" class="h-20px me-2"
                                                                    alt="">Bank of Japan
                                                            </label>
                                                        </li>
                                                        <!-- Buy -->
                                                        <li class="list-inline-item">
                                                            <input type="radio" class="btn-check" name="options"
                                                                id="option3">
                                                            <label class="btn btn-light btn-primary-soft-check"
                                                                for="option3">
                                                                <img src="/images/element/14.svg" class="h-20px me-2"
                                                                    alt="">VIVIV Bank
                                                            </label>
                                                        </li>
                                                    </ul>

                                                    <p class="mb-1">In order to complete your transaction, we will
                                                        transfer you over to Booking secure servers.</p>
                                                    <p class="my-0">Select your bank from the drop-down list and
                                                        click proceed to continue with your payment.</p>
                                                    <!-- Select bank -->
                                                    <div class="col-md-6">
                                                        <select class="form-select form-select-sm js-choice border-0">
                                                            <option value="" selected>Please choose one</option>
                                                            <option>Bank of America</option>
                                                            <option>Bank of India</option>
                                                            <option>Bank of London</option>
                                                        </select>
                                                    </div>

                                                    <!-- Button -->
                                                    <div class="d-grid">
                                                        <button class="btn btn-success mb-0">Pay $1800</button>
                                                    </div>

                                                </form>
                                                <!-- Form END -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Net banking END -->

                                    <!-- Paypal START -->
                                    <div class="accordion-item mb-3">
                                        <h6 class="accordion-header" id="heading-3">
                                            <button class="accordion-button collapsed rounded" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                                aria-expanded="false" aria-controls="collapse-3">
                                                <i class="bi bi-paypal text-primary me-2"></i><span class="me-5">Pay
                                                    with Paypal</span>
                                            </button>
                                        </h6>
                                        <div id="collapse-3" class="accordion-collapse collapse"
                                            aria-labelledby="heading-3" data-bs-parent="#accordioncircle">
                                            <!-- Accordion body -->
                                            <div class="accordion-body">
                                                <div class="card card-body border align-items-center text-center mt-4">
                                                    <!-- Image -->
                                                    <img src="/images/element/paypal.svg" class="h-70px mb-3"
                                                        alt="">
                                                    <p class="mb-3"><strong>Tips:</strong> Simply click on the
                                                        payment button below to proceed to the PayPal payment page.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary mb-0">Pay
                                                        with paypal</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Paypal END -->
                                </div>
                                <!-- Accordion END -->
                            </div>
                            <!-- Card body END -->

                            <div class="card-footer p-4 pt-0">
                                <!-- Condition link -->
                                <p class="mb-0">By processing, You accept Booking <a href="#">Terms of
                                        Services</a> and <a href="#">Policy</a></p>
                            </div>
                        </div>
                        <!-- Payment Options END -->
                    </div>
                </div>
                <!-- Left side content END -->

                <!-- Right side content START -->
                <aside class="col-xl-4">
                    <div class="row g-4">

                        <!-- Price summary START -->
                        <div class="col-md-6 col-xl-12">
                            <div class="card shadow rounded-2">
                                <!-- card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-title mb-0">Price Summary</h5>
                                </div>

                                <!-- Card body -->
                                <div class="card-body">
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0">Room Charges</span>
                                            <span class="fs-5">$28,660</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0">Total Discount<span
                                                    class="badge text-bg-danger smaller mb-0 ms-2">10%
                                                    off</span></span>
                                            <span class="fs-5 text-success">-$2,560</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0">Price after discount</span>
                                            <span class="fs-5">$1852</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0">Taxes % Fees</span>
                                            <span class="fs-5">$350</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Card footer -->
                                <div class="card-footer border-top">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="h5 mb-0">Payable Now</span>
                                        <span class="h5 mb-0">$22,500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Price summary END -->

                        <!-- Offer and discount START -->
                        <div class="col-md-6 col-xl-12">
                            <div class="card shadow">
                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <div class="cardt-title">
                                        <h5 class="mb-0">Offer &amp; Discount</h5>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">

                                    <!-- Radio -->
                                    <div class="bg-light rounded-2 p-3">
                                        <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" name="discountOptions"
                                                id="discount1" value="option1" checked>
                                            <label class="form-check-label h5 mb-0" for="discount1">GSTBOOK</label>
                                            <p class="mb-1 small">Congratulations! You have saved $230 with GSTBOOK.
                                            </p>
                                            <h6 class="mb-0 text-success">-$230</h6>
                                        </div>
                                    </div>

                                    <!-- Input group -->
                                    <div class="input-group mt-3">
                                        <input class="form-control form-control" placeholder="Coupon code">
                                        <button type="button" class="btn btn-primary">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Offer and discount END -->

                        <!-- Information START -->
                        <div class="col-md-6 col-xl-12">
                            <div class="card shadow">
                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-title mb-0">Why Sign up or Log in</h5>
                                </div>

                                <!-- Card body -->
                                <div class="card-body">
                                    <!-- List -->
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-check text-success me-2"></i>
                                            <span class="h6 fw-normal">Get Access to Secret Deal</span>
                                        </li>

                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-check text-success me-2"></i>
                                            <span class="h6 fw-normal">Book Faster</span>
                                        </li>

                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-check text-success me-2"></i>
                                            <span class="h6 fw-normal">Manage Your Booking</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Information END -->

                    </div>
                </aside>
                <!-- Right side content END -->
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
            Page content START -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

@endsection