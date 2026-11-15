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
        --card: rgba(15, 23, 42, 0.72);
        --border: rgba(255, 255, 255, 0.10);
        --text: #f8fafc;
        --muted: #94a3b8;
        --blue: #4f8cff;
        --purple: #8b5cf6;
        --cyan: #22d3ee;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        min-height: 100vh;
        color: var(--text);
        background:
            radial-gradient(circle at 15% 15%, rgba(79, 140, 255, 0.18), transparent 30%),
            radial-gradient(circle at 85% 20%, rgba(139, 92, 246, 0.16), transparent 28%),
            radial-gradient(circle at 50% 90%, rgba(34, 211, 238, 0.10), transparent 30%),
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
        filter: blur(75px);
        opacity: 0.35;
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
        box-shadow:
            0 20px 60px rgba(0, 0, 0, 0.28),
            inset 0 1px rgba(255, 255, 255, 0.05);
        animation: appear 0.7s ease both;
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
        background: linear-gradient(135deg, #2563eb, #7c3aed);
        box-shadow: 0 0 25px rgba(79, 140, 255, 0.35);
    }

    .brand span {
        background: linear-gradient(90deg, #ffffff, #93c5fd, #c4b5fd);
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
        box-shadow: 0 25px 70px rgba(0, 0, 0, 0.35);
        animation: appear 0.8s ease both;
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
        background: linear-gradient(90deg, #ffffff, #93c5fd, #c4b5fd);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .header-card p {
        color: var(--muted);
        font-size: 14px;
    }

    .jobs-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .job-card {
        position: relative;
        overflow: hidden;
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
        box-shadow: 0 20px 55px rgba(0, 0, 0, 0.30);
        transition: 0.3s ease;
        animation: appear 0.7s ease both;
    }

    .job-card:hover {
        transform: translateY(-7px);
        border-color: rgba(96, 165, 250, 0.30);
        box-shadow:
            0 30px 70px rgba(0, 0, 0, 0.40),
            0 0 30px rgba(79, 140, 255, 0.07);
    }

    .job-card::before {
        content: "";
        position: absolute;
        width: 200px;
        height: 200px;
        top: -100px;
        right: -80px;
        background:
            radial-gradient(
                circle,
                rgba(79, 140, 255, 0.18),
                transparent 70%
            );
    }

    .job-top {
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 18px;
    }

    .job-title {
        font-size: 20px;
        margin-bottom: 7px;
    }

    .job-id {
        color: #64748b;
        font-size: 11px;
    }

    .application-count {
        padding: 7px 11px;
        border-radius: 20px;
        color: #93c5fd;
        background: rgba(59, 130, 246, 0.10);
        border: 1px solid rgba(96, 165, 250, 0.18);
        font-size: 11px;
        font-weight: 700;
        white-space: nowrap;
    }

    .description {
        position: relative;
        color: #94a3b8;
        font-size: 13px;
        line-height: 1.7;
        margin-bottom: 18px;
    }

    .details {
        position: relative;
        display: grid;
        gap: 9px;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 14px;
        background: rgba(59, 130, 246, 0.05);
        border: 1px solid rgba(96, 165, 250, 0.10);
    }

    .detail-item {
        display: flex;
        gap: 9px;
        color: #cbd5e1;
        font-size: 13px;
    }

    .actions {
        position: relative;
        display: flex;
        gap: 10px;
        padding-top: 15px;
        border-top: 1px solid rgba(255, 255, 255, 0.07);
    }

    .btn {
        flex: 1;
        text-align: center;
        text-decoration: none;
        padding: 11px 14px;
        border-radius: 11px;
        font-size: 12px;
        font-weight: 700;
        transition: 0.3s;
    }

    .btn-applicants {
        color: white;
        background: linear-gradient(135deg, #2563eb, #7c3aed);
        box-shadow: 0 8px 25px rgba(79, 140, 255, 0.18);
    }

    .btn-applicants:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(79, 140, 255, 0.28);
    }

    .btn-view {
        color: #cbd5e1;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.10);
    }

    .btn-view:hover {
        color: white;
        background: rgba(255, 255, 255, 0.10);
    }

    .empty {
        grid-column: 1 / -1;
        text-align: center;
        padding: 60px 20px;
        background: rgba(15, 23, 42, 0.65);
        border: 1px solid var(--border);
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

    .create-btn {
        display: inline-flex;
        margin-top: 20px;
        padding: 12px 18px;
        border-radius: 12px;
        color: white;
        background: linear-gradient(135deg, #2563eb, #7c3aed);
        text-decoration: none;
        font-size: 13px;
        font-weight: 700;
    }

    @keyframes appear {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 750px) {
        .page {
            padding: 18px 14px 40px;
        }

        .navbar {
            margin-bottom: 25px;
        }

        .nav-link {
            display: none;
        }

        .jobs-grid {
            grid-template-columns: 1fr;
        }

        .header-card {
            padding: 23px;
        }

        .actions {
            flex-direction: column;
        }
    }
</style>
```

</head>

<body>

```
<div class="background">
    <div class="orb one"></div>
    <div class="orb two"></div>
    <div class="orb three"></div>
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

            <a href="{{ route('jobs.index') }}" class="nav-link">
                Available Jobs
            </a>

            <a href="{{ route('jobs.create') }}" class="nav-link">
                Post a Job
            </a>

        </div>

    </nav>


    <!-- Header -->
    <div class="header-card">

        <div class="tag">
            Employer Dashboard
        </div>

        <h1>
            My Jobs
        </h1>

        <p>
            Manage your posted jobs and review applicants.
        </p>

    </div>


    <!-- Jobs -->
    <div class="jobs-grid">

        @forelse($jobs as $job)

            @php
                $jobApplications = $applications->where('job_post_id', $job->id);
            @endphp

            <div class="job-card">

                <div class="job-top">

                    <div>

                        <h3 class="job-title">
                            {{ $job->title }}
                        </h3>

                        <div class="job-id">
                            Job ID #{{ $job->id }}
                        </div>

                    </div>

                    <div class="application-count">
                        {{ $jobApplications->count() }}
                        {{ $jobApplications->count() == 1 ? 'Applicant' : 'Applicants' }}
                    </div>

                </div>


                <div class="description">
                    {{ \Illuminate\Support\Str::limit($job->description, 140) }}
                </div>


                <div class="details">

                    <div class="detail-item">
                        📍 {{ $job->location }}
                    </div>

                    <div class="detail-item">
                        💰 {{ $job->salary }}
                    </div>

                    <div class="detail-item">
                        📅 Posted {{ $job->created_at->format('d M Y') }}
                    </div>

                </div>


                <div class="actions">

                    <a
                        href="{{ route('jobs.applicants', $job->id) }}"
                        class="btn btn-applicants">

                        View Applicants

                    </a>

                    <a
                        href="{{ route('jobs.show', $job->id) }}"
                        class="btn btn-view">

                        View Job

                    </a>

                </div>

            </div>

        @empty

            <div class="empty">

                <div class="empty-icon">
                    📭
                </div>

                <h3>
                    No Jobs Posted Yet
                </h3>

                <p>
                    You haven't posted any jobs yet.
                </p>

                <a
                    href="{{ route('jobs.create') }}"
                    class="create-btn">

                    Post Your First Job

                </a>

            </div>

        @endforelse

    </div>

</div>

</body>

</html>
