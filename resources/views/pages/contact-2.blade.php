@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar2')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
            Main banner START -->
    <section class="pt-4 pt-md-5 bg-ovayo-10">
        <div class="container">
            <!-- Content and form START -->
            <div class="row g-4">
                <div class="col-lg-6">
                    <!-- Title -->
                    <h1>Contact and Support</h1>

                    <!-- Contact form -->
                    <form class="mt-4">
                        <!-- Name -->
                        <div class="mb-4 form-control-bg-ov">
                            <label class="form-label">Your name *</label>
                            <input type="text" class="form-control">
                        </div>
                        <!-- Email -->
                        <div class="mb-4 form-control-bg-ov">
                            <label class="form-label">Email address *</label>
                            <input type="email" class="form-control">
                        </div>
                        <!-- Message -->
                        <div class="mb-4 form-control-bg-ov">
                            <label class="form-label">Message *</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <!-- Button -->
                        <div><button class="btn btn-lg btn-primary mb-0" type="button">Send Message</button></div>
                    </form>
                </div>

                <!-- Image -->
                <div class="col-lg-6 col-xl-5 text-center text-lg-end position-relative ms-auto">
                    <!-- Svg decoration -->
                    <figure class="position-absolute start-0 top-0 d-none d-md-block mt-n5 ms-n3">
                    
                    </figure>
                    <!-- Image -->
                    <img src="/images/ovayo/ritz-carlton_arrival.jpg" class="rounded-3 position-relative" alt="">
                </div>
            </div>
            <!-- Content and form END -->

            <!-- Social links -->
            <div class="row g-4 align-items-center mt-5">
                <div class="col-lg-4">
                    <h5 class="mb-0">Another way to getting in touch</h5>
                </div>
                <!-- Social links -->
                <div class="col-lg-8">
                    <ul class="list-inline hstack flex-wrap gap-2 gap-lg-4 justify-content-lg-end h6 mb-0">
                        <li class="list-inline-item"> <a class="text-facebook" href="#"><i
                                    class="fa-brands fa-facebook-square"></i> Facebook</a> </li>
                        <li class="list-inline-item"> <a class="text-instagram-gradient" href="#"><i
                                    class="fa-brands fa-instagram-square"></i> Instagram</a> </li>
                        <li class="list-inline-item"> <a class="text-twitter" href="#"><i
                                    class="fa-brands fa-twitter-square"></i> Twitter</a> </li>
                        <li class="list-inline-item"> <a class="text-whatsapp" href="#"><i
                                    class="fa-brands fa-whatsapp-square"></i> WhatsApp</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            Main banner START -->

    <!-- =======================
            Map and office START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row g-4">
                <!-- Map -->
                <div class="col-lg-4">
                   

                        <iframe  class="w-100 h-100 rounded-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.588474920732!2d73.1873473!3d0.19907445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b4abbe0d821f239%3A0x7d98a6dbbd1346ce!2sFares-Maathodaa!5e0!3m2!1sen!2smv!4v1750679152757!5m2!1sen!2smv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Address item -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-body shadow p-4 h-100">
                        <h5 class="mb-3">Maldives HQ</h5>
                        <address class="mb-1">Email: hello@ovayo.com </address>
                        <p class="mb-1">Whatsapp: +960 7878787 </p>
                        <p>24/7 support
                            <br>
                            
                        </p>
                    
                    </div>
                </div>

                
               
            </div>
        </div>
    </section>
    <!-- =======================
            Map and office END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection