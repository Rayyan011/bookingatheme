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
            Page banner START -->
   
    <!-- =======================
            Page banner END -->

    <!-- =======================
            Page content START -->
    <section>
        <div class="container">
            <div class="row g-4 g-lg-5">

                <!-- Left side content START -->
                <div class="col-xl-8">
                    <div class="vstack gap-5">
                        <!-- Hotel information START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header p-4 border-bottom">
                                <!-- Title -->
                                <h3 class="mb-0"><i class="fa-solid fa-hotel me-2"></i>Hotel Information</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-4">
                                <!-- Card list START -->
                                <div class="card mb-4">
                                    <div class="row align-items-center">
                                        <!-- Image -->
                                        <div class="col-sm-6 col-md-3">
                                            <img src="/images/category/hotel/4by3/02.jpg" class="card-img"
                                                alt="">
                                        </div>

                                        <!-- Card Body -->
                                        <div class="col-sm-6 col-md-9">
                                            <div class="card-body pt-3 pt-sm-0 p-0">
                                                <!-- Title -->
                                                <h5 class="card-title"><a href="#">Pride moon Village Resort &
                                                        Spa</a></h5>
                                                <p class="small mb-2"><i class="bi bi-geo-alt me-2"></i>5855 W Century
                                                    Blvd, Los Angeles - 90045</p>

                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fa-solid fa-star-half-alt text-warning"></i></li>
                                                    <li class="list-inline-item ms-2 h6 small fw-bold mb-0">4.5/5.0
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Card list END -->

                                <!-- Information START -->
                                <div class="row g-4">
                                    <!-- Item -->
                                    <div class="col-lg-4">
                                        <div class="bg-light py-3 px-4 rounded-3">
                                            <h6 class="fw-light small mb-1">Check-in</h6>
                                            <h5 class="mb-1">4 March 2022</h5>
                                            <small><i class="bi bi-alarm me-1"></i>12:30 pm</small>
                                        </div>
                                    </div>

                                    <!-- Item -->
                                    <div class="col-lg-4">
                                        <div class="bg-light py-3 px-4 rounded-3">
                                            <h6 class="fw-light small mb-1">Check out</h6>
                                            <h5 class="mb-1">8 March 2022</h5>
                                            <small><i class="bi bi-alarm me-1"></i>4:30 pm</small>
                                        </div>
                                    </div>

                                    <!-- Item -->
                                    <div class="col-lg-4">
                                        <div class="bg-light py-3 px-4 rounded-3">
                                            <h6 class="fw-light small mb-1">Rooms & Guests</h6>
                                            <h5 class="mb-1">2 G - 1 R</h5>
                                            <small><i class="bi bi-brightness-high me-1"></i>3 Nights - 4 Days</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Information END -->

                                
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Hotel information END -->

                        <!-- Booking Submission START -->
                        <div class="card shadow">
                            <div class="card-header border-bottom p-4">
                                <h4 class="card-title mb-0">Booking Submission</h4>
                            </div>
                            <div class="card-body p-4">
                                <form class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Address line 1</label>
                                        <input type="text" class="form-control" placeholder="Address line 1">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Address line 2</label>
                                        <input type="text" class="form-control" placeholder="Address line 2">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">State/Province/Region</label>
                                        <input type="text" class="form-control" placeholder="State/Province/Region">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">ZIP code/Postal code</label>
                                        <input type="text" class="form-control" placeholder="ZIP code/Postal code">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Country <span class="text-danger">*</span></label>
                                        <select class="form-select" required>
                                            <option value="">Select Country</option>
                                            <option value="Maldives">Maldives</option>
                                            <!-- Add more countries as needed -->
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Special Requirements</label>
                                        <textarea class="form-control" rows="3" placeholder="Special Requirements"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Select Payment Method</label>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="paymentMethod" id="offlinePayment" checked>
                                            <label class="form-check-label" for="offlinePayment">
                                                Offline Payment
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="paymentMethod" id="cardPayment">
                                            <label class="form-check-label" for="cardPayment">
                                                Card Payments
                                                <img src="/images/element/visa.svg" class="h-20px ms-2" alt="">
                                                <img src="/images/element/mastercard.svg" class="h-20px ms-1" alt="">
                                                <img src="/images/element/expresscard.svg" class="h-20px ms-1" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="checkbox" id="terms" required checked>
                                            <label class="form-check-label" for="terms">
                                                I have read and accept the <a href="/hotel/detail" class="text-primary">terms and conditions</a>
                                            </label>
                                        </div>
                                        <div class="text-danger mb-3" style="display: none;" id="termsError">
                                            Term conditions is required field
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Booking Submission END -->
                    </div>
                </div>
                <!-- Left side content END -->

                <!-- Right side content START -->
                <aside class="col-xl-4">
                    <div class="row g-4">

                        <!-- Price summary START -->
                        <div class="col-md-6 col-xl-12">
                            <div class="card shadow rounded-2">
                                <!-- card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-title mb-0">Price Summary</h5>
                                </div>

                                <!-- Card body -->
                                <div class="card-body">
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0">Room Charges</span>
                                            <span class="fs-5">$28,660</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0">Total Discount<span
                                                    class="badge text-bg-danger smaller mb-0 ms-2">10%
                                                    off</span></span>
                                            <span class="fs-5 text-success">-$2,560</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0">Price after discount</span>
                                            <span class="fs-5">$1852</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0">Taxes % Fees</span>
                                            <span class="fs-5">$350</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Card footer -->
                                <div class="card-footer border-top">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="h5 mb-0">Payable Now</span>
                                        <span class="h5 mb-0">$22,500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Price summary END -->

                        <!-- Offer and discount START -->
                        <div class="col-md-6 col-xl-12">
                            <div class="card shadow">
                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <div class="cardt-title">
                                        <h5 class="mb-0">Offer &amp; Discount</h5>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">

                                    

                                    <!-- Input group -->
                                    <div class="input-group mt-3">
                                        <input class="form-control form-control" placeholder="Coupon code">
                                        <button type="button" class="btn btn-primary">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Offer and discount END -->

                        

                    </div>
                </aside>
                <!-- Right side content END -->
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
            Page content START -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

@endsection