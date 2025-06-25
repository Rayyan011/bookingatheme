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
    Lagoon Line Hero START -->
    <section class="journey-hero" >
        <div class="hero-content">
            <h1 class="hero-title ">Lagoon Line</h1>
            <div class="price-badge">
                <span class="price">$1800</span>
                <span class="duration">for 6 days</span>
            </div>
        </div>
    </section>

    <!-- =======================
    Lagoon Line Hero END -->

<!-- <div class="wave-divider">
        <svg viewBox="0 0 500 500"
            preserveAspectRatio="xMinYMin meet">
            
            <path d="M0, 100 C180, 200 300,
                0 500, 150 L500, 00 L0, 0 Z"
                style="stroke:none; fill:#007C80;">
            </path>
        </svg>
</div> -->

    <!-- =======================
    Lagoon Line Content START -->
    <section class="journey-content-section bg-ovayo-80">
        <div class="container">
            <div class="content-grid">
                <!-- Left Column: What's Included -->
                <div class="included-content">
                    <h3 class="content-title">What's Included</h3>
                    <ul class="included-list">
                        <li>5 nights in a welcoming beach bungalow</li>
                        <li>Daily breakfasts with toes in the sand</li>
                        <li>Seaside dinners on 2 magical nights</li>
                        <li>No-cost reef snorkelling + photos</li>
                        <li>24/7 phone access to your Wish Keeper</li>
                    </ul>
                </div>

                <!-- Right Column: Sample Itinerary -->
                <div class="itinerary-content">
                    <h3 class="content-title">Sample Itinerary</h3>
                    <div class="itinerary-card bg-ovayo-100">
                        <div class="itinerary-item">
                            <span>Day 1</span>
                            <p>Arrive at atoll, ferry to bungalow</p>
                        </div>
                        <div class="itinerary-item">
                            <span>Day 2</span>
                            <p>Beach picnic + snorkel house reef</p>
                        </div>
                        <div class="itinerary-item">
                            <span>Day 3</span>
                            <p>Stroll local island + taste hedhikaa</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-lg btn-primary">Secure Your Ticket</a>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Lagoon Line Content END -->



</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection