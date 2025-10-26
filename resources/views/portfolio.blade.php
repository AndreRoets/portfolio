@extends('app')

@section('title', 'Portfolio – Andre Roets')

@section('content')
    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-bg">
            <div class="hero-gradient"></div>
            <div class="hero-grid"></div>
            <div class="hero-scanline"></div>
        </div>

        <div class="hero-inner">
            <div class="hero-copy fade-up">
                <h1 class="hero-title slide-up">
                    <span class="highlight">My Portfolio</span><br>
                    Modern, Fast & User-Focused Projects
                </h1>
                <p class="hero-sub fade-up">
                    A selection of digital projects I’ve built — focused on performance, design, and user experience.
                </p>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO GRID -->
    <section class="portfolio fade-up">
        <h2 class="section-heading">My Work</h2>
        <p class="section-subheading">Here’s a snapshot of what I’ve built — from websites and branding to user-focused digital products.</p>

        <div class="portfolio-grid">
            <div class="portfolio-item hover-float">
                <a href="#">
                    <img src="https://via.placeholder.com/500x350/2d3748/ffffff?text=Home+Finders+Coastal" alt="Home Finders Coastal">
                    <div class="portfolio-info">
                        <h3>Home Finders Coastal</h3>
                        <p>Luxury Real Estate Website</p>
                    </div>
                </a>
            </div>

            <div class="portfolio-item hover-float">
                <a href="#">
                    <img src="https://via.placeholder.com/500x350/4a5568/ffffff?text=Brand+Identity+Design" alt="Brand Identity Design">
                    <div class="portfolio-info">
                        <h3>Brand Identity</h3>
                        <p>Logo + Social Media Kit</p>
                    </div>
                </a>
            </div>

            <div class="portfolio-item hover-float">
                <a href="#">
                    <img src="https://via.placeholder.com/500x350/718096/ffffff?text=E-commerce+Redesign" alt="E-commerce Redesign">
                    <div class="portfolio-info">
                        <h3>E-commerce Revamp</h3>
                        <p>Full WordPress Rebuild</p>
                    </div>
                </a>
            </div>

            <div class="portfolio-item hover-float">
                <a href="#">
                    <img src="https://via.placeholder.com/500x350/a0aec0/ffffff?text=Marketing+Landing+Page" alt="Landing Page">
                    <div class="portfolio-info">
                        <h3>Marketing Landing Page</h3>
                        <p>SEO & Conversion Optimization</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

@endsection

@push('page-styles')
<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}" />
@endpush

@push('scripts')
@endpush
