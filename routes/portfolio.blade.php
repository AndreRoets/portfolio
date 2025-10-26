@extends('app')

@section('title', 'My Portfolio – Andre Roets')

@push('page-styles')
    {{-- The new portfolio styles will be added to home.css --}}
@endpush

@section('content')
    <!-- PORTFOLIO WRAPPER -->
    <section class="portfolio fade-up" id="portfolio">

        <div class="portfolio-head">
            <div class="portfolio-text">
                <h2 class="portfolio-title">My Portfolio</h2>
                <p class="portfolio-desc">
                    I build high-performing websites and I create marketing-ready visual assets.
                    Browse work by category below – or open the direct links for sharing.
                </p>
            </div>

            <div class="portfolio-tabs">
                <button class="portfolio-tab" data-target="web">Web Development</button>
                <button class="portfolio-tab" data-target="design">Graphic Design</button>
            </div>
        </div>

        <!-- WEB PORTFOLIO GRID -->
        <div class="portfolio-grid portfolio-group" id="portfolio-web">
            <div class="work-card">
                <div class="work-img web-sample-1"></div>
                <div class="work-body">
                    <div class="work-type">WordPress / Speed / SEO</div>
                    <div class="work-name">Home Finders Coastal</div>
                    <div class="work-desc">
                        Rebuilt the front-end for a real estate brand. Improved mobile UX,
                        cut load time by 35%, and boosted inbound buyer enquiries.
                    </div>
                    <a href="{{ route('portfolio.web') }}" class="work-link">View full Web Portfolio →</a>
                </div>
            </div>

            <div class="work-card">
                <div class="work-img web-sample-2"></div>
                <div class="work-body">
                    <div class="work-type">Landing Page / Lead Gen</div>
                    <div class="work-name">High-Intent Buyer Funnel</div>
                    <div class="work-desc">
                        Conversion-focused landing page for a specific suburb.
                        Integrated lead capture + tracking for follow-up.
                    </div>
                    <a href="{{ route('portfolio.web') }}" class="work-link">View more web builds →</a>
                </div>
            </div>
        </div>

        <!-- GRAPHIC DESIGN GRID -->
        <div class="portfolio-grid portfolio-group" id="portfolio-design">
            <div class="work-card">
                <div class="work-img design-sample-1"></div>
                <div class="work-body">
                    <div class="work-type">Brand / Social Pack</div>
                    <div class="work-name">Property Marketing Kit</div>
                    <div class="work-desc">
                        Canva + Adobe Suite assets: listing templates, Instagram stories,
                        agent profile cards, market update posts – all on-brand.
                    </div>
                    <a href="{{ route('portfolio.design') }}" class="work-link">View full Design Portfolio →</a>
                </div>
            </div>

            <div class="work-card">
                <div class="work-img design-sample-2"></div>
                <div class="work-body">
                    <div class="work-type">Ad Creative / Social Campaign</div>
                    <div class="work-name">Lead Gen Campaign Graphics</div>
                    <div class="work-desc">
                        Scroll-stopping promo visuals built for Facebook / Instagram
                        to pull in high-intent property buyers.
                    </div>
                    <a href="{{ route('portfolio.design') }}" class="work-link">See more branding work →</a>
                </div>
            </div>
        </div>

    </section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Tab switching logic
    const tabButtons = document.querySelectorAll('.portfolio-tab');
    const webGroup   = document.getElementById('portfolio-web');
    const designGroup= document.getElementById('portfolio-design');
    const groups     = { web: webGroup, design: designGroup };

    function activateTab(which) {
        // Ensure groups exist before trying to access classList
        if (!webGroup || !designGroup) return;

        // style tabs
        tabButtons.forEach(btn => {
            btn.classList.toggle('active', btn.getAttribute('data-target') === which);
        });

        // show / hide sections
        Object.keys(groups).forEach(key => {
            groups[key].classList.toggle('active', key === which);
        });
    }

    // click handlers
    tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const target = btn.getAttribute('data-target');
            activateTab(target);
            // update URL without full reload so you can copy/paste it
            const base = "{{ url('/portfolio') }}";
            const path = target === 'design' ? '/design' : '/web';
            // Only push state if the path is different to avoid cluttering history
            if (window.location.pathname !== base + path) {
                window.history.pushState({path: base + path}, '', base + path);
            }
        });
    });

    // Handle back/forward browser buttons
    window.addEventListener('popstate', function(event) {
        if (window.location.pathname.includes('/design')) {
            activateTab('design');
        } else {
            activateTab('web');
        }
    });

    // default tab based on URL on initial load
    function setDefaultTab() {
        if (window.location.pathname.includes('/design')) {
            activateTab('design');
        } else {
            activateTab('web');
        }
    }

    setDefaultTab();
});
</script>
@endpush