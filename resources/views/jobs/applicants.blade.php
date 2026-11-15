<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Applicants | Skill Connect</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #070b1a;
            --card: rgba(15, 23, 42, 0.82);
            --card2: rgba(20, 29, 57, 0.90);
            --border: rgba(255, 255, 255, 0.10);
            --text: #f8fafc;
            --muted: #94a3b8;
            --blue: #4f8cff;
            --green: #22c55e;
            --red: #ef4444;
            --purple: #8b5cf6;
        }

        body {
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
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
            filter: blur(80px);
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

        .orb.three {
            width: 200px;
            height: 200px;
            background: #0891b2;
            bottom: -80px;
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

        .page {
            position: relative;
            z-index: 2;
            max-width: 1050px;
            margin: auto;
            padding: 30px 22px 60px;
        }

        /* Navbar */

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 15px 18px;
            margin-bottom: 38px;

            background: rgba(15, 23, 42, 0.58);

            border: 1px solid var(--border);
            border-radius: 18px;

            backdrop-filter: blur(18px);

            box-shadow:
                0 20px 60px rgba(0, 0, 0, 0.28),
                inset 0 1px rgba(255, 255, 255, 0.05);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;

            color: white;
            text-decoration: none;

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
                0 0 25px rgba(79, 140, 255, 0.35);
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

        /* Header */

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

            background:
                rgba(59, 130, 246, 0.10);

            border:
                1px solid rgba(96, 165, 250, 0.18);

            font-size: 12px;
            font-weight: 700;

            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .header-card h1 {
            font-size: clamp(28px, 5vw, 42px);

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

        /* Success */

        .success {
            padding: 14px 17px;
            margin-bottom: 20px;

            border-radius: 13px;

            color: #86efac;

            background:
                rgba(34, 197, 94, 0.10);

            border:
                1px solid rgba(34, 197, 94, 0.25);

            font-size: 14px;
        }

        /* Error */

        .error {
            padding: 14px 17px;
            margin-bottom: 20px;

            border-radius: 13px;

            color: #fca5a5;

            background:
                rgba(239, 68, 68, 0.10);

            border:
                1px solid rgba(239, 68, 68, 0.25);

            font-size: 14px;
        }

        /* Application Card */

        .application-card {
            position: relative;

            padding: 25px;
            margin-bottom: 20px;

            background:
                linear-gradient(
                    145deg,
                    rgba(20, 29, 57, 0.90),
                    rgba(10, 16, 35, 0.80)
                );

            border:
                1px solid var(--border);

            border-radius: 20px;

            backdrop-filter: blur(18px);

            box-shadow:
                0 20px 55px rgba(0, 0, 0, 0.30);

            transition: 0.3s;
        }

        .application-card:hover {
            transform: translateY(-3px);

            border-color:
                rgba(96, 165, 250, 0.30);
        }

        .app-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;

            gap: 15px;

            margin-bottom: 20px;
        }

        .applicant-name {
            font-size: 20px;
            font-weight: 700;

            color: #f8fafc;

            margin-bottom: 5px;
        }

        .applicant-email {
            color: #94a3b8;
            font-size: 13px;
        }

        /* Status */

        .status {
            padding: 7px 13px;

            border-radius: 30px;

            font-size: 11px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: 0.7px;
        }

        .status.pending {
            color: #fbbf24;

            background:
                rgba(245, 158, 11, 0.10);

            border:
                1px solid rgba(245, 158, 11, 0.25);
        }

        .status.accepted {
            color: #86efac;

            background:
                rgba(34, 197, 94, 0.10);

            border:
                1px solid rgba(34, 197, 94, 0.25);
        }

        .status.rejected {
            color: #fca5a5;

            background:
                rgba(239, 68, 68, 0.10);

            border:
                1px solid rgba(239, 68, 68, 0.25);
        }

        /* Info */

        .info-grid {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 14px;

            margin-bottom: 20px;
        }

        .info-box {
            padding: 15px;

            border-radius: 14px;

            background:
                rgba(59, 130, 246, 0.06);

            border:
                1px solid rgba(96, 165, 250, 0.13);
        }

        .info-label {
            color: #64748b;

            font-size: 11px;

            margin-bottom: 5px;
        }

        .info-value {
            color: #e2e8f0;

            font-size: 14px;

            font-weight: 600;

            word-break: break-word;
        }

        /* Cover Letter */

        .cover-title {
            color: #e2e8f0;

            font-size: 13px;
            font-weight: 700;

            margin-bottom: 9px;
        }

        .cover-letter {
            padding: 16px;

            margin-bottom: 20px;

            border-radius: 14px;

            color: #94a3b8;

            background:
                rgba(255, 255, 255, 0.035);

            border:
                1px solid rgba(255, 255, 255, 0.07);

            font-size: 14px;

            line-height: 1.7;

            white-space: pre-line;
        }

        /* Buttons */

        .actions {
            display: flex;
            gap: 10px;

            padding-top: 5px;

            border-top:
                1px solid rgba(255, 255, 255, 0.07);

            padding-top: 18px;
        }

        .btn {
            display: inline-flex;

            justify-content: center;
            align-items: center;

            gap: 7px;

            padding: 11px 18px;

            border-radius: 11px;

            border: none;

            text-decoration: none;

            font-size: 13px;
            font-weight: 700;

            cursor: pointer;

            transition: 0.3s;
        }

        .btn-accept {
            color: white;

            background:
                linear-gradient(
                    135deg,
                    #16a34a,
                    #22c55e
                );

            box-shadow:
                0 7px 20px rgba(34, 197, 94, 0.20);
        }

        .btn-accept:hover {
            transform: translateY(-2px);

            box-shadow:
                0 12px 28px rgba(34, 197, 94, 0.30);
        }

        .btn-reject {
            color: white;

            background:
                linear-gradient(
                    135deg,
                    #dc2626,
                    #ef4444
                );

            box-shadow:
                0 7px 20px rgba(239, 68, 68, 0.18);
        }

        .btn-reject:hover {
            transform: translateY(-2px);

            box-shadow:
                0 12px 28px rgba(239, 68, 68, 0.28);
        }

        .btn-back {
            color: #cbd5e1;

            background:
                rgba(255, 255, 255, 0.06);

            border:
                1px solid rgba(255, 255, 255, 0.10);
        }

        .btn-back:hover {
            color: white;

            background:
                rgba(255, 255, 255, 0.10);

            transform: translateY(-2px);
        }

        /* Empty */

        .empty {
            text-align: center;

            padding: 55px 25px;

            background:
                rgba(15, 23, 42, 0.70);

            border:
                1px solid var(--border);

            border-radius: 20px;
        }

        .empty-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .empty h2 {
            margin-bottom: 8px;
            font-size: 20px;
        }

        .empty p {
            color: var(--muted);
            font-size: 14px;
        }

        @media (max-width: 650px) {

            .page {
                padding: 18px 14px 40px;
            }

            .navbar {
                margin-bottom: 28px;
            }

            .nav-link {
                display: none;
            }

            .brand {
                font-size: 18px;
            }

            .header-card {
                padding: 22px;
            }

            .application-card {
                padding: 20px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .app-top {
                flex-direction: column;
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

    <div class="background">
        <div class="orb one"></div>
        <div class="orb two"></div>
        <div class="orb three"></div>
    </div>

    <div class="page">

        {{-- Navbar --}}
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

            </div>

        </nav>


        {{-- Success Message --}}
        @if(session('success'))

            <div class="success">
                ✓ {{ session('success') }}
            </div>

        @endif


        {{-- Error Message --}}
        @if(session('error'))

            <div class="error">
                ⚠ {{ session('error') }}
            </div>

        @endif


        {{-- Header --}}
        <div class="header-card">

            <div class="tag">
                Applications
            </div>

            <h1>
                Applicants
            </h1>

            <p>
                Review and manage applications received for
                <strong>{{ $job->title }}</strong>.
            </p>

        </div>


        {{-- Applications --}}
        @if($applications->count() > 0)

            @foreach($applications as $application)

                <div class="application-card">

                    <div class="app-top">

                        <div>

                            <div class="applicant-name">
                                {{ $application->user->name ?? 'Unknown User' }}
                            </div>

                            <div class="applicant-email">
                                {{ $application->user->email ?? 'No email available' }}
                            </div>

                        </div>


                        {{-- Status --}}
                        <div>

                            @if($application->status === 'accepted')

                                <span class="status accepted">
                                    Accepted
                                </span>

                            @elseif($application->status === 'rejected')

                                <span class="status rejected">
                                    Rejected
                                </span>

                            @else

                                <span class="status pending">
                                    Pending
                                </span>

                            @endif

                        </div>

                    </div>


                    {{-- Applicant Information --}}
                    <div class="info-grid">

                        <div class="info-box">

                            <div class="info-label">
                                📱 Phone
                            </div>

                            <div class="info-value">
                                {{ $application->phone }}
                            </div>

                        </div>


                        <div class="info-box">

                            <div class="info-label">
                                📅 Applied
                            </div>

                            <div class="info-value">
                                {{ $application->created_at->format('d M Y') }}
                            </div>

                        </div>

                    </div>


                    {{-- Cover Letter --}}
                    <div class="cover-title">
                        📝 Cover Letter
                    </div>

                    <div class="cover-letter">
                        {{ $application->cover_letter }}
                    </div>


                    {{-- Accept / Reject --}}
                    @if($application->status === 'pending')

                        <div class="actions">

                            {{-- Accept --}}
                            <form
                                method="POST"
                                action="{{ route('applications.accept', $application->id) }}"
                            >

                                @csrf
                                @method('PATCH')

                                <button
                                    type="submit"
                                    class="btn btn-accept"
                                >
                                    ✓ Accept Application
                                </button>

                            </form>


                            {{-- Reject --}}
                            <form
                                method="POST"
                                action="{{ route('applications.reject', $application->id) }}"
                            >

                                @csrf
                                @method('PATCH')

                                <button
                                    type="submit"
                                    class="btn btn-reject"
                                >
                                    ✕ Reject Application
                                </button>

                            </form>

                        </div>

                    @else

                        <div class="actions">

                            @if($application->status === 'accepted')

                                <span class="status accepted">
                                    ✓ This application has been accepted
                                </span>

                            @else

                                <span class="status rejected">
                                    ✕ This application has been rejected
                                </span>

                            @endif

                        </div>

                    @endif

                </div>

            @endforeach

        @else

            <div class="empty">

                <div class="empty-icon">
                    📭
                </div>

                <h2>
                    No Applications Yet
                </h2>

                <p>
                    No one has applied for this job yet.
                </p>

            </div>

        @endif


        {{-- Back --}}
        <div style="margin-top: 25px;">

            <a
                href="{{ route('jobs.my') }}"
                class="btn btn-back"
            >
                ← Back to My Jobs
            </a>

        </div>

    </div>

</body>

</html>