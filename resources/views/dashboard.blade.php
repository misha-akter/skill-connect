<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Skill Connect - Dashboard</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            color: #e5edff;

            background:
                radial-gradient(circle at 5% 20%, rgba(37, 99, 235, 0.28), transparent 32%),
                radial-gradient(circle at 95% 25%, rgba(124, 58, 237, 0.20), transparent 30%),
                linear-gradient(135deg, #070b1a, #080d20 55%, #0b0b25);

            overflow-x: hidden;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 86%;
            max-width: 1360px;
            height: 68px;

            margin: 14px auto 0;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 18px;

            background: rgba(13, 20, 42, 0.72);

            border: 1px solid rgba(148, 163, 184, 0.16);

            border-radius: 17px;

            backdrop-filter: blur(14px);

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.25);

            animation: navDown 0.7s ease;
        }


        /* LOGO */

        .logo {
            display: flex;
            align-items: center;
            gap: 11px;

            font-size: 22px;
            font-weight: 700;

            color: #dbeafe;
        }


        .logo-icon {
            width: 38px;
            height: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 10px;

            background: linear-gradient(
                135deg,
                #2563eb,
                #4f46e5,
                #7c3aed
            );

            color: white;

            font-size: 15px;
            font-weight: 800;

            box-shadow:
                0 8px 25px rgba(59, 130, 246, 0.35);
        }


        .nav-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }


        .nav-link {
            color: #b7c2d9;
            text-decoration: none;

            padding: 10px 14px;

            font-size: 13px;
            font-weight: 600;

            transition: 0.3s;
        }


        .nav-link:hover {
            color: #ffffff;
        }


        .post-btn {
            text-decoration: none;

            color: white;

            padding: 11px 18px;

            border-radius: 10px;

            font-size: 13px;
            font-weight: 700;

            background: linear-gradient(
                135deg,
                #2563eb,
                #4f46e5
            );

            box-shadow:
                0 8px 22px rgba(37, 99, 235, 0.28);

            transition: 0.3s;
        }


        .post-btn:hover {
            transform: translateY(-2px);

            box-shadow:
                0 12px 30px rgba(59, 130, 246, 0.4);
        }


        .logout-btn {
            background: transparent;

            color: #fca5a5;

            border: 1px solid rgba(248, 113, 113, 0.4);

            padding: 10px 16px;

            border-radius: 9px;

            cursor: pointer;

            font-size: 13px;
            font-weight: 600;

            transition: 0.3s;
        }


        .logout-btn:hover {
            background: rgba(239, 68, 68, 0.12);

            border-color: #ef4444;

            transform: translateY(-2px);
        }


        /* =========================
           MAIN
        ========================= */

        .container {
            width: 86%;
            max-width: 1360px;

            margin: 48px auto 70px;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            position: relative;

            padding: 48px 0 45px;

            animation: fadeUp 0.8s ease;
        }


        .badge {
            display: inline-block;

            padding: 7px 12px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: 700;

            letter-spacing: 0.7px;

            color: #93c5fd;

            background: rgba(30, 64, 175, 0.20);

            border: 1px solid rgba(59, 130, 246, 0.35);

            margin-bottom: 15px;
        }


        .hero h1 {
            font-size: 44px;

            line-height: 1.15;

            margin-bottom: 14px;

            color: #f1f5ff;

            font-weight: 700;
        }


        .hero h1 span {
            background: linear-gradient(
                90deg,
                #60a5fa,
                #818cf8,
                #a78bfa
            );

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }


        .hero p {
            max-width: 720px;

            color: #94a3b8;

            font-size: 15px;

            line-height: 1.7;
        }


        /* =========================
           DASHBOARD GRID
        ========================= */

        .section-title {
            font-size: 22px;

            color: #e5edff;

            margin-bottom: 22px;

            animation: fadeUp 1s ease;
        }


        .cards {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 18px;
        }


        /* =========================
           CARD
        ========================= */

        .card {
            position: relative;

            padding: 28px;

            min-height: 280px;

            border-radius: 17px;

            background:
                linear-gradient(
                    145deg,
                    rgba(18, 29, 58, 0.95),
                    rgba(9, 16, 36, 0.95)
                );

            border: 1px solid rgba(96, 165, 250, 0.16);

            box-shadow:
                0 15px 35px rgba(0, 0, 0, 0.22);

            overflow: hidden;

            transition:
                transform 0.35s ease,
                border-color 0.35s ease,
                box-shadow 0.35s ease;

            animation: fadeUp 0.8s ease;
        }


        .card:nth-child(2) {
            animation-delay: 0.12s;
        }


        .card:nth-child(3) {
            animation-delay: 0.24s;
        }


        .card::before {
            content: "";

            position: absolute;

            width: 150px;
            height: 150px;

            right: -70px;
            top: -70px;

            background: rgba(59, 130, 246, 0.12);

            border-radius: 50%;

            filter: blur(20px);

            transition: 0.4s;
        }


        .card:hover {
            transform: translateY(-9px);

            border-color:
                rgba(96, 165, 250, 0.38);

            box-shadow:
                0 22px 50px rgba(0, 0, 0, 0.35),
                0 0 25px rgba(37, 99, 235, 0.10);
        }


        .card:hover::before {
            transform: scale(1.4);
        }


        /* =========================
           ICON
        ========================= */

        .icon {
            width: 58px;
            height: 58px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 14px;

            font-size: 27px;

            margin-bottom: 20px;

            background:
                linear-gradient(
                    135deg,
                    rgba(37, 99, 235, 0.20),
                    rgba(79, 70, 229, 0.15)
                );

            border:
                1px solid rgba(96, 165, 250, 0.20);

            transition: 0.35s;
        }


        .card:nth-child(2) .icon {
            background:
                linear-gradient(
                    135deg,
                    rgba(124, 58, 237, 0.22),
                    rgba(79, 70, 229, 0.14)
                );
        }


        .card:nth-child(3) .icon {
            background:
                linear-gradient(
                    135deg,
                    rgba(14, 165, 233, 0.20),
                    rgba(37, 99, 235, 0.13)
                );
        }


        .card:hover .icon {
            transform:
                scale(1.08)
                rotate(4deg);
        }


        /* =========================
           CARD TEXT
        ========================= */

        .card h3 {
            font-size: 19px;

            color: #edf2ff;

            margin-bottom: 11px;
        }


        .card p {
            color: #8d9bb4;

            font-size: 14px;

            line-height: 1.65;

            margin-bottom: 22px;
        }


        /* =========================
           BUTTON
        ========================= */

        .btn {
            display: inline-block;

            text-decoration: none;

            color: white;

            padding: 10px 18px;

            border-radius: 9px;

            font-size: 13px;

            font-weight: 600;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #4f46e5
                );

            box-shadow:
                0 7px 20px rgba(37, 99, 235, 0.22);

            transition: 0.3s;
        }


        .btn:hover {
            transform: translateY(-2px);

            box-shadow:
                0 10px 28px rgba(59, 130, 246, 0.35);
        }


        /* =========================
           ANIMATIONS
        ========================= */

        @keyframes fadeUp {

            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }


        @keyframes navDown {

            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .cards {
                grid-template-columns: 1fr;
            }

            .navbar {
                width: 94%;
            }

            .container {
                width: 94%;
            }

            .hero h1 {
                font-size: 35px;
            }

        }


        @media (max-width: 650px) {

            .nav-link {
                display: none;
            }

            .post-btn {
                display: none;
            }

            .hero {
                padding-top: 30px;
            }

            .hero h1 {
                font-size: 30px;
            }

            .hero p {
                font-size: 14px;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         NAVBAR
    ========================= -->

    <nav class="navbar">

        <div class="logo">

            <div class="logo-icon">
                SC
            </div>

            <span>
                Skill Connect
            </span>

        </div>


        <div class="nav-right">

            <a href="{{ route('jobs.index') }}"
               class="nav-link">
                Available Jobs
            </a>


            <a href="{{ route('jobs.my') }}"
               class="nav-link">
                My Jobs
            </a>

            <a href="{{ route('profile.edit') }}"
   class="nav-link">
    My Profile
</a>

            <a href="{{ route('jobs.create') }}"
               class="post-btn">
                + Post New Job
            </a>


            <form method="POST"
                  action="{{ route('logout') }}">

                @csrf

                <button type="submit"
                        class="logout-btn">
                    Logout
                </button>

            </form>

        </div>

    </nav>


    <!-- =========================
         MAIN CONTENT
    ========================= -->

    <main class="container">

@if (session('status') === 'profile-updated')
    <div style="
        margin-bottom: 20px;
        padding: 15px 20px;
        border: 1px solid rgba(34, 197, 94, 0.4);
        border-radius: 12px;
        background: rgba(34, 197, 94, 0.12);
        color: #86efac;
        font-size: 14px;
    ">
        ✓ Profile saved successfully!
    </div>
@endif

        <!-- HERO -->

        <section class="hero">

            <div class="badge">
                WELCOME TO SKILL CONNECT
            </div>


            <h1>
                Welcome back,
                <span>{{ Auth::user()->name }}</span> 👋
            </h1>


            <p>
                Discover opportunities, connect with talented people,
                and grow your career through Skill Connect.
            </p>

        </section>


        <!-- SECTION -->

        <h2 class="section-title">
            What would you like to do?
        </h2>


        <!-- CARDS -->

        <div class="cards">


            <!-- Browse Jobs -->

            <div class="card">

                <div class="icon">
                    💼
                </div>


                <h3>
                    Browse Jobs
                </h3>


                <p>
                    Explore available jobs and discover opportunities
                    that match your skills and interests.
                </p>


                <a href="{{ route('jobs.index') }}"
                   class="btn">
                    Find Jobs →
                </a>

            </div>


            <!-- Post Job -->

            <div class="card">

                <div class="icon">
                    ➕
                </div>


                <h3>
                    Post a Job
                </h3>


                <p>
                    Have a project? Post a new job and connect with
                    skilled people who can help you.
                </p>


                <a href="{{ route('jobs.create') }}"
                   class="btn">
                    Post Job →
                </a>

            </div>


            <!-- My Jobs -->

            <div class="card">

                <div class="icon">
                    📋
                </div>


                <h3>
                    My Jobs
                </h3>


                <p>
                    View and manage all the jobs you have posted
                    on Skill Connect.
                </p>


                <a href="{{ route('jobs.my') }}"
                   class="btn">
                    My Jobs →
                </a>

            </div>


        </div>

    </main>


</body>

</html>