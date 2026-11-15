<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Apply for {{ $jobPost->title }} | Skill Connect</title>

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
        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(35px, -30px) scale(1.12);
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

        transform: translate(-50%, -50%);
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
        padding: 35px 22px 60px;
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
        background: rgba(255, 255, 255, 0.07);
    }

    /* =========================
       Alert Messages
    ========================= */

    .alert {
        padding: 14px 17px;
        margin-bottom: 20px;

        border-radius: 13px;

        font-size: 14px;

        animation: appear 0.5s ease both;
    }

    .success {
        color: #86efac;
        background: rgba(34, 197, 94, 0.10);
        border: 1px solid rgba(34, 197, 94, 0.25);
    }

    .error {
        color: #fca5a5;
        background: rgba(239, 68, 68, 0.10);
        border: 1px solid rgba(239, 68, 68, 0.25);
    }

    .error ul {
        margin-left: 18px;
    }

    /* =========================
       Main Grid
    ========================= */

    .content-grid {
        display: grid;
        grid-template-columns: 0.85fr 1.15fr;
        gap: 20px;
        align-items: start;
    }

    /* =========================
       Cards
    ========================= */

    .card {
        position: relative;
        overflow: hidden;

        padding: 30px;

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
            0 25px 70px rgba(0, 0, 0, 0.35),
            inset 0 1px rgba(255, 255, 255, 0.04);

        animation: appear 0.8s ease both;

        transition:
            transform 0.3s ease,
            border-color 0.3s ease,
            box-shadow 0.3s ease;
    }

    .card::before {
        content: "";

        position: absolute;

        width: 250px;
        height: 250px;

        top: -140px;
        right: -100px;

        background:
            radial-gradient(
                circle,
                rgba(79, 140, 255, 0.20),
                transparent 68%
            );

        pointer-events: none;
    }

    .card:hover {
        border-color: rgba(96, 165, 250, 0.25);

        box-shadow:
            0 30px 80px rgba(0, 0, 0, 0.42),
            0 0 35px rgba(79, 140, 255, 0.07);
    }

    /* =========================
       Job Information
    ========================= */

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

    .job-card h1 {
        position: relative;
        z-index: 2;

        font-size: 32px;
        line-height: 1.2;

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
        margin-bottom: 25px;
    }

    .job-info {
        display: grid;
        gap: 13px;
    }

    .info-box {
        padding: 17px;

        border-radius: 15px;

        background:
            rgba(59, 130, 246, 0.06);

        border:
            1px solid
            rgba(96, 165, 250, 0.13);

        transition: 0.3s;
    }

    .info-box:hover {
        transform: translateY(-3px);

        background:
            rgba(59, 130, 246, 0.09);

        border-color:
            rgba(96, 165, 250, 0.25);
    }

    .info-icon {
        font-size: 20px;
        margin-bottom: 8px;
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

    .description {
        margin-top: 25px;
        padding-top: 22px;

        border-top:
            1px solid
            rgba(255, 255, 255, 0.08);
    }

    .description h2 {
        font-size: 19px;
        margin-bottom: 12px;
    }

    .description p {
        color: var(--muted);
        font-size: 14px;
        line-height: 1.8;
        white-space: pre-line;
    }

    /* =========================
       Application Form
    ========================= */

    .form-card h2 {
        position: relative;
        z-index: 2;

        font-size: 25px;
        margin-bottom: 25px;

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

    .form-group {
        margin-bottom: 22px;
    }

    .form-group label {
        display: block;

        color: #cbd5e1;

        font-size: 13px;
        font-weight: 700;

        margin-bottom: 9px;
    }

    .required {
        color: #f87171;
    }

    .form-input,
    .form-textarea {
        width: 100%;

        color: #f8fafc;

        background:
            rgba(15, 23, 42, 0.75);

        border:
            1px solid
            rgba(148, 163, 184, 0.18);

        border-radius: 13px;

        outline: none;

        padding: 13px 15px;

        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;

        transition: 0.3s;
    }

    .form-input::placeholder,
    .form-textarea::placeholder {
        color: #64748b;
    }

    .form-input:focus,
    .form-textarea:focus {
        border-color: rgba(79, 140, 255, 0.65);

        box-shadow:
            0 0 0 3px
            rgba(79, 140, 255, 0.10);
    }

    .form-textarea {
        min-height: 190px;
        resize: vertical;
        line-height: 1.7;
    }

    .field-error {
        margin-top: 7px;
        color: #fca5a5;
        font-size: 12px;
    }

    /* =========================
       Buttons
    ========================= */

    .actions {
        display: flex;
        gap: 12px;

        padding-top: 8px;

        border-top:
            1px solid
            rgba(255, 255, 255, 0.07);
    }

    .btn {
        display: inline-flex;

        justify-content: center;
        align-items: center;
        gap: 8px;

        padding: 13px 20px;

        border-radius: 12px;

        text-decoration: none;

        font-size: 14px;
        font-weight: 700;

        transition: 0.3s;

        cursor: pointer;
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

        transform: translateY(-2px);
    }

    .btn-submit {
        color: white;

        border: none;

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

    .btn-submit:hover {
        transform: translateY(-3px);

        box-shadow:
            0 14px 35px
            rgba(37, 99, 235, 0.40);
    }

    /* =========================
       Animation
    ========================= */

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

    /* =========================
       Responsive
    ========================= */

    @media (max-width: 800px) {
        .content-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 650px) {
        .page {
            padding: 18px 14px 40px;
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

        .card {
            padding: 22px;
        }

        .job-card h1 {
            font-size: 28px;
        }

        .actions {
            flex-direction: column;
        }

        .btn {
            width: 100%;
        }
    }
</style>
```

</head>

<body>

```
<!-- Background -->

<div class="background">
    <div class="orb one"></div>
    <div class="orb two"></div>
    <div class="orb three"></div>
</div>

<!-- Mouse Glow -->

<div class="mouse-glow" id="mouseGlow"></div>


<div class="page">

    <!-- Navbar -->

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

        </div>

    </nav>


    <!-- Success Message -->

    @if(session('success'))
        <div class="alert success">
            ✓ {{ session('success') }}
        </div>
    @endif


    <!-- Error Message -->

    @if(session('error'))
        <div class="alert error">
            ✕ {{ session('error') }}
        </div>
    @endif


    <!-- Validation Errors -->

    @if($errors->any())
        <div class="alert error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <!-- Main Content -->

    <div class="content-grid">

        <!-- Job Information -->

        <div class="card job-card">

            <div class="tag">
                Job Details
            </div>

            <h1>
                {{ $jobPost->title }}
            </h1>

            <div class="posted">
                Posted
                {{ $jobPost->created_at->format('d M Y') }}
            </div>


            <div class="job-info">

                <div class="info-box">

                    <div class="info-icon">
                        📍
                    </div>

                    <div class="info-label">
                        Location
                    </div>

                    <div class="info-value">
                        {{ $jobPost->location }}
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
                        {{ $jobPost->salary }}
                    </div>

                </div>

            </div>


            <div class="description">

                <h2>
                    About This Job
                </h2>

                <p>
                    {{ $jobPost->description }}
                </p>

            </div>

        </div>


        <!-- Application Form -->

        <div class="card form-card">

            <div class="tag">
                Application
            </div>

            <h2>
                Submit Your Application
            </h2>


            <form
                method="POST"
                action="{{ route('jobs.apply.submit', $jobPost->id) }}"
            >

                @csrf


                <!-- Phone Number -->

                <div class="form-group">

                    <label for="phone">
                        📱 Phone Number
                        <span class="required">*</span>
                    </label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        value="{{ old('phone') }}"
                        maxlength="20"
                        required
                        placeholder="Enter your phone number"
                        class="form-input"
                    >

                    @error('phone')
                        <div class="field-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Cover Letter -->

                <div class="form-group">

                    <label for="cover_letter">
                        📝 Cover Letter
                        <span class="required">*</span>
                    </label>

                    <textarea
                        id="cover_letter"
                        name="cover_letter"
                        maxlength="2000"
                        required
                        placeholder="Write a short cover letter explaining why you are suitable for this job..."
                        class="form-textarea"
                    >{{ old('cover_letter') }}</textarea>

                    @error('cover_letter')
                        <div class="field-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Buttons -->

                <div class="actions">

                    <a
                        href="{{ route('jobs.show', $jobPost->id) }}"
                        class="btn btn-back"
                    >
                        ← Back
                    </a>

                    <button
                        type="submit"
                        class="btn btn-submit"
                    >
                        🚀 Submit Application
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


<script>

    /* Mouse Follow Glow */

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

    /* Card 3D Effect */

    const cards =
        document.querySelectorAll('.card');

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
                    ((y - centerY) / centerY) * -1.0;

                const rotateY =
                    ((x - centerX) / centerX) * 1.0;

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
                    'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0)';

            }
        );

    });

</script>


</body>

</html>
