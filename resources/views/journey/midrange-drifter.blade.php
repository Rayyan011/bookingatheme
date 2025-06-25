@extends('layouts.base')

@section('body-attributes')
class="has-navbar-mobile"
@endsection

@section('header')
@include('layouts.partials/navbar2')
@endsection

@section('content')
<!-- =======================
Mid-Range Drifter START -->
<main class="mid-range-drifter-page">
    <!-- Hero Image -->
    <section class="drifter-hero" style="background-image: url('/images/ovayo/The Ritz-Carlton Maldives, Fari Islands - Lagoon Pool Villa (3).jpg');">
        <!-- Hero content can be added here if needed -->
    </section>
    
    <!-- Itinerary & Testimonial Section -->
    <section class="drifter-content-section">
        <div class="container">
            <h2 class="section-title">Sample Itinerary</h2>

            <div class="itinerary-grid">
                <!-- Day 1 -->
                <div class="itinerary-item">
                    <div class="day-label">Day 1</div>
                    <div class="icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 28 L48 28 M16 28 A12 12 0 0 0 4 40 L4 44 L60 44 L60 40 A12 12 0 0 0 48 28 M32 44 L32 20 M16 28 L16 20 L48 20 L48 28"/></svg>
                    </div>
                    <p class="description">Welcome and relax into your boutique island haven</p>
                </div>
                <!-- Day 2 -->
                <div class="itinerary-item">
                     <div class="day-label">Day 2</div>
                    <div class="icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M32 60 L32 28 M32 28 C42 28 44 20 44 16 C44 12 40 4 32 4 C24 4 20 12 20 16 C20 20 22 28 32 28 Z M32 28 L20 28 M32 28 L44 28 M26 36 L38 36 M24 44 L40 44 M28 52 L36 52"/></svg>
                    </div>
                    <p class="description">Guided snorkeling amid bustling coral gardens</p>
                </div>
                <!-- Day 3 -->
                <div class="itinerary-item">
                     <div class="day-label">Day 3</div>
                    <div class="icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M60 32 C50 22 38 22 32 26 C26 22 14 22 4 32 C14 42 26 42 32 38 C38 42 50 42 60 32 Z M48 32 A4 4 0 1 1 40 32 A4 4 0 0 1 48 32 Z"/></svg>
                    </div>
                    <p class="description">Indulge in sea-to-table dining delights</p>
                </div>
                <!-- Day 4 -->
                <div class="itinerary-item">
                     <div class="day-label">Day 4</div>
                    <div class="icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M32 52 A20 20 0 0 0 52 32 A20 20 0 0 0 32 12 A20 20 0 0 0 12 32 A20 20 0 0 0 32 52 Z M32 52 L32 60 M20 60 L44 60 M32 32 L44 20"/></svg>
                    </div>
                    <p class="description">Discover cultural charms in a cozy village tour</p>
                </div>
                <!-- Day 5 -->
                <div class="itinerary-item">
                     <div class="day-label">Day 5</div>
                    <div class="icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 60 L52 60 M32 60 L32 12 M12 12 L32 4 L52 12 L32 12 Z"/></svg>
                    </div>
                    <p class="description">Sunset sailing with floating juice bar</p>
                </div>
            </div>

            <div class="testimonial-wrapper">
                <blockquote class="testimonial-quote">
                    “The resort charm and the empty shorelines were just what we needed.”
                </blockquote>
                <div class="testimonial-author">
                    <img src="https://images.unsplash.com/photo-1566753323558-f4e0952af115?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Profile picture of Imran">
                    <span class="author-name">Imran</span>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- =======================
Mid-Range Drifter END -->


@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection