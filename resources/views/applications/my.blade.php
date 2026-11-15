<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Applications | Skill Connect</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #070b1a;
            --card: rgba(15, 23, 42, 0.72);
            --border: rgba(255, 255, 255, 0.10);
            --text: #f8fafc;
            --muted: #94a3b8;
            --blue: #4f8cff;
            --purple: #8b5cf6;
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
                var(--bg);

            overflow-x: hidden;
        }

        .background {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(75px);
            opacity: 0.30;
            animation: float 10s ease-in-out infinite;
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

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(35px, -30px);
            }
        }

        .page {
            position: relative;
            z-index: 2;
            max-width: 1100px;
            margin: auto;
            padding: 35px 22px 60px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 15px 18px;
            margin-bottom: 40px;

            background: rgba(15, 23, 42, 0.58);
            border: 1px solid var(--border);
            border-radius: 18px;

            backdrop-filter: blur(18px);
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
            background: rgba(255, 255, 255, 0.07);
        }

        .header-card {
            padding: 30px;
            margin-bottom: 25px;

            background:
                linear-gradient(
                    145deg,
                    rgba(20, 29, 57, 0.90),
                    rgba(10, 16, 35, 0.78)
                );

            border: 1px solid var(--border);
            border-radius: 24px;

            backdrop-filter: blur(20px);

            box-shadow:
                0 25px 70px rgba(0, 0, 0, 0.35);
        }

        .tag {
            display: inline-block;

            padding: 7px 12px;
            margin-bottom: 14px;

            border-radius: 30px;

            color: #93c5fd;
            background: rgba(59, 130, 246, 0.10);

            border: 1px solid rgba(96, 165, 250, 0.18);

            font-size: 12px;
            font-weight: 700;

            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .header-card h1 {
            font-size: clamp(30px, 5vw, 42px);
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

        .header-card p {
            color: var(--muted);
            font-size: 14px;
        }

        .applications-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .application-card {
            padding: 24px;

            background:
                linear-gradient(
                    145deg,
                    rgba(20, 29, 57, 0.90),
                    rgba(10, 16, 35, 0.78)
                );

            border: 1px solid var(--border);
            border-radius: 22px;

            backdrop-filter: blur(18px);

            box-shadow:
                0 20px 55px rgba(0, 0, 0, 0.30);

            transition: 0.3s;
        }

        .application-card:hover {
            transform: translateY(-6px);

            border-color:
                rgba(96, 165, 250, 0.30);

            box-shadow:
                0 30px 70px rgba(0, 0, 0, 0.40);
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 18px;
        }

        .job-title {
            font-size: 20px;
            font-weight: 800;
        }

        .status {
            padding: 6px 11px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: 700;

            text-transform: uppercase;
        }

        .pending {
            color: #fbbf24;
            background: rgba(251, 191, 36, 0.10);
            border: 1px solid rgba(251, 191, 36, 0.20);
        }

        .approved {
            color: #86efac;
            background: rgba(34, 197, 94, 0.10);
            border: 1px solid rgba(34, 197, 94, 0.20);
        }

        .rejected {
            color: #fca5a5;
            background: rgba(239, 68, 68, 0.10);
            border: 1px solid rgba(239, 68, 68, 0.20);
        }

        .info {
            display: grid;
            gap: 9px;

            padding: 15px;
            margin-bottom: 18px;

            border-radius: 14px;

            background: rgba(59, 130, 246, 0.05);

            border:
                1px solid rgba(96, 165, 250, 0.10);
        }

        .info-item {
            color: #cbd5e1;
            font-size: 13px;
        }

        .cover-title {
            font-size: 13px;
            font-weight: 700;

            margin-bottom: 8px;
        }

        .cover-letter {
            color: #94a3b8;

            font-size: 13px;
            line-height: 1.7;

            padding: 14px;

            border-radius: 13px;

            background:
                rgba(255, 255, 255, 0.035);

            border:
                1px solid rgba(255, 255, 255, 0.06);

            margin-bottom: 18px;
        }

        .bottom {
            padding-top: 14px;

            border-top:
                1px solid rgba(255, 255, 255, 0.07);

            display: flex;
            justify-content: space-between;
        }

        .date {
            color: #64748b;
            font-size: 11px;
        }

        .location {
            color: #93c5fd;
            font-size: 11px;
            font-weight: 700;
        }

        .empty {
            grid-column: 1 / -1;

            text-align: center;

            padding: 55px 20px;

            background:
                rgba(15, 23, 42, 0.65);

            border:
                1px solid var(--border);

            border-radius: 22px;
        }

        .empty-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .empty h3 {
            font-size: 21px;
            margin-bottom: 8px;
        }

        .empty p {
            color: var(--muted);
            font-size: 14px;
        }

        .back {
            display: inline-flex;

            margin-top: 25px;
            padding: 12px 18px;

            border-radius: 12px;

            color: #cbd5e1;

            background:
                rgba(255, 255, 255, 0.06);

            border:
                1px solid rgba(255, 255, 255, 0.10);

            text-decoration: none;

            font-size: 13px;
            font-weight: 700;
        }

        .back:hover {
            color: white;
            background: rgba(255, 255, 255, 0.10);
        }

        @media (max-width: 750px) {

            .page {
                padding: 18px 14px 40px;
            }

            .nav-link {
                display: none;
            }

            .applications-grid {
                grid-template-columns: 1fr;
            }

            .header-card {
                padding: 23px;
            }
        }

        .accepted {
    color: #86efac;
    background: rgba(34, 197, 94, 0.10);
    border: 1px solid rgba(34, 197, 94, 0.20);
}
    </style>
</head>

<body>

<div class="background">
    <div class="orb one"></div>
    <div class="orb two"></div>
</div>

<div class="page">

    <!-- Navbar -->

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

            <a href="{{ route('jobs.index') }}"
               class="nav-link">
                Available Jobs
            </a>

            <a href="{{ route('jobs.my') }}"
               class="nav-link">
                My Jobs
            </a>

        </div>

    </nav>


    <!-- Header -->

    <div class="header-card">

        <div class="tag">
            Applications
        </div>

        <h1>
            My Applications
        </h1>

        <p>
            Track the jobs you have applied for.
        </p>

    </div>


    <!-- Applications -->

    <div class="applications-grid">

        @forelse($applications as $application)

            <div class="application-card">

                <div class="top">

                    <div class="job-title">
                        {{ $application->jobPost->title }}
                    </div>

                    <div class="status {{ strtolower($application->status) }}">
                        {{ $application->status }}
                    </div>

                </div>


                <div class="info">

                    <div class="info-item">
                        📍
                        {{ $application->jobPost->location }}
                    </div>

                    <div class="info-item">
                        💰
                        {{ $application->jobPost->salary }}
                    </div>

                    <div class="info-item">
                        📱
                        {{ $application->phone }}
                    </div>

                </div>


                <div class="cover-title">
                    📝 Cover Letter
                </div>

                <div class="cover-letter">

                    {{ $application->cover_letter ?: 'No cover letter provided.' }}

                </div>


                <div class="bottom">

                    <span class="date">

                        Applied
                        {{ $application->created_at->format('d M Y') }}

                    </span>

                    <span class="location">

                        Skill Connect

                    </span>

                </div>

            </div>

        @empty

            <div class="empty">

                <div class="empty-icon">
                    📭
                </div>

                <h3>
                    No Applications Yet
                </h3>

                <p>
                    You have not applied for any jobs yet.
                </p>

            </div>

        @endforelse

    </div>


    <a href="{{ route('jobs.index') }}" class="back">
        ← Browse Available Jobs
    </a>

</div>

</body>

</html>