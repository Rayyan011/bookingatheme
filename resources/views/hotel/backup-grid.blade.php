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
                                    <li> <a class="dropdown-item" href="/hotel/grid">Hotel Grid</a></li>
                                    <li> <a class="dropdown-item" href="/hotel/list">Hotel List</a></li>
                                    <li> <a class="dropdown-item" href="/hotel/detail">Hotel Detail</a></li>
                                    <li> <a class="dropdown-item"
                                            href="/hotel/room-detail">Room Detail</a></li>
                                    <li> <a class="dropdown-item" href="/hotel/booking">Hotel Booking</a></li>
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
    Main Banner START -->
    <section class="pt-0">
        <div class="container">
            <!-- Background image -->
            <div class="rounded-3 p-3 p-sm-5"
                style="background-image: url(/images/bg/05.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                <!-- Banner title -->
                <div class="row my-2 my-xl-5">
                    <div class="col-md-8 mx-auto">
                        <h1 class="text-center text-white">150 Hotels in New York</h1>
                    </div>
                </div>

                <!-- Booking from START -->
                <form class="bg-mode shadow rounded-3 position-relative p-4 pe-md-5 pb-5 pb-md-4 mb-4">
                    <div class="row g-4 align-items-center">
                        <!-- Location -->
                        <div class="col-lg-4">
                            <div class="form-control-border form-control-transparent form-fs-md d-flex">
                                <!-- Icon -->
                                <i class="bi bi-geo-alt fs-3 me-2 mt-2"></i>
                                <!-- Select input -->
                                <div class="flex-grow-1">
                                    <label class="form-label">Location</label>
                                    <select class="form-select js-choice" data-search-enabled="true">
                                        <option value="">Select location</option>
                                        <option selected>San Jacinto, USA</option>
                                        <option>North Dakota, Canada</option>
                                        <option>West Virginia, Paris</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Check in -->
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <!-- Icon -->
                                <i class="bi bi-calendar fs-3 me-2 mt-2"></i>
                                <!-- Date input -->
                                <div class="form-control-border form-control-transparent form-fs-md">
                                    <label class="form-label">Check in - out</label>
                                    <input type="text" class="form-control flatpickr" data-mode="range"
                                        placeholder="Select date" value="19 Sep to 28 Sep">
                                </div>
                            </div>
                        </div>

                        <!-- Guest -->
                        <div class="col-lg-4">
                            <div class="form-control-border form-control-transparent form-fs-md d-flex">
                                <!-- Icon -->
                                <i class="bi bi-person fs-3 me-2 mt-2"></i>
                                <!-- Dropdown input -->
                                <div class="w-100">
                                    <label class="form-label">Guests & rooms</label>
                                    <div class="dropdown guest-selector me-2">
                                        <input type="text"
                                            class="form-guest-selector form-control selection-result"
                                            value="2 Guests 1 Room" id="dropdownShare" data-bs-auto-close="outside"
                                            data-bs-toggle="dropdown">

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
                    </div>
                    <!-- Button -->
                    <div class="btn-position-md-middle">
                        <a class="icon-lg btn btn-round btn-primary mb-0" href="#"><i
                                class="bi bi-search fa-fw"></i></a>
                    </div>
                </form>
                <!-- Booking from END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Title and Tabs START -->
    <section class="pt-0 pb-4">
        <div class="container position-relative">

            <!-- Title and button START -->
            <div class="row">
                <div class="col-12">
                    <!-- Meta START -->
                    <div class="d-flex justify-content-between">
                        <!-- Filter collapse button -->
                        <input type="checkbox" class="btn-check" id="btn-check-soft">
                        <label class="btn btn-primary-soft btn-primary-check mb-0" for="btn-check-soft"
                            data-bs-toggle="collapse" data-bs-target="#collapseFilter"
                            aria-controls="collapseFilter">
                            <i class="bi fa-fe bi-sliders me-2"></i>Show Filters
                        </label>

                        <!-- tabs -->
                        <ul class="nav nav-pills nav-pills-dark" id="tour-pills-tab" role="tablist">
                            <!-- Tab item -->
                            <li class="nav-item">
                                <a class="nav-link rounded-start rounded-0 mb-0"
                                    href="{{ route('second', ['hotel', 'list']) }}"><i
                                        class="bi fa-fw bi-list-ul"></i></a>
                            </li>
                            <!-- Tab item -->
                            <li class="nav-item">
                                <a class="nav-link rounded-end rounded-0 mb-0 active"
                                    href="{{ route('second', ['hotel', 'grid']) }}"><i
                                        class="bi fa-fw bi-grid-fill"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Meta END -->
                </div>
            </div>
            <!-- Title and button END -->

            <!-- Collapse body START -->
            <div class="collapse" id="collapseFilter">
                <div class="card card-body bg-light p-4 mt-4 z-index-9">

                    <!-- Form START -->
                    <form class="row g-4">
                        <!-- Input item -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-control-borderless">
                                <label class="form-label">Enter Hotel Name</label>
                                <input type="text" class="form-control form-control-lg">
                            </div>
                        </div>

                        <!-- nouislider item -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-control-borderless">
                                <label class="form-label">Price Range</label>
                                <div class="position-relative">
                                    <div class="noui-wrapper">
                                        <div class="d-flex justify-content-between">
                                            <input type="text" class="text-body input-with-range-min">
                                            <input type="text" class="text-body input-with-range-max">
                                        </div>
                                        <div class="noui-slider-range mt-2" data-range-min='500'
                                            data-range-max='2000' data-range-selected-min='700'
                                            data-range-selected-max='1500'></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Select item -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-size-lg form-control-borderless">
                                <label class="form-label">Popular Filters</label>
                                <select class="form-select js-choice border-0">
                                    <option value="">Select Option</option>
                                    <option>Recently search</option>
                                    <option>Most popular</option>
                                    <option>Top rated</option>
                                </select>
                            </div>
                        </div>

                        <!-- Customer rating -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-control-borderless">
                                <label class="form-label">Customer Rating</label>
                                <ul class="list-inline mb-0 g-3">
                                    <!-- 1 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-1">
                                        <label class="btn btn-white btn-primary-soft-check"
                                            for="btn-check-1">3+</label>
                                    </li>
                                    <!-- 2 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-2">
                                        <label class="btn btn-white btn-primary-soft-check"
                                            for="btn-check-2">3.5+</label>
                                    </li>
                                    <!-- 3 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-3">
                                        <label class="btn btn-white btn-primary-soft-check"
                                            for="btn-check-3">4+</label>
                                    </li>
                                    <!-- 4 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-4">
                                        <label class="btn btn-white btn-primary-soft-check"
                                            for="btn-check-4">4.5+</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Star rating -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-control-borderless">
                                <label class="form-label">Star Rating</label>
                                <ul class="list-inline mb-0 g-3">
                                    <!-- 1 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-9">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-9">1<i
                                                class="bi bi-star-fill"></i></label>
                                    </li>
                                    <!-- 2 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-10">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-10">2<i
                                                class="bi bi-star-fill"></i></label>
                                    </li>
                                    <!-- 3 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-11">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-11">3<i
                                                class="bi bi-star-fill"></i></label>
                                    </li>
                                    <!-- 4 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-12">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-12">4<i
                                                class="bi bi-star-fill"></i></label>
                                    </li>
                                    <!-- 4 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-13">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-13">5<i
                                                class="bi bi-star-fill"></i></label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Select item -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-size-lg form-control-borderless">
                                <label class="form-label">Hotel Type</label>
                                <select class="form-select js-choice border-0">
                                    <option value="">Select Option</option>
                                    <option>Free Cancellation Available</option>
                                    <option>Pay At Hotel Available</option>
                                    <option>Free Breakfast Included</option>
                                </select>
                            </div>
                        </div>

                        <!-- Check box item -->
                        <div class="col-12">
                            <div class="form-control-borderless">
                                <label class="form-label">Amenities</label>
                                <div class="row g-3">
                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault">
                                                Air Conditioning
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault2">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault2">
                                                Room Services
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault3">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault3">
                                                Dining
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault4">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault4">
                                                Caretaker
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault5">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault5">
                                                Free Internet
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault6">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault6">
                                                Business Service
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault7">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault7">
                                                Bonfire
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault8">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault8">
                                                Mask
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault9">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault9">
                                                Spa
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault10">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault10">
                                                Swimming pool
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault11">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault11">
                                                Fitness Centre
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault12">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault12">
                                                Bar
                                            </label>
                                        </div>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="text-end align-items-center">
                            <button class="btn btn-link p-0 mb-0">Clear all</button>
                            <button class="btn btn-dark mb-0 ms-3">Apply filter</button>
                        </div>
                    </form>
                    <!-- Form END -->
                </div>
            </div>
            <!-- Collapse body END -->

        </div>
    </section>
    <!-- =======================
    Title and Tabs END -->

    <!-- =======================
    Hotel grid START -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-4">

                <!-- Card item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow p-2 pb-0 h-100">
                        <!-- Overlay item -->
                        <div class="position-absolute top-0 start-0 z-index-1 m-4">
                            <div class="badge bg-danger text-white">30% Off</div>
                        </div>

                        <!-- Slider START -->
                        <div class="tiny-slider arrow-round arrow-xs arrow-dark rounded-2 overflow-hidden">
                            <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false"
                                data-items="1">
                                <!-- Image item -->
                                <div><img src="/images/category/hotel/4by3/09.jpg" alt="Card image"></div>

                                <!-- Image item -->
                                <div><img src="/images/category/hotel/4by3/02.jpg" alt="Card image"></div>

                                <!-- Image item -->
                                <div><img src="/images/category/hotel/4by3/03.jpg" alt="Card image"></div>

                                <!-- Image item -->
                                <div><img src="/images/category/hotel/4by3/01.jpg" alt="Card image"></div>
                            </div>
                        </div>
                        <!-- Slider END -->

                        <!-- Card body START -->
                        <div class="card-body px-3 pb-0">
                            <!-- Rating and cart -->
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#" class="badge bg-dark text-white"><i
                                        class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.5</a>
                                <a href="#" class="h6 mb-0 z-index-2"><i class="bi fa-fw bi-bookmark"></i></a>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}">Hotel
                                    Baljees Regency</a></h5>

                            <!-- List -->
                            <ul class="nav nav-divider mb-2 mb-sm-3">
                                <li class="nav-item">Air Conditioning</li>
                                <li class="nav-item">Wifi</li>
                                <li class="nav-item">Kitchen</li>
                                <li class="nav-item">Pool</li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price and Button -->
                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                <!-- Price -->
                                <div class="d-flex align-items-center">
                                    <h5 class="fw-normal text-success mb-0 me-1">$750</h5>
                                    <span class="mb-0 me-2">/day</span>
                                    <span class="text-decoration-line-through">$1000</span>
                                </div>
                                <!-- Button -->
                                <div class="mt-2 mt-sm-0">
                                    <a href="{{ route('second', ['hotel', 'detail']) }}"
                                        class="btn btn-sm btn-primary-soft mb-0 w-100">View Detail<i
                                            class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow p-2 pb-0 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/4by3/10.jpg" class="rounded-2" alt="Card image">

                        <!-- Card body START -->
                        <div class="card-body px-3 pb-0">
                            <!-- Rating and cart -->
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#" class="badge bg-dark text-white"><i
                                        class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.0</a>
                                <a href="#" class="h6 mb-0 z-index-2"><i class="bi fa-fw bi-bookmark"></i></a>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}">Courtyard by
                                    Marriott New York </a></h5>

                            <!-- List -->
                            <ul class="nav nav-divider mb-2 mb-sm-3">
                                <li class="nav-item">Air Conditioning</li>
                                <li class="nav-item">Wifi</li>
                                <li class="nav-item">Pool</li>
                                <li class="nav-item">More+</li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price and Button -->
                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                <!-- Price -->
                                <div class="d-flex align-items-center">
                                    <h5 class="fw-normal text-success mb-0 me-1">$1200</h5>
                                    <span class="mb-0 me-2">/day</span>
                                </div>
                                <!-- Button -->
                                <div class="mt-2 mt-sm-0 z-index-2">
                                    <a href="{{ route('second', ['hotel', 'detail']) }}"
                                        class="btn btn-sm btn-primary-soft mb-0 w-100">View Detail<i
                                            class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow p-2 pb-0 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/4by3/08.jpg" class="rounded-2" alt="Card image">

                        <!-- Card body START -->
                        <div class="card-body px-3 pb-0">
                            <!-- Rating and cart -->
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#" class="badge bg-dark text-white"><i
                                        class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.8</a>
                                <a href="#" class="h6 mb-0 z-index-2"><i
                                        class="bi fa-fw bi-bookmark-fill text-danger"></i></a>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}">Club
                                    Quarters Hotel</a></h5>

                            <!-- List -->
                            <ul class="nav nav-divider mb-2 mb-sm-3">
                                <li class="nav-item">Air Conditioning</li>
                                <li class="nav-item">Wifi</li>
                                <li class="nav-item">Kitchen</li>
                                <li class="nav-item">Pool</li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price and Button -->
                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                <!-- Price -->
                                <div class="d-flex align-items-center">
                                    <h5 class="fw-normal text-success mb-0 me-1">$980</h5>
                                    <span class="mb-0 me-2">/day</span>
                                </div>
                                <!-- Button -->
                                <div class="mt-2 mt-sm-0 z-index-2">
                                    <a href="{{ route('second', ['hotel', 'detail']) }}"
                                        class="btn btn-sm btn-primary-soft mb-0 w-100">View Detail<i
                                            class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow p-2 pb-0 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/4by3/07.jpg" class="rounded-2" alt="Card image">

                        <!-- Card body START -->
                        <div class="card-body px-3 pb-0">
                            <!-- Rating and cart -->
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#" class="badge bg-dark text-white"><i
                                        class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.8</a>
                                <a href="#" class="h6 mb-0 z-index-2"><i
                                        class="bi fa-fw bi-bookmark-fill text-danger"></i></a>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}">Beverly
                                    Hills Marriott</a></h5>

                            <!-- List -->
                            <ul class="nav nav-divider mb-2 mb-sm-3">
                                <li class="nav-item">Air Conditioning</li>
                                <li class="nav-item">Wifi</li>
                                <li class="nav-item">Kitchen</li>
                                <li class="nav-item">Pool</li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price and Button -->
                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                <!-- Price -->
                                <div class="d-flex align-items-center">
                                    <h5 class="fw-normal text-success mb-0 me-1">$1400</h5>
                                    <span class="mb-0 me-2">/day</span>
                                </div>
                                <!-- Button -->
                                <div class="mt-2 mt-sm-0">
                                    <a href="{{ route('second', ['hotel', 'detail']) }}"
                                        class="btn btn-sm btn-primary-soft mb-0 w-100">View Detail<i
                                            class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow p-2 pb-0 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/4by3/02.jpg" class="rounded-2" alt="Card image">

                        <!-- Card body START -->
                        <div class="card-body px-3 pb-0">
                            <!-- Rating and cart -->
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#" class="badge bg-dark text-white"><i
                                        class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.5</a>
                                <a href="#" class="h6 mb-0 z-index-2"><i class="bi fa-fw bi-bookmark"></i></a>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}">Courtyard by
                                    Marriott New York </a></h5>

                            <!-- List -->
                            <ul class="nav nav-divider mb-2 mb-sm-3">
                                <li class="nav-item">Air Conditioning</li>
                                <li class="nav-item">Wifi</li>
                                <li class="nav-item">Kitchen</li>
                                <li class="nav-item">Pool</li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price and Button -->
                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                <!-- Price -->
                                <div class="d-flex align-items-center">
                                    <h5 class="fw-normal text-success mb-0 me-1">$680</h5>
                                    <span class="mb-0 me-2">/day</span>
                                </div>
                                <!-- Button -->
                                <div class="mt-2 mt-sm-0">
                                    <a href="{{ route('second', ['hotel', 'detail']) }}"
                                        class="btn btn-sm btn-primary-soft mb-0 w-100">View Detail<i
                                            class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow p-2 pb-0 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/4by3/05.jpg" class="rounded-2" alt="Card image">

                        <!-- Card body START -->
                        <div class="card-body px-3 pb-0">
                            <!-- Rating and cart -->
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#" class="badge bg-dark text-white"><i
                                        class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.4</a>
                                <a href="#" class="h6 mb-0 z-index-2"><i class="bi fa-fw bi-bookmark"></i></a>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}">Park Plaza
                                    Lodge Hotel</a></h5>

                            <!-- List -->
                            <ul class="nav nav-divider mb-2 mb-sm-3">
                                <li class="nav-item">Air Conditioning</li>
                                <li class="nav-item">Wifi</li>
                                <li class="nav-item">Kitchen</li>
                                <li class="nav-item">More+</li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price and Button -->
                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                <!-- Price -->
                                <div class="d-flex align-items-center">
                                    <h5 class="fw-normal text-success mb-0 me-1">$740</h5>
                                    <span class="mb-0 me-2">/day</span>
                                </div>
                                <!-- Button -->
                                <div class="mt-2 mt-sm-0">
                                    <a href="{{ route('second', ['hotel', 'detail']) }}"
                                        class="btn btn-sm btn-primary-soft mb-0 w-100">View Detail<i
                                            class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow p-2 pb-0 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/4by3/04.jpg" class="rounded-2" alt="Card image">

                        <!-- Card body START -->
                        <div class="card-body px-3 pb-0">
                            <!-- Rating and cart -->
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#" class="badge bg-dark text-white"><i
                                        class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.0</a>
                                <a href="#" class="h6 mb-0 z-index-2"><i class="bi fa-fw bi-bookmark"></i></a>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}">Royal Beach
                                    Resort</a></h5>

                            <!-- List -->
                            <ul class="nav nav-divider mb-2 mb-sm-3">
                                <li class="nav-item">Air Conditioning</li>
                                <li class="nav-item">Wifi</li>
                                <li class="nav-item">Kitchen</li>
                                <li class="nav-item">Pool</li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price and Button -->
                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                <!-- Price -->
                                <div class="d-flex align-items-center">
                                    <h5 class="fw-normal text-success mb-0 me-1">$570</h5>
                                    <span class="mb-0 me-2">/day</span>
                                </div>
                                <!-- Button -->
                                <div class="mt-2 mt-sm-0">
                                    <a href="{{ route('second', ['hotel', 'detail']) }}"
                                        class="btn btn-sm btn-primary-soft mb-0 w-100">View Detail<i
                                            class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow p-2 pb-0 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/4by3/03.jpg" class="rounded-2" alt="Card image">

                        <!-- Card body START -->
                        <div class="card-body px-3 pb-0">
                            <!-- Rating and cart -->
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#" class="badge bg-dark text-white"><i
                                        class="bi fa-fw bi-star-fill me-2 text-warning"></i>3.8</a>
                                <a href="#" class="h6 mb-0 z-index-2"><i
                                        class="bi fa-fw bi-bookmark-fill text-danger"></i></a>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}">Pride moon
                                    Village Resort & Spa</a></h5>

                            <!-- List -->
                            <ul class="nav nav-divider mb-2 mb-sm-3">
                                <li class="nav-item">Air Conditioning</li>
                                <li class="nav-item">Wifi</li>
                                <li class="nav-item">Kitchen</li>
                                <li class="nav-item">Pool</li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price and Button -->
                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                <!-- Price -->
                                <div class="d-flex align-items-center">
                                    <h5 class="fw-normal text-success mb-0 me-1">$896</h5>
                                    <span class="mb-0 me-2">/day</span>
                                </div>
                                <!-- Button -->
                                <div class="mt-2 mt-sm-0">
                                    <a href="{{ route('second', ['hotel', 'detail']) }}"
                                        class="btn btn-sm btn-primary-soft mb-0 w-100">View Detail<i
                                            class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow p-2 pb-0 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/4by3/01.jpg" class="rounded-2" alt="Card image">

                        <!-- Card body START -->
                        <div class="card-body px-3 pb-0">
                            <!-- Rating and cart -->
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#" class="badge bg-dark text-white"><i
                                        class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.0</a>
                                <a href="#" class="h6 mb-0 z-index-2"><i class="bi fa-fw bi-bookmark"></i></a>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}">Carina Beach
                                    Resort</a></h5>

                            <!-- List -->
                            <ul class="nav nav-divider mb-2 mb-sm-3">
                                <li class="nav-item">Air Conditioning</li>
                                <li class="nav-item">Wifi</li>
                                <li class="nav-item">Kitchen</li>
                                <li class="nav-item">Pool</li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price and Button -->
                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                <!-- Price -->
                                <div class="d-flex align-items-center">
                                    <h5 class="fw-normal text-success mb-0 me-1">$475</h5>
                                    <span class="mb-0 me-2">/day</span>
                                </div>
                                <!-- Button -->
                                <div class="mt-2 mt-sm-0">
                                    <a href="{{ route('second', ['hotel', 'detail']) }}"
                                        class="btn btn-sm btn-primary-soft mb-0 w-100">View Detail<i
                                            class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

            </div> <!-- Row END -->

            <!-- Pagination -->
            <div class="row">
                <div class="col-12">
                    <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                        <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                            <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                        class="fa-solid fa-angle-left"></i></a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#"><i
                                        class="fa-solid fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Hotel grid END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection