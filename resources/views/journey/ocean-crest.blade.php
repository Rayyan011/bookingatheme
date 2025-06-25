@extends('layouts.base')

@section('body-attributes')
class="has-navbar-mobile"
@endsection

@section('header')
@include('layouts.partials/navbar2')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->

<!-- =======================
Ocean Crest START -->
<main class="ocean-crest-page">
    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('/images/ovayo/Diving at Avani.jpg');">
        <div class="container g-12">
            <div class="hero-grid">
                <!-- Left Content -->
                <div class="hero-main">
                    <h1 class="hero-title">Ocean Crest</h1>
                    <a href="#" class="btn btn-price">from $5300</a>
                </div>
                <!-- Right Content -->
                <div class="advisor-profile">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Profile picture of Aisha">
                    <span class="name">Aisha</span>
                    <span class="role">VIP Advisor</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-card">
                <!-- Itinerary -->
                <div class="itinerary-content">
                    <h2 class="section-title">Sample Itinerary</h2>
                    <div class="itinerary-grid">
                        <!-- Itinerary items would be generated here -->
                        <div class="itinerary-item"><span class="day-label">Day 1</span><div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg></div></div>
                        <div class="itinerary-item"><span class="day-label">Day 2</span><div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.66 17.66A10 10 0 1 1 22 12h-4"></path></svg></div></div>
                        <div class="itinerary-item"><span class="day-label">Day 3</span><div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg></div></div>
                        <div class="itinerary-item"><span class="day-label">Day 4</span><div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div></div>
                        <div class="itinerary-item"><span class="day-label">Day 5</span><div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></div></div>
                        <div class="itinerary-item"><span class="day-label">Day 6</span><div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg></div></div>
                        <div class="itinerary-item"><span class="day-label">Day 7</span><div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></div></div>
                        <div class="itinerary-item"><span class="day-label">Day 8</span><div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg></div></div>
                    </div>
                </div>

                <!-- Video Testimonial -->
                <div class="video-testimonial" style="background-image: url('/images/ovayo/ritz-carlton_arrival.jpg');">
                    <span class="video-text">Video Testimonial</span>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- =======================
Ocean Crest END -->
@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection