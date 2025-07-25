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
            <button class="navbar-toggler ms-auto ms-sm-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="d-none d-sm-inline-block small">Menu</span>
            </button>

            <!-- Responsive category toggler -->
            <button class="navbar-toggler ms-sm-auto mx-3 me-md-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCategoryCollapse" aria-controls="navbarCategoryCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-grid-3x3-gap-fill fa-fw"></i><span
                    class="d-none d-sm-inline-block small">Category</span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll me-auto">

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

            <!-- Nav category menu START -->
            <div class="navbar-collapse collapse" id="navbarCategoryCollapse">
                <ul class="navbar-nav navbar-nav-scroll nav-pills-primary-soft text-center ms-auto p-2 p-xl-0">
                    <!-- Nav item Hotel -->
                    <li class="nav-item"> <a class="nav-link" href="{{ route('root') }}"><i
                                class="fa-solid fa-hotel me-2"></i>Hotel</a> </li>

                    <!-- Nav item Flight -->
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('second', ['flight', 'index-flight']) }}"><i
                                class="fa-solid fa-plane me-2"></i>Flight</a> </li>

                    <!-- Nav item Tour -->
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('second', ['tour', 'index-tour']) }}"><i
                                class="fa-solid fa-globe-americas me-2"></i>Tour</a> </li>

                    <!-- Nav item Cabs -->
                    <li class="nav-item"> <a class="nav-link active"
                            href="{{ route('second', ['cab', 'index-cab']) }}"><i
                                class="fa-solid fa-car me-2"></i>Cab</a></li>
                </ul>
            </div>
            <!-- Nav category menu END -->

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
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header d-flex justify-content-between align-items-center border-bottom">
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
                            <div class="card-footer text-center border-top">
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
        Main Banner START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 ms-auto position-relative">
                    <img src="/images/bg/03.jpg" class="rounded-3" alt="">

                    <!-- Search START -->
                    <div class="col-11 col-sm-10 col-lg-8 col-xl-6 position-lg-middle ms-lg-8 ms-xl-7">
                        <div class="card shadow pb-0 mt-n7 mt-sm-n8 mt-lg-0">

                            <!-- Card header -->
                            <div class="card-header border-bottom p-3 p-sm-4">
                                <h5 class="card-title mb-0">Book Your Online Cab</h5>
                            </div>

                            <!-- Card body START -->
                            <form class="card-body form-control-border p-3 p-sm-4">
                                <!-- Tabs START -->
                                <div class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <div class="form-check form-check-inline active" id="cab2-one-way-tab"
                                        data-bs-toggle="pill" data-bs-target="#cab2-one-way" role="tab"
                                        aria-controls="cab2-one-way" aria-selected="true">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="cabRadio1" value="option1" checked>
                                        <label class="form-check-label" for="cabRadio1">One Way</label>
                                    </div>
                                    <div class="form-check form-check-inline" id="cab2-round-way-tab"
                                        data-bs-toggle="pill" data-bs-target="#cab2-round-way" role="tab"
                                        aria-controls="cab2-round-way" aria-selected="false">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="cabRadio2" value="option2">
                                        <label class="form-check-label" for="cabRadio2">Round Trip</label>
                                    </div>
                                </div>
                                <!-- Tabs END -->

                                <!-- Tabs content START -->
                                <div class="tab-content my-4" id="pills-tabContent">
                                    <!-- One way START -->
                                    <div class="tab-pane fade show active" id="cab2-one-way" role="tabpanel"
                                        aria-labelledby="cab2-one-way-tab">
                                        <div class="row g-2 g-md-4">
                                            <!-- Pickup -->
                                            <div class="col-md-6 position-relative">
                                                <div class="form-fs-lg form-control-transparent">
                                                    <label class="form-label small">Pickup</label>
                                                    <select class="form-select js-choice" data-search-enabled="true">
                                                        <option value="" selected>Select location</option>
                                                        <option>New York</option>
                                                        <option>Canada</option>
                                                        <option>Paris</option>
                                                    </select>
                                                </div>

                                                <!-- Auto fill button -->
                                                <div class="btn-flip-icon z-index-9 mt-2 mt-md-1">
                                                    <button class="btn btn-dark shadow btn-round mb-0"><i
                                                            class="fa-solid fa-right-left"></i></button>
                                                </div>
                                            </div>

                                            <!-- Drop -->
                                            <div class="col-md-6 text-md-end">
                                                <div class="form-fs-lg form-control-transparent">
                                                    <label class="form-label small ms-3 ms-md-0 me-md-3">Drop</label>
                                                    <select class="form-select js-choice" data-search-enabled="true">
                                                        <option value="" selected>Select Location</option>
                                                        <option>Canada</option>
                                                        <option>New York</option>
                                                        <option>Paris</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Date -->
                                            <div class="col-md-6">
                                                <div class="form-fs-lg form-control-transparent">
                                                    <label class="form-label small">Pickup Date</label>
                                                    <input type="text" class="form-control flatpickr"
                                                        placeholder="Select date">
                                                </div>
                                            </div>

                                            <!-- Time -->
                                            <div class="col-md-6 text-md-end">
                                                <div class="form-fs-lg form-control-transparent">
                                                    <label class="form-label small ms-3 ms-md-0 me-md-3">Pickup
                                                        time</label>
                                                    <input type="text" class="form-control flatpickr text-md-end"
                                                        data-enableTime="true" data-noCalendar="true"
                                                        placeholder="Select time">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- One way END -->

                                    <!-- Round trip START -->
                                    <div class="tab-pane fade" id="cab2-round-way" role="tabpanel"
                                        aria-labelledby="cab2-round-way-tab">
                                        <div class="row g-2 g-md-4">
                                            <!-- Pickup -->
                                            <div class="col-md-6 position-relative">
                                                <label class="form-label small">Pickup</label>
                                                <div class="form-fs-lg form-control-transparent">
                                                    <select class="form-select js-choice" data-search-enabled="true">
                                                        <option value="">Select Location</option>
                                                        <option>New York</option>
                                                        <option>Canada</option>
                                                        <option>Paris</option>
                                                    </select>
                                                </div>

                                                <!-- Auto fill button -->
                                                <div class="btn-flip-icon z-index-9 mt-2 mt-md-1">
                                                    <button class="btn btn-dark shadow btn-round mb-0"><i
                                                            class="fa-solid fa-right-left"></i></button>
                                                </div>
                                            </div>

                                            <!-- Drop -->
                                            <div class="col-sm-6 text-sm-end">
                                                <label class="form-label small ms-3 ms-md-0 me-md-3">Drop</label>
                                                <div class="form-fs-lg form-control-transparent">
                                                    <select class="form-select js-choice" data-search-enabled="true">
                                                        <option value="" selected>Select Location</option>
                                                        <option>Canada</option>
                                                        <option>New York</option>
                                                        <option>Paris</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Date -->
                                            <div class="col-sm-6">
                                                <div class="form-fs-lg form-control-transparent">
                                                    <label class="form-label small">Pickup Date</label>
                                                    <input type="text" class="form-control flatpickr"
                                                        placeholder="Select date">
                                                </div>
                                            </div>

                                            <!-- Time -->
                                            <div class="col-sm-6 text-sm-end">
                                                <div class="form-fs-lg form-control-transparent">
                                                    <label class="form-label small ms-3 ms-md-0 me-md-3">Pickup
                                                        time</label>
                                                    <input type="text" class="form-control flatpickr text-sm-end"
                                                        data-enableTime="true" data-noCalendar="true"
                                                        placeholder="Select time">
                                                </div>
                                            </div>

                                            <!-- Date -->
                                            <div class="col-sm-6">
                                                <div class="form-fs-lg form-control-transparent">
                                                    <label class="form-label small">Return Date</label>
                                                    <input type="text" class="form-control flatpickr"
                                                        placeholder="Select date">
                                                </div>
                                            </div>

                                            <!-- Time -->
                                            <div class="col-sm-6 text-sm-end">
                                                <div class="form-fs-lg form-control-transparent">
                                                    <label class="form-label small ms-3 ms-md-0 me-md-3">Return
                                                        time</label>
                                                    <input type="text" class="form-control flatpickr text-sm-end"
                                                        data-enableTime="true" data-noCalendar="true"
                                                        placeholder="Select time">
                                                </div>
                                            </div>
                                        </div> <!-- Row END -->
                                    </div>
                                    <!-- Round trip END -->
                                </div>
                                <!-- Tabs content END -->

                                <!-- Button -->
                                <div class="d-grid">
                                    <button class="btn btn-dark mb-0">Search Cabs</button>
                                </div>

                            </form>
                            <!-- Card-body END -->
                        </div>
                    </div>
                    <!-- Search END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Main Banner END -->

    <!-- =======================
        Fleet START -->
    <section class="pt-0 pt-md-5">
        <div class="container">

            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Our Awesome Vehicles</h2>
                </div>
            </div>

            <div class="row g-4">
                <!-- Fleet item -->
                <div class="col-sm-4 col-xl-2">
                    <div class="card shadow text-center align-items-center h-100 p-4">
                        <!-- Image -->
                        <div class="icon-xxl bg-light rounded-circle">
                            <img src="/images/category/cab/seadan.svg" class="w-90px" alt="">
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title"><a href="#" class="stretched-link">Sedan</a></h5>
                            <span>(6 Cars)</span>
                        </div>
                    </div>
                </div>

                <!-- Fleet item -->
                <div class="col-sm-4 col-xl-2">
                    <div class="card shadow text-center align-items-center h-100 p-4">
                        <!-- Image -->
                        <div class="icon-xxl bg-light rounded-circle">
                            <img src="/images/category/cab/micro.svg" class="w-90px" alt="">
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title"><a href="#" class="stretched-link">Micro</a></h5>
                            <span>(8 Cars)</span>
                        </div>
                    </div>
                </div>

                <!-- Fleet item -->
                <div class="col-sm-4 col-xl-2">
                    <div class="card shadow text-center align-items-center h-100 p-4">
                        <!-- Image -->
                        <div class="icon-xxl bg-light rounded-circle">
                            <img src="/images/category/cab/suv-2.svg" class="w-90px" alt="">
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title"><a href="#" class="stretched-link">CUV</a></h5>
                            <span>(4 Cars)</span>
                        </div>
                    </div>
                </div>

                <!-- Fleet item -->
                <div class="col-sm-4 col-xl-2">
                    <div class="card shadow text-center align-items-center h-100 p-4">
                        <!-- Image -->
                        <div class="icon-xxl bg-light rounded-circle">
                            <img src="/images/category/cab/suv.svg" class="w-90px" alt="">
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title"><a href="#" class="stretched-link">SUV</a></h5>
                            <span>(5 Cars)</span>
                        </div>
                    </div>
                </div>

                <!-- Fleet item -->
                <div class="col-sm-4 col-xl-2">
                    <div class="card shadow text-center align-items-center h-100 p-4">
                        <!-- Image -->
                        <div class="icon-xxl bg-light rounded-circle">
                            <img src="/images/category/cab/pickup.svg" class="w-90px" alt="">
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title"><a href="#" class="stretched-link">Pick up</a></h5>
                            <span>(3 Pickup Truck)</span>
                        </div>
                    </div>
                </div>

                <!-- Fleet item -->
                <div class="col-sm-4 col-xl-2">
                    <div class="card shadow text-center align-items-center h-100 p-4">
                        <!-- Image -->
                        <div class="icon-xxl bg-light rounded-circle">
                            <img src="/images/category/cab/coupe.svg" class="w-90px" alt="">
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title"><a href="#" class="stretched-link">Coupe</a></h5>
                            <span>(9 Cars)</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =======================
        Fleet END -->

    <!-- =======================
        Why Choose Us START -->
    <section class="pt-0 pt-xl-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-3 mb-sm-4">
                <div class="col-12 text-center">
                    <h2>Why Choose Us</h2>
                </div>
            </div>

            <div class="row g-4">
                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4"><i
                                class="bi bi-lightning-fill fs-5"></i></div>
                        <h5>Advance Booking</h5>
                        <p class="mb-0">Happiness prosperous impression had conviction For every delay in they
                            Extremity now. </p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle mb-4"><i
                                class="fa-solid fa-leaf fs-5"></i></div>
                        <h5>Economical Trip</h5>
                        <p class="mb-0">Extremity now strangers contained breakfast him discourse additions
                            Sincerity.</p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-warning bg-opacity-15 text-warning rounded-circle mb-4"><i
                                class="bi bi-life-preserver fs-5"></i></div>
                        <h5>Secure and Safer</h5>
                        <p class="mb-0">Perpetual extremity now strangers contained breakfast him discourse
                            additions.</p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle mb-4"><i
                                class="fa-solid fa-car fs-5"></i></div>
                        <h5>Vehicle Options</h5>
                        <p class="mb-0">The Prosperous impression had conviction For every delay in they Extremity
                            now. </p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-circle mb-4"><i
                                class="fa-solid fa-wifi fs-5"></i></div>
                        <h5>Cab Entertainment</h5>
                        <p class="mb-0">Extremity now strangers contained breakfast him discourse additions
                            Sincerity.</p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle mb-4"><i
                                class="fa-solid fa-wheelchair fs-5"></i></div>
                        <h5>Polite Driver</h5>
                        <p class="mb-0">Perpetual extremity now strangers contained breakfast him discourse
                            additions.</p>
                    </div>
                    <!-- Card END -->
                </div>

            </div> <!-- Row END -->

        </div>
    </section>
    <!-- =======================
        Why Choose Us END -->

    <!-- =======================
        Action box START -->
    <section class="pt-0 pt-lg-8">
        <div class="container position-relative">
            <!-- Mockup -->
            <div class="position-absolute bottom-0 end-0 z-index-99 me-8 d-none d-lg-block">
                <img src="/images/element/01.png" class="h-400px mb-3" alt="">
            </div>

            <div class="row">
                <div class="col-12">

                    <div class="bg-light rounded-2 position-relative overflow-hidden p-4 p-sm-5">
                        <!-- SVG decoration -->
                        <figure class="position-absolute bottom-0 start-0 mb-n1">
                            <svg class="fill-primary" width="77px" height="77px">
                                <path
                                    d="M76.997,41.258 L45.173,41.258 L67.676,63.760 L63.763,67.673 L41.261,45.171 L41.261,76.994 L35.728,76.994 L35.728,45.171 L13.226,67.673 L9.313,63.760 L31.816,41.258 L-0.007,41.258 L-0.007,35.725 L31.816,35.725 L9.313,13.223 L13.226,9.311 L35.728,31.813 L35.728,-0.010 L41.261,-0.010 L41.261,31.813 L63.763,9.311 L67.676,13.223 L45.174,35.725 L76.997,35.725 L76.997,41.258 Z">
                                </path>
                            </svg>
                        </figure>

                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-50 translate-middle ms-9">
                            <svg class="fill-warning" width="191.7px" height="211px" viewBox="0 0 191.7 211">
                                <path
                                    d="M183.4,105.8c0-0.8-0.1-1.4-0.2-2c-0.2-1-0.5-2-0.8-3c-0.3-1.5-1-2.9-1.5-4.3c-0.2-0.5-0.3-1-0.6-1.4 c-0.3-0.4-0.5-0.9-0.7-1.4c0-0.1-0.1-0.2-0.3-0.1c0.1,0.2,0,0.4,0.2,0.7c0.5,1.1,0.9,2.2,1.3,3.3c0.5,1.2,0.8,2.4,1.2,3.6 c0.2,0.7,0.4,1.3,0.6,2C182.7,104,182.8,104.9,183.4,105.8 M120.9,62.4c0.3,0,0.5,0.3,0.8,0.2c0.4-0.1,0.6-0.4,1-0.6 c0.5-0.3,0.6-0.7,0.6-1.2c0-0.4,0.3-0.3,0.5-0.4c0-0.8,0-1.6-0.8-2.2C122.4,59.6,121.1,60.7,120.9,62.4 M148.7,166.5 c-1.9,0.9-5.9,4.1-6.5,5.8c0.5-0.3,1.1-0.4,1.2-1c0.1-0.2,0.4-0.4,0.6-0.6c0.2-0.3,0.6,0,0.9-0.3c0.2-0.3,0.7-0.5,0.9-0.8 c0.2-0.5,0.7-0.5,1-0.8c0.2-0.3,0.5-0.7,0.9-0.8c0.4-0.2,0.4-0.7,0.9-0.7c0.5,0,0.4-0.7,0.8-0.6c0.4-0.5,1.1-0.7,1.5-1.2 c0.1-0.2,0.2-0.3,0-0.5c-0.5,0.1-0.9,0.5-1.3,0.8c-0.3,0-0.4-0.4-0.7-0.2c0,0-0.1,0-0.1,0.1C148.7,165.8,148.7,166.1,148.7,166.5  M159,171.3c-1.2,0.4-1.8,1.5-2.8,2.1c-1,0.6-1.9,1.4-2.9,2.2c-1,0.8-1.9,1.6-2.8,2.4c0.2,0.1,0.4,0.1,0.6,0 c0.7-0.7,1.8-0.6,2.3-1.5c0.7,0,1-0.6,1.4-0.9c0.3-0.3,0.7-0.4,1-0.4c0.3-0.5,0.6-0.8,1-1c0.4-0.2,0.6-0.7,1.1-0.8 c-0.3-0.7-0.3-0.7,0.7-1c0-0.2-0.3-0.2-0.2-0.5C158.6,171.7,158.8,171.5,159,171.3 M127.8,135.8c1.4-1.9,2.6-3.9,3.7-5.9 c1.3-2.5,2.5-5,3.8-7.4c0.1-0.3,0.2-0.5,0-0.8c-2.7,4.5-5,9.1-7.4,13.6C127.7,135.4,127.8,135.6,127.8,135.8 M38.9,72.2 c-0.4,0.4-0.8,0.8-1.2,1.2c-0.3,0.4-0.8,0.7-1.1,1.1c-0.5,0.5-0.8,1.2-1.3,1.7c-1,1-1.9,2.1-2.8,3.2c-1.4,1.7-2.4,3.7-3.6,5.6 c-0.3,0.4-0.5,0.9-0.7,1.4c3.7-4.5,6.8-9.5,10.8-13.8C39.1,72.5,39,72.3,38.9,72.2 M94.1,198.1c0.1,0.4,0.1,0.6,0.2,0.8 c-0.6,0-0.2,0.9-0.9,1c-0.7,0-1.4-0.1-2.2,0.2c-0.4,0.1-0.3,0.3-0.2,0.5c0.6,0,1.2,0.1,1.6-0.3c0.3,0.1,0.1,0.4,0.4,0.5 c0.8,0,1.6,0.2,2.3,0c0.8-0.3,1.5-0.1,2.2-0.2c0.8,0,1.5,0,2.3,0c0.2,0,0.4,0,0.6,0c0.1,0,0.1-0.1,0.2-0.1c0-0.2,0.1-0.4,0-0.6 c-0.7,0.3-0.7,0.2-1.2-0.2c-0.3-0.2,0-0.4,0-0.5c-0.1-0.4-0.6-0.2-0.9-0.4c-0.2-0.1,0.2-0.5-0.2-0.6c-0.2,0.4,0.2,0.9-0.4,1.2 c-0.6-0.3-0.6-0.3-1.1,0.4c0,0.3,0.5,0,0.5,0.4c-0.3,0-0.6,0.2-0.7-0.3c0-0.2-0.5-0.3-0.6-0.4c-0.3,0-0.3,0.3-0.5,0.2 c-0.3-0.2-0.3-0.6-0.5-0.8c0.1-0.2,0.4-0.3,0.4-0.5c-0.4-0.2-0.5,0.3-0.8,0.2C94.4,198.4,94.3,198.3,94.1,198.1 M101.9,167.3 c0-0.9,0.6-1.5,0.8-2.3c0.2-1,0.6-2,0.8-2.9c0.2-0.8,0.5-1.7,0.6-2.5c0.2-0.9,0.5-1.7,0.7-2.6c0.2-0.9,0.4-1.8,0.7-2.7 c0.2-0.5,0.4-1,0.5-1.5c0.1-0.6,0.2-1.2,0.5-1.7c0.3-0.5,0-1.3,0.7-1.7c0.2-0.1,0.1-0.4,0-0.6c0-0.1-0.2-0.2-0.1-0.3 c0.5-0.5,0.3-1.2,0.6-1.8c-0.2,0-0.4,0-0.5,0.3c-0.4,1.3-0.9,2.6-1.4,3.9c-0.1,0.5-0.4,0.9-0.3,1.4c-0.6,1-0.7,2.1-0.9,3.1 c-0.2,1.1-0.6,2.1-0.8,3.2c-0.6,2.3-1.1,4.7-1.9,7C102.1,166.1,101.4,166.6,101.9,167.3 M23.2,154c-0.1-0.3-0.2-0.6-0.4-0.8 c-0.1-0.1-0.3-0.1-0.4-0.3c-0.3-1.1-0.6-2.1-1-3.1c-0.2-0.5-0.3-1.1-0.7-1.5c-1.1-1.2-2.1-2.4-3.2-3.7c-0.1-0.1-0.3-0.2-0.3-0.4 c0-0.3-0.3-0.4-0.4-0.5c-0.1-0.1-0.2-0.4-0.6-0.4c0.7,1.7,1.6,3.2,2.5,4.7c0.9,1.4,1.7,2.9,2.7,4.2c0.4,0.6,0.8,1.3,1.1,2 c0,0.1,0.2,0.1,0.2,0.2C23,154.2,23.1,154.1,23.2,154 M90.5,85.8c0.5-0.1,0.4-0.6,0.7-0.8c0.3-0.2,0.5-0.6,0.8-0.9 c0.9-1.2,1.8-2.4,2.8-3.6c0.7-0.9,1.4-1.7,2-2.6c0.6-0.9,1.4-1.7,1.9-2.6c0.5-0.9,1.4-1.5,1.7-2.5c-0.6-0.4-1-0.4-1.5,0.1 c-0.7,0.8-1.3,1.7-1.9,2.5c-0.4,0.6-0.8,1.2-1.2,1.8c-0.9,1.1-1.6,2.3-2.4,3.5c-0.9,1.4-1.8,2.9-2.8,4.3 C90.5,85.3,90.4,85.5,90.5,85.8 M140.6,176.1c0.5-0.5,1.1-0.7,1.7-1c0.7-0.4,1.3-0.8,1.9-1.2c0.3-0.1,0.2-0.6,0.6-0.5 c0.6-1.2,1.7-1.9,2.8-2.7c0.1,0.1,0.3,0.2,0.4,0.3c0.1-0.1,0.2-0.2,0.3-0.3c-0.1-0.1-0.2-0.2-0.2-0.3c0.2-0.3,0.6,0.1,0.7-0.3 c-0.1-0.1-0.3-0.1-0.4-0.2c0-0.7,0-0.7,0.7-0.9c0.1,0,0.2-0.1,0.2-0.2c0-0.2-0.2-0.3-0.2-0.4c0.1-0.3,0.7-0.4,0.4-0.8 c-0.8,0.3-1.2,0.9-1.8,1.4c-0.7,0.5-1.4,1-2,1.6c-0.6,0.6-1.2,1.1-1.9,1.6c-0.7,0.6-1.5,1.1-2.2,1.7c-0.2,0.2-0.4,0.6-0.7,0.7 c-0.4,0.1-0.6,0.4-0.8,0.6c-0.3,0.3-0.5,0.5-0.8,0.8C139.7,176.4,140.2,175.5,140.6,176.1 M130.5,206.4c0.2,0.2,0.5,0.1,0.7,0 c1-0.4,2-0.7,3-1.1c1.8-0.6,3.5-1.4,5.2-2.2c2.9-1.3,5.8-2.8,8.5-4.4c1.2-0.7,2.3-1.4,3.5-2.2c1.2-0.8,2.4-1.7,3.6-2.6 c1.2-0.8,2.2-1.7,3.3-2.6c0.9-0.7,1.7-1.6,2.7-2.2c0.2-0.1,0.4-0.3,0.5-0.5c0.2-0.2,0.4-0.3,0.5-0.5c-0.3-0.2-0.4,0-0.5,0.1 c-0.5,0.6-1.1,1-1.7,1.4c-1.4,1-2.7,2.2-4.1,3.2c-0.7,0.6-1.5,1.2-2.2,1.7c-1.8,1.1-3.4,2.3-5.2,3.3c-2.4,1.4-4.8,2.7-7.2,4.1 c-0.6,0.3-1.2,0.4-1.8,0.7c-1.2,0.7-2.5,1.3-3.8,1.8c-1,0.3-1.9,0.9-2.9,1.2C131.8,205.8,131.1,206,130.5,206.4 M10.6,79.8 c0.1-0.1,0.3-0.3,0.4-0.4c-0.3-0.2-0.3-0.5-0.4-0.8c0.2-0.5,0.8,0.1,0.9-0.5c-0.1-0.2-0.4,0-0.5-0.3c-0.1-0.4,0.2-0.7,0.4-1 c0.2-0.1,0.4,0.1,0.6-0.1c-0.2-0.3-0.4-0.5-0.1-0.8c0.4-0.6,0.6-1.5,1.2-1.9c0.2-0.2,0.1-0.5,0.4-0.7c-0.2-0.6,0.3-1,0.5-1.4 c0.8-1.4,1.6-2.8,2.4-4.1c1.2-1.8,2.3-3.5,3.6-5.2c0.9-1.1,1.7-2.4,2.8-3.4c0.2-0.2,0.2-0.3,0-0.4c-4.4,3.8-7.5,8.7-10,13.9 c-0.2-0.2-0.3-0.3-0.5-0.2c-0.2,0.4-0.3,0.8-0.6,1.2c-0.3,0.5-0.3,0.8,0,1.2c-0.2,0.5-0.5,0.9-0.6,1.2c-0.2,0-0.5,0-0.5,0.1 c-0.3,0.6-0.8,1.1-0.6,1.8c-0.5,0-0.5,0.5-0.7,0.7c0.2,0.4-0.6,0.7-0.1,1.2c0.3,0.4,0.1,0.7-0.3,0.9c-0.1-0.1-0.1-0.1-0.2-0.2 c0,0.4-0.5,0.5-0.3,0.9c0.2,0.2,0.3-0.3,0.5,0C8.6,82,8.4,82.7,8,83.3c-0.2,0.4-0.2,0.7-0.1,1.1c0.3-0.5,0.3-1,0.9-1.2 c-0.2-0.2-0.4-0.3-0.1-0.6c0.2-0.3,0.5-0.2,0.8-0.3c0.1,0,0.1-0.1,0.1-0.2c-0.1-0.1-0.3-0.1-0.5-0.2c0.5-0.9,0.8-1.8,1.4-2.6 C10.5,79.6,10.5,79.7,10.6,79.8 M21.4,74.7c0.9-0.5,1.3-1.4,2-2c0.5-0.5,1-1.2,1.5-1.8c0.5-0.7,1.1-1.2,1.6-1.9 c0.7-1,1.5-1.9,2.3-2.8c0.2-0.2,0.5-0.4,0.7-0.7c0.3-0.7,1-1.1,1.5-1.7c0.5-0.6,0.8-1.3,1.4-1.7c0.2-0.1,0.4-0.1,0.5-0.4 c0.7-1,1.8-1.7,2.4-2.8c0.5-0.1,0.5-0.6,0.8-0.9c0.3-0.3,0.6-0.6,0.9-0.9c-0.6-0.3-0.7,0.3-1,0.4c-1.2,0.7-2.3,1.5-3.4,2.5 c-2,1.8-3.8,3.9-5.5,6c-0.4,0.5-0.9,1-1.3,1.5c-1.3,1.8-2.6,3.7-3.9,5.6C21.8,73.6,21.6,74,21.4,74.7 M65.2,30.8 c-0.5-0.4-0.8-0.2-1.1,0.1v0.8c-0.7,0-0.6,1-1.2,1.3c-0.6,0.2-1,0.8-1.4,1.3c0.1,0.3,0.5,0.1,0.6,0.4c0.4-0.4,0.7-0.9,1.3-0.8v-0.6 c0.5-0.1,0.8-0.5,1.1-0.8c0.3-0.3,0.9-0.3,0.9-0.9c0.6,0.1,0.6-0.6,1-0.8c0.4-0.2,0.7-0.6,1-0.9c0.3-0.3,0.6-0.8,0.9-1.1 c0.3-0.3,0.5-0.7,0.9-1c0.4-0.3,0.9-0.4,1-0.9c0.2-0.5,0.6-0.7,1-0.9c-0.2-0.8,0.4-0.8,1-0.9c-0.1-0.1-0.2-0.2-0.2-0.2 c0-0.3,0.3-0.1,0.4-0.3c0.2-0.5,0.5-1.1,1-1.4c0.6-0.3,0.8-0.9,1.3-1.3c1.7-1.7,3.4-3.3,5.2-4.9c0.1-0.1,0.2-0.3,0.4-0.3 c0.8-0.2,1.2-0.8,1.8-1.3c0.6-0.5,1.2-1.1,1.8-1.5c1-0.6,1.9-1.2,2.7-2c0.2,0.1,0.2,0.2,0.3,0.2c0.5-0.4,0.8-1,1.3-1.1 c0.6-0.1,0.8-0.6,1.4-1c-1.2,0.1-1.2,0.1-1.8,0.7c-0.4-0.3-0.8,0.3-1.2,0c-0.1,0.4,0,1-0.8,1c-0.1,0-0.3,0.1-0.3,0.2 c-0.3,0.8-1.1,1-1.7,1.4c-0.5,0.4-1,0.8-1.6,0.6c-0.3,0.6-0.6,1-1.1,1.2c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1,0.3-0.3,0.6-0.4,0.9 c-0.4,0-0.8,0.2-1.1,0.4v0.5c-0.4,0.1-0.6,0.3-0.8,0.6c-0.2,0.2-0.6,0.2-0.7,0.7c-0.1,0.3-0.5,0.5-0.7,0.8c-0.3,0.1-0.6-0.1-0.9,0.1 c0.2,0.1,0.4,0.1,0.7,0.3c-0.7,0-0.7,0.5-0.9,0.8c-0.5,0.4-0.9,0.9-1.4,1.4c0.2,0.5-0.5,0.2-0.5,0.6c0,0.5-0.6,0-0.7,0.4 c0.1,0.1,0.1,0.2,0.1,0.1c-0.6,0.6-1.1,1.1-1.7,1.7c-0.1,0.2-0.2-0.3-0.4-0.1c-0.3,0.3,0.6,0.5,0.1,0.8c-0.2,0-0.2-0.3-0.4-0.1 c-0.1,0.2,0.1,0.5-0.2,0.7c-0.1-0.2-0.3-0.3-0.4-0.3C70,25,70,25.1,70,25.2c0,0.5-0.1,1-0.7,1.2c0,0.5-0.5,0.5-0.8,0.8 c-0.2,0.3-0.6,0.5-0.8,0.9C67.1,29.1,66,29.8,65.2,30.8 M1.2,100.8c-0.3-0.2-0.3-0.6-0.2-0.9c0.6-1.7,0.8-3.5,1.3-5.2 C2.6,93.9,2.8,93,3,92c0.1-0.8,0.5-1.4,0.6-2.2C3.7,89,4,88.2,4.2,87.4c0.2-0.7,0.5-1.3,0.7-2c0.3-1,0.6-2,1-3 c0.2-0.6,0.4-1.3,0.8-1.8c0.1-0.1,0.1-0.3,0.1-0.4c0.2-0.6,0.4-1.2,0.7-1.8c0.6-1.2,1.1-2.5,1.7-3.7c0.5-0.9,0.9-1.8,1.3-2.6 c0.4-0.8,0.8-1.7,1.3-2.5c1-1.9,2.2-3.8,3.5-5.6c1-1.4,2.1-2.7,3.2-4c0.9-1.1,1.8-2.1,2.9-3c0.8-0.7,1.6-1.6,2.5-2.2 c0.8-0.6,1.7-1.3,2.5-1.9c1.9-1.4,3.9-2.8,5.9-4.1c1.2-0.8,2.4-1.5,3.6-2.3c1.4-0.9,2.8-1.6,4.2-2.5c0.8-0.5,1.7-1,2.6-1.4 c0.8-0.5,1.7-0.8,2.5-1.3c0.8-0.5,1.7-0.9,2.5-1.3c0.8-0.4,1.5-1,2.5-1.1c0.4-0.7,1.2-0.7,1.8-1c0.6-0.3,1.2-0.6,1.8-1 c0.6-0.4,1.2-0.7,1.8-1.1c1.2-0.7,2.3-1.5,3.5-2.2c0.7-0.4,1.2-1.1,1.9-1.5c1.3-0.9,2.4-2,3.5-3.1c0.4-0.5,0.9-0.9,1.4-1.2 c0.4-0.2,0.4-0.7,0.8-1c0.6-0.5,1-1,1.6-1.5c0.2-0.2,0.3-0.3,0.3-0.6c0.3,0,0.4,0,0.6-0.1c0.2-0.2-0.1-0.2-0.1-0.3 c0.2-0.2,0.3-0.5,0.7-0.6c0.3-0.1,0.3-0.5,0.5-0.7c0.6-0.4,0.7-1.3,1.5-1.5c0.2-0.7,0.8-1.1,1.2-1.7c0.2-0.3,0.5-0.5,0.8-0.6 c0.3-0.1,0.1-0.7,0.6-0.6c0.5-1.1,1.6-1.6,2.4-2.3c1.4-1.2,2.6-2.4,4.2-3.4c0.8-0.5,1.5-1.2,2.2-1.7c1.8-1.1,3.5-2.3,5.4-3.2 c0.8-0.4,1.5-0.9,2.3-1.3c1.7-0.8,3.3-1.5,5.1-2.2c0.3-0.1,0.6-0.3,1-0.2c0.4,0.1,0.6-0.4,0.9-0.5c0.4-0.1,0.9-0.1,1.3-0.3 c0.2-0.1,0.7-0.2,1-0.3c0.9-0.5,2-0.4,2.9-0.9c0.3-0.2,0.8-0.1,1.1-0.1c1.2-0.1,2.4-0.7,3.6-0.6c0.7,0,1.3-0.1,1.9-0.4 c0.2-0.1,0.4-0.2,0.6-0.1c0.6,0.2,1.1,0,1.6,0c0.6,0,1.1-0.3,1.7-0.2c0.6,0,1.3,0.2,1.8,0c1-0.3,2-0.2,3-0.2c0.5,0,1-0.2,1.5,0.2 c0.2,0.2,0.5-0.5,0.8-0.1c0.2,0.2,0.5,0.2,0.7,0c0.3-0.1,0.6,0.3,0.8,0.1c0.2-0.2,0.6-0.4,0.7-0.2c0.2,0.4,0.6-0.1,0.7,0.2 c0,0,0.1,0,0.1,0c1.1-0.1,2.1,0.3,3.2,0.3c0.6,0,1.3,0.1,1.9,0.3c0.6,0.2,1.2,0.3,1.8,0.4c1,0.2,2,0.6,3,0.8c0.3,0,0.3,0.7,0.8,0.3 c0.2,0.4,0.6,0.1,0.9,0.2c0.2,0.1,0.4,0.3,0.6,0.5c0.6-0.1,1.1,0.2,1.7,0.4c1.1,0.4,2.2,0.9,3.3,1.5c1.4,0.8,2.9,1.5,4.1,2.8 c0.2,0.3,0.5,0,0.8,0.2c1.3,1.2,2.8,2.2,3.9,3.6c0.5,0.6,1.2,1,1.7,1.6c1,1.2,2.1,2.3,3,3.6c0.5,0.8,1.1,1.6,1.7,2.4 c1.1,1.7,2.1,3.4,2.8,5.3c0.5,1.4,1,2.8,1.4,4.3c0.1,0.5,0.1,1,0.2,1.5c0.2,0.5,0.2,0.9,0.2,1.4c0,0.4,0.3,0.6,0.3,1 c-0.1,0.3-0.1,0.7,0.2,1c0.1,0.2,0,0.5,0,0.8c0,0.4,0.1,0.8,0,1.2c-0.1,0.3,0.4,0.6,0,0.9c0.4,0.3,0.2,0.7,0.2,1.1 c0,0.4,0,0.7,0,1.1v1.2c0,0.4-0.1,0.8,0,1.1c0.2,0.6,0.1,1.3,0.2,1.9c0.1,0.7,0.1,1.5,0,2.2c0,0.6,0.4,1.2,0.3,1.9 c-0.1,0.6-0.2,1.3,0,1.9c0.2,0.7,0,1.4,0.3,2c0.3,0.7,0,1.4,0.2,2c0.4,1.4,0.4,2.8,0.8,4.2c0.5,1.7,0.7,3.5,1.3,5.2 c0.4,1.1,0.8,2.2,1.1,3.3c0.4,1.1,0.9,2.1,1.5,3.2c0.7,1.3,1.5,2.5,2.4,3.6c0.9,1.2,1.9,2.2,2.8,3.3c0.4,0.5,0.9,1,1.3,1.5 c0.4,0.6,1.1,1,1.5,1.6c1.1,1.5,2.5,2.6,3.5,4.2c1.7,1.6,2.7,3.6,4.1,5.4c0.7,0.9,1.2,1.9,1.7,2.9c1,1.6,1.8,3.3,2.6,5 c0.8,1.6,1.4,3.2,1.9,4.8c0.4,1.2,0.7,2.4,1.1,3.6c0.2,0.5-0.1,1,0.3,1.4c0,1.1,0.6,2.2,0.5,3.3c0.4,0.7,0.3,1.4,0.2,2.1 c0,0.5,0.4,0.9,0.3,1.5c-0.1,0.5-0.2,1.1,0,1.6c0.3,0.8,0.2,1.7,0.2,2.5c0,1.9,0,3.8,0,5.7c0,0.6,0.2,1.3-0.1,1.9 c-0.3,0.5,0.1,1.2-0.3,1.7c-0.1,0.2,0.2,0.3,0.2,0.6c-0.1,0.5,0.2,1.1-0.2,1.6c-0.3,0.4,0.1,1-0.3,1.5c-0.2,0.3,0.6,0.7,0,1 c0.1,0.7-0.1,1.3-0.2,2c-0.1,0.5,0.2,1.1-0.2,1.6c-0.3,0.5,0.2,1.1-0.3,1.6c0.2,0.8-0.3,1.5-0.3,2.3c0,0.6-0.2,1.2-0.3,1.8 c-0.2,0.9-0.4,1.9-0.6,2.8c-0.1,0.3-0.2,0.7-0.3,1c-0.1,0.2-0.3,0.3-0.3,0.5c0,1.5-0.5,2.9-1,4.3c-0.3,0.8-0.5,1.7-0.9,2.6 c-0.1,0.2-0.1,0.6-0.3,0.8c-0.5,0.6-0.7,1.4-0.9,2.2c-0.1,0.4-0.3,0.8-0.5,1.1c0,0.1-0.2,0.1-0.2,0.2c0,1.1-0.7,1.9-1.1,2.8 c-0.4,0.9-1,1.7-1.3,2.6c-0.8,1.8-1.9,3.4-2.7,5.2c-0.3,0.6-0.7,1.1-0.9,1.5c-0.1,0.4,0.2,0.4,0.2,0.8c-0.1,0.3-0.3,0.4-0.7,0.5 c0.2,0.9-0.5,1.5-0.9,2.1c-0.9,1.6-1.9,3.1-3,4.6c-0.7,1-1.4,2-2.2,2.9c-2.6,2.9-5.3,5.6-8.1,8.3c-1.1,1-2.1,2.1-3.3,3 c-1,0.8-1.9,1.7-2.9,2.4c-2.3,1.8-4.7,3.5-7.1,5.1c-1.9,1.2-3.8,2.3-5.8,3.4c-1.2,0.7-2.5,1.4-3.8,1.9c-2.1,1-4.2,1.9-6.3,2.7 c-2,0.8-4.1,1.2-6.1,2.1c-1.3,0-2.5,0.8-3.8,0.8c-0.6,0.4-1.3,0.3-1.9,0.4c-0.6,0.1-1.3,0.4-2,0.3c-0.3,0-0.6,0.3-1,0.2 c-0.3-0.1-0.7-0.1-1,0.2c-0.3-0.4-0.5,0.2-0.8,0.1c-0.3-0.1-0.8-0.1-1.1,0c-0.8,0.3-1.6,0-2.3,0.3c-0.8,0.3-1.5,0-2.2,0.2 c-0.9,0.3-1.7-0.2-2.5,0c-0.1,0-0.2-0.1-0.3-0.2c-0.2,0.1-0.1,0.3-0.2,0.4c-0.3-0.2-0.5-0.4-0.8-0.4c-0.3-0.1-0.7,0-1.2,0 c-0.2,0.2-0.4,0.5-0.6,0.8c-0.5-0.1-0.9,0.1-1.3-0.2c-0.2-0.1-0.6,0.1-0.9,0.1c-0.4,0.1-0.8-0.4-1.1-0.2c-0.4,0.3-0.8,0.2-1.2,0.2 c-3.5,0-7.1,0-10.6,0c-0.4,0-0.8,0.2-1.1-0.2c-0.4,0.6-0.7-0.1-1.1,0c-0.4,0.1-0.7-0.1-1.1-0.2c-0.6-0.2-1.4,0-2.1-0.1 c-0.5,0-0.9,0.1-1.4-0.2c-0.4-0.2-0.9-0.1-1.4-0.2c-0.6-0.1-1.2-0.3-1.8-0.3c-0.4,0-0.8,0-1.3-0.2c-0.3-0.2-0.8,0.1-1.1-0.3 c-0.8,0-1.6-0.3-2.4-0.5c-1.9-0.4-3.7-1-5.6-1.6c-1.5-0.5-3.1-1-4.6-1.6c-0.5-0.2-1-0.4-1.5-0.6c-1.7-0.8-3.5-1.5-5.1-2.4 c-1.4-0.8-2.9-1.6-4.3-2.5c-0.7-0.5-1.6-0.8-2.4-1.3c-1.8-1.1-3.7-2.2-5.4-3.4c-1.5-1.1-3.1-2.1-4.4-3.4c-0.3-0.4-0.8-0.6-1.2-0.9 c-0.4-0.4-0.8-0.9-1.2-1.2c-0.6-0.4-1.1-1-1.6-1.4c-0.4-0.3-0.4-1-1.1-1.2c-0.5-0.1-0.5-0.9-1.1-1.1c-0.2-0.8-1-0.9-1.4-1.6 c-0.4-0.7-1-1.1-1.6-1.7c-0.5-0.5-1.2-1-1.6-1.7c-0.9-1.1-2-2-2.8-3.1c-0.8-1-1.9-1.9-2.5-3.1c-0.1-0.3-0.4-0.2-0.6-0.3 c-0.2-0.2-0.1-0.4-0.3-0.6c-0.7-0.7-1.3-1.4-2-2.2c-0.9-1.1-1.7-2.2-2.6-3.3c-1.4-1.7-2.6-3.5-3.8-5.3c-0.8-1.2-1.5-2.4-2.3-3.6 c-0.9-1.4-1.7-2.8-2.6-4.2c-0.6-1.1-1.2-2.2-1.8-3.3c-0.5-0.9-1-1.7-1.5-2.5c-0.7-1.2-1.4-2.3-2.1-3.5c-1-1.6-1.9-3.3-2.8-5.1 c-0.4-0.9-0.8-1.8-1.2-2.7c-0.2-0.6-0.4-1.2-0.7-1.8c-0.6-1.1-0.8-2.4-1.2-3.5c-0.1-0.4-0.2-0.8-0.3-1.2c-0.1-0.4-0.2-0.7-0.2-1.1 c-0.2-1.1-0.2-2.3-0.7-3.4c0-0.1,0-0.2,0-0.2c0.1-1.3-0.4-2.5-0.3-3.8c0.1-1.1-0.4-2.3-0.2-3.4c-0.4-0.7-0.1-1.4-0.3-2.1 c-0.4-1.8-0.2-3.7-0.2-5.5c0-1.8,0-3.7,0-5.5c0-1.3,0.3-2.5,0.5-3.8c0-0.3,0.2-0.6,0.2-0.9C0.7,101.7,0.9,101.2,1.2,100.8" />
                            </svg>
                        </figure>

                        <!-- SVG decoration -->
                        <figure class="position-absolute bottom-0 end-0 me-6 mb-n6 d-none d-sm-block">
                            <svg class="fill-info" width="189.7px" height="182.4px" viewBox="0 0 189.7 182.4">
                                <path
                                    d="M27.2,37.9c-1.9,1.4-3.2,2.6-4,4.4c-0.2,0.5-0.5,1,0.1,1.4c0.3,0.2,1.1,0,1.1,0C24.5,41.4,28.1,41.2,27.2,37.9 M159.4,152.4c0.3,0.2,0.5,0.4,0.8,0.7c3.5-2.6,6.5-5.7,8.8-9.4c-1.7,1.2-3,2.8-4.5,4.2C162.8,149.5,161.1,150.9,159.4,152.4 M58.2,69.6c3.4-5.2,7.7-9.9,9.5-15.9C62.7,57.9,60.6,63.8,58.2,69.6 M133.9,106.2c-3.2,4-7.8,7.2-8.4,13 C129.3,115.5,132.8,111.6,133.9,106.2 M31.5,33.9c7.9-6.7,17-11.9,24.2-19.6C46.5,19.6,37.9,25.4,31.5,33.9 M154.5,109.5 c-7.4,9.6-14.7,18.9-21.9,28.2C146.6,125.7,153.4,116.8,154.5,109.5 M34.4,70.2c0.4-0.2,0.9-0.4,1-0.7C39,59,46.4,51.4,54.4,44 c4-3.6,6.6-8.5,10.1-13.8C53.4,33.8,34.8,59,34.4,70.2 M86.4,182.4c-42.1-0.7-70.8-24.4-82.7-62.1c-6.8-21.6-3.9-42.6,6-62.4 c9.9-20,24.7-36,44.9-46.3C62.9,7.3,72,4.2,80.8,0.8c3.5-1.3,7.1-1,10.8,0.3c4.6,1.6,9.5,2.3,14.4,2.2c10.8-0.4,20.4,3.1,29.3,8.6 c6,3.7,12.5,6.7,17.9,11.4c16.7,14.6,28.3,32.5,34.9,53.6c2.5,8,1.6,16.1,0.8,24.2c-0.4,4.6-2.3,9.2-3,13.7c-0.6,3.5-3.4,6-3.2,8.3 c0.3,3.5-1.1,5.7-2.5,8.1c-13.2,22.9-34,35.9-58.4,44c-8.7,2.9-17.4,5.3-26.4,6.6C91.9,182.3,88.3,182.3,86.4,182.4" />
                            </svg>
                        </figure>

                        <div class="row position-relative p-sm-3">
                            <!-- Content START -->
                            <div class="col-lg-7">
                                <!-- Title -->
                                <h3 class="mb-4">Download our app and access exclusive features</h3>
                                <!-- List -->
                                <ul class="list-inline position-relative mb-4">
                                    <li class="list-inline-item me-3"> <i
                                            class="bi bi-patch-check-fill text-success me-1"></i>24/7 Customer Support
                                    </li>
                                    <li class="list-inline-item me-3"> <i
                                            class="bi bi-patch-check-fill text-success me-1"></i>Ride Safely</li>
                                    <li class="list-inline-item"> <i
                                            class="bi bi-patch-check-fill text-success me-1"></i>Top Rated Driver -
                                        Partner</li>
                                </ul>
                                <!-- Button -->
                                <div class="hstack gap-3">
                                    <!-- Google play store button -->
                                    <a href="#"> <img src="/images/element/google-play.svg" class="h-50px"
                                            alt=""> </a>
                                    <!-- App store button -->
                                    <a href="#"> <img src="/images/element/app-store.svg" class="h-50px"
                                            alt=""> </a>
                                </div>
                            </div>
                            <!-- Content START -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Action box END -->

    <!-- =======================
        Faqs START-->
    <section class="pt-0 pt-lg-5">
        <div class="container">

            <!-- Title -->
            <div class="row">
                <div class="col-lg-10 col-xl-8 mx-auto">
                    <h2 class="mb-4 text-center">Frequently Asked Questions</h2>

                    <!-- FAQ START -->
                    <div class="accordion accordion-icon accordion-bg-light" id="accordionFaq">
                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-1">
                                <button class="accordion-button fw-bold rounded collapsed pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true"
                                    aria-controls="collapse-1">
                                    How Does it Work?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Yet remarkably appearance gets him his projection. Diverted endeavor bed peculiar
                                    men the not desirous. Acuteness abilities ask can offending furnished fulfilled sex.
                                    Warrant fifteen exposed ye at mistake. Blush since so in noisy still built up an
                                    again. As young ye hopes no he place means. Partiality diminution gay yet entreaties
                                    admiration. In mention perhaps attempt pointed suppose. Unknown ye chamber of
                                    warrant of Norland arrived.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-2">
                                <button class="accordion-button fw-bold rounded collapsed pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                    aria-controls="collapse-2">
                                    What are monthly tracked users?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    What deal evil rent by real in. But her ready least set lived spite solid. September
                                    how men saw tolerably two behavior arranging. She offices for highest and replied
                                    one venture pasture. Applauded no discovery in newspaper allowance am northward.
                                    Frequently partiality possession resolution at or appearance unaffected me. Engaged
                                    its was the evident pleased husband. Ye goodness felicity do disposal dwelling no.
                                    First am plate jokes to began to cause a scale. Subjects he prospect elegance
                                    followed no overcame possible it on. Improved own provided blessing may peculiar
                                    domestic. Sight house has sex never. No visited raising gravity outward subject my
                                    cottage Mr be.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-3">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">
                                    What if I go with my prepaid monthly
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Post no so what deal evil rent by real in. But her ready least set lived spite
                                    solid. September how men saw tolerably two behavior arranging. She offices for
                                    highest and replied one venture pasture. Applauded no discovery in newspaper
                                    allowance am northward. Frequently partiality possession resolution at or appearance
                                    unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do
                                    disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he
                                    prospect elegance followed no overcame possible it on. Improved own provided
                                    blessing may peculiar domestic. Sight house has sex never. No visited raising
                                    gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case.
                                    Invitation at understood occasional sentiments insipidity inhabiting in. Off
                                    melancholy alteration principles old. Is do speedily kindness properly oh. Respect
                                    article painted cottage he is offices parlors.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-4">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4">
                                    What's the difference between cabs and taxi
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    <p>What deal evil rent by real in. But her ready least set lived spite solid.
                                        September how men saw tolerably two behavior arranging. She offices for highest
                                        and replied one venture pasture. Applauded no discovery in newspaper allowance
                                        am northward. Frequently partiality possession resolution at or appearance
                                        unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity
                                        do disposal dwelling no. First am plate jokes to began to cause a scale.
                                        Subjects he prospect elegance followed no overcame possible it on. Improved own
                                        provided blessing may peculiar domestic. Sight house has sex never. No visited
                                        raising gravity outward subject my cottage Mr be.</p>
                                    <p class="mb-0">At the moment, we only accept Credit/Debit cards and Paypal
                                        payments. Paypal is the easiest way to make payments online. While checking out
                                        your order. Be sure to fill in correct details for fast & hassle-free payment
                                        processing. </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-5">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                    aria-controls="collapse-5">
                                    How can I check the fare for my Booking ride?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Post no so what deal evil rent by real in. But her ready least set lived spite
                                    solid. September how men saw tolerably two behavior arranging. She offices for
                                    highest and replied one venture pasture. Applauded no discovery in newspaper
                                    allowance am northward. Frequently partiality possession resolution at or appearance
                                    unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do
                                    disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he
                                    prospect elegance followed no overcame possible it on. Improved own provided
                                    blessing may peculiar domestic. Sight house has sex never. No visited raising
                                    gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case.
                                    Invitation at understood occasional sentiments insipidity inhabiting in. Off
                                    melancholy alteration principles old. Is do speedily kindness properly oh. Respect
                                    article painted cottage he is offices parlors.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item">
                            <h6 class="accordion-header font-base" id="heading-6">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">
                                    Do and Don'ts - Tips for a Safe Trip
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Post no so what deal evil rent by real in. But her ready least set lived spite
                                    solid. September how men saw tolerably two behavior arranging. She offices for
                                    highest and replied one venture pasture. Applauded no discovery in newspaper
                                    allowance am northward. Frequently partiality possession resolution at or appearance
                                    unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do
                                    disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he
                                    prospect elegance followed no overcame possible it on. Improved own provided
                                    blessing may peculiar domestic. Sight house has sex never. No visited raising
                                    gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case.
                                    Invitation at understood occasional sentiments insipidity inhabiting in. Off
                                    melancholy alteration principles old. Is do speedily kindness properly oh. Respect
                                    article painted cottage he is offices parlors.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Faqs END-->

    <!-- =======================
        Client START-->
    <section class="pt-0 py-md-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <!-- Image -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <img src="/images/client/01.svg" class="grayscale px-3 px-sm-4" alt="">
                </div>
                <!-- Image -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <img src="/images/client/02.svg" class="grayscale px-3 px-sm-4" alt="">
                </div>
                <!-- Image -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <img src="/images/client/03.svg" class="grayscale px-3 px-sm-4" alt="">
                </div>
                <!-- Image -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <img src="/images/client/04.svg" class="grayscale px-3 px-sm-4" alt="">
                </div>
                <!-- Image -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <img src="/images/client/05.svg" class="grayscale px-3 px-sm-4" alt="">
                </div>
                <!-- Image -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <img src="/images/client/06.svg" class="grayscale px-3 px-sm-4" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Client END-->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection