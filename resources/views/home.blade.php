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
                        <a href="{{ url('/portfolio') }}" class="btn-primary glow">View Work</a>
                        <a href="{{ asset('pdf/Andre Roets Resume.pdf') }}" class="btn-outline-light" target="_blank" download>Download CV</a>
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
                <div class="stack-item skill-icon">
                    <div class="stack-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor">
                                <path d="M16 18l-4-4l4-4" />
                                <path d="M8 6l4 4l-4 4" />
                            </g>
                        </svg>
                    </div>
                    <div class="stack-text">
                        <div class="stack-title">Web Development</div>
                        <div class="stack-desc">Custom builds, maintenance, and optimised hosting.</div>
                    </div>
                </div>
                <div class="stack-item skill-icon">
                    <div class="stack-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor">
                                <path d="M12 15l8.385-8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
                                <path d="M16 5l3 3" />
                                <path d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999" />
                            </g>
                        </svg>
                    </div>
                    <div class="stack-text">
                        <div class="stack-title">UI/UX & Graphic Design</div>
                        <div class="stack-desc">Adobe Suite + Canva visuals that sell your brand.</div>
                    </div>
                </div>
                <div class="stack-item skill-icon">
                    <div class="stack-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor">
                                <circle cx="10" cy="10" r="7" />
                                <line x1="21" y1="21" x2="15" y2="15" />
                            </g>
                        </svg>
                    </div>
                    <div class="stack-text">
                        <div class="stack-title">SEO Optimization</div>
                        <div class="stack-desc">Technical & content strategies for ranking higher.</div>
                    </div>
                </div>
                <div class="stack-item skill-icon">
                    <div class="stack-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor">
                                <rect x="3" y="12" width="6" height="8" rx="1" />
                                <rect x="9" y="8" width="6" height="12" rx="1" />
                                <rect x="15" y="4" width="6" height="16" rx="1" />
                            </g>
                        </svg>
                    </div>
                    <div class="stack-text">
                        <div class="stack-title">Analytics & Reporting</div>
                        <div class="stack-desc">Track growth and user engagement.</div>
                    </div>
                </div>
                <div class="stack-item skill-icon">
                    <div class="stack-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor">
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                <line x1="9" y1="9" x2="10" y2="9" />
                                <line x1="9" y1="13" x2="15" y2="13" />
                                <line x1="9" y1="17" x2="15" y2="17" />
                            </g>
                        </svg>
                    </div>
                    <div class="stack-text">
                        <div class="stack-title">Automation & Integration</div>
                        <div class="stack-desc">APIs, CRM connections, smart form handling.</div>
                    </div>
                </div>
                <div class="stack-item skill-icon">
                    <div class="stack-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor">
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </g>
                        </svg>
                    </div>
                    <div class="stack-text">
                        <div class="stack-title">Social Media & Branding</div>
                        <div class="stack-desc">Consistent voice, tone, and look across all touchpoints.</div>
                    </div>
                </div>
                <div class="stack-item skill-icon">
                    <div class="stack-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor">
                                <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7" />
                                <path d="M9 16a5 5 0 1 1 6 0a3.5 3.5 0 0 0 -1 3a2 2 0 0 1 -4 0a3.5 3.5 0 0 0 -1 -3" />
                                <line x1="9.7" y1="17" x2="14.3" y2="17" />
                            </g>
                        </svg>
                    </div>
                    <div class="stack-text">
                        <div class="stack-title">Creative Direction</div>
                        <div class="stack-desc">Helping you tell your story visually.</div>
                    </div>
                </div>
                <div class="stack-item skill-icon">
                    <div class="stack-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor">
                                <path d="M8 9h8" />
                                <path d="M8 13h6" />
                                <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                            </g>
                        </svg>
                    </div>
                    <div class="stack-text">
                        <div class="stack-title">Client-Focused Support</div>
                        <div class="stack-desc">Always available, reliable, and responsive.</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CASE STUDY -->
        <section class="case-study">
          <div class="cs-wrap">
            <div class="cs-left">
              <span class="pill">Featured Case Study</span>
              <h2>Home Finders Coastal</h2>
        
              <ul class="cs-bullets">
                <li>
                  <strong>Challenge</strong>
                  <p>A luxury real-estate agency needed a faster, modern website to attract high-end clients.</p>
                </li>
                <li>
                  <strong>Solution</strong>
                  <p>Rebuilt the front-end, improved mobile UX, cut load time by 35%, and implemented local SEO.</p>
                </li>
                <li>
                  <strong>Result</strong>
                  <p><b>+45%</b> qualified leads, better rankings, and a 5-star client review.</p>
                </li>
              </ul>
        
              <a class="cs-btn" href="/case-studies/home-finders-coastal">View Project</a>
        
              <div class="meta">
                <span class="tag">WordPress</span>
                <span class="tag">UI/UX</span>
                <span class="tag">SEO</span>
                <span class="tag">Automation</span>
              </div>
            </div>
        
            <div class="cs-right" aria-hidden="true">
              <!-- Morphing device (laptop → tablet → phone) -->
              <div class="device-morph">
                <span class="screen"></span>
                <span class="laptop-base"></span>
              </div>
              <!-- soft shadow -->
              <div class="device-shadow"></div>
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