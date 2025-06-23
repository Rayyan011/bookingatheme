@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar2')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Main banner START -->
    <section class="pt-4 pt-md-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 class="display-1 mb-0">Whispered Currents
                    </h1>
                </div>
            </div>

            <!-- Blog START -->
            <div class="row g-4">

                <!-- Blog item START -->
                <div class="col-lg-6">
                    <div class="card bg-transparent mb-4 mb-sm-0">
                        <!-- Image -->
                        <div class="position-relative">
                            <img src="/images/ovayo/pexels-asad-photo-maldives-11118954.jpg" class="card-img" alt="">
                            <!-- Badge -->
                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                <a href="#" class="badge bg-dark">Adventure</a>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-3 pb-0">
                            <span><i class="bi bi-calendar2-plus me-2"></i>April 28, 2022</span>

                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['blog', 'detail']) }}">7 common
                                    mistakes everyone makes while traveling</a></h5>
                            <p class="mb-0">Prospective agents should start broadly and then narrow their list down
                                to.</p>

                            <!-- Author name and button -->
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <h6 class="mb-0">By <a href="#">Joan Wallace</a></h6>
                                <a href="{{ route('second', ['blog', 'detail']) }}"
                                    class="btn btn-link p-0 mb-0">Read more <i class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog item END -->

                <!-- Blog list START -->
                <div class="col-lg-6 ps-lg-5">
                    <div class="vstack gap-4">
                        <!-- Blog item START -->
                        <div class="card bg-transparent">
                            <div class="row g-3 g-sm-4 align-items-sm-center">
                                <!-- Image -->
                                <div class="col-4">
                                    <img src="/images/ovayo/Sandbank_Wedding_Couple walking 5.jpg" class="card-img" alt="">
                                </div>
                                <div class="col-8">
                                    <!-- card body -->
                                    <div class="card-body p-0">
                                        <h5 class="card-title mb-sm-3"><a
                                                href="{{ route('second', ['blog', 'detail']) }}"
                                                class="stretched-link">Bad habits that people in the business industry
                                                need to quit</a></h5>
                                        <!-- Author name and button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="small"><i class="bi bi-calendar2-plus me-2"></i>Sep 01,
                                                2022</span>
                                            <a href="{{ route('second', ['blog', 'detail']) }}"
                                                class="btn btn-link p-0 mb-0">Read more <i
                                                    class="bi bi-arrow-up-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog item END -->

                        <hr class="my-0"> <!-- Divider -->

                        <!-- Blog item START -->
                        <div class="card bg-transparent">
                            <div class="row g-3 g-sm-4 align-items-sm-center">
                                <!-- Image -->
                                <div class="col-4">
                                    <img src="/images/ovayo/luxury-resort-maldives-finolhu-big-game-fishing-03.jpg" class="card-img" alt="">
                                </div>
                                <div class="col-8">
                                    <!-- card body -->
                                    <div class="card-body p-0">
                                        <h5 class="card-title mb-sm-3"><a
                                                href="{{ route('second', ['blog', 'detail']) }}"
                                                class="stretched-link">Around the web: 20 fabulous info graphics about
                                                business</a></h5>
                                        <!-- Author name and button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="small"><i class="bi bi-calendar2-plus me-2"></i>Sep 15,
                                                2022</span>
                                            <a href="{{ route('second', ['blog', 'detail']) }}"
                                                class="btn btn-link p-0 mb-0">Read more <i
                                                    class="bi bi-arrow-up-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog item END -->

                        <hr class="my-0"> <!-- Divider -->

                        <!-- Blog item START -->
                        <div class="card bg-transparent">
                            <div class="row g-3 g-sm-4 align-items-sm-center">
                                <!-- Image -->
                                <div class="col-4">
                                    <img src="/images/ovayo/DSC03085.jpg" class="card-img" alt="">
                                </div>
                                <div class="col-8">
                                    <!-- card body -->
                                    <div class="card-body p-0">
                                        <h5 class="card-title mb-sm-3"><a
                                                href="{{ route('second', ['blog', 'detail']) }}"
                                                class="stretched-link">Ten unconventional tips about startups that you
                                                can't learn from books</a></h5>
                                        <!-- Author name and button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="small"><i class="bi bi-calendar2-plus me-2"></i>Sep 28,
                                                2022</span>
                                            <a href="{{ route('second', ['blog', 'detail']) }}"
                                                class="btn btn-link p-0 mb-0">Read more <i
                                                    class="bi bi-arrow-up-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog item END -->
                    </div>
                </div>
                <!-- Blog list END -->

            </div>
            <!-- Blog END -->
        </div>
    </section>
    <!-- =======================
    Main banner START -->

    <!-- =======================
    Blog grid START -->
    <section class="pt-0 pt-sm-5">
        <div class="container">

            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Latest Article</h2>
                </div>
            </div>

            <!-- Blog grid -->
            <div class="row g-4">
                <!-- Blog item START -->
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-transparent">
                        <!-- Image -->
                        <div class="position-relative">
                            <img src="/images/ovayo/Euconica_FLOATING BREAKFAST - 011_.jpg" class="card-img" alt="">
                            <!-- Badge -->
                            <div class="card-img-overlay p-3">
                                <a href="#" class="badge text-bg-warning mb-2">History</a>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body p-3 pb-0">
                            <!-- Title -->
                            <h5 class="card-title mt-2"><a href="{{ route('second', ['blog', 'detail']) }}">7 common
                                    mistakes everyone makes while traveling</a></h5>
                            <h6 class="fw-light mb-0">By <a href="#">Joan Wallace</a></h6>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card bg-transparent">
                        <!-- Image -->
                        <div class="position-relative">
                            <img src="/images/ovayo/Euconica_Private Beach Dinner - 003_.jpg" class="card-img" alt="">
                            <!-- Badge -->
                            <div class="card-img-overlay p-3">
                                <a href="#" class="badge text-bg-warning mb-2">History</a>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body p-3 pb-0">
                            <!-- Title -->
                            <h5 class="card-title mt-2"><a href="{{ route('second', ['blog', 'detail']) }}">7 common
                                    mistakes everyone makes while traveling</a></h5>
                            <h6 class="fw-light mb-0">By <a href="#">Joan Wallace</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Blog item END -->

                <!-- Blog item START -->
            
                <!-- Blog item END -->

                <!-- Blog item START -->
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-transparent">
                        <!-- Image -->
                        <div class="position-relative">
                            <img src="/images/ovayo/Euconica_Private Beach Dinner - 004_.jpg" class="card-img" alt="">
                            <!-- Badge -->
                            <div class="card-img-overlay p-3">
                                <a href="#" class="badge text-bg-danger mb-2">Business</a>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body p-3 pb-0">
                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['blog', 'detail']) }}">Best Twitter
                                    accounts for learning about investment</a></h5>
                            <h6 class="fw-light mb-0">By <a href="#">Carolyn Ortiz</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Blog item END -->

               
            </div>

            <!-- Buttons -->
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary-soft mb-0">Load more<i class="fas fa-sync ms-2"></i></a>
            </div>
        </div>
    </section>
    <!-- =======================
    Blog grid END -->

    <!-- =======================
    Action box START -->
    
    <!-- =======================
    Action box END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection