@extends('layouts.base')

@section('header')
<!-- Header START -->
<header class="header-sticky">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-light navbar-expand-xl">
        <div class="container-fluid px-md-5">
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

                            <li>
                                <div class="dropdown-item">Coming Soon...</div>
                            </li>
                        </ul>
                    </li>

                    <!-- Nav item Contact us -->
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('second', ['pages', 'contact']) }}">Contact us</a> </li>

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
    <section class="pt-4 pt-sm-5">
        <!-- Background and title -->
        <div class="container pb-6">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-9 text-center mx-auto">
                    <!-- Title -->
                    <h1>It's a Big World Out There Go
                        <span class="position-relative z-index-9">And Explore
                            <!-- SVG START -->
                            <span
                                class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-sm-block">
                                <svg class="fill-info" width="356.55px" height="79.36px" viewBox="0 0 356.55 79.36">
                                    <path
                                        d="M0,56.76c13.15-11.68,37.75-14.87,47.45-15.62c20.85-1.62,41.75,1.22,62.2,5.16c43.41,8.37,85.85,20.68,129.83,26.22 c21.05,2.65,42.12,3.47,62.96-1.21c18.31-4.11,38.98-12.97,47.7-30.8C360.39,19.59,342.4,5,322.82,2.25 c-18.69-2.62-37.64,3.81-53.23,13.85c-2.82,1.82-5.87,4.32-8.53,5.85c12.91-10.62,28.31-18.89,45.01-21.3 c17.11-2.48,43.7,1.69,49.46,21.27c5.65,19.17-13.23,36.76-28.31,44.63c-18.02,9.41-39.47,13-59.65,12.81 c-44.06-0.42-88.81-11.18-131.38-21.67C97.79,48.21,42.36,30.73,0,56.76z" />
                                </svg>
                            </span>
                            <!-- SVG END -->
                        </span>
                    </h1>
                    <!-- Content -->
                    <p class="mb-3">Speedily say has suitable disposal add boy. On forth doubt miles of child.
                        Exercise joy man children rejoiced.</p>
                    <!-- Button -->
                    <a href="#" class="btn btn-lg btn-primary-soft me-2 mb-0">Explore Holidays<i
                            class="bi bi-arrow-right ms-2"></i></a>
                </div>
            </div> <!-- Row END -->
        </div>

        <!-- Image -->
        <div class="container-fluid overflow-hidden">
            <div class="row g-4 g-lg-3 justify-content-lg-between">

                <div class="col-6 col-sm-4 position-relative ms-lg-n5">

                    <!-- SVG decoration -->
                    <figure class="position-absolute top-0 end-0 me-n8 mt-4 z-index-1">
                        <svg width="222.93px" height="172.15px">
                            <path class="fill-primary"
                                d="M0,152.3C25.31,99.13,142.25,26.36,187.95,4.96c21.41-10.03,48.53-5.45,27.23,19.21 c-11.03,12.77-28.92,28.13-37.16,35.18c-20.39,17.45-46.34,42.82-64.05,67.05c-13.98,19.11-10.02,14.46,6.64,0.11 c13.57-11.69,29.17-25.12,40.65-32.05c3.52-2.13,6.77-3.66,9.64-4.43c9.07-2.42,13,3.08,9.55,10.77 c-7.7,17.16-22.46,31.32-31.36,47.7c-4.97,9.14-13.24,28.13,7.7,16.79c3.8-2.05,7.36-4.37,9.99-5.45l0.79,1.35 c-2.43,0.88-36.48,26.3-27.52-3.45c5.4-17.94,19.83-32.81,29.27-48.73c5.34-9,8.21-13.61-3.32-6.64 c-10.7,6.46-26.03,19.67-39.37,31.15c-15.56,13.4-28.68,24.69-33.81,21.53c-11.43-7.04,27.26-51,35.01-59.53 c14.77-16.28,30.38-31.21,45.8-44.61c6.33-5.48,18.43-16.43,28.35-25.25c11.62-10.34,15.39-16.14-5.89-6.18 C152.63,39.83,42.78,111.18,18.54,162.1L0,152.3z" />
                        </svg>
                    </figure>

                    <!-- Images -->
                    <div class="row g-xl-7 align-items-center">
                        <div class="col-6 d-none d-md-block">
                            <a data-glightbox data-gallery="gallery" href="/images/bg/16.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="/images/bg/16.jpg" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mt-lg-8">
                            <!-- Image item -->
                            <a data-glightbox data-gallery="gallery" href="/images/bg/15.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden mb-4 mb-xl-7">
                                    <!-- Image -->
                                    <img src="/images/bg/15.jpg" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>

                            <!-- Image item -->
                            <a data-glightbox data-gallery="gallery" href="/images/bg/11.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="/images/bg/11.jpg" class="rounded-3" alt="">
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

                <!-- Image -->
                <div class="col-sm-4 position-relative order-2 order-sm-1 z-index-9">
                    <!-- Image item -->
                    <a data-glightbox data-gallery="gallery" href="/images/bg/18.jpg">
                        <div class="card card-element-hover card-overlay-hover overflow-hidden">
                            <!-- Image -->
                            <img src="/images/bg/18.jpg" class="rounded-3" alt="">
                            <!-- Full screen button -->
                            <div class="hover-element w-100 h-100">
                                <i
                                    class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-sm-4 position-relative me-lg-n5 order-1">
                    <!-- Svg decoration -->
                    <figure class="position-absolute end-0 top-0 d-none d-md-block">
                        <svg height="400" class="fill-primary opacity-2" viewBox="0 0 340 340">
                            <circle cx="194.2" cy="2.2" r="2.2"></circle>
                            <circle cx="2.2" cy="2.2" r="2.2"></circle>
                            <circle cx="218.2" cy="2.2" r="2.2"></circle>
                            <circle cx="26.2" cy="2.2" r="2.2"></circle>
                            <circle cx="242.2" cy="2.2" r="2.2"></circle>
                            <circle cx="50.2" cy="2.2" r="2.2"></circle>
                            <circle cx="266.2" cy="2.2" r="2.2"></circle>
                            <circle cx="74.2" cy="2.2" r="2.2"></circle>
                            <circle cx="290.2" cy="2.2" r="2.2"></circle>
                            <circle cx="98.2" cy="2.2" r="2.2"></circle>
                            <circle cx="314.2" cy="2.2" r="2.2"></circle>
                            <circle cx="122.2" cy="2.2" r="2.2"></circle>
                            <circle cx="338.2" cy="2.2" r="2.2"></circle>
                            <circle cx="146.2" cy="2.2" r="2.2"></circle>
                            <circle cx="170.2" cy="2.2" r="2.2"></circle>
                            <circle cx="194.2" cy="26.2" r="2.2"></circle>
                            <circle cx="2.2" cy="26.2" r="2.2"></circle>
                            <circle cx="218.2" cy="26.2" r="2.2"></circle>
                            <circle cx="26.2" cy="26.2" r="2.2"></circle>
                            <circle cx="242.2" cy="26.2" r="2.2"></circle>
                            <circle cx="50.2" cy="26.2" r="2.2"></circle>
                            <circle cx="266.2" cy="26.2" r="2.2"></circle>
                            <circle cx="74.2" cy="26.2" r="2.2"></circle>
                            <circle cx="290.2" cy="26.2" r="2.2"></circle>
                            <circle cx="98.2" cy="26.2" r="2.2"></circle>
                            <circle cx="314.2" cy="26.2" r="2.2"></circle>
                            <circle cx="122.2" cy="26.2" r="2.2"></circle>
                            <circle cx="338.2" cy="26.2" r="2.2"></circle>
                            <circle cx="146.2" cy="26.2" r="2.2"></circle>
                            <circle cx="170.2" cy="26.2" r="2.2"></circle>
                            <circle cx="194.2" cy="50.2" r="2.2"></circle>
                            <circle cx="2.2" cy="50.2" r="2.2"></circle>
                            <circle cx="218.2" cy="50.2" r="2.2"></circle>
                            <circle cx="26.2" cy="50.2" r="2.2"></circle>
                            <circle cx="242.2" cy="50.2" r="2.2"></circle>
                            <circle cx="50.2" cy="50.2" r="2.2"></circle>
                            <circle cx="266.2" cy="50.2" r="2.2"></circle>
                            <circle cx="74.2" cy="50.2" r="2.2"></circle>
                            <circle cx="290.2" cy="50.2" r="2.2"></circle>
                            <circle cx="98.2" cy="50.2" r="2.2"></circle>
                            <circle cx="314.2" cy="50.2" r="2.2"></circle>
                            <circle cx="122.2" cy="50.2" r="2.2"></circle>
                            <circle cx="338.2" cy="50.2" r="2.2"></circle>
                            <circle cx="146.2" cy="50.2" r="2.2"></circle>
                            <circle cx="170.2" cy="50.2" r="2.2"></circle>
                            <circle cx="194.2" cy="74.2" r="2.2"></circle>
                            <circle cx="2.2" cy="74.2" r="2.2"></circle>
                            <circle cx="218.2" cy="74.2" r="2.2"></circle>
                            <circle cx="26.2" cy="74.2" r="2.2"></circle>
                            <circle cx="242.2" cy="74.2" r="2.2"></circle>
                            <circle cx="50.2" cy="74.2" r="2.2"></circle>
                            <circle cx="266.2" cy="74.2" r="2.2"></circle>
                            <circle cx="74.2" cy="74.2" r="2.2"></circle>
                            <circle cx="290.2" cy="74.2" r="2.2"></circle>
                            <circle cx="98.2" cy="74.2" r="2.2"></circle>
                            <circle cx="314.2" cy="74.2" r="2.2"></circle>
                            <circle cx="122.2" cy="74.2" r="2.2"></circle>
                            <circle cx="338.2" cy="74.2" r="2.2"></circle>
                            <circle cx="146.2" cy="74.2" r="2.2"></circle>
                            <circle cx="170.2" cy="74.2" r="2.2"></circle>
                            <circle cx="194.2" cy="98.2" r="2.2"></circle>
                            <circle cx="2.2" cy="98.2" r="2.2"></circle>
                            <circle cx="218.2" cy="98.2" r="2.2"></circle>
                            <circle cx="26.2" cy="98.2" r="2.2"></circle>
                            <circle cx="242.2" cy="98.2" r="2.2"></circle>
                            <circle cx="50.2" cy="98.2" r="2.2"></circle>
                            <circle cx="266.2" cy="98.2" r="2.2"></circle>
                            <circle cx="74.2" cy="98.2" r="2.2"></circle>
                            <circle cx="290.2" cy="98.2" r="2.2"></circle>
                            <circle cx="98.2" cy="98.2" r="2.2"></circle>
                            <circle cx="314.2" cy="98.2" r="2.2"></circle>
                            <circle cx="122.2" cy="98.2" r="2.2"></circle>
                            <circle cx="338.2" cy="98.2" r="2.2"></circle>
                            <circle cx="146.2" cy="98.2" r="2.2"></circle>
                            <circle cx="170.2" cy="98.2" r="2.2"></circle>
                            <circle cx="194.2" cy="122.2" r="2.2"></circle>
                            <circle cx="2.2" cy="122.2" r="2.2"></circle>
                            <circle cx="218.2" cy="122.2" r="2.2"></circle>
                            <circle cx="26.2" cy="122.2" r="2.2"></circle>
                            <circle cx="242.2" cy="122.2" r="2.2"></circle>
                            <circle cx="50.2" cy="122.2" r="2.2"></circle>
                            <circle cx="266.2" cy="122.2" r="2.2"></circle>
                            <circle cx="74.2" cy="122.2" r="2.2"></circle>
                            <circle cx="290.2" cy="122.2" r="2.2"></circle>
                            <circle cx="98.2" cy="122.2" r="2.2"></circle>
                            <circle cx="314.2" cy="122.2" r="2.2"></circle>
                            <circle cx="122.2" cy="122.2" r="2.2"></circle>
                            <circle cx="338.2" cy="122.2" r="2.2"></circle>
                            <circle cx="146.2" cy="122.2" r="2.2"></circle>
                            <circle cx="170.2" cy="122.2" r="2.2"></circle>
                            <circle cx="194.2" cy="146.2" r="2.2"></circle>
                            <circle cx="2.2" cy="146.2" r="2.2"></circle>
                            <circle cx="218.2" cy="146.2" r="2.2"></circle>
                            <circle cx="26.2" cy="146.2" r="2.2"></circle>
                            <circle cx="242.2" cy="146.2" r="2.2"></circle>
                            <circle cx="50.2" cy="146.2" r="2.2"></circle>
                            <circle cx="266.2" cy="146.2" r="2.2"></circle>
                            <circle cx="74.2" cy="146.2" r="2.2"></circle>
                            <circle cx="290.2" cy="146.2" r="2.2"></circle>
                            <circle cx="98.2" cy="146.2" r="2.2"></circle>
                            <circle cx="314.2" cy="146.2" r="2.2"></circle>
                            <circle cx="122.2" cy="146.2" r="2.2"></circle>
                            <circle cx="338.2" cy="146.2" r="2.2"></circle>
                            <circle cx="146.2" cy="146.2" r="2.2"></circle>
                            <circle cx="170.2" cy="146.2" r="2.2"></circle>
                            <circle cx="194.2" cy="170.2" r="2.2"></circle>
                            <circle cx="2.2" cy="170.2" r="2.2"></circle>
                            <circle cx="218.2" cy="170.2" r="2.2"></circle>
                            <circle cx="26.2" cy="170.2" r="2.2"></circle>
                            <circle cx="242.2" cy="170.2" r="2.2"></circle>
                            <circle cx="50.2" cy="170.2" r="2.2"></circle>
                            <circle cx="266.2" cy="170.2" r="2.2"></circle>
                            <circle cx="74.2" cy="170.2" r="2.2"></circle>
                            <circle cx="290.2" cy="170.2" r="2.2"></circle>
                            <circle cx="98.2" cy="170.2" r="2.2"></circle>
                            <circle cx="314.2" cy="170.2" r="2.2"></circle>
                            <circle cx="122.2" cy="170.2" r="2.2"></circle>
                            <circle cx="338.2" cy="170.2" r="2.2"></circle>
                            <circle cx="146.2" cy="170.2" r="2.2"></circle>
                            <circle cx="170.2" cy="170.2" r="2.2"></circle>
                            <circle cx="194.2" cy="194.2" r="2.2"></circle>
                            <circle cx="2.2" cy="194.2" r="2.2"></circle>
                            <circle cx="218.2" cy="194.2" r="2.2"></circle>
                            <circle cx="26.2" cy="194.2" r="2.2"></circle>
                            <circle cx="242.2" cy="194.2" r="2.2"></circle>
                            <circle cx="50.2" cy="194.2" r="2.2"></circle>
                            <circle cx="266.2" cy="194.2" r="2.2"></circle>
                            <circle cx="74.2" cy="194.2" r="2.2"></circle>
                            <circle cx="290.2" cy="194.2" r="2.2"></circle>
                            <circle cx="98.2" cy="194.2" r="2.2"></circle>
                            <circle cx="314.2" cy="194.2" r="2.2"></circle>
                            <circle cx="122.2" cy="194.2" r="2.2"></circle>
                            <circle cx="338.2" cy="194.2" r="2.2"></circle>
                            <circle cx="146.2" cy="194.2" r="2.2"></circle>
                            <circle cx="170.2" cy="194.2" r="2.2"></circle>
                            <circle cx="194.2" cy="218.2" r="2.2"></circle>
                            <circle cx="2.2" cy="218.2" r="2.2"></circle>
                            <circle cx="218.2" cy="218.2" r="2.2"></circle>
                            <circle cx="26.2" cy="218.2" r="2.2"></circle>
                            <circle cx="242.2" cy="218.2" r="2.2"></circle>
                            <circle cx="50.2" cy="218.2" r="2.2"></circle>
                            <circle cx="266.2" cy="218.2" r="2.2"></circle>
                            <circle cx="74.2" cy="218.2" r="2.2"></circle>
                            <circle cx="290.2" cy="218.2" r="2.2"></circle>
                            <circle cx="98.2" cy="218.2" r="2.2"></circle>
                            <circle cx="314.2" cy="218.2" r="2.2"></circle>
                            <circle cx="122.2" cy="218.2" r="2.2"></circle>
                            <circle cx="338.2" cy="218.2" r="2.2"></circle>
                            <circle cx="146.2" cy="218.2" r="2.2"></circle>
                            <circle cx="170.2" cy="218.2" r="2.2"></circle>
                            <circle cx="194.2" cy="242.2" r="2.2"></circle>
                            <circle cx="2.2" cy="242.2" r="2.2"></circle>
                            <circle cx="218.2" cy="242.2" r="2.2"></circle>
                            <circle cx="26.2" cy="242.2" r="2.2"></circle>
                            <circle cx="242.2" cy="242.2" r="2.2"></circle>
                            <circle cx="50.2" cy="242.2" r="2.2"></circle>
                            <circle cx="266.2" cy="242.2" r="2.2"></circle>
                            <circle cx="74.2" cy="242.2" r="2.2"></circle>
                            <circle cx="290.2" cy="242.2" r="2.2"></circle>
                            <circle cx="98.2" cy="242.2" r="2.2"></circle>
                            <circle cx="314.2" cy="242.2" r="2.2"></circle>
                            <circle cx="122.2" cy="242.2" r="2.2"></circle>
                            <circle cx="338.2" cy="242.2" r="2.2"></circle>
                            <circle cx="146.2" cy="242.2" r="2.2"></circle>
                            <circle cx="170.2" cy="242.2" r="2.2"></circle>
                            <circle cx="194.2" cy="266.2" r="2.2"></circle>
                            <circle cx="2.2" cy="266.2" r="2.2"></circle>
                            <circle cx="218.2" cy="266.2" r="2.2"></circle>
                            <circle cx="26.2" cy="266.2" r="2.2"></circle>
                            <circle cx="242.2" cy="266.2" r="2.2"></circle>
                            <circle cx="50.2" cy="266.2" r="2.2"></circle>
                            <circle cx="266.2" cy="266.2" r="2.2"></circle>
                            <circle cx="74.2" cy="266.2" r="2.2"></circle>
                            <circle cx="290.2" cy="266.2" r="2.2"></circle>
                            <circle cx="98.2" cy="266.2" r="2.2"></circle>
                            <circle cx="314.2" cy="266.2" r="2.2"></circle>
                            <circle cx="122.2" cy="266.2" r="2.2"></circle>
                            <circle cx="338.2" cy="266.2" r="2.2"></circle>
                            <circle cx="146.2" cy="266.2" r="2.2"></circle>
                            <circle cx="170.2" cy="266.2" r="2.2"></circle>
                            <circle cx="194.2" cy="290.2" r="2.2"></circle>
                            <circle cx="2.2" cy="290.2" r="2.2"></circle>
                            <circle cx="218.2" cy="290.2" r="2.2"></circle>
                            <circle cx="26.2" cy="290.2" r="2.2"></circle>
                            <circle cx="242.2" cy="290.2" r="2.2"></circle>
                            <circle cx="50.2" cy="290.2" r="2.2"></circle>
                            <circle cx="266.2" cy="290.2" r="2.2"></circle>
                            <circle cx="74.2" cy="290.2" r="2.2"></circle>
                            <circle cx="290.2" cy="290.2" r="2.2"></circle>
                            <circle cx="98.2" cy="290.2" r="2.2"></circle>
                            <circle cx="314.2" cy="290.2" r="2.2"></circle>
                            <circle cx="122.2" cy="290.2" r="2.2"></circle>
                            <circle cx="338.2" cy="290.2" r="2.2"></circle>
                            <circle cx="146.2" cy="290.2" r="2.2"></circle>
                            <circle cx="170.2" cy="290.2" r="2.2"></circle>
                            <circle cx="194.2" cy="314.2" r="2.2"></circle>
                            <circle cx="2.2" cy="314.2" r="2.2"></circle>
                            <circle cx="218.2" cy="314.2" r="2.2"></circle>
                            <circle cx="26.2" cy="314.2" r="2.2"></circle>
                            <circle cx="242.2" cy="314.2" r="2.2"></circle>
                            <circle cx="50.2" cy="314.2" r="2.2"></circle>
                            <circle cx="266.2" cy="314.2" r="2.2"></circle>
                            <circle cx="74.2" cy="314.2" r="2.2"></circle>
                            <circle cx="290.2" cy="314.2" r="2.2"></circle>
                            <circle cx="98.2" cy="314.2" r="2.2"></circle>
                            <circle cx="314.2" cy="314.2" r="2.2"></circle>
                            <circle cx="122.2" cy="314.2" r="2.2"></circle>
                            <circle cx="338.2" cy="314.2" r="2.2"></circle>
                            <circle cx="146.2" cy="314.2" r="2.2"></circle>
                            <circle cx="170.2" cy="314.2" r="2.2"></circle>
                            <circle cx="194.2" cy="338.2" r="2.2"></circle>
                            <circle cx="2.2" cy="338.2" r="2.2"></circle>
                            <circle cx="218.2" cy="338.2" r="2.2"></circle>
                            <circle cx="26.2" cy="338.2" r="2.2"></circle>
                            <circle cx="242.2" cy="338.2" r="2.2"></circle>
                            <circle cx="50.2" cy="338.2" r="2.2"></circle>
                            <circle cx="266.2" cy="338.2" r="2.2"></circle>
                            <circle cx="74.2" cy="338.2" r="2.2"></circle>
                            <circle cx="290.2" cy="338.2" r="2.2"></circle>
                            <circle cx="98.2" cy="338.2" r="2.2"></circle>
                            <circle cx="314.2" cy="338.2" r="2.2"></circle>
                            <circle cx="122.2" cy="338.2" r="2.2"></circle>
                            <circle cx="338.2" cy="338.2" r="2.2"></circle>
                            <circle cx="146.2" cy="338.2" r="2.2"></circle>
                            <circle cx="170.2" cy="338.2" r="2.2"></circle>
                        </svg>
                    </figure>

                    <div class="row g-xl-7 position-relative">
                        <div class="col-md-6 mt-lg-8">
                            <!-- Image with play button -->
                            <a data-glightbox data-gallery="gallery" href="https://www.youtube.com/embed/tXHviS-4ygo">
                                <div class="card overflow-hidden mb-4 mb-xl-7">
                                    <!-- Image -->
                                    <img src="/images/bg/13.jpg" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="w-100 h-100">
                                        <span
                                            class="btn btn-lg btn-round btn-dark position-absolute top-50 start-50 translate-middle mb-0"><i
                                                class="fas fa-play"></i></span>
                                    </div>
                                </div>
                            </a>

                            <!-- Image item -->
                            <a data-glightbox data-gallery="gallery" href="/images/bg/14.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="/images/bg/14.jpg" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 d-none d-md-block">
                            <!-- Image item -->
                            <a data-glightbox data-gallery="gallery" href="/images/bg/17.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden mb-4 mb-xl-7">
                                    <!-- Image -->
                                    <img src="/images/bg/17.jpg" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>

                            <!-- Image item -->
                            <a data-glightbox data-gallery="gallery" href="/images/bg/19.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="/images/bg/19.jpg" class="rounded-3" alt="">
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

            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Main banner END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection