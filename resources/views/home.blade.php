
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Connect | Find Your Perfect Job</title>

    <style>
        :root {
            --bg: #070b1a;
            --panel: #10182d;
            --text: #f4f7ff;
            --muted: #9aa8c7;
            --blue: #4f8cff;
            --purple: #8b5cf6;
            --cyan: #22d3ee;
            --border: rgba(255,255,255,.1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: Inter, "Segoe UI", Arial, sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { color: inherit; text-decoration: none; }

        .ambient {
            position: fixed;
            width: 360px;
            height: 360px;
            border-radius: 50%;
            filter: blur(110px);
            opacity: .18;
            pointer-events: none;
            z-index: -1;
        }

        .ambient.one { background: var(--blue); top: 80px; left: -180px; }
        .ambient.two { background: var(--purple); top: 300px; right: -190px; }

        .container { width: min(1160px, 92%); margin: auto; }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 22px 0;
            border-bottom: 1px solid var(--border);
        }

        .logo {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 22px;
    font-weight: 800;
    letter-spacing: -.5px;
    color: #dce8ff;
    white-space: nowrap;
}

.logo-icon {
    width: 36px;
    height: 36px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 11px;
    background: linear-gradient(135deg, #2563eb, #7c3aed);
    color: #ffffff;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: -.3px;
    flex-shrink: 0;
}

.logo-text {
    color: #dce8ff;
    background: none;
    -webkit-background-clip: initial;
    background-clip: initial;
}

        .nav-links {
            display: flex;
            align-items: center;
            gap: 24px;
            color: var(--muted);
            font-size: 14px;
        }

        .nav-links a:hover { color: white; }

        .nav-button, .primary-btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 11px 19px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 14px;
            color: white;
            background: linear-gradient(110deg, var(--blue), var(--purple));
            border: 0;
            cursor: pointer;
            transition: transform .2s, box-shadow .2s;
        }

        .nav-button:hover, .primary-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px #4f8cff30;
        }

        .secondary-btn {
            display: inline-flex;
            justify-content: center;
            padding: 11px 19px;
            border: 1px solid var(--border);
            border-radius: 10px;
            font-size: 14px;
            font-weight: 700;
        }

        .hero {
            text-align: center;
            padding: 95px 0 70px;
        }

        .eyebrow {
            display: inline-block;
            color: #a8c5ff;
            background: #4f8cff17;
            border: 1px solid #4f8cff40;
            border-radius: 50px;
            padding: 7px 15px;
            font-size: 12px;
            font-weight: 750;
            letter-spacing: 1.2px;
            text-transform: uppercase;
        }

        h1 {
            max-width: 850px;
            margin: 25px auto 18px;
            font-size: clamp(40px, 6.3vw, 76px);
            line-height: 1.08;
            letter-spacing: -3px;
        }

        .gradient-text {
            background: linear-gradient(90deg, #75a7ff, #b49aff, #56e4f5);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .hero-description {
            max-width: 620px;
            margin: 0 auto;
            color: var(--muted);
            font-size: 16px;
        }

        .search-box {
            display: flex;
            max-width: 820px;
            gap: 10px;
            margin: 34px auto 18px;
            padding: 10px;
            border: 1px solid var(--border);
            border-radius: 15px;
            background: rgba(16,24,45,.88);
            box-shadow: 0 20px 70px #0003;
        }

        .search-box input {
            min-width: 0;
            width: 100%;
            padding: 13px;
            color: white;
            background: transparent;
            border: none;
            outline: none;
            font-size: 14px;
        }

        .search-box input::placeholder { color: #8795b4; }

        .search-box .primary-btn { white-space: nowrap; }

        .quick-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 9px;
            color: var(--muted);
            font-size: 12px;
        }

        .quick-links a {
            border: 1px solid var(--border);
            border-radius: 30px;
            padding: 5px 11px;
        }

        .section { padding: 48px 0; }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 20px;
            margin-bottom: 25px;
        }

        .section-heading h2 {
            font-size: clamp(24px, 3vw, 34px);
            letter-spacing: -.8px;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 14px;
            margin-top: 5px;
        }

        .text-link { color: #8bb6ff; font-weight: 700; font-size: 14px; }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }

        .category-card, .job-card {
            border: 1px solid var(--border);
            background: linear-gradient(145deg, #121b32, #0c1224);
            border-radius: 17px;
            transition: transform .22s, border-color .22s;
        }

        .category-card {
            padding: 23px;
            display: block;
        }

        .category-card:hover, .job-card:hover {
            transform: translateY(-4px);
            border-color: #4f8cff80;
        }

        .category-icon {
            width: 47px;
            height: 47px;
            display: grid;
            place-items: center;
            border-radius: 13px;
            background: #4f8cff18;
            font-size: 23px;
            margin-bottom: 17px;
        }

        .category-card h3 { font-size: 16px; margin-bottom: 4px; }
        .category-card p { color: var(--muted); font-size: 12px; }

        .job-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 17px;
        }

        .job-card { padding: 23px; }

        .job-top {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            align-items: start;
        }

        .job-card h3 { font-size: 18px; overflow-wrap: anywhere; }

        .job-location {
            color: var(--muted);
            font-size: 13px;
            margin-top: 5px;
        }

        .job-label {
            font-size: 11px;
            color: #9cc1ff;
            background: #4f8cff19;
            border: 1px solid #4f8cff30;
            padding: 5px 9px;
            border-radius: 20px;
            white-space: nowrap;
        }

        .job-description {
            color: var(--muted);
            font-size: 13px;
            margin: 18px 0;
            overflow-wrap: anywhere;
        }

        .job-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            padding-top: 15px;
            border-top: 1px solid var(--border);
        }

        .salary { font-size: 13px; font-weight: 700; }

        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            border: 1px dashed var(--border);
            padding: 35px 20px;
            border-radius: 15px;
            color: var(--muted);
        }

        .cta {
            text-align: center;
            margin: 45px 0 65px;
            padding: 48px 22px;
            border: 1px solid var(--border);
            border-radius: 22px;
            background:
                radial-gradient(ellipse at top, #4f8cff24, transparent 65%),
                #10182d;
        }

        .cta h2 { font-size: clamp(25px, 4vw, 38px); margin-bottom: 10px; }
        .cta p { color: var(--muted); margin-bottom: 23px; }

        footer {
            border-top: 1px solid var(--border);
            padding: 25px 0;
            color: var(--muted);
            font-size: 12px;
            text-align: center;
        }

        @media (max-width: 760px) {
            nav { flex-wrap: wrap; }
            .nav-links { gap: 13px; }
            .hero { padding: 70px 0 45px; }
            h1 { letter-spacing: -1.5px; }
            .category-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .job-grid { grid-template-columns: 1fr; }
            .search-box { flex-wrap: wrap; }
            .search-box input { flex: 1 1 40%; }
            .search-box .primary-btn { width: 100%; }
            .section-heading { align-items: start; }
        }

        @media (max-width: 430px) {
            .nav-links { width: 100%; justify-content: space-between; }
            .nav-button { padding: 9px 12px; }
            .category-card { padding: 17px; }
            .job-card { padding: 18px; }
            .job-top { flex-direction: column; }
            .job-bottom { align-items: start; flex-direction: column; }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>
    <div class="ambient one"></div>
    <div class="ambient two"></div>

    <div class="container">
        <nav>
            <a class="logo" href="{{ route('home') }}">
    <span class="logo-icon">SC</span>
    <span class="logo-text">Skill Connect</span>
</a>

            <div class="nav-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('jobs.index') }}">Find Jobs</a>

                @auth
                    <a href="{{ route('jobs.my') }}">My Jobs</a>
                    <a href="{{ route('applications.my') }}">My Applications</a>

                    <a class="nav-button" href="{{ route('jobs.create') }}">Post a Job +</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a class="nav-button" href="{{ route('register') }}">Get Started</a>
                @endauth
            </div>
        </nav>

        <main>
            <section class="hero">
                <span class="eyebrow">Your next opportunity starts here</span>

                <h1>
                    Find Your <span class="gradient-text">Perfect Job</span>
                </h1>

                <p class="hero-description">
                    Connect your skills with meaningful opportunities.
                    Discover jobs, meet employers, and take the next step in your career.
                </p>

                <form class="search-box" method="GET" action="{{ route('jobs.index') }}">
                    <input
                        type="text"
                        name="search"
                        placeholder="Job title or keywords"
                        aria-label="Job title or keywords"
                    >

                    <input
                        type="text"
                        name="location"
                        placeholder="City or location"
                        aria-label="Job location"
                    >

                    <button type="submit" class="primary-btn">Search Jobs →</button>
                </form>

                <div class="quick-links">
                    <span>Popular:</span>
                    <a href="{{ route('jobs.index', ['search' => 'Developer']) }}">Developer</a>
                    <a href="{{ route('jobs.index', ['search' => 'Designer']) }}">Designer</a>
                    <a href="{{ route('jobs.index', ['search' => 'Marketing']) }}">Marketing</a>
                    <a href="{{ route('jobs.index', ['search' => 'Intern']) }}">Internship</a>
                </div>
            </section>

            <section class="section">
                <div class="section-heading">
                    <div>
                        <h2>Explore by Category</h2>
                        <p>Discover opportunities that match your interests.</p>
                    </div>
                </div>

                <div class="category-grid">
                    <a class="category-card" href="{{ route('jobs.index', ['search' => 'Developer']) }}">
                        <div class="category-icon">💻</div>
                        <h3>Technology</h3>
                        <p>Development, IT & software</p>
                    </a>

                    <a class="category-card" href="{{ route('jobs.index', ['search' => 'Design']) }}">
                        <div class="category-icon">🎨</div>
                        <h3>Design</h3>
                        <p>Creative & visual careers</p>
                    </a>

                    <a class="category-card" href="{{ route('jobs.index', ['search' => 'Marketing']) }}">
                        <div class="category-icon">📈</div>
                        <h3>Marketing</h3>
                        <p>Growth, content & digital</p>
                    </a>

                    <a class="category-card" href="{{ route('jobs.index', ['search' => 'Business']) }}">
                        <div class="category-icon">💼</div>
                        <h3>Business</h3>
                        <p>Operations & management</p>
                    </a>
                </div>
            </section>

            <section class="section">
                <div class="section-heading">
                    <div>
                        <h2>Latest Opportunities</h2>
                        <p>Explore recently posted jobs on Skill Connect.</p>
                    </div>

                    <a class="text-link" href="{{ route('jobs.index') }}">View all jobs →</a>
                </div>

                <div class="job-grid">
                    @forelse ($featuredJobs as $job)
                        <article class="job-card">
                            <div class="job-top">
                                <div>
                                    <h3>{{ $job->title }}</h3>
                                    <p class="job-location">
                                        📍 {{ $job->location ?: 'Location not specified' }}
                                    </p>
                                </div>

                                <span class="job-label">New Opportunity</span>
                            </div>

                            <p class="job-description">
                                {{ \Illuminate\Support\Str::limit(strip_tags($job->description), 125) }}
                            </p>

                            <div class="job-bottom">
                                <span class="salary">
                                    @if (!empty($job->salary))
                                        {{ $job->salary }}
                                    @else
                                        Salary not specified
                                    @endif
                                </span>

                                <a class="text-link" href="{{ route('jobs.show', $job) }}">
                                    View Details →
                                </a>
                            </div>
                        </article>
                    @empty
                        <div class="empty-state">
                            <h3>No jobs posted yet</h3>
                            <p>New opportunities will appear here when employers post jobs.</p>
                            @auth
                                <p style="margin-top:15px">
                                    <a class="text-link" href="{{ route('jobs.create') }}">Post the first job →</a>
                                </p>
                            @endauth
                        </div>
                    @endforelse
                </div>
            </section>

            <section class="cta">
                <h2>Ready for Your Next Chapter?</h2>
                <p>Build connections, explore opportunities, and move your career forward.</p>

                @auth
                    <a class="primary-btn" href="{{ route('jobs.index') }}">Explore Jobs →</a>
                @else
                    <a class="primary-btn" href="{{ route('register') }}">Create Your Account →</a>
                @endauth
            </section>
        </main>

        <footer>
            © {{ date('Y') }} Skill Connect. Connecting skills with opportunities.
        </footer>
    </div>
</body>
</html>
