<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Jobs | Skill Connect</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #070b1a;
            --border: rgba(255, 255, 255, 0.10);
            --text: #f8fafc;
            --muted: #94a3b8;
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
           BACKGROUND
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
           PAGE
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

        /* =========================
           HEADING
        ========================= */

        .heading {
            margin-bottom: 28px;

            animation:
                appear 0.7s ease both;
        }

        .tag {
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
           SUCCESS
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
           NUMBER
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
           INFO
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
           POSTED
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
                1fr 1.15fr;

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

        /* VIEW */

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

        /* APPLICANTS */

        .applicants {
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

        .applicants:hover {
            transform: translateY(-2px);

            box-shadow:
                0 10px 25px rgba(37, 99, 235, 0.35);
        }

        /* =========================
           EMPTY
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
           ANIMATION
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
                    1fr 1.15fr;
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
     PAGE
========================= -->

<div class="page">

    <!-- NAVBAR -->

    <nav class="navbar">

        <a
            href="{{ route('jobs.index') }}"
            class="brand"
        >

            <div class="brand-icon">
                SC
            </div>

            <span>
                Skill Connect
            </span>

        </a>


        <div class="nav-right">

            <a
                href="{{ route('jobs.index') }}"
                class="nav-link"
            >
                Available Jobs
            </a>


            <a
                href="{{ route('jobs.my') }}"
                class="nav-link"
            >
                My Jobs
            </a>


            <a
                href="{{ route('jobs.create') }}"
                class="post-btn"
            >
                + Post New Job
            </a>

        </div>

    </nav>


    <!-- HEADING -->

    <section class="heading">

        <div class="tag">
            Employer Dashboard
        </div>


        <h1>
            My Jobs
        </h1>


        <p>
            Manage your posted jobs, explore job details,
            and review applications from talented candidates.
        </p>

    </section>


    <!-- SUCCESS -->

    @if(session('success'))

        <div class="success">

            ✓ {{ session('success') }}

        </div>

    @endif


    <!-- JOBS -->

    @if($jobs->count() > 0)

        <div class="jobs">

            @foreach($jobs as $index => $job)

                <div class="job-card">

                    <!-- NUMBER -->

                    <div class="job-number">

                        #{{ str_pad(
                            $index + 1,
                            2,
                            '0',
                            STR_PAD_LEFT
                        ) }}

                    </div>


                    <!-- TITLE -->

                    <h2>
                        {{ $job->title }}
                    </h2>


                    <!-- LOCATION -->

                    <div class="job-info">

                        <span>📍</span>

                        <strong>
                            Location:
                        </strong>

                        <span>
                            {{ $job->location }}
                        </span>

                    </div>


                    <!-- SALARY -->

                    <div class="job-info">

                        <span>💰</span>

                        <strong>
                            Salary:
                        </strong>

                        <span>
                            {{ $job->salary }}
                        </span>

                    </div>


                    <!-- DESCRIPTION -->

                    <div class="description">

                        {{ Str::limit(
                            $job->description,
                            100
                        ) }}

                    </div>


                    <!-- POSTED -->

                    <div class="posted">

                        <span>🕒</span>

                        Posted
                        {{ $job->created_at->format('d M Y') }}

                    </div>


                    <!-- ACTIONS -->

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
                                'jobs.applicants',
                                $job->id
                            ) }}"
                            class="btn applicants"
                        >
                            👥 Applicants
                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <!-- EMPTY -->

        <div class="empty">

            <div class="empty-icon">
                💼
            </div>


            <h2>
                No Jobs Posted Yet
            </h2>


            <p>
                Start connecting with talented people
                by posting your first job.
            </p>


            <a
                href="{{ route('jobs.create') }}"
                class="post-btn"
            >
                + Post Your First Job
            </a>

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
        document.getElementById(
            'mouseGlow'
        );


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