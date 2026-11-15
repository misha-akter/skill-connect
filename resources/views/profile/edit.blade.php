<x-app-layout>
<x-slot name="header">
    <div class="sc-profile-heading">
        <div class="sc-heading-icon">👤</div>
        <div>
            <h2>My Profile</h2>
            <p>Manage your personal information and account settings.</p>
        </div>
    </div>

    <style>
        header.bg-white.shadow,
header.dark\:bg-gray-800 {
    background: linear-gradient(
        135deg,
        #0b1024 0%,
        #11152d 55%,
        #17112f 100%
    ) !important;
    box-shadow: none !important;
    border: none !important;
}

.sc-profile-heading {
    background: transparent !important;
    color: #e5edff !important;
    padding: 8px 0;
}

.sc-profile-heading h2 {
    color: #f1f5ff !important;
    font-size: 1.65rem;
    font-weight: 700;
    letter-spacing: 0.3px;
}

.sc-profile-heading p {
    color: #aab8d6 !important;
}
    </style>
</x-slot>

    <style>
        .sc-profile-page {
            min-height: 100vh;
            padding: 35px 0 65px;
            color: #e5edff;
            background:
                radial-gradient(circle at 5% 10%, rgba(37,99,235,.22), transparent 32%),
                radial-gradient(circle at 95% 20%, rgba(124,58,237,.17), transparent 30%),
                linear-gradient(135deg, #070b1a, #080d20 55%, #0b0b25);
        }

        .sc-profile-container {
            width: 86%;
            max-width: 1050px;
            margin: 0 auto;
        }

        .sc-profile-heading {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .sc-profile-heading h2 {
            color: #f1f5ff;
            font-size: 24px;
            font-weight: 750;
        }

        .sc-profile-heading p {
            margin-top: 5px;
            color: #94a3b8;
            font-size: 13px;
        }

        .sc-heading-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            border: 1px solid rgba(96,165,250,.25);
            border-radius: 14px;
            background: linear-gradient(135deg, rgba(37,99,235,.25), rgba(124,58,237,.25));
            font-size: 24px;
        }

        .sc-profile-card {
            overflow: hidden;
            margin-bottom: 24px;
            border: 1px solid rgba(96,165,250,.19);
            border-radius: 18px;
            background: linear-gradient(145deg, rgba(18,29,58,.96), rgba(9,16,36,.97));
            box-shadow: 0 18px 42px rgba(0,0,0,.22);
            animation: scProfileFade .55s ease both;
        }

        .sc-profile-card:nth-child(2) {
            animation-delay: .08s;
        }

        .sc-profile-card:nth-child(3) {
            animation-delay: .16s;
        }

        .sc-profile-card-header {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 22px 26px;
    border-bottom: 1px solid rgba(148,163,184,.13);
    background: linear-gradient(
        90deg,
        rgba(37,99,235,.10),
        rgba(124,58,237,.07),
        transparent
    );
}

.sc-profile-card-header > div:last-child {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    flex: 1;
    text-align: center;
}

.sc-profile-card-header h3 {
    margin: 0 0 5px;
    color: #edf2ff;
    font-size: 17px;
    font-weight: 700;
}

.sc-profile-card-header p {
    margin: 0;
    color: #8d9bb4;
    font-size: 13px;
    line-height: 1.6;
}

        .sc-card-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            width: 46px;
            height: 46px;
            border: 1px solid rgba(96,165,250,.22);
            border-radius: 13px;
            background: rgba(37,99,235,.16);
            font-size: 22px;
        }

        .sc-profile-card-header h3 {
            color: #edf2ff;
            font-size: 17px;
            font-weight: 700;
        }

        .sc-profile-card-header p {
            margin-top: 5px;
            color: #8d9bb4;
            font-size: 13px;
            line-height: 1.6;
        }

        .sc-profile-card-body {
            padding: 26px;
        }

        .sc-profile-card-body,
        .sc-profile-card-body * {
            scroll-margin-top: 24px;
        }

        .sc-profile-card-body h2,
        .sc-profile-card-body h3,
        .sc-profile-card-body label {
            color: #dbeafe;
        }

        .sc-profile-card-body p {
            color: #94a3b8;
        }

        .sc-profile-card-body input:not([type="checkbox"]),
        .sc-profile-card-body textarea,
        .sc-profile-card-body select {
            width: 100%;
            border: 1px solid rgba(148,163,184,.25);
            border-radius: 10px;
            background: rgba(7,11,26,.78);
            color: #e5edff;
            padding: 11px 13px;
        }

        .sc-profile-card-body input:focus,
        .sc-profile-card-body textarea:focus,
        .sc-profile-card-body select:focus {
            border-color: #6366f1;
            outline: none;
            box-shadow: 0 0 0 3px rgba(99,102,241,.16);
        }

        .sc-profile-card-body input::placeholder,
        .sc-profile-card-body textarea::placeholder {
            color: #64748b;
        }

        .sc-profile-card-body button[type="submit"],
        .sc-profile-card-body button.inline-flex {
            border-radius: 9px;
        }

        .sc-profile-card-body a {
            color: #93c5fd;
        }

        .sc-profile-card-body [x-cloak] {
            display: none !important;
        }

        .sc-profile-card-danger {
            border-color: rgba(248,113,113,.27);
        }

        .sc-profile-card-danger .sc-profile-card-header {
            background: linear-gradient(90deg, rgba(127,29,29,.20), transparent);
        }

        .sc-profile-card-danger .sc-card-icon {
            border-color: rgba(248,113,113,.25);
            background: rgba(239,68,68,.12);
        }

        @keyframes scProfileFade {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 700px) {
            .sc-profile-container {
                width: 92%;
            }

            .sc-profile-heading h2 {
                font-size: 21px;
            }

            .sc-profile-card-header,
            .sc-profile-card-body {
                padding: 19px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .sc-profile-card {
                animation: none;
            }
        }
    </style>

    <div class="sc-profile-page">
        <div class="sc-profile-container">

            {{-- PROFILE INFORMATION --}}
            <section class="sc-profile-card">
                <div class="sc-profile-card-header">
                    <div class="sc-card-icon">✨</div>
                    <div>
                        <h3>Profile Information</h3>
                        <p>Your personal details, skills and introduction.</p>
                    </div>
                </div>

                <div class="sc-profile-card-body">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </section>

            {{-- SECURITY SETTINGS --}}
            <section class="sc-profile-card">
                <div class="sc-profile-card-header">
                    <div class="sc-card-icon">🔐</div>
                    <div>
                        <h3>Security Settings</h3>
                        <p>Change your password to keep your account secure.</p>
                    </div>
                </div>

                <div class="sc-profile-card-body">
                    @include('profile.partials.update-password-form')
                </div>
            </section>

            {{-- DELETE ACCOUNT --}}
            <section class="sc-profile-card sc-profile-card-danger">
                <div class="sc-profile-card-header">
                    <div class="sc-card-icon">⚠️</div>
                    <div>
                        <h3>Delete Account</h3>
                        <p>Manage the removal of your account.</p>
                    </div>
                </div>

                <div class="sc-profile-card-body">
                    @include('profile.partials.delete-user-form')
                </div>
                        </section>

        </div>
    </div>
</x-app-layout>