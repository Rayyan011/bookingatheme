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
    <section class="pt-3 pt-lg-5">
        <div class="container">
            <!-- Content and Image START -->
            <div class="row g-4 g-lg-5">
                <!-- Content -->
                <div class="col-lg-6 position-relative mb-4 mb-md-0">
                    <!-- Title -->
                    <h1 class="mb-4 mt-md-5 display-5">Whisper your dream. 
                        <span class="position-relative z-index-9">
                            <!-- SVG START -->
                            <span
                                class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-md-block mt-4">
                                <svg width="390.5px" height="21.5px" viewBox="0 0 445.5 21.5">
                                    <path class="fill-primary opacity-7"
                                        d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z" />
                                </svg>
                            </span>
                            <!-- SVG END -->
                        </span>
                    </h1>
                    <!-- Info -->
                    <p class="mb-4">From sun-kissed lagoons to crest-luxury escapes, Ovayo listens first, then conjures journeys you’ll never forget.</p>

                    <!-- Buttons -->
                    <div class="hstack gap-4 flex-wrap align-items-center">
                        <!-- Button -->
                        <a href="#" class="btn btn-primary-soft mb-0">Conjure Your Trip</a>
                        <!-- Story button -->
                        <a data-glightbox="" data-gallery="office-tour"
                            href="https://www.youtube.com/embed/tXHviS-4ygo" class="d-block">
                            <!-- Avatar -->
                            <div class="avatar avatar-md z-index-1 position-relative me-2">
                                <img class="avatar-img rounded-circle" src="/images/avatar/12.jpg" alt="avatar">
                                <!-- Video button -->
                                <div
                                    class="btn btn-xs btn-round btn-white shadow-sm position-absolute top-50 start-50 translate-middle z-index-9 mb-0">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="align-middle d-inline-block">
                                <h6 class="fw-normal small mb-0">Watch our story</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-lg-6 position-relative">

                    <img src="/images/bg/06.jpg" class="rounded" alt="">

                    <!-- Svg decoration -->
                    <figure class="position-absolute end-0 bottom-0">
                        <svg width="163px" height="163px" viewBox="0 0 163 163">
                            <path class="fill-warning"
                                d="M145.6,66.2c-0.9-0.3-1.6,0.2-2.1-0.4c-0.5-0.7-1-1.5-1-2.4c0-3.1,0.1-6.2,0-9.3c0-0.7,0.3-1.3,0.5-1.9 c0.8-1.6,1.6-3.2,2.7-4.5c0.5-0.6,1.2-1.2,2-1.5c0.4-0.2,0.8,0.4,1.3-0.1c0.4-0.4,1,0.7,1.6,0.7c0.4,1-0.4,1.5-1,2.1 c0.7,0.3,1.4,0.3,2.1,0.7c0.6,0.4,1.2,0.7,1,1.5c-0.2,1,0.6,1.3,1,1.9c-0.2,0.3-0.6,0.4-0.5,0.8c1.2,3.2,0.3,5.4-0.7,8.1 c-0.3,0.7-0.7,1.6-0.7,2.2c-0.1,1.5-1.2,2.7-1.4,4.1c-0.2,1.1-0.9,1.7-2.1,1.6c-0.2,0-0.4,0.5-1,0.4c-0.2-0.2-0.7-0.5-0.7-0.8 c0-1-0.1-1.7-1.1-2.1C145.5,67.2,145.6,66.6,145.6,66.2" />
                            <path class="fill-warning"
                                d="M94.3,143.5c1.1,0.3,2.4-0.5,3.2,0.7c-0.4,0.7-0.7,1.4-1,2.1c0.5,0.5,0.7,0.2,1.2,0.1c1.6-0.6,2-0.4,2.5,1.2 c0.1,0.2,0,0.6,0.3,0.6c1.8,0.4,1.4,2.2,2.1,3.2c-0.8,0.9,0.5,1.8,0.1,2.6c-0.5,0.8-0.3,2-1.3,2.6c-0.3,0.2-0.1,0.5-0.2,0.7 c-0.3,2.1-1.2,3.7-3.4,4.4c-0.3,0.1-0.4,0.6-1,0.4c-0.3-0.6-0.6-1.3-1-1.9c-0.5-0.2-1.5,0.3-1.4-1h-3c-0.2-1.4,0-2.9-1.1-3.9 c-0.1-0.1-0.1-0.4,0-0.5c0.7-1.2,0.2-2.6,0.7-3.8c0.3-0.6,0.4-1,0.1-1.6c-0.9-1.3,0-2.4,0.7-3.3C92.5,145,93.4,144.3,94.3,143.5" />
                            <path class="fill-warning"
                                d="M119.6,77.3c-0.4,0.8-1.1,0.6-2,0.8c0.2,1.1-0.4,2.2,0.5,3.3c-0.8,0-0.8,0-1.2-0.3c-0.6,0.3-0.8,1-1.2,1.6 c0.1-1.9-0.6-3.2-2-4.1c-0.6-0.1-0.7,0.3-1,0.5c-1-1.9-1-2.8-0.2-7.7c0.4-2.5,1.7-4.6,3.6-6.8c0.6-0.1,1.5,1.5,2.3,0 c0.8,1.5-0.7,2.3-0.8,3.7c0.8-0.4,1.6-0.7,2.4-0.4c0.4,0.4-0.1,1,0.3,1.4c0.8,0.6,1.4,1.3,0.4,2.3c1.1,0.8-0.3,1.5-0.1,2.4 c0.2,0.8,0,1.7,0,2.5c-0.8-0.2-1-1.1-1.8-1C118.2,76.4,119.5,76.5,119.6,77.3" />
                            <path class="fill-warning"
                                d="M25,131c-0.3-0.6-1.2-0.3-1.7-0.5v-1.2c-0.1-0.1-0.1-0.2-0.2-0.2c-1.4,0.5-2.2-1-3.4-1.2 c-1.2-0.1-1.9-1-2.1-2.2c-0.1-0.5,0.1-0.8,0.5-1.1c-2-1.7-0.8-3.4-0.1-5.1c0.8-2.2,2.6-2.5,4.6-2.4c0.4,1.1,0.2,2-0.6,2.7 c1.5,1,2-0.5,3-0.8c0.3,0.6,0.6,1.2,0.9,1.6c0,0.6-0.8,0.8-0.4,1.4c0.7,0.8,0.9-0.5,1.7-0.3c1,0.9,0.9,2.2,0.8,3.4 c0.4,0.1,0.6,0.2,1,0.3c-0.1,0.6-1,0.8-1,1.5c0,0.8,0.8,0.2,1,0.7C27.7,128.8,26.9,130.3,25,131" />
                            <path class="fill-warning"
                                d="M84.9,95H87c0.4,0.4,0.3,1.6-0.3,2.8c1.2,1,1.7-0.5,2.4-0.8c0.8,0,0.8,0.6,1.2,0.7c0.2,0.8-0.7,0.9-0.4,1.7 c0.5,0.3,1.7,0,1.9,0.9c0.2,0.7,0.3,1.5-0.5,2.1c0.3,0.1,0.6,0.2,0.9,0.3c-0.1,0.7-1.1,1.3-0.5,2.2c-1.1,1.5-3,2.1-4.4,3.3 c-0.3,0.2-0.8,1-1.5,0.5c-0.3-0.4,0.4-0.4,0.3-0.8c-0.7-0.5-1.6,0.1-2.4-0.3c-0.2-0.6,0.1-1.4-0.8-1.8c-1.1,0.5-2.2,0.7-3.2-0.8 c1.3-0.8,3-1.1,3.2-3c-1,0-1.7,0.9-2.7,1c-0.2-0.2-0.5-0.4-0.8-0.7c-0.1-0.1,0.1-0.1,0.2-0.3c0.6-1.1,2.4-1,2.5-2.5 c1.2-0.5,1.1-1.7,1.3-2.5C83.8,96.3,84.3,95.7,84.9,95" />
                            <path class="fill-warning"
                                d="M41.2,153.9c0.3-0.7,0.9-0.8,0.4-1.6c-0.3-0.3-1.1,0.2-1.8-0.2c0-0.2-0.1-0.4-0.1-0.7c-0.1-0.1-0.2-0.2-0.3,0 c-0.3,0.4-0.7,0.4-1.1,0.4c-1.3,0-1.5-0.4-1.6-1.7c0-0.6,0.4-0.8,0.5-1.4c-0.4,0-0.8-0.1-1.4-0.1c-0.4-1.9,0.7-3.6,1.1-5.4 c0.2-0.9,1.6-1.3,2.7-1.3c0.4,0.2,0.3,0.6,0.3,0.7c0.2,0.4,0.3,0.3,0.4,0.1c0.6-0.5,1.3-0.6,1.7,0.1c0.5,0.7,1.1,0.6,1.8,0.7 c0.4,0.4,0.1,0.8,0.2,1.2c0.3,0.4,0.8,0.2,1.3,0.3c1,0.7,0.5,2.1,1.3,2.9C43.8,152.3,43.1,153.1,41.2,153.9" />
                            <path class="fill-warning"
                                d="M70.9,43.4c-0.3-1.4-1.2-1.8-2.6-1.5c-1.2-2.3-0.8-4.8-0.5-7.2c0.1-0.5,0.4-1.1,0.3-1.7 c-0.2-1.1,0.5-1.9,0.6-2.9c0.1-0.7,1.3-0.9,2-1.3c0.9,0.8,0.9,0.8,1.2,2c0.3,0,0.6,0,0.4,0c1.3,0,0.8,0.9,1.3,1.2 c0.3,0.1,0.8,0.5,0.7,1c-0.2,0.8,1,1.4,0.5,2.1c-0.5,0.7-0.2,1.5-0.5,2.1c-0.8,1.5-1,3.2-1.5,4.8C72.6,43.1,72,43.4,70.9,43.4" />
                            <path class="fill-warning"
                                d="M125.4,118.4c-0.4-0.3-0.6-0.7-1.3-0.8c-1.6-0.1-1.6-0.2-1.9-1.9c-1.1-0.4-2.2,0-3.2,0.4 c-0.5-0.5-0.2-0.9-0.4-1.4c0.4-0.1,0.7-0.2,1-0.4v-3c-0.5,0.2-1,0.3-1.7,0.5c-0.3,0-0.4-0.6-0.8-0.7c0.6-1.5,1.8-2.4,2.8-3.5 c1.3,0.3,2.6-1.1,3.8,0.4c0,0.1-0.1,1.8,0,2.1c-0.2,0-0.5,0.1-0.7,0.1c-0.2,0-0.3,0-0.5,0c-0.4,0.4-0.1,1.1-0.7,1.5 c1.3-0.5,2.4-1,3.3-2c0.4,0.4,0.7,0.8,1.4,0.6c-1.1,0.9,0.4,2.1-1,2.9c1,0,1.1-0.6,1.5-0.8c0.4-0.1,0.8-0.1,1.2-0.2 c0.5,1,1.1,1.8,0.6,3c-0.7,0.6-2.2,0.4-2.5,2.1c1.2-0.2,1.9-0.9,2.5-1.5c0.7,0.1,0.7,0.5,0.6,0.8c-1.3-0.1-1.2,1.5-2.3,1.9 c-0.9,0.3-1.6,1-2.7,1.8C124.7,119.5,125.1,119,125.4,118.4" />
                            <path class="fill-warning"
                                d="M101.7,41c-0.3,0.3-0.6,0.6-0.9,0.9c0.9,0.6-0.9,1.6,0.4,2.1c-2,2.3-2,2.4-2.1,4.8h-2.4c-0.2-0.1,0-0.5-0.2-0.8 c-2.4-0.3-2.9-0.8-3-3.3c0-0.6,0.2-1.4-0.5-1.8c0.5-0.7,0.2-1.6,0.7-2.4c1-1.5,2.3-2.7,3.5-3.9c0.5-0.2,1-0.1,1.4,0 c0.2,1-1.1,1.6-0.2,2.6c0.3-0.4,0.6-0.8,0.9-1.3C100.2,39.2,101.7,39.5,101.7,41" />
                            <path class="fill-warning"
                                d="M140.4,5.4c-0.4,0.6-1.2-0.1-1.5,0.6c0.7,0.4,1.5,0.1,2.3,0.2c0.3,1.1,0.9,2.1,1.3,3.2c0.9,2.4,0.3,4.4-0.6,6.6 c-0.4,0.9-0.9,1.2-1.9,1c-0.2-0.5-0.5-1.2-0.9-1.9c-0.6-0.2-1.5,0-1.9-1c0.1-1.7,0.1-3.6-1.1-5.2c0.4-0.7,0.7-1.3,1.1-1.9 c-0.3-0.1-0.6-0.2-1-0.4c0.2-0.8,0.5-1.6,1.3-2.3h2.2C140,4.6,140.5,4.8,140.4,5.4" />
                            <path class="fill-warning"
                                d="M65.7,68.8c-0.4,0.6-0.9,0.4-1.4,0.4c-1.2-1.1-0.4-2.9-1.4-4.1c1.5-3,1.5-3,4.1-4.2c0.5,0.1,0.8,0.5,1,1 c0.1,0.6-0.8,0.7-0.5,1.3c0.5,0.6,0.9,0.2,1.2-0.2c1.5,0.6,1.1,2.5,2.4,3.3c-0.1,1.1,0.2,2.2-0.2,3.2L69,72.2c-0.3,0-0.7,0-1,0 c-0.3-0.5-0.9-2.2-0.8-2.4C66.7,69.6,66.2,69.2,65.7,68.8" />
                            <path class="fill-warning"
                                d="M37.5,69.7c-0.5,0.2,0,0.9-0.4,1c-0.7,0.2-1-0.2-1.2-0.6c-0.4-0.7,0.1-1.6-0.2-2.2c-0.5-0.7-0.6-1.2-0.1-2 c0.5-0.6,0.2-1.5,0.6-2.3c0.9-2,0.9-2.1,3-2.1c0.1,0.1,0.2,0.1,0.2,0.2c0,0.3,0,0.7,0,1.1c0.7,0.4,1.7,0.1,2.1,1.3 c0.3,0.9,1.2,1.5,1,2.7c-0.2,0.9,0.1,1.8-0.8,2.5c-0.4,0.4-0.8,1.1-0.8,2c0,0.6-0.5,1-1.2,1.1c-0.6,0.1-1-0.3-1.2-0.7 C38,71,37.8,70.3,37.5,69.7" />
                            <path class="fill-warning"
                                d="M53.9,87.8c0.7,0,1.4,0,2.1,0c0.5,0.3,0.1,1,0.4,1.4c0.4,0.3,0.8,0.1,1.2,0.2c0.6,1.2,1.4,2.4,1.7,3.6 c0.4,1.4-0.2,2.7-0.7,4c-1,0.4-1.5-0.4-2.1-0.9c-0.7,0-1.4,0-2.1,0c-0.4-1-0.8-1.8-2.1-1.5c-0.6-0.7,0.2-1.8-0.7-2.3 c0.5-0.6,0.9-1.3,1-2.1C52.8,89.2,53.2,88.5,53.9,87.8" />
                            <path class="fill-warning"
                                d="M0.1,95.7c0.9-1.3,2.3-1.7,3.8-1.8c1,1.2-0.7,1.5-0.8,2.3c1.1,1,2-0.7,3.1,0c0.6,0.6-0.2,0.8-0.3,1.2 c0.4,0.5,1,0,1.4,0.3c0.4,1.1-0.3,2.3,0.6,3.3c-0.8,0.8-0.7,2.2-1.9,2.8c-1.1-0.2-1.8-1-2.6-1.7c-0.7-0.6-1.9-0.5-2.6-1.9 C1,98.9-0.4,97.4,0.1,95.7" />
                            <path class="fill-warning"
                                d="M155.5,91.5c-0.9-0.5-1.7-0.7-2.3-1.6c0.4-0.2,0.8-0.5,1.2-0.7c-1.2-0.4-2.1,0.7-3.1,0c0.6-1,1.8-1,2.5-1.7 c0.1-0.6-0.3-0.6-0.7-0.7c-0.7-0.2-0.9,0.9-1.6,0.5c-0.3-0.3-0.4-0.7-0.1-0.9c1.7-1,3-2.3,4.5-3.5c0.9-0.7,1.1-0.9,2.5-1.2 c-0.1,0.5-0.6,0.7-0.9,1.1c0.7,0.7,1.3,0.1,1.9-0.2c0.1,1.1,0.9,1.9,0.5,3.4C158.3,87.4,157.4,89.8,155.5,91.5" />
                        </svg>
                    </figure>

                    <!-- Support guid -->
                    <div class="position-absolute top-0 end-0 z-index-1 mt-n4">
                        <div class="bg-blur border border-light rounded-3 text-center shadow-lg p-3">
                            <!-- Title -->
                            <i class="bi bi-headset text-danger fs-3"></i>
                            <h5 class="text-dark mb-1">24 / 7</h5>
                            <h6 class="text-dark fw-light small mb-0">Guide Supports</h6>
                        </div>
                    </div>

                    <!-- Round image group -->
                    <div
                        class="vstack gap-5 align-items-center position-absolute top-0 start-0 d-none d-md-flex mt-4 ms-n3">
                        <img class="icon-lg shadow-lg border border-3 border-white rounded-circle"
                            src="/images/category/hotel/4by3/11.jpg" alt="avatar">
                        <img class="icon-xl shadow-lg border border-3 border-white rounded-circle"
                            src="/images/category/hotel/4by3/12.jpg" alt="avatar">
                    </div>
                </div>
            </div>
            <!-- Content and Image END -->

            <!-- Search START -->
            <div class="row">
                <div class="col-xl-10 position-relative mt-n3 mt-xl-n9">
                    <!-- Title -->
                    <h6 class="d-none d-xl-block mb-3">Check Availability</h6>

                    <!-- Booking from START -->
                    <form class="card shadow rounded-3 position-relative p-4 pe-md-5 pb-5 pb-md-4 bg-ovayo-10">
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
                                            <option>San Jacinto, USA</option>
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
                                                value="2 Guests 1 Room" data-bs-auto-close="outside"
                                                data-bs-toggle="dropdown">

                                            <!-- dropdown items -->
                                            <ul class="dropdown-menu guest-selector-dropdown">
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
            <!-- Search END -->
        </div>
    </section>
    <!-- =======================
        Main Banner END -->



    <!-- <div class="tier-showcase-wrapper">
        <div class="tier-showcase-container">
            <h2>
                Dive into three journeys: budget-friendly freedom, balanced boutique discovery, or transcendent ocean exclusivity.
            </h2>

            <div class="carousel-container">
                <div class="carousel-viewport">
                    <div class="carousel-track" id="carouselTrack">
                        <div class="carousel-card">
                            <h3>Lagoon Line</h3>
                            <p>Paradise-priced adventures with freedom from financial anxiety</p>
                        </div>
                        <div class="carousel-card">
                            <h3>Mid-Range Drifter</h3>
                            <p>Sweet-spot escapes blending boutique charm with unscripted exploration</p>
                        </div>
                        <div class="carousel-card">
                            <h3>Ocean Crest</h3>
                            <p>Sure-footed exclusivity, your unseen luxury made manifest</p>
                        </div>
                        <div class="carousel-card">
                            <h3>Coral Cay</h3>
                            <p>Vibrant reef-side living with a focus on sustainable, active discovery.</p>
                        </div>
                        <div class="carousel-card">
                            <h3>Azure Haven</h3>
                            <p>The pinnacle of private island luxury, where every detail is tailored to you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


        <!-- =======================
        Why Choose Us START -->
    <section class="pt-0 pt-xl-5">
        <div class="container">
            <!-- Title -->
            <div class="row g-4 mb-3 mb-sm-4">
                <div class="col-12 text-center">
                    <h2>Choose your path - Freedom, Discovery, or Exclusivity.</h2>
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
                        <h5>Lagoon Line</h5>
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
                        <h5>Mid-Range Drifter</h5>
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
                        <h5>Ocean Crest</h5>
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

    <!-- <div class="whisper-container">
        <h4>
            Share your secret lagoon vibe - let your whisper guide us to your perfect Indian Ocean escape
        </h4>

        <form class="whisper-form">
            <input type="text" class="whisper-input" placeholder="Describe your dream trip...">
            <button type="submit" class="icon-lg btn btn-round btn-primary mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
            </button>
        </form>
    </div> -->



<section class="discover-places">
    <div class="container">
        <div class="discover-grid">
            <!-- Left Column: Text Content -->
            <div class="discover-text">
                <h2>Discover the best places to visit</h2>
                <p>Our curated selection of destinations offers unparalleled experiences, from the sun-kissed beaches of the Maldives to the rugged landscapes of Patagonia. Let us guide you to your next unforgettable adventure.</p>
                <a href="#" class="btn btn-primary btn-lg btn-rounded">Explore places &rarr;</a>
            </div>

            <!-- Right Column: Card Grid -->
            <div class="card-layout">
                <!-- Tall Card (spans two rows) -->
                <div class="card card-img-scale card-overlay-hover card-tall">
                    <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Man kayaking on a serene mountain lake">
                </div>
                

                <!-- Top Right Card -->
                <div class="card card-img-scale card-overlay-hover">
                    <img src="https://images.unsplash.com/photo-1517404215738-15263e9f9178?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Man surfing a wave">
                </div>
                

                <!-- Bottom Right Card -->
                <div class="card card-img-scale card-overlay-hover">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Woman on a swing overlooking a waterfall">
                </div>
                
            </div>
        </div>
    </div>
</section>


    <!-- =======================
        Testimonials START -->
    <section class="pb-0 py-md-5 bg-ovayo-10">
        <div class="container">
            <div class="row">
                <!-- Slider START -->
                <div class="col-lg-11 mx-auto">
                    <div class="tiny-slider arrow-round arrow-border arrow-hover">
                        <div class="tiny-slider-inner" data-edge="2" data-items="1">

                            <!-- Slide item START -->
                            <div class="px-4 px-md-5">
                                <div class="row justify-content-between align-items-center">

                                    <div class="col-md-6 col-lg-5 position-relative">
                                        <!-- Element -->
                                        <div
                                            class="position-absolute top-0 start-0 translate-middle z-index-9 mt-7 ms-4">
                                            <img src="/images/element/02.svg" class="h-60px bg-orange rounded p-2"
                                                alt="">
                                        </div>

                                        <!-- Svg decoration -->
                                        <figure
                                            class="position-absolute bottom-0 end-0 d-none d-sm-block mb-n5 me-n5">
                                            <svg width="326px" height="335px" viewBox="0 0 326 335">
                                                <path class="fill-primary opacity-1"
                                                    d="M7.3,0C3.3,0,0,3.3,0,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,3.3,11.3,0,7.3,0z
                    M59.2,0.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,4,63.2,0.7,59.2,0.7L59.2,0.7z	M111.1,1.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,4.7,115.1,1.5,111.1,1.5 C111.1,1.5,111.1,1.5,111.1,1.5L111.1,1.5z M163,2.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C170.3,5.5,167,2.2,163,2.2C163,2.2,163,2.2,163,2.2L163,2.2z M214.9,2.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,6.2,218.9,2.9,214.9,2.9C214.9,2.9,214.9,2.9,214.9,2.9L214.9,2.9z M266.8,3.7 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,6.9,270.8,3.7,266.8,3.7C266.8,3.7,266.8,3.7,266.8,3.7L266.8,3.7z M318.7,4.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,7.7,322.7,4.4,318.7,4.4C318.7,4.4,318.7,4.4,318.7,4.4L318.7,4.4z M7.3,52.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,55.9,11.4,52.7,7.3,52.7C7.3,52.7,7.3,52.7,7.3,52.7L7.3,52.7z M59.2,53.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,56.7,63.3,53.4,59.2,53.4C59.2,53.4,59.2,53.4,59.2,53.4L59.2,53.4z M111.1,54.1c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,57.4,115.2,54.1,111.1,54.1C111.1,54.1,111.1,54.1,111.1,54.1L111.1,54.1z M163,54.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,58.1,167.1,54.9,163,54.9C163,54.9,163,54.9,163,54.9L163,54.9zM214.9,55.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,58.9,219,55.6,214.9,55.6C214.9,55.6,214.9,55.6,214.9,55.6L214.9,55.6z M266.8,56.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,59.6,270.9,56.3,266.8,56.3C266.8,56.3,266.8,56.3,266.8,56.3L266.8,56.3z M318.7,57c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,60.3,322.8,57.1,318.7,57C318.7,57,318.7,57,318.7,57L318.7,57zM7.3,105.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,108.6,11.4,105.3,7.3,105.3C7.3,105.3,7.3,105.3,7.3,105.3L7.3,105.3z M59.2,106c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,109.3,63.3,106.1,59.2,106C59.2,106,59.2,106,59.2,106L59.2,106z M111.1,106.8c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,110.1,115.2,106.8,111.1,106.8C111.1,106.8,111.1,106.8,111.1,106.8L111.1,106.8zM163,107.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,110.8,167.1,107.5,163,107.5C163,107.5,163,107.5,163,107.5L163,107.5z M214.9,108.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.3,111.5,219,108.3,214.9,108.2C214.9,108.2,214.9,108.3,214.9,108.2L214.9,108.2z M266.8,109c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,112.3,270.9,109,266.8,109C266.8,109,266.8,109,266.8,109L266.8,109zM318.7,109.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,113,322.8,109.7,318.7,109.7C318.7,109.7,318.7,109.7,318.7,109.7L318.7,109.7z M7.3,158c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,161.3,11.3,158,7.3,158z M59.2,158.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,162,63.2,158.7,59.2,158.7C59.2,158.7,59.2,158.7,59.2,158.7L59.2,158.7z M111.1,159.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,162.7,115.1,159.5,111.1,159.4C111.1,159.4,111.1,159.4,111.1,159.4L111.1,159.4z M163,160.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,163.5,167,160.2,163,160.2C163,160.2,163,160.2,163,160.2L163,160.2z M214.9,160.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,164.2,218.9,160.9,214.9,160.9C214.9,160.9,214.9,160.9,214.9,160.9L214.9,160.9zM266.8,161.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,164.9,270.8,161.6,266.8,161.6C266.8,161.6,266.8,161.6,266.8,161.6L266.8,161.6z M318.7,162.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,165.6,322.7,162.4,318.7,162.4C318.7,162.4,318.7,162.4,318.7,162.4L318.7,162.4z M7.3,210.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,213.9,11.4,210.7,7.3,210.6C7.3,210.6,7.3,210.6,7.3,210.6L7.3,210.6zM59.2,211.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,214.7,63.3,211.4,59.2,211.4C59.2,211.4,59.2,211.4,59.2,211.4L59.2,211.4z M111.1,212.1c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,215.4,115.2,212.1,111.1,212.1C111.1,212.1,111.1,212.1,111.1,212.1L111.1,212.1z M163,212.8c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,216.1,167.1,212.8,163,212.8C163,212.8,163,212.8,163,212.8L163,212.8z M214.9,213.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,216.8,219,213.6,214.9,213.6C214.9,213.6,214.9,213.6,214.9,213.6L214.9,213.6z M266.8,214.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,217.6,270.9,214.3,266.8,214.3C266.8,214.3,266.8,214.3,266.8,214.3L266.8,214.3z M318.7,215c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,218.3,322.8,215,318.7,215C318.7,215,318.7,215,318.7,215L318.7,215z M7.3,263.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,266.6,11.4,263.3,7.3,263.3C7.3,263.3,7.3,263.3,7.3,263.3L7.3,263.3z M59.2,264c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,267.3,63.3,264,59.2,264C59.2,264,59.2,264,59.2,264L59.2,264z M111.1,264.8c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,268,115.2,264.8,111.1,264.8C111.1,264.8,111.1,264.8,111.1,264.8L111.1,264.8z M163,265.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,268.8,167.1,265.5,163,265.5C163,265.5,163,265.5,163,265.5L163,265.5z M214.9,266.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.3,269.5,219,266.2,214.9,266.2C214.9,266.2,214.9,266.2,214.9,266.2L214.9,266.2z M266.8,267c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,270.2,270.9,267,266.8,267C266.8,267,266.8,267,266.8,267L266.8,267z M318.7,267.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,271,322.8,267.7,318.7,267.7C318.7,267.7,318.7,267.7,318.7,267.7L318.7,267.7z M7.4,316c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,319.2,11.4,316,7.4,316C7.3,316,7.3,316,7.4,316L7.4,316z M59.3,316.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,320,63.3,316.7,59.3,316.7C59.2,316.7,59.2,316.7,59.3,316.7L59.3,316.7z M111.2,317.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,320.7,115.2,317.4,111.2,317.4C111.1,317.4,111.1,317.4,111.2,317.4L111.2,317.4z M163.1,318.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,321.4,167.1,318.2,163.1,318.2C163,318.2,163,318.2,163.1,318.2L163.1,318.2z M215,318.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.3,322.2,219,318.9,215,318.9C214.9,318.9,214.9,318.9,215,318.9L215,318.9z M266.9,319.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,322.9,270.9,319.6,266.9,319.6C266.8,319.6,266.8,319.6,266.9,319.6L266.9,319.6z M318.8,320.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,323.6,322.8,320.4,318.8,320.4C318.7,320.4,318.7,320.4,318.8,320.4L318.8,320.4z" />
                                            </svg>
                                        </figure>

                                        <!-- Image -->
                                        <img src="/images/team/01.jpg" class="rounded-3 position-relative"
                                            alt="">
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <!-- Quote -->
                                        <span class="display-3 mb-0 text-primary"><i class="bi bi-quote"></i></span>
                                        <!-- Content -->
                                        <h5 class="fw-light">Moonlight newspaper up its enjoyment agreeable depending.
                                            Timed voice share led him to widen noisy young. At weddings believed in
                                            laughing</h5>
                                        <!-- Rating -->
                                        <ul class="list-inline small mb-2">
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i
                                                    class="fa-solid fa-star-half-alt text-warning"></i></li>
                                        </ul>
                                        <!-- Title -->
                                        <h6 class="mb-0">Billy Vasquez</h6>
                                        <span>Ceo of Apple</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide item END -->

                            <!-- Slide item START -->
                            <div class="px-4 px-md-5">
                                <div class="row justify-content-between align-items-center">

                                    <div class="col-md-6 col-lg-5 position-relative">
                                        <!-- Element -->
                                        <div
                                            class="position-absolute top-0 start-0 translate-middle mt-7 ms-4 z-index-9">
                                            <img src="/images/element/03.svg" class="h-60px bg-orange p-2 rounded"
                                                alt="">
                                        </div>

                                        <!-- Svg decoration -->
                                        <figure
                                            class="position-absolute bottom-0 end-0 mb-n5 me-n5 d-none d-sm-block">
                                            <svg width="326px" height="335px" viewBox="0 0 326 335">
                                                <path class="fill-primary opacity-1" d="M7.3,0C3.3,0,0,3.3,0,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,3.3,11.3,0,7.3,0z M59.2,0.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,4,63.2,0.7,59.2,0.7L59.2,0.7z M111.1,1.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,4.7,115.1,1.5,111.1,1.5 C111.1,1.5,111.1,1.5,111.1,1.5L111.1,1.5z M163,2.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C170.3,5.5,167,2.2,163,2.2C163,2.2,163,2.2,163,2.2L163,2.2z M214.9,2.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,6.2,218.9,2.9,214.9,2.9C214.9,2.9,214.9,2.9,214.9,2.9L214.9,2.9z M266.8,3.7 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,6.9,270.8,3.7,266.8,3.7 C266.8,3.7,266.8,3.7,266.8,3.7L266.8,3.7z M318.7,4.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C326,7.7,322.7,4.4,318.7,4.4C318.7,4.4,318.7,4.4,318.7,4.4L318.7,4.4z M7.3,52.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,55.9,11.4,52.7,7.3,52.7C7.3,52.7,7.3,52.7,7.3,52.7L7.3,52.7z M59.2,53.4 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,56.7,63.3,53.4,59.2,53.4 C59.2,53.4,59.2,53.4,59.2,53.4L59.2,53.4z M111.1,54.1c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C118.4,57.4,115.2,54.1,111.1,54.1C111.1,54.1,111.1,54.1,111.1,54.1L111.1,54.1z M163,54.9c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,58.1,167.1,54.9,163,54.9C163,54.9,163,54.9,163,54.9L163,54.9z M214.9,55.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,58.9,219,55.6,214.9,55.6 C214.9,55.6,214.9,55.6,214.9,55.6L214.9,55.6z M266.8,56.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C274.1,59.6,270.9,56.3,266.8,56.3C266.8,56.3,266.8,56.3,266.8,56.3L266.8,56.3z M318.7,57c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,60.3,322.8,57.1,318.7,57C318.7,57,318.7,57,318.7,57L318.7,57z M7.3,105.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,108.6,11.4,105.3,7.3,105.3 C7.3,105.3,7.3,105.3,7.3,105.3L7.3,105.3z M59.2,106c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C66.6,109.3,63.3,106.1,59.2,106C59.2,106,59.2,106,59.2,106L59.2,106z M111.1,106.8c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,110.1,115.2,106.8,111.1,106.8C111.1,106.8,111.1,106.8,111.1,106.8L111.1,106.8z M163,107.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,110.8,167.1,107.5,163,107.5 C163,107.5,163,107.5,163,107.5L163,107.5z M214.9,108.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C222.3,111.5,219,108.3,214.9,108.2C214.9,108.2,214.9,108.3,214.9,108.2L214.9,108.2z M266.8,109c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,112.3,270.9,109,266.8,109C266.8,109,266.8,109,266.8,109L266.8,109z M318.7,109.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,113,322.8,109.7,318.7,109.7 C318.7,109.7,318.7,109.7,318.7,109.7L318.7,109.7z M7.3,158c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C14.6,161.3,11.3,158,7.3,158z M59.2,158.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C66.5,162,63.2,158.7,59.2,158.7C59.2,158.7,59.2,158.7,59.2,158.7L59.2,158.7z M111.1,159.4c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,162.7,115.1,159.5,111.1,159.4C111.1,159.4,111.1,159.4,111.1,159.4 L111.1,159.4z M163,160.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C170.3,163.5,167,160.2,163,160.2C163,160.2,163,160.2,163,160.2L163,160.2z M214.9,160.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,164.2,218.9,160.9,214.9,160.9C214.9,160.9,214.9,160.9,214.9,160.9L214.9,160.9z M266.8,161.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,164.9,270.8,161.6,266.8,161.6 C266.8,161.6,266.8,161.6,266.8,161.6L266.8,161.6z M318.7,162.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C326,165.6,322.7,162.4,318.7,162.4C318.7,162.4,318.7,162.4,318.7,162.4L318.7,162.4z M7.3,210.6c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,213.9,11.4,210.7,7.3,210.6C7.3,210.6,7.3,210.6,7.3,210.6L7.3,210.6z M59.2,211.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,214.7,63.3,211.4,59.2,211.4C59.2,211.4,59.2,211.4,59.2,211.4L59.2,211.4z M111.1,212.1c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C118.4,215.4,115.2,212.1,111.1,212.1C111.1,212.1,111.1,212.1,111.1,212.1L111.1,212.1z M163,212.8 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,216.1,167.1,212.8,163,212.8 C163,212.8,163,212.8,163,212.8L163,212.8z M214.9,213.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C222.2,216.8,219,213.6,214.9,213.6C214.9,213.6,214.9,213.6,214.9,213.6L214.9,213.6z M266.8,214.3c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,217.6,270.9,214.3,266.8,214.3C266.8,214.3,266.8,214.3,266.8,214.3 L266.8,214.3z M318.7,215c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,218.3,322.8,215,318.7,215 C318.7,215,318.7,215,318.7,215L318.7,215z M7.3,263.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C14.7,266.6,11.4,263.3,7.3,263.3C7.3,263.3,7.3,263.3,7.3,263.3L7.3,263.3z M59.2,264c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,267.3,63.3,264,59.2,264C59.2,264,59.2,264,59.2,264L59.2,264z M111.1,264.8 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,268,115.2,264.8,111.1,264.8 C111.1,264.8,111.1,264.8,111.1,264.8L111.1,264.8z M163,265.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C170.4,268.8,167.1,265.5,163,265.5C163,265.5,163,265.5,163,265.5L163,265.5z M214.9,266.2c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.3,269.5,219,266.2,214.9,266.2C214.9,266.2,214.9,266.2,214.9,266.2 L214.9,266.2z M266.8,267c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C274.2,270.2,270.9,267,266.8,267C266.8,267,266.8,267,266.8,267L266.8,267z M318.7,267.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,271,322.8,267.7,318.7,267.7C318.7,267.7,318.7,267.7,318.7,267.7L318.7,267.7z M7.4,316 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,319.2,11.4,316,7.4,316C7.3,316,7.3,316,7.4,316 L7.4,316z M59.3,316.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,320,63.3,316.7,59.3,316.7C59.2,316.7,59.2,316.7,59.3,316.7L59.3,316.7z M111.2,317.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C118.5,320.7,115.2,317.4,111.2,317.4C111.1,317.4,111.1,317.4,111.2,317.4L111.2,317.4z M163.1,318.2 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,321.4,167.1,318.2,163.1,318.2 C163,318.2,163,318.2,163.1,318.2L163.1,318.2z M215,318.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C222.3,322.2,219,318.9,215,318.9C214.9,318.9,214.9,318.9,215,318.9L215,318.9z M266.9,319.6c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,322.9,270.9,319.6,266.9,319.6C266.8,319.6,266.8,319.6,266.9,319.6 L266.9,319.6z M318.8,320.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,323.6,322.8,320.4,318.8,320.4C318.7,320.4,318.7,320.4,318.8,320.4L318.8,320.4z" />
                                            </svg>
                                        </figure>

                                        <!-- Image -->
                                        <img src="/images/team/02.jpg" class="rounded-3 position-relative"
                                            alt="">
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <!-- Quote -->
                                        <span class="display-3 mb-0 text-primary"><i class="bi bi-quote"></i></span>
                                        <!-- Content -->
                                        <h5 class="fw-light">Passage its ten led hearted removal cordial. Preference
                                            any astonished unreserved Mrs. understood the Preference unreserved.</h5>
                                        <!-- Rating -->
                                        <ul class="list-inline small mb-2">
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                        </ul>
                                        <!-- Title -->
                                        <h6 class="mb-0">Carolyn Ortiz</h6>
                                        <span>Ceo of Google</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide item END -->

                        </div>
                    </div>
                </div>
                <!-- Slider END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Testimonials END -->



        

    <!-- =======================
        Action boxes START -->
    <section class="pt-0 pt-lg-5 bg-ovayo-30">
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
                                <h4 class="mb-1">Have questions?</h4>
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
                            <div class="icon-lg text-white bg-secondary rounded-circle flex-shrink-0"><i
                                    class="fa-solid fa-ticket"></i></div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4 class="mb-1">Book your stay.</h4>
                                <p class="mb-3">Prosperous impression had conviction For every delay</p>
                                <a href="#" class="btn btn-dark mb-0">Book Now</a>
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
        Client START -->
    <section class="bg-ovayo-30">
        <div class="container">
            <div class="row">
                <!-- Client logo START -->
                <div class="col-12">
                    <div class="rounded-3 p-5">
                        <!-- Title -->
                        <h5 class="text-center mb-4 mb-md-5">Trusted by</h5>

                        <!-- Slider START -->
                        <div class="tiny-slider arrow-round">
                            <div class="tiny-slider-inner" data-arrow="false" data-autoplay="true" data-edge="2"
                                data-dots="false" data-gutter="80" data-items-xl="5" data-items-lg="4"
                                data-items-md="3" data-items-sm="2" data-items-xs="1">
                                <!-- Slide item START -->
                                <div class="item"><img src="/images/client/01.svg" alt=""> </div>
                                <div class="item"><img src="/images/client/02.svg" alt=""> </div>
                                <div class="item"><img src="/images/client/08.svg" alt=""> </div>
                                <div class="item"><img src="/images/client/05.svg" alt=""> </div>
                                <div class="item"><img src="/images/client/06.svg" alt=""> </div>
                                <div class="item"><img src="/images/client/03.svg" alt=""> </div>
                                <!-- Slide item END -->
                            </div>
                        </div>
                        <!-- Slider END -->
                    </div>
                </div>
                <!-- Client logo END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Client END -->







</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>

<!-- Navbar mobile START -->
<div class="navbar navbar-mobile">
    <ul class="navbar-nav">
        <!-- Nav item Home -->
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('root') }}"><i class="bi bi-house-door fa-fw"></i>
                <span class="mb-0 nav-text">Home</span>
            </a>
        </li>

        <!-- Nav item My Trips -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('second', ['account' , 'bookings']) }}"><i class="bi bi-briefcase fa-fw"></i>
                <span class="mb-0 nav-text">My Trips</span>
            </a>
        </li>

        <!-- Nav item Offer -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('second', ['listing' , 'offer-detail']) }}"><i class="bi bi-percent fa-fw"></i>
                <span class="mb-0 nav-text">Offer</span>
            </a>
        </li>

        <!-- Nav item Account -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('second', ['account' , 'profile']) }}"><i class="bi bi-person-circle fa-fw"></i>
                <span class="mb-0 nav-text">Account</span>
            </a>
        </li>
    </ul>
</div>
<!-- Navbar mobile END -->
@endsection