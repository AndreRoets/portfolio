<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Andre Roets – Portfolio')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    {{-- Global Styles --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />

    {{-- Page-specific Styles --}}
    @stack('page-styles')
</head>
<body>
    <div class="page-bg">
        <div class="page-card">
            <!-- Navbar -->
            <nav class="top-nav">
                <a href="{{ url('/') }}" class="brand">Andre Roets</a>
                <div class="menu">
                    <a href="{{ url('/') }}" class="menu-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ url('/portfolio') }}" class="menu-link {{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a>
                    <a href="#" class="btn-talk">Let's Talk</a>
                </div>
            </nav>

            <main>
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="footer">
                <p>&copy; {{ date('Y') }} Andre Roets. All Rights Reserved.</p>
            </footer>
        </div>
    </div>

    {{-- Global Scripts --}}
    <script>
        // Fade-up animation on scroll
        document.addEventListener('DOMContentLoaded', () => {
            const fades = document.querySelectorAll('.fade-up, .slide-up, .fade-down');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.15 });
            fades.forEach(el => observer.observe(el));
        });
    </script>

    {{-- Page-specific Scripts --}}
    @stack('scripts')
</body>
</html>