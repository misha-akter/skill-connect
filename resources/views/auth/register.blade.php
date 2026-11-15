<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register | Skill Connect</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        min-height: 100vh;
        color: #f8fafc;

        display: flex;
        justify-content: center;
        align-items: center;

        padding: 30px;

        background:
            radial-gradient(circle at 15% 15%,
                rgba(79, 140, 255, 0.20),
                transparent 30%),
            radial-gradient(circle at 85% 20%,
                rgba(139, 92, 246, 0.18),
                transparent 28%),
            radial-gradient(circle at 50% 90%,
                rgba(34, 211, 238, 0.10),
                transparent 30%),
            #070b1a;

        overflow-x: hidden;
    }

    /* =========================
       Animated Background
    ========================== */

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
        opacity: .35;
        animation: float 9s ease-in-out infinite;
    }

    .orb.one {
        width: 270px;
        height: 270px;
        background: #2563eb;
        top: 5%;
        left: -90px;
    }

    .orb.two {
        width: 240px;
        height: 240px;
        background: #7c3aed;
        right: -80px;
        bottom: 10%;
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

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(30px, -25px) scale(1.1);
        }
    }

    /* =========================
       Main Container
    ========================== */

    .container {
        position: relative;
        z-index: 2;

        width: 100%;
        max-width: 480px;

        animation: appear .7s ease both;
    }

    .card {
        padding: 32px;

        background:
            linear-gradient(
                145deg,
                rgba(20, 29, 57, .92),
                rgba(10, 16, 35, .84)
            );

        border: 1px solid rgba(255, 255, 255, .10);

        border-radius: 24px;

        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);

        box-shadow:
            0 25px 70px rgba(0, 0, 0, .35),
            inset 0 1px rgba(255, 255, 255, .04);
    }

    /* =========================
       Brand
    ========================== */

    .brand {
        text-align: center;
        margin-bottom: 28px;
    }

    .brand-icon {
        width: 50px;
        height: 50px;

        margin: 0 auto 12px;

        display: grid;
        place-items: center;

        border-radius: 14px;

        font-size: 15px;
        font-weight: 800;

        color: white;

        background:
            linear-gradient(
                135deg,
                #2563eb,
                #7c3aed
            );

        box-shadow:
            0 0 30px rgba(79, 140, 255, .30);
    }

    .brand h1 {
        font-size: 28px;
        margin-bottom: 8px;

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

    .brand p {
        color: #94a3b8;
        font-size: 14px;
        line-height: 1.5;
    }

    /* =========================
       Form
    ========================== */

    .form-group {
        margin-bottom: 18px;
    }

    label {
        display: block;

        color: #e2e8f0;

        font-size: 13px;
        font-weight: 700;

        margin-bottom: 8px;
    }

    input,
    select {
        width: 100%;

        padding: 13px 14px;

        color: #f8fafc;

        background: rgba(15, 23, 42, .75);

        border: 1px solid rgba(255, 255, 255, .10);

        border-radius: 11px;

        outline: none;

        font-size: 14px;

        transition: all .3s ease;
    }

    input::placeholder {
        color: #64748b;
    }

    select {
        cursor: pointer;
    }

    select option {
        background: #0f172a;
        color: white;
    }

    input:focus,
    select:focus {
        border-color: rgba(79, 140, 255, .70);

        box-shadow:
            0 0 0 3px rgba(79, 140, 255, .10);

        transform: translateY(-1px);
    }

    /* =========================
       Validation Errors
    ========================== */

    .error {
        color: #fca5a5;

        font-size: 12px;

        margin-top: 6px;
    }

    .error-box {
        padding: 12px 14px;

        margin-bottom: 18px;

        border-radius: 11px;

        background: rgba(239, 68, 68, .10);

        border: 1px solid rgba(239, 68, 68, .25);

        color: #fca5a5;

        font-size: 13px;
    }

    /* =========================
       Register Button
    ========================== */

    .register-btn {
        width: 100%;

        border: none;

        padding: 14px;

        margin-top: 5px;

        border-radius: 12px;

        color: white;

        font-size: 14px;
        font-weight: 700;

        cursor: pointer;

        background:
            linear-gradient(
                135deg,
                #2563eb,
                #4f46e5
            );

        box-shadow:
            0 8px 25px rgba(37, 99, 235, .25);

        transition: all .3s ease;
    }

    .register-btn:hover {
        transform: translateY(-2px);

        box-shadow:
            0 14px 32px rgba(37, 99, 235, .40);
    }

    .register-btn:active {
        transform: translateY(0);
    }

    /* =========================
       Login Link
    ========================== */

    .login {
        text-align: center;

        margin-top: 22px;

        color: #94a3b8;

        font-size: 13px;
    }

    .login a {
        color: #60a5fa;

        text-decoration: none;

        font-weight: 700;

        transition: color .3s ease;
    }

    .login a:hover {
        color: #93c5fd;
    }

    /* =========================
       Animation
    ========================== */

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
       Mobile
    ========================== */

    @media (max-width: 550px) {

        body {
            padding: 15px;
        }

        .card {
            padding: 25px 20px;
        }

        .brand h1 {
            font-size: 24px;
        }

        .brand p {
            font-size: 13px;
        }
    }
</style>
```

</head>

<body>

```
<!-- Animated Background -->

<div class="background">
    <div class="orb one"></div>
    <div class="orb two"></div>
    <div class="orb three"></div>
</div>


<!-- Registration -->

<div class="container">

    <div class="card">

        <!-- Brand -->

        <div class="brand">

            <div class="brand-icon">
                SC
            </div>

            <h1>Create Account</h1>

            <p>
                Join Skill Connect and connect with amazing opportunities.
            </p>

        </div>


        <!-- General Validation Error -->

        @if ($errors->any())

            <div class="error-box">
                Please fix the errors below.
            </div>

        @endif


        <!-- Registration Form -->

        <form method="POST" action="{{ route('register') }}">

            @csrf


            <!-- Full Name -->

            <div class="form-group">

                <label for="name">
                    Full Name
                </label>

                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Enter your full name"
                    required
                    autofocus
                    autocomplete="name"
                >

                @error('name')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- Email -->

            <div class="form-group">

                <label for="email">
                    Email Address
                </label>

                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Enter your email address"
                    required
                    autocomplete="email"
                >

                @error('email')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- Role -->

            <div class="form-group">

                <label for="role">
                    I want to join as
                </label>

                <select
                    id="role"
                    name="role"
                    required
                >

                    <option value="" disabled
                        {{ old('role') ? '' : 'selected' }}>
                        Select your role
                    </option>

                    <option value="worker"
                        {{ old('role') === 'worker' ? 'selected' : '' }}>
                        Worker / Job Seeker
                    </option>

                    <option value="employer"
                        {{ old('role') === 'employer' ? 'selected' : '' }}>
                        Employer
                    </option>

                </select>

                @error('role')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- Password -->

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    id="password"
                    type="password"
                    name="password"
                    placeholder="Create a password"
                    required
                    autocomplete="new-password"
                >

                @error('password')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- Confirm Password -->

            <div class="form-group">

                <label for="password_confirmation">
                    Confirm Password
                </label>

                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    placeholder="Confirm your password"
                    required
                    autocomplete="new-password"
                >

                @error('password_confirmation')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- Submit -->

            <button
                type="submit"
                class="register-btn"
            >
                Create Account →
            </button>

        </form>


        <!-- Login -->

        <div class="login">

            Already have an account?

            <a href="{{ route('login') }}">
                Login
            </a>

        </div>

    </div>

</div>

</body>

</html>
