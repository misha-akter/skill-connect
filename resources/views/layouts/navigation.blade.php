<nav class="skill-navbar">
    <div class="navbar-inner">

        {{-- Logo --}}
        <div class="navbar-brand">
            <a href="{{ route('dashboard') }}" class="brand-link">
                <div class="logo-icon">SC</div>

                <span class="brand-name">
                    Skill <span>Connect</span>
                </span>
            </a>
        </div>

        {{-- User Dropdown --}}
        @auth
            <div class="user-dropdown">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button type="button" class="profile-btn">
                            <span>{{ Auth::user()->name }}</span>

                            <svg
                                class="dropdown-icon"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        {{-- Profile --}}
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        {{-- Log Out --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                            >
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        @endauth

    </div>
</nav>

<style>
    .skill-navbar {
        width: calc(100% - 8.6%);
        margin: 15px auto 0;
        color: #e5eaf8;
        background: rgba(15, 21, 39, 0.96);
        border: 1px solid rgba(132, 147, 185, 0.20);
        border-radius: 20px;
        font-family: Arial, Helvetica, sans-serif;
        position: relative;
        z-index: 50;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    }

    .navbar-inner {
        min-height: 67px;
        padding: 12px 19px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
    }

    /* Logo */
    .brand-link {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none !important;
    }

    .logo-icon {
        width: 37px;
        height: 37px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-radius: 11px;
        color: #fff;
        font-size: 14px;
        font-weight: 800;
        background: linear-gradient(135deg, #3475ff, #7335ef);
    }

    .brand-name {
        color: #b7ccff;
        font-size: 21px;
        font-weight: 750;
        white-space: nowrap;
    }

    .brand-name span {
        color: #b7b9ff;
    }

    /* User Dropdown Trigger */
    .user-dropdown {
        display: flex;
        align-items: center;
        margin-left: auto;
    }

    .user-dropdown .relative {
        position: relative;
    }

    .profile-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        max-width: 240px;
        padding: 10px 13px;
        color: #d5dced;
        background: #171d32;
        border: 1px solid #303953;
        border-radius: 10px;
        font-family: inherit;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s ease, color 0.2s ease;
    }

    .profile-btn:hover {
        background: #222b45;
        color: #fff;
    }

    .profile-btn span {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .dropdown-icon {
        width: 16px;
        height: 16px;
        flex-shrink: 0;
    }

    /* Dropdown Menu */
    .user-dropdown [role="menu"] {
        margin-top: 10px;
        overflow: hidden;
        color: #e5eaf8;
        background: #171d32;
        border: 1px solid #303953;
        border-radius: 12px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
    }

    .user-dropdown [role="menu"] a {
        color: #d7def0;
        transition: background 0.2s ease;
    }

    .user-dropdown [role="menu"] a:hover {
        color: #fff;
        background: #242d47;
    }

    /* Responsive */
    @media (max-width: 640px) {
        .skill-navbar {
            width: calc(100% - 24px);
            margin-top: 12px;
            border-radius: 15px;
        }

        .navbar-inner {
            min-height: 62px;
            padding: 10px 12px;
            gap: 8px;
        }

        .logo-icon {
            width: 34px;
            height: 34px;
            border-radius: 9px;
        }

        .brand-link {
            gap: 8px;
        }

        .brand-name {
            font-size: 17px;
        }

        .profile-btn {
            max-width: 145px;
            padding: 9px 10px;
            gap: 5px;
            font-size: 12px;
        }
    }

    @media (max-width: 360px) {
        .brand-name {
            font-size: 15px;
        }

        .profile-btn {
            max-width: 115px;
            padding: 8px;
        }
    }
    
</style>