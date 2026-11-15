<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $job->title }} | Skill Connect</title>

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
            --blue: #4f8cff;
            --purple: #8b5cf6;
            --cyan: #22d3ee;
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
           Animated Background
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

            filter: blur(75px);

            opacity: 0.35;

            animation:
                float 10s ease-in-out infinite;
        }

        .orb.one {
            width: 280px;
            height: 280px;

            background: #2563eb;

            top: 5%;
            left: -100px;
        }

        .orb.two {
            width: 240px;
            height: 240px;

            background: #7c3aed;

            right: -80px;
            top: 40%;

            animation-delay: -3s;
        }

        .orb.three {
            width: 200px;
            height: 200px;

            background: #0891b2;

            bottom: -80px;
            left: 45%;

            animation-delay: -6s;
        }

        @keyframes float {

            0%,
            100% {
                transform:
                    translate(0, 0)
                    scale(1);
            }

            50% {
                transform:
                    translate(35px, -30px)
                    scale(1.12);
            }
        }


        /* =========================
           Mouse Glow
        ========================= */

        .mouse-glow {
            position: fixed;

            width: 300px;
            height: 300px;

            border-radius: 50%;

            pointer-events: none;

            background:
                radial-gradient(
                    circle,
                    rgba(79, 140, 255, 0.13),
                    transparent 65%
                );

            transform:
                translate(-50%, -50%);

            z-index: 1;
        }


        /* =========================
           Page
        ========================= */

        .page {
            position: relative;

            z-index: 2;

            max-width: 1000px;

            margin: auto;

            padding:
                35px 22px 60px;
        }


        /* =========================
           Navbar
        ========================= */

        .navbar {
            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 15px 18px;

            margin-bottom: 40px;

            background:
                rgba(15, 23, 42, 0.58);

            border:
                1px solid var(--border);

            border-radius: 18px;

            backdrop-filter:
                blur(18px);

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

            border-radius: 11px;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #7c3aed
                );

            box-shadow:
                0 0 25px
                rgba(79, 140, 255, 0.35);
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

            gap: 10px;
        }

        .nav-link {
            color: #cbd5e1;

            text-decoration: none;

            padding: 9px 14px;

            border-radius: 10px;

            transition: 0.3s;
        }

        .nav-link:hover {
            color: white;

            background:
                rgba(255, 255, 255, 0.07);
        }


        /* =========================
           Main Card
        ========================= */

        .job-card {
            position: relative;

            overflow: hidden;

            padding: 32px;

            background:
                linear-gradient(
                    145deg,
                    rgba(20, 29, 57, 0.90),
                    rgba(10, 16, 35, 0.78)
                );

            border:
                1px solid var(--border);

            border-radius: 25px;

            backdrop-filter:
                blur(20px);

            box-shadow:
                0 25px 70px rgba(0, 0, 0, 0.35),
                inset 0 1px
                rgba(255, 255, 255, 0.04);

            animation:
                appear 0.8s ease both;

            animation-delay: 0.1s;

            transition:
                transform 0.25s ease,
                border-color 0.3s ease,
                box-shadow 0.3s ease;
        }

        .job-card::before {
            content: "";

            position: absolute;

            width: 280px;
            height: 280px;

            top: -150px;
            right: -110px;

            background:
                radial-gradient(
                    circle,
                    rgba(79, 140, 255, 0.20),
                    transparent 68%
                );

            pointer-events: none;
        }

        .job-card:hover {
            border-color:
                rgba(96, 165, 250, 0.30);

            box-shadow:
                0 30px 80px
                rgba(0, 0, 0, 0.42),
                0 0 35px
                rgba(79, 140, 255, 0.07);
        }


        /* =========================
           Top
        ========================= */

        .top {
            position: relative;

            z-index: 2;

            margin-bottom: 25px;
        }

        .tag {
            display: inline-block;

            padding: 7px 12px;

            margin-bottom: 14px;

            border-radius: 30px;

            color: #93c5fd;

            background:
                rgba(59, 130, 246, 0.10);

            border:
                1px solid
                rgba(96, 165, 250, 0.18);

            font-size: 12px;

            font-weight: 700;

            letter-spacing: 1px;

            text-transform: uppercase;
        }

        .top h1 {
            font-size:
                clamp(30px, 5vw, 46px);

            line-height: 1.15;

            margin-bottom: 12px;

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

        .posted {
            color: #64748b;

            font-size: 13px;
        }


        /* =========================
           Information Grid
        ========================= */

        .info-grid {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 15px;

            margin-bottom: 28px;
        }

        .info-box {
            padding: 18px;

            border-radius: 16px;

            background:
                rgba(59, 130, 246, 0.06);

            border:
                1px solid
                rgba(96, 165, 250, 0.13);

            transition: 0.3s;
        }

        .info-box:hover {
            transform:
                translateY(-3px);

            background:
                rgba(59, 130, 246, 0.09);

            border-color:
                rgba(96, 165, 250, 0.25);
        }

        .info-icon {
            font-size: 20px;

            margin-bottom: 9px;
        }

        .info-label {
            color: #64748b;

            font-size: 12px;

            margin-bottom: 5px;
        }

        .info-value {
            color: #e2e8f0;

            font-size: 14px;

            font-weight: 700;
        }


        /* =========================
           Description
        ========================= */

        .description-section {
            padding-top: 25px;

            border-top:
                1px solid
                rgba(255, 255, 255, 0.08);

            margin-bottom: 30px;
        }

        .description-section h2 {
            font-size: 20px;

            margin-bottom: 14px;

            color: #f8fafc;
        }

        .description {
            color: #94a3b8;

            font-size: 14px;

            line-height: 1.8;

            white-space: pre-line;
        }


        /* =========================
           Buttons
        ========================= */

        .actions {
            display: flex;

            gap: 12px;

            padding-top: 5px;
        }

        .btn {
            display: inline-flex;

            justify-content: center;

            align-items: center;

            gap: 8px;

            padding: 13px 22px;

            border-radius: 12px;

            text-decoration: none;

            font-size: 14px;

            font-weight: 700;

            transition: 0.3s;
        }

        .btn-back {
            color: #cbd5e1;

            background:
                rgba(255, 255, 255, 0.06);

            border:
                1px solid
                rgba(255, 255, 255, 0.10);
        }

        .btn-back:hover {
            color: white;

            background:
                rgba(255, 255, 255, 0.10);

            transform:
                translateY(-2px);
        }

        .btn-apply {
            color: white;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #4f46e5
                );

            box-shadow:
                0 8px 25px
                rgba(37, 99, 235, 0.25);
        }

        .btn-apply:hover {
            transform:
                translateY(-3px);

            box-shadow:
                0 14px 35px
                rgba(37, 99, 235, 0.40);
        }


        /* =========================
           Success Message
        ========================= */

        .success {
            position: relative;

            z-index: 5;

            padding: 14px 17px;

            margin-bottom: 20px;

            border-radius: 13px;

            color: #86efac;

            background:
                rgba(34, 197, 94, 0.10);

            border:
                1px solid
                rgba(34, 197, 94, 0.25);

            font-size: 14px;

            animation:
                appear 0.5s ease both;
        }


        /* =========================
           Animation
        ========================= */

        @keyframes appear {

            from {
                opacity: 0;

                transform:
                    translateY(20px);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0);
            }
        }


        /* =========================
           Responsive
        ========================= */

        @media (max-width: 650px) {

            .page {
                padding:
                    18px 14px 40px;
            }

            .navbar {
                margin-bottom: 30px;
            }

            .nav-link {
                display: none;
            }

            .brand {
                font-size: 18px;
            }

            .job-card {
                padding: 21px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>


<body>


    <!-- Background -->

    <div class="background">

        <div class="orb one"></div>

        <div class="orb two"></div>

        <div class="orb three"></div>

    </div>


    <!-- Mouse Glow -->

    <div
        class="mouse-glow"
        id="mouseGlow">
    </div>



    <div class="page">


        <!-- Navbar -->

        <nav class="navbar">

            <a
                href="{{ route('jobs.index') }}"
                class="brand">

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
                    class="nav-link">

                    Available Jobs

                </a>


                @auth

                    <a
                        href="{{ route('jobs.my') }}"
                        class="nav-link">

                        My Jobs

                    </a>

                @endauth

            </div>

        </nav>



        <!-- Success -->

        @if(session('success'))

            <div class="success">

                ✓ {{ session('success') }}

            </div>

        @endif



        <!-- Job Card -->

        <div class="job-card">


            <div class="top">

                <div class="tag">
                    Job Details
                </div>


                <h1>
                    {{ $job->title }}
                </h1>


                <div class="posted">

                    Posted
                    {{ $job->created_at->format('d M Y') }}

                </div>

            </div>



            <!-- Job Info -->

            <div class="info-grid">


                <div class="info-box">

                    <div class="info-icon">
                        📍
                    </div>

                    <div class="info-label">
                        Location
                    </div>

                    <div class="info-value">
                        {{ $job->location }}
                    </div>

                </div>



                <div class="info-box">

                    <div class="info-icon">
                        💰
                    </div>

                    <div class="info-label">
                        Salary
                    </div>

                    <div class="info-value">
                        {{ $job->salary }}
                    </div>

                </div>


            </div>



            <!-- Description -->

            <div class="description-section">

                <h2>
                    About This Job
                </h2>

                <div class="description">
                    {{ $job->description }}
                </div>

            </div>



            <!-- Actions -->

            <div class="actions">


                <a
                    href="{{ route('jobs.index') }}"
                    class="btn btn-back">

                    ← Back to Jobs

                </a>


                @auth

                    @if(auth()->id() !== $job->user_id)

                        <a
                            href="{{ route('jobs.apply', $job->id) }}"
                            class="btn btn-apply">

                            🚀 Apply Now

                        </a>

                    @else

                        <a
                            href="{{ route('jobs.my') }}"
                            class="btn btn-apply">

                            📋 Manage My Job

                        </a>

                    @endif

                @else

                    <a
                        href="{{ route('login') }}"
                        class="btn btn-apply">

                        🔐 Login to Apply

                    </a>

                @endauth


            </div>

        </div>

    </div>



    <script>

        /* =========================
           Mouse Follow Glow
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
           Subtle 3D Effect
        ========================= */

        const card =
            document.querySelector('.job-card');


        card.addEventListener(
            'mousemove',
            function (e) {

                const rect =
                    card.getBoundingClientRect();


                const x =
                    e.clientX - rect.left;

                const y = e.clientY - rect.top;


                const centerX =
                    rect.width / 2;

                const centerY =
                    rect.height / 2;


                const rotateX =
                    ((y - centerY) / centerY)
                    * -1.5;


                const rotateY =
                    ((x - centerX) / centerX)
                    * 1.5;


                card.style.transform =
                    `perspective(1000px)
                     rotateX(${rotateX}deg)
                     rotateY(${rotateY}deg)
                     translateY(-3px)`;

            }
        );


        card.addEventListener(
            'mouseleave',
            function () {

                card.style.transform =
    `perspective(1000px)
     rotateX(0deg)
     rotateY(0deg)
     translateY(0)`;

            }
        );

    </script>

</body>

</html>