@extends('layouts.base')

@section('body-attributes')
class="has-navbar-mobile"
@endsection

@section('header')
@include('layouts.partials/navbar2')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Main Banner START -->
    <section class="py-0">
        <div class="container">
            <!-- Background image -->
            <div class="rounded-3 p-3 p-sm-5"
                style="background-image: url(/images/bg/01.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                <!-- Banner title -->
                <div class="row">
                    <div class="col-md-10 mx-auto text-center">
                        <h1 class="text-dark display-3 pt-sm-5 my-5">Search flights across the Indian Ocean,</h1>
                    </div>
                </div>

                <!-- Booking from START -->
                <form class="bg-mode position-relative px-3 px-sm-4 pt-4 mb-4 mb-sm-0">

                    <!-- Svg decoration -->
                    <figure class="position-absolute top-0 start-0 h-100 ms-n2 ms-sm-n1">
                        <svg class="h-100" viewBox="0 0 12.9 324" style="enable-background:new 0 0 12.9 324;">
                            <path class="fill-mode"
                                d="M9.8,316.4c1.1-26.8,2-53.4,1.9-80.2c-0.1-18.2-0.8-36.4-1.2-54.6c-0.2-8.9-0.2-17.7,0.8-26.6 c0.5-4.5,1.1-9,1.4-13.6c0.1-1.9,0.1-3.7,0.1-5.6c-0.2-0.2-0.6-1.5-0.2-3.1c-0.3-1.8-0.4-3.7-0.4-5.5c-1.2-3-1.8-6.3-1.7-9.6 c0.9-19,0.5-38.1,0.8-57.2c0.3-17.1,0.6-34.2,0.2-51.3c-0.1-0.6-0.1-1.2-0.1-1.7c0-0.8,0-1.6,0-2.4c0-0.5,0-1.1,0-1.6 c0-1.2,0-2.3,0.2-3.5H0v11.8c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1V31c3.3,0,6.1,2.7,6.1,6.1S3.3,43.3,0,43.3v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1 s-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1 c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.7,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.7,6.1,6.1 c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1V324h9.5C9.6,321.4,9.7,318.8,9.8,316.4z" />
                        </svg>
                    </figure>

                    <!-- Svg decoration -->
                    <figure class="position-absolute top-0 end-0 h-100 rotate-180 me-n2 me-sm-n1">
                        <svg class="h-100" viewBox="0 0 21 324" style="enable-background:new 0 0 21 324;">
                            <path class="fill-mode"
                                d="M9.8,316.4c1.1-26.8,2-53.4,1.9-80.2c-0.1-18.2-0.8-36.4-1.2-54.6c-0.2-8.9-0.2-17.7,0.8-26.6 c0.5-4.5,1.1-9,1.4-13.6c0.1-1.9,0.1-3.7,0.1-5.6c-0.2-0.2-0.6-1.5-0.2-3.1c-0.3-1.8-0.4-3.7-0.4-5.5c-1.2-3-1.8-6.3-1.7-9.6 c0.9-19,0.5-38.1,0.8-57.2c0.3-17.1,0.6-34.2,0.2-51.3c-0.1-0.6-0.1-1.2-0.1-1.7c0-0.8,0-1.6,0-2.4c0-0.5,0-1.1,0-1.6 c0-1.2,0-2.3,0.2-3.5H0v11.8c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1V31c3.3,0,6.1,2.7,6.1,6.1S3.3,43.3,0,43.3v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1 s-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1 c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.7,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.7,6.1,6.1 c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1V324h9.5C9.6,321.4,9.7,318.8,9.8,316.4z" />
                        </svg>
                    </figure>

                    <div class="row g-4 position-relative">

                        <!-- Nav tabs START -->
                        <div class="col-lg-6">
                            <ul class="nav nav-pills nav-pills-dark" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-start rounded-0 mb-0 active"
                                        id="pills-one-way-tab" data-bs-toggle="pill" data-bs-target="#pills-one-way"
                                        type="button" role="tab" aria-selected="true">One Way</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-end rounded-0 mb-0" id="pills-round-trip-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-round-trip" type="button"
                                        role="tab" aria-selected="false">Round Trip</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav tabs END -->

                        <!-- Ticket class -->
                        <div class="col-lg-3 ms-auto">
                            <div class="form-control-bg-light form-fs-md">
                                <select class="form-select js-choice">
                                    <option value="" selected>Select Class</option>
                                    <option>Economy</option>
                                    <option>Premium Economy</option>
                                    <option>Business</option>
                                    <option>First Class</option>
                                </select>
                            </div>
                        </div>

                        <!-- Ticket Travelers -->
                        <div class="col-lg-3 ms-auto">
                            <div class="form-control-bg-light form-fs-md">
                                <select class="form-select js-choice">
                                    <option value="" selected>Select Travelers</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>

                        <!-- Tab content START -->
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <!-- One way tab START -->
                            <div class="tab-pane fade show active" id="pills-one-way" role="tabpanel"
                                aria-labelledby="pills-one-way-tab">
                                <div class="row g-4">
                                    <!-- Leaving From -->
                                    <div class="col-md-6 col-lg-4 position-relative">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <!-- Input field -->
                                            <label class="mb-1"><i class="bi bi-geo-alt me-2"></i>From</label>
                                            <select class="form-select js-choice" data-search-enabled="true">
                                                <option value="" selected>Select location</option>
                                                <option>San Jacinto, USA</option>
                                                <option>North Dakota, Canada</option>
                                                <option>West Virginia, Paris</option>
                                            </select>
                                        </div>

                                        <!-- Auto fill button -->
                                        <div class="btn-flip-icon mt-3 mt-md-0">
                                            <button class="btn btn-white shadow btn-round mb-0"><i
                                                    class="fa-solid fa-right-left"></i></button>
                                        </div>
                                    </div>

                                    <!-- Going To -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <!-- Input field -->
                                            <label class="mb-1"><i class="bi bi-send me-2"></i>To</label>
                                            <select class="form-select js-choice" data-search-enabled="true">
                                                <option value="" selected>Select location</option>
                                                <option>San Jacinto, USA</option>
                                                <option>North Dakota, Canada</option>
                                                <option>West Virginia, Paris</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Departure -->
                                    <div class="col-lg-4">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <label class="mb-1"><i class="bi bi-calendar me-2"></i>Departure</label>
                                            <input type="text" class="form-control flatpickr"
                                                data-date-format="d M Y" placeholder="Select date">
                                        </div>
                                    </div>

                                    <div class="col-12 text-end pt-0">
                                        <a class="btn btn-primary mb-n4" href="/flight/list">Find ticket <i
                                                class="bi bi-arrow-right ps-3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- One way tab END -->

                            <!-- Round way tab END -->
                            <div class="tab-pane fade" id="pills-round-trip" role="tabpanel"
                                aria-labelledby="pills-round-trip-tab">
                                <div class="row g-4">

                                    <!-- Leaving From -->
                                    <div class="col-md-6 col-xl-3 position-relative">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <!-- Input field -->
                                            <label class="mb-1"><i class="bi bi-geo-alt me-2"></i>From</label>
                                            <select class="form-select js-choice" data-search-enabled="true">
                                                <option value="" selected>Select location</option>
                                                <option>San Jacinto, USA</option>
                                                <option>North Dakota, Canada</option>
                                                <option>West Virginia, Paris</option>
                                            </select>
                                        </div>

                                        <!-- Auto fill button -->
                                        <div class="btn-flip-icon mt-3 mt-md-0">
                                            <button class="btn btn-white shadow btn-round mb-0"><i
                                                    class="fa-solid fa-right-left"></i></button>
                                        </div>
                                    </div>

                                    <!-- Going To -->
                                    <div class="col-md-6 col-xl-3">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <!-- Input field -->
                                            <label class="mb-1"><i class="bi bi-send me-2"></i>To</label>
                                            <select class="form-select js-choice" data-search-enabled="true">
                                                <option value="" selected>Select location</option>
                                                <option>San Jacinto, USA</option>
                                                <option>North Dakota, Canada</option>
                                                <option>West Virginia, Paris</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Departure -->
                                    <div class="col-md-6 col-xl-3">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <label class="mb-1"><i class="bi bi-calendar me-2"></i>Departure</label>
                                            <input type="text" class="form-control flatpickr"
                                                data-date-format="d M Y" placeholder="Select date">
                                        </div>
                                    </div>

                                    <!-- Return -->
                                    <div class="col-md-6 col-xl-3">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <label class="mb-1"><i class="bi bi-calendar me-2"></i>Return</label>
                                            <input type="text" class="form-control flatpickr"
                                                data-date-format="d M Y" placeholder="Select date">
                                        </div>
                                    </div>

                                    <div class="col-12 text-end pt-0">
                                        <a class="btn btn-primary mb-n4" href="/flight/list">Find ticket <i
                                                class="bi bi-arrow-right ps-3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Round way tab END -->
                        </div>
                        <!-- Tab content END -->
                    </div>
                </form>
                <!-- Booking from END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Main Banner END -->

   

    <!-- =======================
        Action box START -->
    <section class="py-0">
        <div class="container position-relative">
            <div class="bg-light rounded-3 position-relative p-4 p-sm-5">

                <!-- Svg decoration -->
                <figure class="position-absolute top-50 start-50 d-none d-lg-block mt-n4 ms-9">
                    <svg class="fill-primary" width="138px" height="33px">
                        <path
                            d="M105.158,32.490 L107.645,20.515 L101.600,21.873 L108.218,14.263 L110.496,2.974 L137.327,32.728 L105.158,32.490 ZM97.722,13.092 C96.678,12.477 95.604,11.881 94.529,11.319 L94.235,11.166 L94.543,10.576 L94.837,10.730 C95.922,11.296 97.006,11.898 98.060,12.519 L98.346,12.687 L98.009,13.260 L97.722,13.092 ZM91.250,9.714 C90.131,9.202 89.001,8.723 87.890,8.290 L87.581,8.170 L87.822,7.550 L88.132,7.671 C89.254,8.108 90.396,8.592 91.527,9.109 L91.829,9.247 L91.553,9.852 L91.250,9.714 ZM84.453,7.073 C83.279,6.699 82.117,6.374 80.943,6.092 L80.620,6.014 L80.776,5.368 L81.099,5.445 C82.287,5.730 83.465,6.060 84.655,6.439 L84.971,6.539 L84.770,7.173 L84.453,7.073 ZM77.372,5.388 C76.150,5.201 74.933,5.073 73.757,5.007 L73.425,4.988 L73.462,4.324 L73.794,4.343 C74.992,4.409 76.230,4.540 77.473,4.730 L77.802,4.781 L77.701,5.438 L77.372,5.388 ZM66.526,5.421 L66.199,5.480 L66.080,4.826 L66.407,4.766 C67.599,4.550 68.838,4.405 70.090,4.336 L70.422,4.318 L70.458,4.982 L70.126,5.000 C68.902,5.068 67.690,5.209 66.526,5.421 ZM59.574,7.498 L59.267,7.625 L59.014,7.010 L59.321,6.883 C60.448,6.418 61.621,6.003 62.809,5.646 L63.128,5.551 L63.318,6.188 L63.000,6.283 C61.833,6.633 60.681,7.042 59.574,7.498 ZM59.311,8.479 C60.126,9.473 60.795,10.540 61.300,11.649 L61.438,11.952 L60.833,12.228 L60.695,11.925 C60.214,10.868 59.575,9.851 58.797,8.901 L58.586,8.644 L59.100,8.222 L59.311,8.479 ZM54.714,31.225 L54.415,31.370 L54.126,30.771 L54.425,30.626 C55.435,30.137 56.398,29.436 57.287,28.542 L57.522,28.306 L57.993,28.775 L57.759,29.011 C56.816,29.959 55.792,30.703 54.714,31.225 ZM56.229,6.392 C55.322,5.672 54.309,5.004 53.218,4.408 L52.926,4.248 L53.245,3.665 L53.537,3.824 C54.662,4.439 55.706,5.128 56.643,5.871 L56.903,6.078 L56.489,6.599 L56.229,6.392 ZM56.268,8.312 L56.584,8.897 L56.292,9.055 C55.219,9.636 54.178,10.276 53.199,10.957 L52.926,11.147 L52.546,10.601 L52.819,10.411 C53.819,9.715 54.881,9.063 55.976,8.470 L56.268,8.312 ZM51.033,32.098 C50.331,32.098 49.622,32.004 48.925,31.819 C48.925,31.819 48.924,31.819 48.923,31.818 C48.397,31.678 47.868,31.483 47.351,31.238 L47.051,31.096 L47.336,30.495 L47.636,30.637 C48.117,30.865 48.608,31.046 49.095,31.176 C49.096,31.176 49.096,31.176 49.097,31.176 C49.737,31.347 50.389,31.433 51.034,31.433 L51.366,31.433 L51.366,32.098 L51.033,32.098 ZM47.808,15.784 L47.592,16.037 L47.087,15.605 L47.303,15.352 C48.086,14.437 48.962,13.546 49.905,12.704 L50.154,12.483 L50.596,12.979 L50.348,13.200 C49.426,14.022 48.572,14.892 47.808,15.784 ZM49.926,2.908 C48.822,2.493 47.656,2.136 46.459,1.846 L46.136,1.768 L46.293,1.121 L46.616,1.200 C47.836,1.495 49.031,1.861 50.160,2.285 L50.471,2.402 L50.237,3.024 L49.926,2.908 ZM44.153,21.953 L44.048,22.268 L43.418,22.058 L43.523,21.742 C43.892,20.634 44.428,19.496 45.115,18.362 L45.287,18.077 L45.856,18.421 L45.683,18.706 C45.022,19.798 44.507,20.891 44.153,21.953 ZM42.888,1.188 C41.701,1.034 40.482,0.940 39.265,0.907 L38.933,0.898 L38.951,0.233 L39.283,0.242 C40.523,0.275 41.764,0.372 42.974,0.528 L43.303,0.571 L43.218,1.230 L42.888,1.188 ZM32.021,1.426 L31.694,1.482 L31.582,0.827 L31.910,0.770 C33.121,0.564 34.357,0.414 35.583,0.326 L35.915,0.302 L35.962,0.965 L35.630,0.989 C34.426,1.076 33.212,1.223 32.021,1.426 ZM25.072,3.458 L24.766,3.588 L24.506,2.976 L24.812,2.845 C25.949,2.362 27.122,1.942 28.300,1.598 L28.619,1.505 L28.805,2.143 L28.485,2.237 C27.333,2.573 26.185,2.984 25.072,3.458 ZM18.761,7.025 L18.490,7.219 L18.103,6.679 L18.374,6.485 C19.387,5.759 20.435,5.087 21.492,4.488 L21.781,4.324 L22.108,4.902 L21.819,5.067 C20.783,5.654 19.754,6.313 18.761,7.025 ZM13.280,11.802 L13.050,12.042 L12.570,11.581 L12.801,11.341 C13.668,10.439 14.568,9.579 15.475,8.786 L15.725,8.567 L16.163,9.067 L15.913,9.286 C15.020,10.067 14.134,10.913 13.280,11.802 ZM8.648,17.428 L8.455,17.699 L7.914,17.314 L8.106,17.043 C8.831,16.023 9.585,15.035 10.349,14.106 L10.560,13.849 L11.073,14.271 L10.862,14.528 C10.109,15.445 9.364,16.420 8.648,17.428 ZM4.796,23.630 L4.637,23.922 L4.053,23.605 L4.212,23.313 C4.803,22.223 5.426,21.149 6.064,20.120 L6.240,19.837 L6.805,20.187 L6.629,20.470 C5.998,21.488 5.381,22.551 4.796,23.630 ZM1.658,30.231 L1.532,30.539 L0.917,30.286 L1.044,29.979 C1.508,28.850 2.011,27.714 2.539,26.603 L2.682,26.303 L3.282,26.588 L3.140,26.888 C2.617,27.989 2.118,29.113 1.658,30.231 ZM43.602,25.437 C43.661,26.716 44.055,27.783 44.772,28.607 L44.990,28.858 L44.488,29.295 L44.270,29.044 C43.452,28.104 43.004,26.901 42.937,25.468 L42.922,25.136 L43.586,25.104 L43.602,25.437 ZM60.942,22.425 L61.047,22.110 L61.678,22.319 L61.573,22.634 C61.175,23.834 60.657,24.979 60.033,26.037 L59.864,26.323 L59.291,25.986 L59.461,25.699 C60.061,24.681 60.559,23.580 60.942,22.425 ZM61.816,17.509 C61.836,16.777 61.795,16.048 61.694,15.341 L61.648,15.012 L62.306,14.918 L62.353,15.247 C62.458,15.991 62.502,16.758 62.480,17.527 C62.467,18.008 62.433,18.500 62.378,18.989 L62.341,19.319 L61.680,19.246 L61.717,18.915 C61.770,18.445 61.803,17.972 61.816,17.509 Z" />
                    </svg>
                </figure>

                <div class="row align-items-center position-relative">
                    <div class="col-lg-8">
                        <!-- Title -->
                        <div class="d-flex">
                            <h3>It's time to discover</h3>
                            <img src="/images/element/04.svg" class="h-40px ms-3" alt="">
                        </div>
                        <p class="mb-3 mb-lg-0">He moonlights difficult engrossed it, sportsmen. Interested has all
                            Devonshire difficulty gay assistance joy.</p>
                    </div>
                    <!-- Content and input -->
                    <div class="col-lg-4 text-lg-end">
                        <a href="{{ route('second', ['flight', 'list']) }}" class="btn btn-lg btn-dark mb-0">Book a
                            Flight</a>
                    </div>
                </div> <!-- Row END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Action box END -->

    <!-- =======================
        Blog START-->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-3 mb-sm-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Latest Blogs & News</h2>
                </div>
            </div>

            <div class="row g-4 g-xl-5 justify-content-between">
                <div class="col-md-6">
                    <!-- Card START -->
                    <div class="card bg-transparent">
                        <!-- Image -->
                        <img src="/images/ovayo/Euconica_FLOATING BREAKFAST - 011_.jpg" class="card-img" alt="">

                        <!-- Card body -->
                        <div class="card-body px-3">
                            <h4><a href="{{ route('second', ['blog' , 'detail']) }}" class="stretched-link">10 Ways on How to Improve your Hotel
                                    Operations</a></h4>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>

                <div class="col-md-6">
                    <!-- Card START -->
                    <div class="card bg-transparent mb-4 mb-md-5">
                        <div class="row align-items-center">
                            <!-- Images -->
                            <div class="col-sm-4">
                                <img src="/images/ovayo/Euconica_Private Beach Dinner - 003_.jpg" class="card-img" alt="">
                            </div>
                            <div class="col-sm-8">
                                <!-- card body -->
                                <div class="card-body p-sm-0">
                                    <h5 class="card-title"><a href="{{ route('second', ['blog' , 'detail']) }}" class="stretched-link">Story of
                                            water world adventure</a></h5>
                                    <p class="mb-0">Jacqueline Miller</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->

                    <!-- Card START -->
                    <div class="card bg-transparent mb-4 mb-md-5">
                        <div class="row align-items-center">
                            <!-- Images -->
                            <div class="col-sm-4">
                                <img src="/images/ovayo/Euconica_Sand Bank Picnic - 011_.jpg" class="card-img" alt="">
                            </div>
                            <div class="col-sm-8">
                                <!-- card body -->
                                <div class="card-body p-sm-0">
                                    <h5 class="card-title"><a href="{{ route('second', ['blog' , 'detail']) }}" class="stretched-link">How
                                            Hotel Technology Can Help Small Hotel Businesses</a></h5>
                                    <p class="mb-0">Frances Guerrero</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->

                    <!-- Card START -->
                    <div class="card bg-transparent mb-0 mb-md-5">
                        <div class="row align-items-center">
                            <!-- Images -->
                            <div class="col-sm-4">
                                <img src="/images/ovayo/169612190-1.jpg" class="card-img" alt="">
                            </div>
                            <div class="col-sm-8">
                                <!-- card body -->
                                <div class="card-body p-sm-0">
                                    <h5 class="card-title"><a href="{{ route('second', ['blog' , 'detail']) }}" class="stretched-link">Hotel
                                            Service - Become a Guide for Your Guests</a></h5>
                                    <p class="mb-0">Louis Ferguson</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Blog START-->

</main>
<!-- **************** MAIN CONTENT END **************** -->



<!-- Back to top -->
<div class="back-top"></div>
@include('layouts.partials/footer2')
@endsection