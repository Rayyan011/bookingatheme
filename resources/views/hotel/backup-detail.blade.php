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
                                            href="{{ route('second', ['hotel', 'booking']) }}">Hotel Booking</a>
                                    </li>
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
                                    <li> <a class="dropdown-item" href="{{ route('second', ['directory' , 'index-directory']) }}">Directory Home</a>
                                    </li>
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
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hero', 'inline-form']) }}">Hero Inline
                                            Form</a></li>
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
                                    <li> <a class="dropdown-item" href="{{ route('second', ['auth' , 'forgot-password']) }}">Forgot Password</a>
                                    </li>
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
                                    <li> <a class="dropdown-item" href="{{ route('second', ['help' , 'privacy-policy']) }}">Privacy Policy</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['help' , 'terms-of-service']) }}">Terms of
                                            Service</a></li>
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
                                    <li> <a class="dropdown-item" href="{{ route('second', ['account' , 'bookings']) }}">My Bookings</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['account' , 'travelers']) }}">Travelers</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="account-payment-details.html">Payment
                                            Details</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['account' , 'wishlist']) }}">Wishlist</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['account' , 'settings']) }}">Settings</a> </li>
                                    <li> <a class="dropdown-item" href="account-delete.html">Delete Profile</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Agent Dashboard</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ route('second', ['agent' , 'dashboard']) }}">Dashboard</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['agent' , 'listings']) }}">Listings</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['agent' , 'bookings']) }}">Bookings</a> </li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['agent' , 'activities']) }}">Activities</a>
                                    </li>
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
                                            <p class="mb-0 small">Find the flexible ticket on flights around the
                                                world. Start searching today</p>
                                            <span>Wednesday</span>
                                        </a>
                                    </li>
                                    <!-- Notification item -->
                                    <li>
                                        <a href="#"
                                            class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
                                            <h6 class="mb-2">Sunshine saving are here 🌞 save 30% or more on a
                                                stay</h6>
                                            <span>15 Nov 2022</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent text-center border-top">
                                <a href="#" class="btn btn-sm btn-link mb-0 p-0">See all incoming
                                    activity</a>
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
                                <a class="btn btn-lg btn-primary w-100 mb-0" href="#"><i
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
                            <h1 class="fs-2">Courtyard by Marriott New York </h1>
                            <!-- Location -->
                            <p class="fw-bold mb-0"><i class="bi bi-geo-alt me-2"></i>5855 W Century Blvd, Los
                                Angeles - 90045
                                <a href="#" class="ms-2 text-decoration-underline" data-bs-toggle="modal"
                                    data-bs-target="#mapmodal">
                                    <i class="bi bi-eye-fill me-1"></i>View On Map
                                </a>
                            </p>
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

            <!-- Alert box START -->
            <div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show mb-4 rounded-3 pe-2"
                role="alert">
                <div class="d-flex">
                    <span class="alert-heading h5 mb-0 me-2"><i class="bi bi-exclamation-octagon-fill"></i></span>
                    <span><strong class="alert-heading me-2">Covid Policy:</strong>You may require to present an
                        RT-PCR negative test report at the hotel</span>
                </div>
                <button type="button" class="btn btn-link text-primary-hover pb-0 text-end" data-bs-dismiss="alert"
                    aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            <!-- Alert box END -->
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
                            style="background-image:url(/images/gallery/14.jpg); background-position: center left; background-size: cover;">
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
                                    style="background-image:url(/images/gallery/13.jpg); background-position: center left; background-size: cover;">
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
                                    style="background-image:url(/images/gallery/12.jpg); background-position: center left; background-size: cover;">
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

                                                <!-- Overlay item -->
                                                <div class="position-absolute top-0 start-0 z-index-1 mt-3 ms-4">
                                                    <div class="badge text-bg-danger">30% Off</div>
                                                </div>

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

                                                    <p class="text-success mb-0">Free Cancellation till 7 Jan 2022
                                                    </p>

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
                                                            <a href="#"
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

                                                <!-- Overlay item -->
                                                <div class="position-absolute top-0 start-0 z-index-1 mt-3 ms-4">
                                                    <div class="badge text-bg-danger">15% Off</div>
                                                </div>

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
                                                        <li class="nav-item">
                                                            <a href="#" class="mb-0 text-primary">More+</a>
                                                        </li>
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
                                                            <a href="#"
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

                        <!-- Customer Review START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h3 class="card-title mb-0">Customer Review</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <!-- Progress bar and rating START -->
                                <div class="card bg-light p-4 mb-4">
                                    <div class="row g-4 align-items-center">
                                        <!-- Rating info -->
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <!-- Info -->
                                                <h2 class="mb-0">4.5</h2>
                                                <p class="mb-2">Based on 120 Reviews</p>
                                                <!-- Star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i
                                                            class="fa-solid fa-star-half-alt text-warning"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Progress-bar START -->
                                        <div class="col-md-8">
                                            <div class="card-body p-0">
                                                <div class="row gx-3 g-2 align-items-center">
                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-9 col-sm-10">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 95%" aria-valuenow="95"
                                                                aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Percentage -->
                                                    <div class="col-3 col-sm-2 text-end">
                                                        <span class="h6 fw-light mb-0">85%</span>
                                                    </div>

                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-9 col-sm-10">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 75%" aria-valuenow="75"
                                                                aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Percentage -->
                                                    <div class="col-3 col-sm-2 text-end">
                                                        <span class="h6 fw-light mb-0">75%</span>
                                                    </div>

                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-9 col-sm-10">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 60%" aria-valuenow="60"
                                                                aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Percentage -->
                                                    <div class="col-3 col-sm-2 text-end">
                                                        <span class="h6 fw-light mb-0">60%</span>
                                                    </div>

                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-9 col-sm-10">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 35%" aria-valuenow="35"
                                                                aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Percentage -->
                                                    <div class="col-3 col-sm-2 text-end">
                                                        <span class="h6 fw-light mb-0">35%</span>
                                                    </div>

                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-9 col-sm-10">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 20%" aria-valuenow="20"
                                                                aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Percentage -->
                                                    <div class="col-3 col-sm-2 text-end">
                                                        <span class="h6 fw-light mb-0">15%</span>
                                                    </div>
                                                </div> <!-- Row END -->
                                            </div>
                                        </div>
                                        <!-- Progress-bar END -->

                                    </div>
                                </div>
                                <!-- Progress bar and rating END -->

                                <!-- Leave review START -->
                                <form class="mb-5">
                                    <!-- Rating -->
                                    <div class="form-control-bg-light mb-3">
                                        <select class="form-select js-choice">
                                            <option value="" selected>★★★★★ (5/5)</option>
                                            <option>★★★★☆ (4/5)</option>
                                            <option>★★★☆☆ (3/5)</option>
                                            <option>★★☆☆☆ (2/5)</option>
                                            <option>★☆☆☆☆ (1/5)</option>
                                        </select>
                                    </div>
                                    <!-- Message -->
                                    <div class="form-control-bg-light mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your review" rows="3"></textarea>
                                    </div>
                                    <!-- Button -->
                                    <button type="submit" class="btn btn-lg btn-primary mb-0">Post review <i
                                            class="bi fa-fw bi-arrow-right ms-2"></i></button>
                                </form>
                                <!-- Leave review END -->

                                <!-- Review item START -->
                                <div class="d-md-flex my-4">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-lg me-3 flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg"
                                            alt="avatar">
                                    </div>
                                    <!-- Text -->
                                    <div>
                                        <div class="d-flex justify-content-between mt-1 mt-md-0">
                                            <div>
                                                <h6 class="me-3 mb-0">Jacqueline Miller</h6>
                                                <!-- Info -->
                                                <ul class="nav nav-divider small mb-2">
                                                    <li class="nav-item">Stayed 13 Nov 2022</li>
                                                    <li class="nav-item">4 Reviews written</li>
                                                </ul>
                                            </div>
                                            <!-- Review star -->
                                            <div class="icon-md rounded text-bg-warning fs-6">4.5</div>
                                        </div>

                                        <p class="mb-2">Handsome met debating sir dwelling age material. As style
                                            lived he worse dried. Offered related so visitors we private removed.
                                            Moderate do subjects to distance. </p>

                                        <!-- Images -->
                                        <div class="row g-4">
                                            <div class="col-4 col-sm-3 col-lg-2">
                                                <img src="/images/category/hotel/4by3/07.jpg" class="rounded"
                                                    alt="">
                                            </div>
                                            <div class="col-4 col-sm-3 col-lg-2">
                                                <img src="/images/category/hotel/4by3/08.jpg" class="rounded"
                                                    alt="">
                                            </div>
                                            <div class="col-4 col-sm-3 col-lg-2">
                                                <img src="/images/category/hotel/4by3/05.jpg" class="rounded"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Child review START -->
                                <div class="my-4 ps-2 ps-md-3">
                                    <div class="d-md-flex p-3 bg-light rounded-3">
                                        <img class="avatar avatar-sm rounded-circle me-3" src="/images/avatar/02.jpg"
                                            alt="avatar">
                                        <div class="mt-2 mt-md-0">
                                            <h6 class="mb-1">Manager</h6>
                                            <p class="mb-0">But discretion frequently sir she instruments
                                                unaffected admiration everything. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Child review END -->

                                <!-- Divider -->
                                <hr>
                                <!-- Review item END -->

                                <!-- Review item START -->
                                <div class="d-md-flex my-4">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-lg me-3 flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/08.jpg"
                                            alt="avatar">
                                    </div>
                                    <!-- Text -->
                                    <div>
                                        <div class="d-flex justify-content-between mt-1 mt-md-0">
                                            <div>
                                                <h6 class="me-3 mb-0">Dennis Barrett</h6>
                                                <!-- Info -->
                                                <ul class="nav nav-divider small mb-2">
                                                    <li class="nav-item">Stayed 02 Nov 2022</li>
                                                    <li class="nav-item">2 Reviews written</li>
                                                </ul>
                                            </div>
                                            <!-- Review star -->
                                            <div class="icon-md rounded text-bg-warning fs-6">4.0</div>
                                        </div>

                                        <p class="mb-0">Delivered dejection necessary objection do Mr prevailed.
                                            Mr feeling does chiefly cordial in do. Water timed folly right aware if
                                            oh truth. Large above be to means. Dashwood does provide stronger is.
                                        </p>
                                    </div>
                                </div>

                                <!-- Divider -->
                                <hr>
                                <!-- Review item END -->

                                <!-- Button -->
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary-soft mb-0">Load more</a>
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Customer Review END -->

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
                                <div class="bg-danger bg-opacity-10 rounded-2 p-3 mb-3">
                                    <p class="mb-0 text-danger">During the COVID-19 pandemic, all hosts and guests
                                        must review and follow Booking social distancing and other COVID-19-related
                                        guidelines.</p>
                                </div>
                                <div class="bg-danger bg-opacity-10 rounded-2 p-3">
                                    <p class="mb-0 text-danger">Smoke alarm not reported — The host hasn't reported
                                        a smoke alarm on the property. We suggest bringing a portable detector for
                                        your trip.</p>
                                </div>
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
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item me-1 h6 fw-light mb-0"><i
                                        class="bi bi-arrow-right me-2"></i>4.5</li>
                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i
                                        class="fa-solid fa-star-half-alt text-warning"></i></li>
                            </ul>

                            <p class="h6 fw-light mb-4"><i class="bi bi-arrow-right me-2"></i>Free breakfast
                                available</p>

                            <!-- Button -->
                            <div class="d-grid">
                                <a href="#room-options" class="btn btn-lg btn-primary-soft mb-0">View 10 Rooms
                                    Options</a>
                            </div>
                        </div>
                        <!-- Book now END -->

                        <!-- Best deal START -->
                        <div class="mt-4 d-none d-xl-block">
                            <h4>Today's Best Deal</h4>

                            <div class="card shadow rounded-3 overflow-hidden">
                                <div class="row g-0 align-items-center">
                                    <!-- Image -->
                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                        <img src="/images/offer/04.jpg" class="card-img rounded-0" alt="">
                                    </div>

                                    <!-- Title and content -->
                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                        <div class="card-body p-3">
                                            <h6 class="card-title"><a href="{{ route('second', ['listing' , 'offer-detail']) }}"
                                                    class="stretched-link">Travel Plan</a></h6>
                                            <p class="mb-0">Get up to $10,000 for lifetime limits</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <div> <img src="/images/gallery/16.jpg" class="rounded-2" alt="Card image"></div>

                            <!-- Image item -->
                            <div> <img src="/images/gallery/15.jpg" class="rounded-2" alt="Card image"> </div>

                            <!-- Image item -->
                            <div> <img src="/images/gallery/13.jpg" class="rounded-2" alt="Card image"> </div>

                            <!-- Image item -->
                            <div> <img src="/images/gallery/12.jpg" class="rounded-2" alt="Card image"> </div>
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