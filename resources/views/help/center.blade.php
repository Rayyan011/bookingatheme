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
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
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
                <ul class="navbar-nav navbar-nav-scroll ms-auto">

                    <!-- Nav item Help Center -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="helpMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Help Center</a>
                        <ul class="dropdown-menu" aria-labelledby="helpMenu">
                            <li> <a class="dropdown-item" href="{{ route('second', ['help', 'center']) }}">Help
                                    center</a></li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['help', 'detail']) }}">Help
                                    Detail</a></li>
                        </ul>
                    </li>

                    <!-- Nav item Privacy Policy -->
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('second', ['help', 'privacy-policy']) }}">Privacy Policy</a></li>

                    <!-- Nav item Terms Of Service -->
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('second', ['help', 'terms-of-service']) }}">Terms of Service</a></li>

                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Profile dropdown START -->
            <div class="nav nav-item dropdown ms-2">
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
                    <li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
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
                            <button type="button" class="btn btn-link nav-link  mb-0 p-0" data-bs-theme-value="light"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Light">
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
                            <button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0 active"
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
            </div>
            <!-- Profile dropdown END -->
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
    <section class="pt-0">
        <div class="container">
            <!-- Hero banner START -->
            <div class="row">
                <div class="col-12">
                    <!-- Card START -->
                    <div class="card card-body bg-primary justify-content-center text-center px-4 px-sm-5 pt-6 pt-md-8 pb-8"
                        style="background-image: url(/images/element/bg-pattern.png); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                        <!-- Title -->
                        <h1 class="fs-2 text-white mb-4">How Can We Help You?</h1>
                        <!-- Search -->
                        <form class="col-md-6 bg-body rounded mx-auto p-2 mb-3">
                            <div class="input-group">
                                <input class="form-control border-0 me-1" type="text"
                                    placeholder="Search question...">
                                <button type="button" class="btn btn-dark rounded mb-0">Search</button>
                            </div>
                        </form>

                        <!-- Popular search -->
                        <div class="row align-items-center mt-4 mb-2">
                            <div class="col-md-9 mx-auto">
                                <h6 class="text-white mb-3">Popular questions</h6>
                                <!-- Questions List START -->
                                <div class="list-group hstack gap-3 justify-content-center flex-wrap mb-0">
                                    <a class="btn btn-link text-white fw-light text-decoration-underline p-0 mb-0"
                                        href="{{ route('second', ['help', 'detail']) }}"> How can we help?</a>
                                    <a class="btn btn-link text-white fw-light text-decoration-underline p-0 mb-0"
                                        href="{{ route('second', ['help', 'detail']) }}"> How to upload data to the
                                        system? </a>
                                    <a class="btn btn-link text-white fw-light text-decoration-underline p-0 mb-0"
                                        href="{{ route('second', ['help', 'detail']) }}"> Installation Guide? </a>
                                    <a class="btn btn-link text-white fw-light text-decoration-underline p-0 mb-0"
                                        href="{{ route('second', ['help', 'detail']) }}"> How to view expired tickets?
                                    </a>
                                    <a class="btn btn-link text-white p-0 mb-0" href="#!">View all question</a>
                                </div>
                                <!-- Questions list END -->
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>
            </div>
            <!-- Hero banner END -->

            <!-- Topics START -->
            <div class="row g-4 mt-n8">
                <div class="col-10 col-lg-11 col-xl-10 mx-auto">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <!-- Get started START -->
                            <div class="card shadow h-100">
                                <!-- Title -->
                                <div class="card-header d-flex align-items-center pb-0">
                                    <i class="bi bi-emoji-smile fs-2 text-success me-2"></i>
                                    <h5 class="card-title mb-0">Get Started </h5>
                                </div>

                                <!-- List START -->
                                <div class="card-body pt-0">
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Gulp and
                                                Customization</a></li>
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Color
                                                Scheme and Logo Settings</a></li>
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Dark
                                                mode, RTL Version, and Lazy Load</a></li>
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Updates
                                                and Support</a></li>
                                    </ul>
                                </div>
                                <!-- List END -->
                            </div>
                            <!-- Get started END -->
                        </div>

                        <div class="col-lg-4">
                            <!-- Account Setup START -->
                            <div class="card shadow h-100">
                                <!-- Title -->
                                <div class="card-header border-0 d-flex align-items-center pb-0">
                                    <i class="bi bi-layers fs-2 text-warning me-2"></i>
                                    <h5 class="card-title mb-0">Account Setup:</h5>
                                </div>
                                <!-- List START -->
                                <div class="card-body pt-0">
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Connecting
                                                to your Account</a></li>
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Edit
                                                your profile information</a></li>
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Connecting
                                                to other Social Media Accounts</a></li>
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Adding
                                                your profile picture</a></li>
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Describing
                                                your store</a></li>
                                    </ul>
                                </div>
                                <!-- List END -->
                            </div>
                            <!-- Account Setup END -->
                        </div>

                        <div class="col-lg-4">
                            <!-- Other Topics START -->
                            <div class="card shadow h-100">
                                <!-- Title -->
                                <div class="card-header border-0 d-flex align-items-center pb-0">
                                    <i class="bi bi-info-circle fs-2 text-info me-2"></i>
                                    <h5 class="card-title mb-0">Other Topics </h5>
                                </div>

                                <!-- List START -->
                                <div class="card-body pt-0">
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Security
                                                &amp; Privacy</a></li>
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Author,
                                                Publisher &amp; Admin Guides</a></li>
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Pricing
                                                plans</a></li>
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Sales
                                                Tax &amp; Regulatory Fees</a></li>
                                        <li class="nav-item"><a class="nav-link d-flex"
                                                href="{{ route('second', ['help', 'detail']) }}"><i
                                                    class="fa-solid fa-angle-right text-primary pt-1 me-2"></i>Promotions
                                                &amp; Deals</a></li>
                                    </ul>
                                </div>
                                <!-- List END -->
                            </div>
                            <!-- Other Topics END -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topics END -->

        </div>
    </section>
    <!-- =======================
        Main banner END -->

    <!-- =======================
        Faqs START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="mb-0">Frequently Asked Questions</h2>
                </div>
            </div>

            <!-- Accordion START -->
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-1">
                                <button class="accordion-button fw-bold rounded d-inline-block collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                    aria-expanded="true" aria-controls="collapse-1">
                                    How can we help?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body mt-3">
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
                                <button class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                    aria-expanded="false" aria-controls="collapse-2">
                                    How to edit my Profile?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body mt-3">
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
                                <button class="accordion-button fw-bold collapsed rounded d-block pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">
                                    How much should I offer the sellers?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body mt-3">
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
                                <button class="accordion-button fw-bold collapsed rounded d-block pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4">
                                    Installation Guide
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body mt-3">
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
                                        your order. Be sure to fill in correct details for fast &amp; hassle-free
                                        payment processing.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-5">
                                <button class="accordion-button fw-bold collapsed rounded d-block pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                    aria-controls="collapse-5">
                                    Additional Options and Services
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body mt-3">
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
                                <button class="accordion-button fw-bold collapsed rounded d-block pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">
                                    What is the difference between a college and a university?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body mt-3">
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
                </div>
            </div>
            <!-- Accordion END -->
        </div>
    </section>
    <!-- =======================
        Faqs END -->

    <!-- =======================
        Action boxes END -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row g-4">
                <!-- Action box item -->
                <div class="col-md-6 position-relative overflow-hidden">
                    <div class="bg-primary bg-opacity-10 rounded-3 h-100 p-4">
                        <!-- Content -->
                        <div class="d-flex">
                            <!-- Icon -->
                            <div class="icon-lg text-white bg-primary rounded-circle flex-shrink-0"><i
                                    class="bi bi-headset"></i></div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4 class="mb-1">Contact Support?</h4>
                                <p class="mb-3">Not finding the help you need?</p>
                                <a href="{{ route('second', ['pages', 'contact-2']) }}"
                                    class="btn btn-dark mb-0">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action box item -->
                <div class="col-md-6 position-relative overflow-hidden">
                    <div class="bg-secondary bg-opacity-10 rounded-3 h-100 p-4">
                        <!-- Content -->
                        <div class="d-flex">
                            <!-- Icon -->
                            <div class="icon-lg text-dark bg-warning rounded-circle flex-shrink-0"><i
                                    class="fa-solid fa-ticket"></i></div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4 class="mb-1">Submit a Ticket</h4>
                                <p class="mb-3">Prosperous impression had conviction For every delay</p>
                                <a href="#" class="btn btn-dark mb-0">Submit ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Action boxes END -->

    <!-- =======================
        Popular article START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">

            <!-- Title -->
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="mb-0">Popular Article</h2>
                </div>
            </div>

            <!-- Articles -->
            <div class="row">
                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                    <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="2"
                        data-dots="false" data-items-xl="3" data-items-lg="2" data-items-sm="1">

                        <!-- Slide item -->
                        <div>
                            <div class="card card-body bg-transparent border p-4 mb-1">
                                <!-- Pre title -->
                                <h6 class="text-primary fw-normal mb-2">10 Articles</h6>
                                <!-- Title -->
                                <h5 class="card-title mb-md-4"><a href="#" class="stretched-link">Upgrade Gulp
                                        3 to Gulp 4 the gulp file.js workflow</a></h5>
                                <!-- Info -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <span>15 min ago</span>
                                    <!-- Actions -->
                                    <div class="hstack gap-3 flex-wrap fw-bold">
                                        <span><i class="fa-solid fa-thumbs-up me-2"></i>10</span>
                                        <span><i class="fa-regular fa-comments me-2"></i>25</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide item -->
                        <div>
                            <div class="card card-body bg-transparent border p-4 mb-1">
                                <!-- Pre title -->
                                <h6 class="text-primary fw-normal mb-2">5 Articles</h6>
                                <!-- Title -->
                                <h5 class="card-title mb-md-4"><a href="#" class="stretched-link">Supporting
                                        Customer With Inbox</a></h5>
                                <!-- Info -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <span>25 min ago</span>
                                    <!-- Actions -->
                                    <div class="hstack gap-3 flex-wrap fw-bold">
                                        <span><i class="fa-solid fa-thumbs-up me-2"></i>05</span>
                                        <span><i class="fa-regular fa-comments me-2"></i>08</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide item -->
                        <div>
                            <div class="card card-body bg-transparent border p-4 mb-1">
                                <!-- Pre title -->
                                <h6 class="text-primary fw-normal mb-2">3 Articles</h6>
                                <!-- Title -->
                                <h5 class="card-title mb-md-4"><a href="#" class="stretched-link">Sending
                                        Effective Emails to customer</a></h5>
                                <!-- Info -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <span>2 hour ago</span>
                                    <!-- Actions -->
                                    <div class="hstack gap-3 flex-wrap fw-bold">
                                        <span><i class="fa-solid fa-thumbs-up me-2"></i>02</span>
                                        <span><i class="fa-regular fa-comments me-2"></i>05</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide item -->
                        <div>
                            <div class="card card-body bg-transparent border p-4 mb-1">
                                <!-- Pre title -->
                                <h6 class="text-primary fw-normal mb-2">10 Articles</h6>
                                <!-- Title -->
                                <h5 class="card-title mb-md-4"><a href="#" class="stretched-link">Upgrade Gulp
                                        3 to Gulp 4 the gulp file.js workflow</a></h5>
                                <!-- Info -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <span>15 min ago</span>
                                    <!-- Actions -->
                                    <div class="hstack gap-3 flex-wrap fw-bold">
                                        <span><i class="fa-solid fa-thumbs-up me-2"></i>10</span>
                                        <span><i class="fa-regular fa-comments me-2"></i>25</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide item -->
                        <div>
                            <div class="card card-body bg-transparent border p-4 mb-1">
                                <!-- Pre title -->
                                <h6 class="text-primary fw-normal mb-2">5 Articles</h6>
                                <!-- Title -->
                                <h5 class="card-title mb-md-4"><a href="#" class="stretched-link">Supporting
                                        Customer With Inbox</a></h5>
                                <!-- Info -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <span>25 min ago</span>
                                    <!-- Actions -->
                                    <div class="hstack gap-3 flex-wrap fw-bold">
                                        <span><i class="fa-solid fa-thumbs-up me-2"></i>05</span>
                                        <span><i class="fa-regular fa-comments me-2"></i>08</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide item -->
                        <div>
                            <div class="card card-body bg-transparent border p-4 mb-1">
                                <!-- Pre title -->
                                <h6 class="text-primary fw-normal mb-2">3 Articles</h6>
                                <!-- Title -->
                                <h5 class="card-title mb-md-4"><a href="#" class="stretched-link">Sending
                                        Effective Emails to customer</a></h5>
                                <!-- Info -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <span>2 hour ago</span>
                                    <!-- Actions -->
                                    <div class="hstack gap-3 flex-wrap fw-bold">
                                        <span><i class="fa-solid fa-thumbs-up me-2"></i>02</span>
                                        <span><i class="fa-regular fa-comments me-2"></i>05</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- =======================
        Popular article END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection