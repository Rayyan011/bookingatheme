@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar2')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Why Ovayo START -->
    <section class="why-ovayo-section bg-ovayo-30">
        <div class="container">
            <div class="about-grid">
                <!-- Image -->
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Man sitting on a white sand beach holding a seashell to his ear">
                </div>

                <!-- Content -->
                <div class="about-content bg-ovayo-80">
                    <h2>Why Ovayo</h2>
                    <p>Two Maldivian friends once heard wishes in seashells. Today, Ovayo keeps listening—conjuring wild lagoon scenes for budgeters and ultra-luxe ocean crests for wishmakers.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Why Ovayo END -->

    <!-- =======================
    Core Values START -->
    <section class="core-values-section bg-ovayo-80">
        <div class="container">
            <h2 class="core-values-title">Core values</h2>
            <div class="values-grid">
                <!-- Value Item 1 -->
                <div class="value-item">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 14.5C2 14.5 4 16.5 7.5 16.5C11 16.5 13 14.5 16.5 14.5C20 14.5 22 16.5 22 16.5M15.5 5C14.12 6.38 13.38 8.12 13.38 10C13.38 11.88 14.12 13.62 15.5 15M19 3C17.62 4.38 16.88 6.12 16.88 8C16.88 9.88 17.62 11.62 19 13M8.5 5C9.88 6.38 10.62 8.12 10.62 10C10.62 11.88 9.88 13.62 8.5 15M5 3C6.38 4.38 7.12 6.12 7.12 8C7.12 9.88 6.38 11.62 5 13M2.5 11.5C2.5 11.5 4 13 6.5 14C9 15 10.5 14.5 12.5 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <p>Listen First</p>
                </div>
                <!-- Value Item 2 -->
                <div class="value-item">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 19.1C16 19.1 16.5 20.4 18.5 20.4C20.5 20.4 21 19.1 21 19.1M16 19.1V16.7C16 16.7 16 14.6 18.5 14.6C21 14.6 21 16.7 21 16.7V19.1M18.5 14.6C18.5 14.6 20 12.5 20 11.3C20 10.1 19.3333 8.9 18.5 8.9C17.6667 8.9 17 10.1 17 11.3C17 12.5 18.5 14.6 18.5 14.6ZM3 13.2L3 17.5C3 19.1 4.3 20.4 6 20.4L13.5 20.4M3.8 9.7L8.2 3.8C8.2 3.8 8.8 3.2 9.7 3.2C10.6 3.2 11.1 3.8 11.1 3.8L13.1 6.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <p>Guard the Reef</p>
                </div>
                <!-- Value Item 3 -->
                <div class="value-item">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 16.0336V16.9664C7 18.0694 7.89299 18.9664 8.99599 18.9664H16.004C17.107 18.9664 18 18.0694 18 16.9664V16.0336C18 15.0686 18.7909 14.2778 19.756 14.2778C20.7222 14.2778 21.5121 15.0686 21.5121 16.0336V16.5C21.5121 19.2614 19.2735 21.5 16.5121 21.5H8.48785C5.72643 21.5 3.48785 19.2614 3.48785 16.5V16.0336C3.48785 15.0686 4.27878 14.2778 5.24398 14.2778C6.20918 14.2778 7 15.0686 7 16.0336Z" stroke-width="1.5"/><path d="M12 14C15.3137 14 18 11.3137 18 8C18 4.68629 15.3137 2 12 2C8.68629 2 6 4.68629 6 8C6 11.3137 8.68629 14 12 14Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <p>Elevate Every Tier</p>
                </div>
                <!-- Value Item 4 -->
                <div class="value-item">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 16.8889L17 13.8889C17 13.3366 16.5523 12.8889 16 12.8889L15.1111 12.8889C14.5588 12.8889 14.1111 12.4412 14.1111 11.8889L14.1111 8C14.1111 7.44772 13.6634 7 13.1111 7L4 7C3.44772 7 3 7.44772 3 8L3 18C3 18.5523 3.44772 19 4 19L9.88889 19C10.4412 19 10.8889 18.5523 10.8889 18L10.8889 17.1111C10.8889 16.5588 11.3366 16.1111 11.8889 16.1111L16 16.1111C16.5523 16.1111 17 16.4444 17 16.8889Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 16.8889L7 13.8889C7 13.3366 7.44771 12.8889 8 12.8889L8.88889 12.8889C9.44117 12.8889 9.88889 12.4412 9.88889 11.8889L9.88889 8C9.88889 7.44772 10.3366 7 10.8889 7L20 7C20.5523 7 21 7.44772 21 8L21 18C21 18.5523 20.5523 19 20 19L14.1111 19C13.5588 19 13.1111 18.5523 13.1111 18L13.1111 17.1111C13.1111 16.5588 12.6634 16.1111 12.1111 16.1111L8 16.1111C7.44772 16.1111 7 16.4444 7 16.8889Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <p>Trade Smiles Fairly</p>
                </div>
                <!-- Value Item 5 -->
                <div class="value-item">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 13.3333L16.2 22L13.6 19.5556M22 13.3333L11 2L3 8.66667L8.66667 19.7778L13.6 19.5556M22 13.3333L13.6 19.5556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <p>Surprise with Craft</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Core Values END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection