@extends('app')

@section('title', 'Andre Roets – Portfolio')

@section('content')
        <!-- HERO -->
        <section class="hero">
            <!-- tech background -->
            <div class="hero-bg">
                <div class="hero-gradient"></div>
                <div class="hero-grid"></div>
                <div class="hero-scanline"></div>
            </div>
        
            <div class="hero-inner">
                <!-- LEFT: intro -->
                <div class="hero-copy">
                    <h1 class="hero-title slide-up">
                        <span class="highlight">Design + Code + Strategy</span><br>
                        Digital Experiences That Convert
                    </h1>
        
                    <p class="hero-sub fade-up">
                        South African Web Developer &amp; Graphic Designer creating fast, SEO-optimised
                        websites with striking visual identities and measurable results.
                    </p>
        
                    <div class="hero-cta fade-up">
                        <a href="#" class="btn-primary glow">View Work</a>
                        <a href="#" class="btn-outline-light">Download CV</a>
                    </div>
                </div>
        
                <!-- RIGHT: floating code panel -->
                <div class="hero-panel fade-up">
                    <div class="panel-header">
                        <div class="panel-dots">
                            <span class="dot red"></span>
                            <span class="dot yellow"></span>
                            <span class="dot green"></span>
                        </div>
                        <div class="panel-tabs">
                            <span class="tab active">overview.js</span>
                            <span class="tab">metrics.json</span>
                            <span class="tab">web.php</span>
                        </div>
                    </div>
        
                    <pre class="panel-code">
<span class="c-comment">// High-performing brand sites for real businesses</span>
<span class="c-key">const</span> <span class="c-var">andre</span> <span class="c-op">=</span> {
    <span class="c-prop">role</span>: <span class="c-str">"Web Developer · UI/UX"</span>,
    <span class="c-prop">focus</span>: [<span class="c-str">"WordPress"</span>, <span class="c-str">"SEO"</span>, <span class="c-str">"Speed"</span>],
    <span class="c-prop">result30</span>: <span class="c-num">"+30% organic traffic"</span>,
    <span class="c-prop">result35</span>: <span class="c-num">"-35% load time"</span>,
    <span class="c-prop">result45</span>: <span class="c-num">"+45% reach"</span>
}

<span class="c-comment">// Laravel-style route for an inbound lead</span>
<span class="c-func">Route</span><span class="c-op">::</span><span class="c-func">post</span>(<span class="c-str">'/contact'</span>, <span class="c-key">function</span> (<span class="c-var">$request</span>) {
    <span class="c-key">return</span> <span class="c-str">"Thanks, I'll get back to you."</span>;
});
                    </pre>
                </div>
            </div>
        </section>

        <!-- METRICS -->
        <section class="metrics fade-up">
            <div class="metric-card">
                <div class="metric-value counter" data-target="30">0%</div>
                <div class="metric-bottom">Increase in Organic Traffic</div>
            </div>
            <div class="metric-card">
                <div class="metric-value counter" data-target="35">0%</div>
                <div class="metric-bottom">Faster Page Load Time</div>
            </div>
            <div class="metric-card">
                <div class="metric-value counter" data-target="45">0%</div>
                <div class="metric-bottom">Bigger Audience Reach</div>
            </div>
            <div class="metric-card">
                <div class="metric-value counter" data-target="10" data-suffix="+">0+</div>
                <div class="metric-bottom">Years of Experience</div>
            </div>
        </section>

        <!-- EXPERTISE -->
        <section class="stack fade-up">
            <h2 class="section-heading">Core Skills & Services</h2>

            <div class="stack-grid">
                @foreach([
                    ['🌐', 'WordPress Development', 'Custom builds, maintenance, and optimised hosting.'],
                    ['🎨', 'UI/UX & Graphic Design', 'Adobe Suite + Canva visuals that sell your brand.'],
                    ['📈', 'SEO Optimization', 'Technical & content strategies for ranking higher.'],
                    ['📊', 'Analytics & Reporting', 'Track growth and user engagement.'],
                    ['⚙️', 'Automation & Integration', 'APIs, CRM connections, smart form handling.'],
                    ['🚀', 'Social Media & Branding', 'Consistent voice, tone, and look across all touchpoints.'],
                    ['💡', 'Creative Direction', 'Helping you tell your story visually.'],
                    ['🤝', 'Client-Focused Support', 'Always available, reliable, and responsive.']
                ] as [$icon, $title, $desc])
                    <div class="stack-item hover-float">
                        <div class="stack-icon">{{ $icon }}</div>
                        <div class="stack-text">
                            <div class="stack-title">{{ $title }}</div>
                            <div class="stack-desc">{{ $desc }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- CASE STUDY -->
        <section class="case-study fade-up">
            <div class="case-left">
                <div class="case-heading">Case Study: Home Finders Coastal</div>
                <div class="case-body">
                    <p><strong>Challenge:</strong> A luxury real estate agency needed a faster, modern website to attract high-end clients.</p>
                    <p><strong>Solution:</strong> Rebuilt the WordPress front-end, improved mobile UX, reduced load time by 35%, and implemented local SEO.</p>
                    <p><strong>Result:</strong> 45% increase in qualified leads, improved organic ranking, and a 5-star client review.</p>
                </div>
                <a href="#" class="btn-outline">View Project</a>
            </div>

            <div class="case-right">
                <div class="devices">
                    <div class="device laptop"></div>
                    <div class="device tablet"></div>
                    <div class="device phone"></div>
                </div>
            </div>
        </section>

@endsection

@push('scripts')
<script>
    // Counter animation
    const counters = document.querySelectorAll('.counter');
    const speed = 200;
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText.replace(/\D/g, '');
            const increment = target / speed;
            if (count < target) {
                counter.innerText = Math.ceil(count + increment) + (target > 20 ? '%' : '+');
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target + (target > 20 ? '%' : '+');
            }
        };
        updateCount();
    });

    // Scroll fade
    const fades = document.querySelectorAll('.fade-up, .slide-up, .fade-down');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.2 });
    fades.forEach(el => observer.observe(el));
</script>
<script>    // Hero Code Panel Tab Switching
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.panel-tabs .tab');
        const codeBlock = document.querySelector('.panel-code');

        const codeSnippets = {
            'overview.js': `
<span class="c-comment">// High-performing brand sites for real businesses</span>
<span class="c-key">const</span> <span class="c-var">andre</span> <span class="c-op">=</span> {
    <span class="c-prop">role</span>: <span class="c-str">"Web Developer · UI/UX"</span>,
    <span class="c-prop">focus</span>: [<span class="c-str">"WordPress"</span>, <span class="c-str">"SEO"</span>, <span class="c-str">"Speed"</span>],
    <span class="c-prop">result30</span>: <span class="c-num">"+30% organic traffic"</span>,
    <span class="c-prop">result35</span>: <span class="c-num">"-35% load time"</span>,
    <span class="c-prop">result45</span>: <span class="c-num">"+45% reach"</span>
}

<span class="c-comment">// Laravel-style route for an inbound lead</span>
<span class="c-func">Route</span><span class="c-op">::</span><span class="c-func">post</span>(<span class="c-str">'/contact'</span>, <span class="c-key">function</span> (<span class="c-var">$request</span>) {
    <span class="c-key">return</span> <span class="c-str">"Thanks, I'll get back to you."</span>;
});`,
            'metrics.json': `
<span class="c-key">{</span>
    <span class="c-prop">"project"</span>: <span class="c-str">"Home Finders Coastal"</span>,
    <span class="c-prop">"results"</span>: <span class="c-key">[</span>
        { <span class="c-prop">"metric"</span>: <span class="c-str">"Lead Increase"</span>, <span class="c-prop">"value"</span>: <span class="c-num">45</span>, <span class="c-prop">"unit"</span>: <span class="c-str">"%"</span> },
        { <span class="c-prop">"metric"</span>: <span class="c-str">"Load Time"</span>, <span class="c-prop">"value"</span>: <span class="c-num">-35</span>, <span class="c-prop">"unit"</span>: <span class="c-str">"%"</span> },
        { <span class="c-prop">"metric"</span>: <span class="c-str">"Organic Traffic"</span>, <span class="c-prop">"value"</span>: <span class="c-num">30</span>, <span class="c-prop">"unit"</span>: <span class="c-str">"%"</span> }
    <span class="c-key">]</span>,
    <span class="c-prop">"clientReview"</span>: <span class="c-num">5</span>
<span class="c-key">}</span>`,
            'web.php': `
<span class="c-key">use</span> <span class="c-var">App\Http\Controllers\PageController</span>;
<span class="c-key">use</span> <span class="c-var">Illuminate\Support\Facades\Route</span>;

<span class="c-comment">// Portfolio Routes</span>
<span class="c-func">Route</span><span class="c-op">::</span><span class="c-func">get</span>(<span class="c-str">'/'</span>, [<span class="c-var">PageController</span><span class="c-op">::</span><span class="c-key">class</span>, <span class="c-str">'home'</span>]);
<span class="c-func">Route</span><span class="c-op">::</span><span class="c-func">get</span>(<span class="c-str">'/work'</span>, [<span class="c-var">PageController</span><span class="c-op">::</span><span class="c-key">class</span>, <span class="c-str">'portfolio'</span>]);
<span class="c-func">Route</span><span class="c-op">::</span><span class="c-func">get</span>(<span class="c-str">'/contact'</span>, [<span class="c-var">PageController</span><span class="c-op">::</span><span class="c-key">class</span>, <span class="c-str">'contact'</span>]);
`
        };

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                codeBlock.innerHTML = codeSnippets[tab.textContent.trim()];
            });
        });
    });
</script>
@endpush