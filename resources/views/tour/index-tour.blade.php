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
                                            href="{{ route('second', ['hotel', 'index-chain']) }}">Hotel Chain</a>
                                    </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'index-resort']) }}">Hotel
                                            Resort</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hotel', 'grid']) }}">Hotel
                                            Grid</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('second', ['hotel', 'list']) }}">Hotel
                                            List</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'detail']) }}">Hotel Detail</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'room-detail']) }}">Room Detail</a>
                                    </li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['hotel', 'booking']) }}">Hotel Booking</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Flight</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['flight', 'index-flight']) }}">Flight
                                            Home</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['flight', 'list']) }}">Flight List</a></li>
                                    <li> <a class="dropdown-item"
                                            href="{{ route('second', ['flight', 'detail']) }}">Flight Detail</a>
                                    </li>
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
                                            href="{{ route('second', ['tour', 'booking']) }}">Tour Booking</a>
                                    </li>
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
                                    <li> <a class="dropdown-item" href="{{ route('second', ['directory' , 'detail']) }}">Directory
                                            Detail</a></li>
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
                    <li class="nav-item"> <a class="nav-link active"
                            href="{{ route('second', ['tour', 'index-tour']) }}"><i
                                class="fa-solid fa-globe-americas me-2"></i>Tour</a> </li>

                    <!-- Nav item Cabs -->
                    <li class="nav-item"> <a class="nav-link" href="{{ route('second', ['cab' , 'index-cab']) }}"><i
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
    <section class="pt-0">
        <div class="container position-relative">
            <!-- Bg image -->
            <div class="rounded-3 p-4 p-sm-5"
                style="background-image: url(/images/bg/02.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                <!-- Banner title -->
                <div class="row justify-content-between pt-0 pb-5">
                    <div class="col-md-7 col-lg-8 col-xxl-7 pb-5 mb-0 mb-lg-5">
                        <h1 class="text-white">Life Is Adventure Make The Best Of It</h1>
                        <p class="text-white mb-0">Planning for a trip? we will organize your best trip with the
                            best destination and within the best budgets!</p>
                    </div>

                    <!-- Produce item START -->
                    <div class="col-md-5 col-lg-4 col-xl-3 mb-3 mb-sm-0">
                        <div class="card shadow p-2 pb-0">
                            <!-- Offer badge -->
                            <div class="position-absolute top-0 start-0 mt-n3 ms-n3 z-index-9">
                                <img src="/images/element/05.svg" class="position-relative h-70px" alt="">
                                <span
                                    class="h5 text-white position-absolute top-50 start-50 translate-middle">40%</span>
                            </div>

                            <div class="rounded-3 overflow-hidden position-relative">
                                <!-- Image -->
                                <img src="/images/category/tour/05.jpg" class="card-img" alt="">
                                <!-- Overlay -->
                                <div class="bg-overlay bg-dark opacity-4"></div>

                                <!-- Hover element -->
                                <div class="card-img-overlay d-flex">
                                    <h6 class="text-white fw-normal mt-auto mb-0">5 Days / 4 Nights</h6>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body px-2">
                                <!-- Badge and Rating -->
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="#"
                                        class="badge bg-primary bg-opacity-10 text-primary">Adventure</a>
                                    <!-- Rating -->
                                    <h6 class="fw-light m-0"><i class="fa-solid fa-star text-warning me-2"></i>4.5
                                    </h6>
                                </div>

                                <!-- Title -->
                                <h6 class="card-title"><a href="#">Maldives Sightseeing & Adventure Tour</a>
                                </h6>

                                <!-- Badge and Price -->
                                <div class="d-flex justify-content-between align-items-center mb-0">
                                    <!-- Price -->
                                    <h6 class="text-success mb-0">$385 <span class="fw-light">/person</span></h6>
                                    <span class="text-decoration-line-through mb-0 text-reset">$682</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Produce item END -->
                </div>
            </div>

            <!-- Search START -->
            <div class="row mt-n7">
                <div class="col-11 mx-auto">
                    <!-- Booking from START -->
                    <form class="bg-mode shadow rounded-3 p-4">
                        <div class="row g-4 align-items-center">

                            <div class="col-xl-10">
                                <div class="row g-4">
                                    <!-- Location -->
                                    <div class="col-md-6 col-lg-4">
                                        <label class="h6 fw-normal mb-0"><i
                                                class="bi bi-geo-alt text-primary me-1"></i>Location</label>
                                        <!-- Input field -->
                                        <div class="form-border-bottom form-control-transparent form-fs-lg mt-2">
                                            <select class="form-select js-choice" data-search-enabled="true">
                                                <option value="" selected>Select location</option>
                                                <option>San Jacinto, USA</option>
                                                <option>North Dakota, Canada</option>
                                                <option>West Virginia, Paris</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Check in -->
                                    <div class="col-md-6 col-lg-4">
                                        <label class="h6 fw-normal mb-0"><i
                                                class="bi bi-calendar text-primary me-1"></i>Date</label>
                                        <!-- Input field -->
                                        <div class="form-border-bottom form-control-transparent form-fs-lg mt-2">
                                            <input type="text" class="form-control flatpickr py-2"
                                                data-date-format="d M Y" placeholder="Choose a date">
                                        </div>
                                    </div>

                                    <!-- Guest -->
                                    <div class="col-md-6 col-lg-4">
                                        <label class="h6 fw-normal mb-0"><i
                                                class="fa-solid fa-person-skating text-primary me-1"></i>Tour
                                            type</label>
                                        <!-- Input field -->
                                        <div class="form-border-bottom form-control-transparent form-fs-lg mt-2">
                                            <select class="form-select js-choice" data-search-enabled="true">
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
                            <div class="col-xl-2">
                                <div class="d-grid">
                                    <a href="#" class="btn btn-lg btn-dark mb-0">Take a Tour</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Booking from END -->
                </div>
            </div>
            <!-- Search END -->

            <!-- Recent Search START -->
            <div class="row g-2 mt-6">
                <!-- Title -->
                <div class="col-lg-2">
                    <h4 class="mb-0">Recent Searches</h4>
                </div>

                <div class="col-lg-10">
                    <div class="hstack flex-wrap gap-3">
                        <!-- Search item -->
                        <div class="alert bg-light fade show small px-3 py-1 mb-0" role="alert">
                            <span class="me-1">Taman Sari</span>
                            <button type="button" class="btn-close small p-2" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <!-- Search item -->
                        <div class="alert bg-light fade show small px-3 py-1 mb-0" role="alert">
                            <span class="me-1">The Grand Palace</span>
                            <button type="button" class="btn-close small p-2" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <!-- Search item -->
                        <div class="alert bg-light fade show small px-3 py-1 mb-0" role="alert">
                            <span class="me-1">Glacier National Park</span>
                            <button type="button" class="btn-close small p-2" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <!-- Search item -->
                        <div class="alert bg-light fade show small px-3 py-1 mb-0" role="alert">
                            <span class="me-1">Machu Picchu</span>
                            <button type="button" class="btn-close small p-2" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <!-- Search item -->
                        <div class="alert bg-light fade show small px-3 py-1 mb-0" role="alert">
                            <span class="me-1">Prambanan Temple</span>
                            <button type="button" class="btn-close small p-2" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <!-- Search item -->
                        <div class="alert bg-light fade show small px-3 py-1 mb-0" role="alert">
                            <span class="me-1">Batu Gong</span>
                            <button type="button" class="btn-close small p-2" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <!-- Search item -->
                        <div class="alert bg-light fade show small px-3 py-1 mb-0" role="alert">
                            <span class="me-1">Barobadur Temple</span>
                            <button type="button" class="btn-close small p-2" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <!-- Search item -->
                        <div class="alert bg-light fade show small px-3 py-1 mb-0" role="alert">
                            <span class="me-1">Great Barrier Reef</span>
                            <button type="button" class="btn-close small p-2" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <!-- Search item -->
                        <div class="alert bg-light fade show small px-3 py-1 mb-0" role="alert">
                            <span class="me-1">Argentine Patagonia</span>
                            <button type="button" class="btn-close small p-2" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <!-- Search item -->
                        <button type="button" class="btn btn-sm btn-primary-soft mb-0"> Clear all</button>
                    </div>
                </div>
            </div>
            <!-- Recent Search END -->

        </div>
    </section>
    <!-- =======================
        Main Banner END -->

    <!-- =======================
        Packages START -->
    <section class="pt-0 pt-md-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Our Best Packages</h2>
                </div>
            </div>

            <div class="row g-4">
                <!-- Package item -->
                <div class="col-sm-6 col-xl-3">
                    <!-- Card START -->
                    <div class="card card-img-scale overflow-hidden bg-transparent">
                        <div class="card-img-scale-wrapper rounded-3">
                            <!-- Card Image -->
                            <img src="/images/category/tour/04.jpg" class="card-img" alt="">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column z-index-1 p-4">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between">
                                    <span class="badge text-bg-dark">Adventure</span>
                                    <span class="badge text-bg-white"><i
                                            class="fa-solid fa-star text-warning me-2"></i>4.3</span>
                                </div>
                                <!-- Card overlay bottom -->
                                <div class="w-100 mt-auto">
                                    <!-- Card category -->
                                    <span class="badge text-bg-white fs-6">6 days / 5 nights</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['tour', 'grid']) }}"
                                    class="stretched-link">Lombok, Indonesia</a></h5>
                            <!-- Content -->
                            <div class="hstack gap-2">
                                <span class="h5 mb-0 text-success">$1385</span>
                                <small>Starting price</small>
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Package item -->
                <div class="col-sm-6 col-xl-3">
                    <!-- Card START -->
                    <div class="card card-img-scale overflow-hidden bg-transparent">
                        <div class="card-img-scale-wrapper rounded-3">
                            <!-- Card Image -->
                            <img src="/images/category/tour/02.jpg" class="card-img" alt="">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column z-index-1 p-4">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between">
                                    <span class="badge text-bg-dark">History</span>
                                    <span class="badge text-bg-white"><i
                                            class="fa-solid fa-star text-warning me-2"></i>4.5</span>
                                </div>
                                <!-- Card overlay bottom -->
                                <div class="w-100 mt-auto">
                                    <!-- Card category -->
                                    <span class="badge text-bg-white fs-6">8 days / 7 nights</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['tour', 'grid']) }}"
                                    class="stretched-link">Northern Lights Escape</a></h5>
                            <!-- Content -->
                            <div class="hstack gap-2">
                                <span class="h5 mb-0 text-success">$2569</span>
                                <small>Starting price</small>
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Package item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-img-scale overflow-hidden bg-transparent">
                        <div class="card-img-scale-wrapper rounded-3">
                            <!-- Card Image -->
                            <img src="/images/category/tour/03.jpg" class="card-img" alt="">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column z-index-1 p-4">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between">
                                    <span class="badge text-bg-dark">Desert</span>
                                    <span class="badge text-bg-white"><i
                                            class="fa-solid fa-star text-warning me-2"></i>4.2</span>
                                </div>
                                <!-- Card overlay bottom -->
                                <div class="w-100 mt-auto">
                                    <!-- Card category -->
                                    <span class="badge text-bg-white fs-6">9 days / 8 nights</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['tour', 'grid']) }}"
                                    class="stretched-link">Essential Egypt</a></h5>
                            <!-- Content -->
                            <div class="hstack gap-2">
                                <span class="h5 mb-0 text-success">$1885</span>
                                <small>Starting price</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-img-scale overflow-hidden bg-transparent">
                        <div class="card-img-scale-wrapper rounded-3">
                            <!-- Card Image -->
                            <img src="/images/category/tour/01.jpg" class="card-img" alt="">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column z-index-1 p-4">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between">
                                    <span class="badge text-bg-dark">Beach</span>
                                    <span class="badge text-bg-white"><i
                                            class="fa-solid fa-star text-warning me-2"></i>4.6</span>
                                </div>
                                <!-- Card overlay bottom -->
                                <div class="w-100 mt-auto">
                                    <!-- Card category -->
                                    <span class="badge text-bg-white fs-6">9 days / 8 nights</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['tour', 'grid']) }}"
                                    class="stretched-link">Phi Phi Islands</a></h5>
                            <!-- Content -->
                            <div class="hstack gap-2">
                                <span class="h5 text-success mb-0">$3585</span>
                                <small>Starting price</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Packages END -->

    <!-- =======================
        Action box START -->
    <section class="pt-0 pt-md-5">
        <div class="container position-relative">
            <!-- SVG decoration -->
            <figure class="position-absolute top-100 start-0 translate-middle d-none d-md-block z-index-1 mt-n4 ms-4">
                <svg class="fill-primary" width="148px" height="133px">
                    <path
                        d="M145.013,6.751 C143.905,6.733 143.022,5.819 143.041,4.712 C143.060,3.604 143.973,2.721 145.080,2.740 C146.188,2.759 147.071,3.672 147.052,4.779 C147.033,5.887 146.121,6.770 145.013,6.751 ZM144.552,34.160 C145.660,34.179 146.543,35.092 146.524,36.199 C146.506,37.307 145.592,38.190 144.485,38.171 C143.377,38.153 142.495,37.240 142.513,36.132 C142.532,35.024 143.445,34.141 144.552,34.160 ZM144.024,65.580 C145.132,65.599 146.015,66.512 145.996,67.619 C145.978,68.727 145.065,69.610 143.957,69.591 C142.849,69.572 141.966,68.659 141.985,67.552 C142.004,66.444 142.917,65.561 144.024,65.580 ZM143.496,97.000 C144.604,97.019 145.487,97.932 145.468,99.039 C145.450,100.147 144.537,101.030 143.429,101.011 C142.321,100.992 141.438,100.079 141.457,98.972 C141.476,97.864 142.389,96.981 143.496,97.000 ZM142.968,128.420 C144.076,128.439 144.959,129.351 144.940,130.460 C144.921,131.567 144.008,132.450 142.901,132.431 C141.793,132.413 140.910,131.500 140.929,130.392 C140.948,129.284 141.861,128.401 142.968,128.420 ZM116.936,6.279 C115.828,6.261 114.945,5.348 114.964,4.240 C114.982,3.132 115.895,2.250 117.003,2.268 C118.111,2.287 118.993,3.200 118.975,4.308 C118.956,5.415 118.043,6.298 116.936,6.279 ZM116.475,33.688 C117.582,33.707 118.465,34.620 118.447,35.727 C118.428,36.835 117.515,37.718 116.407,37.699 C115.300,37.681 114.417,36.768 114.436,35.660 C114.454,34.552 115.367,33.670 116.475,33.688 ZM115.947,65.108 C117.055,65.127 117.937,66.040 117.919,67.147 C117.900,68.255 116.987,69.138 115.880,69.119 C114.772,69.101 113.889,68.188 113.908,67.080 C113.926,65.973 114.839,65.090 115.947,65.108 ZM115.419,96.528 C116.527,96.547 117.409,97.460 117.391,98.567 C117.372,99.675 116.459,100.558 115.352,100.539 C114.244,100.521 113.361,99.608 113.380,98.500 C113.398,97.392 114.311,96.510 115.419,96.528 ZM114.891,127.948 C115.998,127.967 116.881,128.880 116.863,129.987 C116.844,131.095 115.931,131.978 114.823,131.959 C113.716,131.941 112.833,131.028 112.852,129.920 C112.870,128.812 113.783,127.930 114.891,127.948 ZM88.858,5.807 C87.750,5.789 86.868,4.876 86.886,3.768 C86.905,2.660 87.818,1.777 88.925,1.796 C90.033,1.815 90.916,2.728 90.897,3.835 C90.879,4.943 89.966,5.826 88.858,5.807 ZM88.397,33.216 C89.505,33.235 90.388,34.148 90.369,35.256 C90.351,36.363 89.438,37.246 88.330,37.227 C87.222,37.209 86.340,36.296 86.358,35.188 C86.377,34.081 87.290,33.198 88.397,33.216 ZM87.869,64.636 C88.977,64.655 89.860,65.568 89.841,66.676 C89.823,67.783 88.910,68.666 87.802,68.648 C86.694,68.629 85.812,67.716 85.830,66.608 C85.849,65.501 86.762,64.618 87.869,64.636 ZM87.341,96.056 C88.449,96.075 89.332,96.988 89.313,98.095 C89.295,99.203 88.382,100.086 87.274,100.067 C86.166,100.049 85.284,99.136 85.302,98.028 C85.321,96.921 86.234,96.038 87.341,96.056 ZM86.813,127.476 C87.921,127.495 88.804,128.408 88.785,129.516 C88.767,130.623 87.854,131.506 86.746,131.488 C85.638,131.469 84.756,130.556 84.774,129.448 C84.793,128.341 85.706,127.458 86.813,127.476 ZM60.781,5.336 C59.673,5.317 58.790,4.404 58.809,3.296 C58.827,2.189 59.740,1.306 60.848,1.324 C61.956,1.343 62.838,2.256 62.820,3.364 C62.801,4.471 61.888,5.354 60.781,5.336 ZM60.320,32.745 C61.428,32.763 62.310,33.676 62.292,34.784 C62.273,35.891 61.360,36.774 60.253,36.756 C59.145,36.737 58.262,35.824 58.281,34.717 C58.299,33.609 59.213,32.726 60.320,32.745 ZM59.792,64.165 C60.900,64.183 61.783,65.096 61.764,66.204 C61.745,67.311 60.832,68.194 59.725,68.175 C58.617,68.157 57.734,67.244 57.753,66.136 C57.771,65.029 58.684,64.146 59.792,64.165 ZM59.264,95.584 C60.372,95.603 61.255,96.516 61.236,97.624 C61.217,98.731 60.304,99.614 59.197,99.596 C58.089,99.577 57.206,98.664 57.225,97.556 C57.243,96.449 58.156,95.566 59.264,95.584 ZM58.736,127.005 C59.843,127.023 60.726,127.936 60.708,129.044 C60.689,130.151 59.776,131.034 58.669,131.016 C57.561,130.997 56.678,130.084 56.697,128.977 C56.715,127.869 57.628,126.986 58.736,127.005 ZM32.703,4.864 C31.595,4.845 30.713,3.932 30.731,2.825 C30.750,1.717 31.663,0.834 32.771,0.853 C33.878,0.871 34.761,1.784 34.742,2.892 C34.724,4.000 33.811,4.882 32.703,4.864 ZM32.243,32.273 C33.350,32.291 34.233,33.205 34.214,34.312 C34.196,35.420 33.283,36.303 32.175,36.284 C31.068,36.265 30.185,35.352 30.203,34.245 C30.222,33.137 31.135,32.254 32.243,32.273 ZM31.715,63.693 C32.822,63.712 33.705,64.624 33.686,65.732 C33.668,66.839 32.755,67.722 31.647,67.704 C30.539,67.685 29.657,66.772 29.675,65.665 C29.694,64.557 30.607,63.674 31.715,63.693 ZM31.187,95.113 C32.294,95.131 33.177,96.044 33.158,97.152 C33.140,98.260 32.227,99.142 31.119,99.124 C30.011,99.105 29.129,98.192 29.147,97.084 C29.166,95.977 30.079,95.094 31.187,95.113 ZM30.659,126.533 C31.766,126.551 32.649,127.465 32.630,128.572 C32.612,129.680 31.699,130.563 30.591,130.544 C29.484,130.525 28.601,129.612 28.619,128.505 C28.638,127.397 29.551,126.514 30.659,126.533 ZM4.626,4.392 C3.518,4.373 2.635,3.460 2.654,2.353 C2.672,1.245 3.585,0.362 4.693,0.381 C5.801,0.399 6.684,1.313 6.665,2.420 C6.646,3.528 5.733,4.411 4.626,4.392 ZM4.165,31.801 C5.273,31.820 6.156,32.732 6.137,33.840 C6.118,34.948 5.205,35.831 4.098,35.812 C2.990,35.793 2.107,34.880 2.126,33.773 C2.145,32.665 3.058,31.782 4.165,31.801 ZM3.637,63.221 C4.745,63.239 5.628,64.152 5.609,65.260 C5.590,66.368 4.677,67.251 3.570,67.232 C2.462,67.213 1.579,66.300 1.598,65.193 C1.616,64.085 2.529,63.202 3.637,63.221 ZM3.109,94.641 C4.217,94.659 5.100,95.573 5.081,96.680 C5.062,97.788 4.149,98.671 3.042,98.652 C1.934,98.633 1.051,97.720 1.070,96.613 C1.089,95.505 2.001,94.622 3.109,94.641 ZM2.581,126.061 C3.689,126.080 4.572,126.992 4.553,128.100 C4.534,129.208 3.621,130.091 2.514,130.072 C1.406,130.053 0.523,129.140 0.542,128.033 C0.561,126.925 1.474,126.042 2.581,126.061 Z" />
                </svg>
            </figure>

            <div class="bg-light rounded-3 position-relative p-3 p-sm-4">

                <!-- Svg decoration -->
                <figure class="position-absolute top-0 end-0 mt-6 d-none d-sm-block">
                    <svg class="fill-primary" width="141px" height="23.9px" viewBox="0 0 141 23.9">
                        <polygon
                            points="1.8,14.1 21.5,23.9 41.4,14 61.3,23.9 81.2,14 101.1,23.9 121,14 139,23 139,20.2 121,11.2 101.1,21.1 81.2,11.2 61.3,21.1 41.4,11.2 21.5,21.1 1.8,11.4 " />
                        <polygon
                            points="1.8,2.9 21.5,12.7 41.4,2.8 61.3,12.7 81.2,2.8 101.1,12.7 121,2.8 139,11.7 139,9 121,0 101.1,9.9 81.2,0 61.3,9.9 41.4,0 21.5,9.9 1.8,0.1" />
                    </svg>
                </figure>

                <div class="row">
                    <div class="col-md-7 mx-auto text-center py-5">
                        <!-- Title -->
                        <h2 class="mb-4">Subscribe And Get a Special Discount </h2>
                        <p class="mb-4">Speedily say has suitable disposal add boy. On forth doubt miles of
                            child. Exercise joy man children rejoiced.</p>
                        <!-- Form -->
                        <form class="bg-body shadow rounded-2 p-2">
                            <div class="input-group">
                                <input class="form-control border-0 me-1" type="email"
                                    placeholder="Enter your email">
                                <button type="button" class="btn btn-dark rounded-2 mb-0">Subscribe!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Action box END -->

    <!-- =======================
        Top category START -->
    <section class="pt-0 pt-md-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-3 mb-sm-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Top Categories</h2>
                </div>
            </div>

            <div class="row g-4 g-xl-5">
                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="row g-2 g-md-3 align-items-center position-relative">
                        <!-- Image -->
                        <div class="col-md-6">
                            <img src="/images/category/hotel/nearby/20.jpg" class="rounded-3" alt="">
                        </div>
                        <!-- Content -->
                        <div class="col-md-6">
                            <div class="p-2 p-md-0">
                                <h5 class="mb-1"><a href="#" class="stretched-link">Beach</a></h5>
                                <span>4,568 Places</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="row g-2 g-md-3 align-items-center position-relative">
                        <!-- Image -->
                        <div class="col-md-6">
                            <img src="/images/category/hotel/nearby/19.jpg" class="rounded-3" alt="">
                        </div>
                        <!-- Content -->
                        <div class="col-md-6">
                            <div class="p-2 p-md-0">
                                <h5 class="mb-1"><a href="#" class="stretched-link">Heritage</a></h5>
                                <span>2,845 Places</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="row g-2 g-md-3 align-items-center position-relative">
                        <!-- Image -->
                        <div class="col-md-6">
                            <img src="/images/category/hotel/nearby/18.jpg" class="rounded-3" alt="">
                        </div>
                        <!-- Content -->
                        <div class="col-md-6">
                            <div class="p-2 p-md-0">
                                <h5 class="mb-1"><a href="#" class="stretched-link">Desert</a></h5>
                                <span>1,587 Places</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="row g-2 g-md-3 align-items-center position-relative">
                        <!-- Image -->
                        <div class="col-md-6">
                            <img src="/images/category/hotel/nearby/17.jpg" class="rounded-3" alt="">
                        </div>
                        <!-- Content -->
                        <div class="col-md-6">
                            <div class="p-2 p-md-0">
                                <h5 class="mb-1"><a href="#" class="stretched-link">Tower</a></h5>
                                <span>986 Places</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="row g-2 g-md-3 align-items-center position-relative">
                        <!-- Image -->
                        <div class="col-md-6">
                            <img src="/images/category/hotel/nearby/16.jpg" class="rounded-3" alt="">
                        </div>
                        <!-- Content -->
                        <div class="col-md-6">
                            <div class="p-2 p-md-0">
                                <h5 class="mb-1"><a href="#" class="stretched-link">Mountain</a></h5>
                                <span>786 Places</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="row g-2 g-md-3 align-items-center position-relative">
                        <!-- Image -->
                        <div class="col-md-6">
                            <img src="/images/category/hotel/nearby/15.jpg" class="rounded-3" alt="">
                        </div>
                        <!-- Content -->
                        <div class="col-md-6">
                            <div class="p-2 p-md-0">
                                <h5 class=""><a href="#" class="stretched-link">Safari</a></h5>
                                <span>568 Places</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="row g-2 g-md-3 align-items-center position-relative">
                        <!-- Image -->
                        <div class="col-md-6">
                            <img src="/images/category/hotel/nearby/14.jpg" class="rounded-3" alt="">
                        </div>
                        <!-- Content -->
                        <div class="col-md-6">
                            <div class="p-2 p-md-0">
                                <h5 class="mb-1"><a href="#" class="stretched-link">Temple</a></h5>
                                <span>256 Places</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="row g-2 g-md-3 align-items-center position-relative">
                        <!-- Image -->
                        <div class="col-md-6">
                            <img src="/images/category/hotel/nearby/13.jpg" class="rounded-3" alt="">
                        </div>
                        <!-- Content -->
                        <div class="col-md-6">
                            <div class="p-2 p-md-0">
                                <h5 class="mb-1"><a href="#" class="stretched-link">Festival</a></h5>
                                <span>654 Places</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Top category END -->

    <!-- =======================
        Stories START-->
    <section class="pt-0 pt-md-5">
        <div class="container">

            <div class="row g-4 g-lg-5 align-items-center">

                <div class="col-lg-4">
                    <!-- Title -->
                    <h2 class="mb-0">Discover the best places to visit🔥</h2>

                    <div class="d-sm-flex justify-content-sm-between align-items-center mt-4">
                        <!-- Avatar group -->
                        <ul class="avatar-group mb-sm-0">
                            <li class="avatar">
                                <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg" alt="avatar">
                            </li>
                            <li class="avatar">
                                <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg" alt="avatar">
                            </li>
                            <li class="avatar">
                                <img class="avatar-img rounded-circle" src="/images/avatar/03.jpg" alt="avatar">
                            </li>
                            <li class="avatar">
                                <img class="avatar-img rounded-circle" src="/images/avatar/04.jpg" alt="avatar">
                            </li>
                            <li class="avatar">
                                <div class="avatar-img rounded-circle bg-dark">
                                    <span
                                        class="text-white position-absolute top-50 start-50 translate-middle small">16+</span>
                                </div>
                            </li>
                        </ul>

                        <!-- Rating -->
                        <h5 class="m-0"><i class="fa-solid fa-star text-warning me-2"></i>4.5</h5>
                    </div>

                    <!-- Button -->
                    <a href="#" class="btn btn-lg btn-primary-soft mb-0 mt-4">Explore places <i
                            class="bi fa-fw bi-arrow-right ms-2"></i></a>
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Card item -->
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="/images/category/tour/06.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <a class="hover-element position-absolute w-100 h-100" data-glightbox
                                    data-gallery="gallery" href="/images/gallery/01.jpg">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </a>
                            </div>

                            <!-- Testimonials START -->
                            <div class="tiny-slider arrow-round arrow-blur arrow-hover arrow-xs my-4 mb-md-0">
                                <div class="tiny-slider-inner pb-1" data-autoplay="true" data-arrow="true"
                                    data-dots="false" data-items="1">
                                    <!-- Testimonial item -->
                                    <div class="card bg-transparent">
                                        <div class="row align-items-center">
                                            <!-- Image -->
                                            <div class="col-4">
                                                <img src="/images/team/01.jpg" class="card-img" alt="">
                                            </div>
                                            <!-- Card body -->
                                            <div class="col-8">
                                                <div class="card-body p-0">
                                                    <p class="mb-0">Farther-related bed and passage comfort
                                                        civilly.</p>
                                                    <h6 class="card-title mb-0 mt-2">Louis Ferguson</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Testimonial item -->
                                    <div class="card bg-transparent">
                                        <div class="row align-items-center">
                                            <!-- Image -->
                                            <div class="col-4">
                                                <img src="/images/team/02.jpg" class="card-img" alt="">
                                            </div>
                                            <!-- Card body -->
                                            <div class="col-8">
                                                <div class="card-body p-0">
                                                    <p class="mb-0">Farther-related bed and passage comfort
                                                        civilly.</p>
                                                    <h6 class="card-title mb-0 mt-2">Lori Stevens</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonials END -->
                        </div>

                        <div class="col-md-6">
                            <!-- Card item -->
                            <div class="card card-element-hover card-overlay-hover overflow-hidden mb-4">
                                <!-- Image -->
                                <img src="/images/gallery/02.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <a class="hover-element position-absolute w-100 h-100" data-glightbox
                                    data-gallery="gallery" href="https://www.youtube.com/embed/tXHviS-4ygo">
                                    <span
                                        class="btn text-danger btn-round btn-white position-absolute top-50 start-50 translate-middle mb-0">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </a>
                            </div>
                            <!-- Card item -->
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="/images/gallery/03.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <a class="hover-element position-absolute w-100 h-100" data-glightbox
                                    data-gallery="gallery" href="/images/gallery/03.jpg">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </a>
                            </div>
                        </div>
                    </div><!-- Row END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Stories END-->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
        Footer START -->
<footer>
    <div class="container">
        <div class="bg-light rounded-top p-4 pb-0">
            <div class="row g-4 justify-content-between">

                <!-- Widget 1 START -->
                <div class="col-md-5 col-lg-4">
                    <!-- logo -->
                    <a class="me-0" href="{{ route('root') }}">
                        <img class="light-mode-item h-40px" src="/images/logo.svg" alt="logo">
                        <img class="dark-mode-item h-40px" src="/images/logo-light.svg" alt="logo">
                    </a>

                    <p class="text-reset mt-4 mb-2">Subscribe to Our Newsletter</p>
                    <!-- Newsletter -->
                    <form class="bg-body rounded-2 p-2">
                        <div class="input-group">
                            <input class="form-control border-0 me-1" type="email" placeholder="Enter your email">
                            <button type="button" class="btn btn-dark rounded-2 mb-0"><i
                                    class="bi bi-send"></i></button>
                        </div>
                    </form>
                </div>
                <!-- Widget 1 END -->

                <!-- Widget 2 START -->
                <div class="col-md-7 col-lg-4">
                    <div class="row g-4 g-lg-5">
                        <!-- Link block -->
                        <div class="col-6">
                            <h5 class="mb-2 mb-md-4">Page</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link pt-0" href="#">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6">
                            <h5 class="mb-2 mb-md-4">Links</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link pt-0" href="#">Sign up</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Sign in</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Cookie</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Supports</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Widget 2 END -->
            </div>

            <!-- Divider -->
            <hr class="mt-4 mb-0">

            <!-- Bottom footer -->
            <div class="container py-3 px-0">
                <div class="d-md-flex justify-content-between align-items-center text-center text-md-left">
                    <!-- copyright text -->
                    <div class="text-primary-hover text-body"> Copyrights ©2023 Booking. build by <a
                            href="https://stackbros.in/" class="text-body">Stackbros</a>. </div>
                    <!-- copyright links-->
                    <div class="mt-3 mt-md-0">
                        <ul class="nav text-primary-hover justify-content-center justify-content-md-end">
                            <li class="nav-item">
                                <a class="nav-link text-body" href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body" href="#"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- =======================
        Footer END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection