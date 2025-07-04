@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Main Content START -->
    <section class="pt-4 pt-md-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-9 mx-auto">
                    <div class="vstack gap-4">

                        <!-- Booking summary START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header border-bottom p-4">
                                <h1 class="mb-0 fs-3">Booking summary</h1>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-4">
                                <div class="row g-md-4">
                                    <!-- Image -->
                                    <div class="col-md-3">
                                        <div class="bg-light rounded-3 px-4 py-5 mb-3 mb-md-0">
                                            <img src="/images/category/cab/seadan.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- Card and address detail -->
                                    <div class="col-md-9">
                                        <!-- Title -->
                                        <h5 class="card-title mb-2">Camry, Accord</h5>
                                        <ul class="nav nav-divider h6 fw-normal mb-2">
                                            <li class="nav-item">SEDAN</li>
                                            <li class="nav-item">AC</li>
                                            <li class="nav-item">2 Seats</li>
                                        </ul>

                                        <!-- Pick up and drop address -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <small>Pickup address</small>
                                                <p class="h6 fw-light mb-md-0">8 Central Ave, Chelsea, Maine, United
                                                    States</p>
                                            </div>

                                            <div class="col-md-6">
                                                <small>Drop address</small>
                                                <p class="h6 fw-light mb-0">1846 S Oates St, Dothan, Alaska, United
                                                    States</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">Journey Date:<span
                                                    class="h6 fw-normal mb-0 ms-1">25 Nov 2022</span></li>
                                            <li class="list-group-item">Distance:<span
                                                    class="h6 fw-normal mb-0 ms-1">230 km</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">Passengers:<span
                                                    class="h6 fw-normal mb-0 ms-1">1</span></li>
                                            <li class="list-group-item">Luggages:<span
                                                    class="h6 fw-normal mb-0 ms-1">2</span></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Title -->
                                <h6 class="mb-0 mt-3">Passenger Detail</h6>

                                <div class="row">
                                    <!-- List -->
                                    <div class="col-sm-8">
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item">Passenger Name:<span
                                                    class="h6 mb-0 fw-normal ms-1">Billy Vasquez</span></li>
                                            <li class="list-group-item">Passenger Email:<span
                                                    class="h6 mb-0 fw-normal ms-1">example@gmail.com</span></li>
                                            <li class="list-group-item">Passenger Number:<span
                                                    class="h6 mb-0 fw-normal ms-1">+222 555 666 85</span></li>
                                        </ul>
                                    </div>

                                    <!-- Price -->
                                    <div class="col-sm-4 text-sm-end mt-3 mt-sm-auto">
                                        <h6 class="mb-1 fw-normal">Total Amount</h6>
                                        <h2 class="mb-0 text-success">$458</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Booking summary END -->

                        <!-- Payment START -->
                        <div class="card shadow">
                            <!-- card header -->
                            <div class="card-header border-bottom p-4">
                                <h4 class="mb-0">How would you like to pay?</h4>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-4">
                                <!-- Card options -->
                                <div class="d-sm-flex align-items-center mb-3">
                                    <h6 class="mb-2 mb-sm-0">We Accept:</h6>
                                    <ul class="list-inline my-0 ms-sm-3">
                                        <li class="list-inline-item"> <a href="#"><img
                                                    src="/images/element/visa.svg" class="h-30px" alt=""></a>
                                        </li>
                                        <li class="list-inline-item"> <a href="#"><img
                                                    src="/images/element/mastercard.svg" class="h-30px"
                                                    alt=""></a></li>
                                        <li class="list-inline-item"> <a href="#"><img
                                                    src="/images/element/expresscard.svg" class="h-30px"
                                                    alt=""></a></li>
                                    </ul>
                                </div>

                                <!-- Form START -->
                                <form class="row g-3">
                                    <!-- Card number -->
                                    <div class="col-12">
                                        <label class="form-label">Card Number</label>
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
                                        <label class="form-label">Expiration Date</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" maxlength="2"
                                                placeholder="Month">
                                            <input type="text" class="form-control" maxlength="4"
                                                placeholder="Year">
                                        </div>
                                    </div>
                                    <!--Cvv code  -->
                                    <div class="col-md-6">
                                        <label class="form-label">CVV / CVC</label>
                                        <input type="text" class="form-control" maxlength="3"
                                            placeholder="XXXX">
                                    </div>
                                    <!-- Card name -->
                                    <div class="col-12">
                                        <label class="form-label">Name on Card</label>
                                        <input type="text" class="form-control"
                                            placeholder="Enter card holder name">
                                    </div>

                                    <!-- Buttons -->
                                    <div class="col-12">
                                        <button class="btn btn-primary mb-0">Pay Now</button>
                                    </div>
                                </form>
                                <!-- Form END -->
                            </div>
                        </div>
                        <!-- Payment END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Main Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection