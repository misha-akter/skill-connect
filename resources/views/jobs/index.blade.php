<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Available Jobs | Skill Connect</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #070b1a;
            --card: rgba(17, 24, 48, 0.72);
            --border: rgba(255, 255, 255, 0.10);
            --text: #f8fafc;
            --muted: #94a3b8;
            --blue: #4f8cff;
            --cyan: #22d3ee;
            --purple: #8b5cf6;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            color: var(--text);

            background:
                radial-gradient(
                    circle at 15% 15%,
                    rgba(79, 140, 255, 0.18),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 85% 20%,
                    rgba(139, 92, 246, 0.16),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 50% 90%,
                    rgba(34, 211, 238, 0.10),
                    transparent 30%
                ),
                var(--bg);

            overflow-x: hidden;
        }

        /* =========================
           ANIMATED BACKGROUND
        ========================= */

        .background {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 0;
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(70px);
            opacity: 0.35;
            animation: float 9s ease-in-out infinite;
        }

        .orb.one {
            width: 260px;
            height: 260px;
            background: #2563eb;
            top: 8%;
            left: -80px;
        }

        .orb.two {
            width: 230px;
            height: 230px;
            background: #7c3aed;
            top: 45%;
            right: -70px;
            animation-delay: -3s;
        }

        .orb.three {
            width: 180px;
            height: 180px;
            background: #0891b2;
            bottom: -60px;
            left: 45%;
            animation-delay: -6s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(35px, -30px) scale(1.12);
            }
        }

        /* =========================
           MOUSE GLOW
        ========================= */

        .mouse-glow {
            position: fixed;

            width: 280px;
            height: 280px;

            border-radius: 50%;

            pointer-events: none;

            background:
                radial-gradient(
                    circle,
                    rgba(79, 140, 255, 0.12),
                    transparent 65%
                );

            transform: translate(-50%, -50%);

            z-index: 1;
        }

        /* =========================
           MAIN PAGE
        ========================= */

        .page {
            position: relative;
            z-index: 2;

            max-width: 1400px;
            margin: auto;

            padding: 30px 20px 50px;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 15px 18px;

            margin-bottom: 45px;

            background:
                rgba(15, 23, 42, 0.58);

            border:
                1px solid var(--border);

            border-radius: 18px;

            backdrop-filter: blur(18px);

            box-shadow:
                0 20px 60px rgba(0, 0, 0, 0.28),
                inset 0 1px rgba(255, 255, 255, 0.05);

            animation:
                appear 0.7s ease both;
        }

        .brand {
            display: flex;
            align-items: center;

            gap: 10px;

            text-decoration: none;
            color: white;

            font-size: 20px;
            font-weight: 800;

            letter-spacing: 0.3px;
        }

        .brand-icon {
            width: 37px;
            height: 37px;

            display: grid;
            place-items: center;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #7c3aed
                );

            box-shadow:
                0 0 25px rgba(79, 140, 255, 0.35);

            font-size: 13px;
        }

        .brand span {
            background:
                linear-gradient(
                    90deg,
                    #ffffff,
                    #93c5fd,
                    #c4b5fd
                );

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;
        }

        .nav-right {
            display: flex;
            align-items: center;

            gap: 8px;
        }

        .nav-link {
            text-decoration: none;

            color: #cbd5e1;

            padding: 9px 13px;

            border-radius: 9px;

            font-size: 13px;

            transition: 0.3s;
        }

        .nav-link:hover {
            color: white;

            background:
                rgba(255, 255, 255, 0.07);
        }

        .post-btn {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            text-decoration: none;

            color: white;

            padding: 10px 15px;

            border-radius: 10px;

            font-size: 13px;
            font-weight: 700;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #4f46e5
                );

            box-shadow:
                0 8px 25px rgba(37, 99, 235, 0.28);

            transition: 0.3s;
        }

        .post-btn:hover {
            transform: translateY(-2px);

            box-shadow:
                0 12px 30px rgba(37, 99, 235, 0.42);
        }

        .logout-form {
    display: inline;
    margin: 0;
}

.logout-btn {
    border: 1px solid rgba(248, 113, 113, 0.25);
    background: rgba(248, 113, 113, 0.08);
    color: #fca5a5;
    padding: 10px 14px;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
}

.logout-btn:hover {
    background: rgba(248, 113, 113, 0.16);
    border-color: rgba(248, 113, 113, 0.40);
    color: #fecaca;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(248, 113, 113, 0.12);
}

        /* =========================
           HEADING
        ========================= */

        .heading {
            margin-bottom: 28px;

            animation:
                appear 0.7s ease both;
        }

        .heading .tag {
            display: inline-block;

            margin-bottom: 11px;

            padding: 6px 11px;

            border-radius: 30px;

            color: #93c5fd;

            background:
                rgba(59, 130, 246, 0.10);

            border:
                1px solid rgba(96, 165, 250, 0.18);

            font-size: 11px;
            font-weight: 700;

            letter-spacing: 1px;

            text-transform: uppercase;
        }

        .heading h1 {
            font-size: clamp(30px, 4vw, 44px);

            line-height: 1.1;

            margin-bottom: 10px;

            background:
                linear-gradient(
                    90deg,
                    #ffffff,
                    #93c5fd,
                    #c4b5fd
                );

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;
        }

        .heading p {
            color: var(--muted);

            font-size: 14px;

            max-width: 650px;

            line-height: 1.65;
        }

        /* =========================
           SUCCESS MESSAGE
        ========================= */

        .success {
            padding: 13px 16px;

            margin-bottom: 20px;

            border-radius: 13px;

            background:
                rgba(34, 197, 94, 0.10);

            border:
                1px solid rgba(34, 197, 94, 0.25);

            color: #86efac;

            font-size: 13px;

            backdrop-filter: blur(12px);
        }

        /* =========================
           JOB GRID
        ========================= */

        .jobs {
            display: grid;

            grid-template-columns:
                repeat(4, minmax(0, 1fr));

            gap: 16px;
        }

        
/* =========================
   JOB SEARCH & FILTER
========================= */

.search-panel {
    display: grid;
    grid-template-columns: 1.5fr 1fr auto;
    gap: 12px;
    padding: 18px;
    margin-bottom: 25px;
    background: rgba(17, 24, 48, 0.72);
    border: 1px solid var(--border);
    border-radius: 18px;
    backdrop-filter: blur(18px);
}

.search-field {
    width: 100%;
    min-width: 0;
    padding: 13px 15px;
    color: var(--text);
    background: rgba(7, 11, 26, 0.75);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 10px;
    outline: none;
    font-size: 13px;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.search-field::placeholder {
    color: #94a3b8;
}

.search-field:focus {
    border-color: var(--blue);
    box-shadow: 0 0 0 3px rgba(79, 140, 255, 0.12);
}

.search-btn {
    padding: 12px 20px;
    color: white;
    background: linear-gradient(135deg, #2563eb, #4f46e5);
    border: none;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: 0.3s;
}

.search-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(37, 99, 235, 0.3);
}

.search-meta {
    color: var(--muted);
    font-size: 12px;
    margin: -10px 0 20px;
}

.clear-search {
    color: #93c5fd;
    text-decoration: none;
    margin-left: 8px;
}

.clear-search:hover {
    color: white;
}

@media (max-width: 650px) {
    .search-panel {
        grid-template-columns: 1fr;
    }

    .search-btn {
        width: 100%;
    }
}

        /* =========================
           JOB CARD
        ========================= */

        .job-card {
            position: relative;

            overflow: hidden;

            padding: 18px;

            min-height: 285px;

            display: flex;

            flex-direction: column;

            background:
                linear-gradient(
                    145deg,
                    rgba(20, 29, 57, 0.88),
                    rgba(10, 16, 35, 0.72)
                );

            border:
                1px solid var(--border);

            border-radius: 18px;

            backdrop-filter: blur(18px);

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.23),
                inset 0 1px rgba(255, 255, 255, 0.04);

            transform-style: preserve-3d;

            transition:
                transform 0.25s ease,
                border-color 0.3s ease,
                box-shadow 0.3s ease;

            animation:
                appear 0.7s ease both;
        }

        .job-card::before {
            content: "";

            position: absolute;

            width: 150px;
            height: 150px;

            top: -80px;
            right: -70px;

            background:
                radial-gradient(
                    circle,
                    rgba(79, 140, 255, 0.18),
                    transparent 68%
                );

            pointer-events: none;
        }

        .job-card::after {
            content: "";

            position: absolute;

            width: 100px;
            height: 100px;

            bottom: -60px;
            left: -50px;

            background:
                radial-gradient(
                    circle,
                    rgba(139, 92, 246, 0.12),
                    transparent 70%
                );

            pointer-events: none;
        }

        .job-card:hover {
            border-color:
                rgba(96, 165, 250, 0.35);

            box-shadow:
                0 22px 55px rgba(0, 0, 0, 0.32),
                0 0 25px rgba(79, 140, 255, 0.08);
        }

        /* =========================
           CARD NUMBER
        ========================= */

        .job-number {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            width: 30px;
            height: 30px;

            margin-bottom: 12px;

            border-radius: 9px;

            font-size: 11px;
            font-weight: 800;

            color: #bfdbfe;

            background:
                rgba(59, 130, 246, 0.12);

            border:
                1px solid rgba(96, 165, 250, 0.15);
        }

        /* =========================
           TITLE
        ========================= */

        .job-card h2 {
            font-size: 17px;

            line-height: 1.3;

            margin-bottom: 12px;

            min-height: 44px;

            color: #f8fafc;

            display: -webkit-box;

            -webkit-line-clamp: 2;

            -webkit-box-orient: vertical;

            overflow: hidden;
        }

        /* =========================
           JOB INFORMATION
        ========================= */

        .job-info {
            display: flex;

            align-items: center;

            gap: 5px;

            color: #a5b4fc;

            font-size: 12px;

            margin-bottom: 6px;

            white-space: nowrap;

            overflow: hidden;
        }

        .job-info strong {
            color: #cbd5e1;

            font-weight: 700;
        }

        .job-info span:last-child {
            color: #94a3b8;

            overflow: hidden;

            text-overflow: ellipsis;
        }

        /* =========================
           DESCRIPTION
        ========================= */

        .description {
            color: #94a3b8;

            font-size: 12px;

            line-height: 1.5;

            margin: 12px 0 10px;

            min-height: 36px;

            display: -webkit-box;

            -webkit-line-clamp: 2;

            -webkit-box-orient: vertical;

            overflow: hidden;
        }

        /* =========================
           POSTED DATE
        ========================= */

        .posted {
            display: flex;

            align-items: center;

            gap: 5px;

            color: #64748b;

            font-size: 10.5px;

            margin-bottom: 12px;

            white-space: nowrap;
        }

        .posted span {
            color: #818cf8;
        }

        /* =========================
           BUTTONS
        ========================= */

        .actions {
            display: grid;

            grid-template-columns:
                1fr 1.1fr;

            gap: 7px;

            margin-top: auto;
        }

        .btn {
            display: flex;

            justify-content: center;
            align-items: center;

            gap: 4px;

            text-decoration: none;

            padding: 8px 6px;

            border-radius: 9px;

            font-size: 11px;

            font-weight: 700;

            white-space: nowrap;

            transition: 0.3s;
        }

        /* View */

        .details {
            color: #bfdbfe;

            background:
                rgba(59, 130, 246, 0.09);

            border:
                1px solid rgba(96, 165, 250, 0.18);
        }

        .details:hover {
            background:
                rgba(59, 130, 246, 0.17);

            transform: translateY(-2px);
        }

        /* Apply */

        .apply {
            color: white;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #4f46e5
                );

            box-shadow:
                0 7px 18px rgba(37, 99, 235, 0.20);
        }

        .apply:hover {
            transform: translateY(-2px);

            box-shadow:
                0 10px 25px rgba(37, 99, 235, 0.35);
        }

        /* =========================
           EMPTY STATE
        ========================= */

        .empty {
            text-align: center;

            padding: 65px 25px;

            background:
                rgba(15, 23, 42, 0.65);

            border:
                1px solid var(--border);

            border-radius: 22px;

            backdrop-filter: blur(18px);
        }

        .empty-icon {
            font-size: 40px;

            margin-bottom: 13px;
        }

        .empty h2 {
            font-size: 22px;

            margin-bottom: 9px;
        }

        .empty p {
            color: var(--muted);

            font-size: 14px;

            margin-bottom: 22px;
        }

        /* =========================
           ANIMATION DELAYS
        ========================= */

        .job-card:nth-child(1) {
            animation-delay: 0.05s;
        }

        .job-card:nth-child(2) {
            animation-delay: 0.10s;
        }

        .job-card:nth-child(3) {
            animation-delay: 0.15s;
        }

        .job-card:nth-child(4) {
            animation-delay: 0.20s;
        }

        .job-card:nth-child(5) {
            animation-delay: 0.25s;
        }

        .job-card:nth-child(6) {
            animation-delay: 0.30s;
        }

        .job-card:nth-child(7) {
            animation-delay: 0.35s;
        }

        .job-card:nth-child(8) {
            animation-delay: 0.40s;
        }

        @keyframes appear {
            from {
                opacity: 0;

                transform:
                    translateY(18px);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0);
            }
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1150px) {

            .jobs {
                grid-template-columns:
                    repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 850px) {

            .jobs {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 600px) {

            .page {
                padding:
                    18px 14px 40px;
            }

            .navbar {
                margin-bottom: 35px;
            }

            .nav-link {
                display: none;
            }

            .brand {
                font-size: 18px;
            }

            .jobs {
                grid-template-columns: 1fr;
            }

            .job-card {
                min-height: auto;
            }

            .actions {
                grid-template-columns:
                    1fr 1.1fr;
            }

            
        }

        
/* Pagination - Skill Connect */
.pagination-wrap {
    margin: 30px 0 10px;
    display: flex;
    justify-content: center;
    width: 100%;
    overflow-x: auto;
}

.pagination-wrap nav {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 14px;
}

.pagination-wrap nav > div {
    color: #94a3b8;
    font-size: 13px;
}

.pagination-wrap nav > div:last-child > span,
.pagination-wrap nav > div:last-child > a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 38px;
    min-height: 38px;
    margin: 3px;
    padding: 8px 12px;
    border: 1px solid rgba(139, 92, 246, 0.25);
    border-radius: 10px;
    background: rgba(15, 23, 42, 0.85);
    color: #cbd5e1;
    text-decoration: none;
    transition: 0.25s ease;
}

.pagination-wrap nav > div:last-child > a:hover {
    border-color: #4f8cff;
    background: rgba(79, 140, 255, 0.16);
    color: #ffffff;
}

.pagination-wrap nav [aria-current="page"] span {
    border-color: transparent;
    background: linear-gradient(135deg, #4f8cff, #8b5cf6);
    color: #ffffff;
}

.pagination-wrap nav [aria-disabled="true"] {
    opacity: 0.45;
    cursor: not-allowed;
}

@media (max-width: 600px) {
    .pagination-wrap nav > div:last-child > span,
    .pagination-wrap nav > div:last-child > a {
        min-width: 32px;
        min-height: 34px;
        margin: 2px;
        padding: 6px 9px;
    }
}


/* =====================================
   SKILL CONNECT — PREMIUM MICRO-ANIMATIONS
   Existing theme preserved
===================================== */

.jobs .job-card {
    position: relative;
    isolation: isolate;
    transition:
        transform 280ms cubic-bezier(0.2, 0.8, 0.2, 1),
        box-shadow 280ms ease,
        border-color 280ms ease;
    will-change: transform;
}

.jobs .job-card::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: inherit;
    pointer-events: none;
    opacity: 0;
    background: linear-gradient(
        135deg,
        rgba(79, 140, 255, 0.08),
        transparent 48%,
        rgba(139, 92, 246, 0.08)
    );
    transition: opacity 280ms ease;
    z-index: -1;
}

@media (hover: hover) and (pointer: fine) {
    .jobs .job-card:hover {
        transform: translateY(-5px);
        border-color: rgba(79, 140, 255, 0.45);
        box-shadow:
            0 16px 38px rgba(0, 0, 0, 0.22),
            0 0 22px rgba(79, 140, 255, 0.10);
    }

    .jobs .job-card:hover::after {
        opacity: 1;
    }
}

.jobs .job-card:focus-within {
    outline: 2px solid rgba(79, 140, 255, 0.75);
    outline-offset: 3px;
}

@media (prefers-reduced-motion: reduce) {
    .jobs .job-card,
    .jobs .job-card::after {
        transition: none !important;
        animation: none !important;
        transform: none !important;
    }
}


/* Premium Button Interactions */

.post-btn,
.search-btn,
button,
a.post-btn {
    transition:
        transform 220ms ease,
        box-shadow 220ms ease,
        background-color 220ms ease,
        border-color 220ms ease,
        color 220ms ease;
}

@media (hover: hover) and (pointer: fine) {
    .post-btn:hover,
    .search-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 22px rgba(79, 140, 255, 0.20);
    }
}

.post-btn:active,
.search-btn:active {
    transform: scale(0.98);
}

.post-btn:focus-visible,
.search-btn:focus-visible,
a:focus-visible,
button:focus-visible {
    outline: 2px solid #4f8cff;
    outline-offset: 4px;
}

.search-field {
    transition:
        border-color 220ms ease,
        box-shadow 220ms ease,
        background-color 220ms ease;
}

.search-field:focus {
    outline: none;
    border-color: #4f8cff;
    box-shadow: 0 0 0 3px rgba(79, 140, 255, 0.13);
}

@media (prefers-reduced-motion: reduce) {
    .post-btn,
    .search-btn,
    button,
    a.post-btn,
    .search-field {
        transition: none !important;
        animation: none !important;
    }

    .post-btn:active,
    .search-btn:active {
        transform: none;
    }
}


/* Skill Connect — Premium Form Polish */

input,
textarea,
select {
    transition:
        border-color 220ms ease,
        box-shadow 220ms ease,
        background-color 220ms ease;
}

input:focus-visible,
textarea:focus-visible,
select:focus-visible {
    outline: none;
    border-color: #4f8cff;
    box-shadow: 0 0 0 3px rgba(79, 140, 255, 0.14);
}

input::placeholder,
textarea::placeholder {
    transition: opacity 200ms ease;
}

input:focus::placeholder,
textarea:focus::placeholder {
    opacity: 0.65;
}

input:disabled,
textarea:disabled,
select:disabled {
    opacity: 0.6;
    cursor: not-allowed;
}

@media (prefers-reduced-motion: reduce) {
    input,
    textarea,
    select,
    input::placeholder,
    textarea::placeholder {
        transition: none !important;
    }
}


    </style>
</head>

<body>

<!-- =========================
     BACKGROUND
========================= -->

<div class="background">

    <div class="orb one"></div>
    <div class="orb two"></div>
    <div class="orb three"></div>

</div>


<div
    class="mouse-glow"
    id="mouseGlow"
></div>


<!-- =========================
     MAIN PAGE
========================= -->

<div class="page">

    <!-- =========================
         NAVBAR
    ========================= -->

    <nav class="navbar">

<a href="{{ route('jobs.index') }}" class="brand">
    <div class="brand-icon">
        SC
    </div>

    <span>
        Skill Connect
    </span>
</a>

<div class="nav-right">

    <a href="{{ route('jobs.index') }}" class="nav-link">
        Available Jobs
    </a>

    @auth

        <a href="{{ route('jobs.my') }}" class="nav-link">
            My Jobs
        </a>

        <a href="{{ route('jobs.create') }}" class="post-btn">
            + Post New Job
        </a>

        <form method="POST"
              action="{{ route('logout') }}"
              class="logout-form">
            @csrf

            <button type="submit" class="logout-btn">
                Logout
            </button>
        </form>

    @else

        <a href="{{ route('login') }}" class="nav-link">
            Login
        </a>

        <a href="{{ route('register') }}" class="post-btn">
            Register
        </a>

    @endauth

</div>

</nav>



    <!-- =========================
         HEADING
    ========================= -->

    <section class="heading">

        <div class="tag">
            Explore Opportunities
        </div>


        <h1>
            Available Jobs
        </h1>


        <p>
            Discover exciting opportunities, explore job details,
            and connect with employers looking for talented people.
        </p>

    </section>


    <!-- =========================
         SUCCESS MESSAGE
    ========================= -->

    @if(session('success'))

        <div class="success">

            ✓ {{ session('success') }}

        </div>

    @endif

    
<!-- JOB SEARCH & LOCATION FILTER -->

<form method="GET"
      action="{{ route('jobs.index') }}"
      class="search-panel">

    <input
        type="text"
        name="search"
        class="search-field"
        placeholder="🔎 Search by job title or description..."
        value="{{ request('search') }}"
        aria-label="Search job title or description"
    >

    <input
        type="text"
        name="location"
        class="search-field"
        placeholder="📍 Filter by location..."
        value="{{ request('location') }}"
        aria-label="Filter jobs by location"
    >

    <button type="submit" class="search-btn">
        Search Jobs
    </button>

</form>

@if(request()->filled('search') || request()->filled('location'))
    <div class="search-meta">
        Showing {{ $jobs->count() }}
        {{ $jobs->count() === 1 ? 'job' : 'jobs' }}
        matching your search.

        <a href="{{ route('jobs.index') }}" class="clear-search">
            Clear filters
        </a>
    </div>
@endif


    <!-- =========================
         JOBS
    ========================= -->

    @if($jobs->count() > 0)

        <div class="jobs">

            @foreach($jobs as $index => $job)

                <div class="job-card">

                    <!-- Number -->

                    <div class="job-number">

                        #{{ str_pad(
                            $index + 1,
                            2,
                            '0',
                            STR_PAD_LEFT
                        ) }}

                    </div>


                    <!-- Job Title -->

                    <h2>
                        {{ $job->title }}
                    </h2>


                    <!-- Location -->

                    <div class="job-info">

                        <span>📍</span>

                        <strong>
                            Location:
                        </strong>

                        <span>
                            {{ $job->location }}
                        </span>

                    </div>


                    <!-- Salary -->

                    <div class="job-info">

                        <span>💰</span>

                        <strong>
                            Salary:
                        </strong>

                        <span>
                            {{ $job->salary }}
                        </span>

                    </div>


                    <!-- Description -->

                    <div class="description">

                        {{ Str::limit(
                            $job->description,
                            100
                        ) }}

                    </div>


                    <!-- Posted -->

                    <div class="posted">

                        <span>🕒</span>

                        Posted
                        {{ $job->created_at->format('d M Y') }}

                    </div>


                    <!-- Buttons -->

                    <div class="actions">

                        <a
                            href="{{ route(
                                'jobs.show',
                                $job->id
                            ) }}"
                            class="btn details"
                        >
                            👁 View Job
                        </a>


                        <a
                            href="{{ route(
                                'jobs.show',
                                $job->id
                            ) }}"
                            class="btn apply"
                        >
                            🚀 Apply Now
                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <!-- =========================
             EMPTY STATE
        ========================= -->

        <div class="empty">

            <div class="empty-icon">
                🔎
            </div>


            <h2>
                No Jobs Available
            </h2>


            <p>
                There are currently no jobs available.
                Please check again later.
            </p>

        </div>

    @endif

    @if($jobs->hasPages())
    <div class="pagination-wrap">
        {{ $jobs->links() }}
    </div>
@endif

</div>


<!-- =========================
     JAVASCRIPT
========================= -->

<script>

    /* =========================
       MOUSE GLOW
    ========================= */

    const mouseGlow =
        document.getElementById('mouseGlow');


    document.addEventListener(
        'mousemove',
        function (e) {

            mouseGlow.style.left =
                e.clientX + 'px';

            mouseGlow.style.top =
                e.clientY + 'px';

        }
    );


    /* =========================
       3D CARD EFFECT
    ========================= */

    const cards =
        document.querySelectorAll(
            '.job-card'
        );


    cards.forEach(card => {

        card.addEventListener(
            'mousemove',
            function (e) {

                const rect =
                    card.getBoundingClientRect();


                const x =
                    e.clientX - rect.left;

                const y =
                    e.clientY - rect.top;


                const centerX =
                    rect.width / 2;

                const centerY =
                    rect.height / 2;


                const rotateX =
                    ((y - centerY) /
                    centerY) * -2.2;


                const rotateY =
                    ((x - centerX) /
                    centerX) * 2.2;


                card.style.transform =
                    `perspective(700px)
                     rotateX(${rotateX}deg)
                     rotateY(${rotateY}deg)
                     translateY(-4px)`;

            }
        );


        card.addEventListener(
            'mouseleave',
            function () {

                card.style.transform =
                    `perspective(700px)
                     rotateX(0deg)
                     rotateY(0deg)
                     translateY(0)`;

            }
        );

    });

</script>

</body>
</html>