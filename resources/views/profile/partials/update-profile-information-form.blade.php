
<section
    x-data="{ editing: {{ $errors->any() ? 'true' : 'false' }} }"
    class="space-y-6"
>
    <header class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <header class="flex justify-end">
    <button
        type="button"
        @click="editing = !editing"
        class="inline-flex items-center justify-center rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-indigo-700"
        x-text="editing ? 'Close Editor' : 'Edit Profile'"
    ></button>
</header>
    

    @if (session('status') === 'profile-updated')
        <div class="rounded-lg border border-green-500/30 bg-green-500/10 p-4 text-sm text-green-600 dark:text-green-400">
            ✓ Profile saved successfully!
        </div>
    @endif
{{-- VIEW MODE --}}
<div
    x-show="!editing"
    x-cloak
    class="sc-profile-info"
>
    <div class="sc-info-grid">

        {{-- FULL NAME --}}
        <div class="sc-info-item">
            <div class="sc-info-icon">👤</div>
            <div class="sc-info-content">
                <span class="sc-info-label">FULL NAME</span>
                <p class="sc-info-value">
                    {{ $user->name ?: 'Not provided' }}
                </p>
            </div>
        </div>

        {{-- EMAIL --}}
        <div class="sc-info-item">
            <div class="sc-info-icon">✉️</div>
            <div class="sc-info-content">
                <span class="sc-info-label">EMAIL ADDRESS</span>
                <p class="sc-info-value">
                    {{ $user->email ?: 'Not provided' }}
                </p>
            </div>
        </div>

        {{-- PHONE --}}
        <div class="sc-info-item">
            <div class="sc-info-icon">📱</div>
            <div class="sc-info-content">
                <span class="sc-info-label">PHONE NUMBER</span>
                <p class="sc-info-value">
                    {{ $user->phone ?: 'Not provided' }}
                </p>
            </div>
        </div>

        {{-- SKILLS --}}
        <div class="sc-info-item">
            <div class="sc-info-icon">💻</div>
            <div class="sc-info-content">
                <span class="sc-info-label">SKILLS</span>
                <p class="sc-info-value sc-info-multiline">
                    {{ $user->skills ?: 'No skills added yet.' }}
                </p>
            </div>
        </div>

        {{-- BIO --}}
        <div class="sc-info-item sc-info-bio">
            <div class="sc-info-icon">✨</div>
            <div class="sc-info-content">
                <span class="sc-info-label">ABOUT ME</span>
                <p class="sc-info-value sc-info-multiline">
                    {{ $user->bio ?: 'No bio added yet.' }}
                </p>
            </div>
        </div>

    </div>
</div>

<style>
    .sc-profile-info {
        width: 100%;
    }

    .sc-info-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 16px;
    }

    .sc-info-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        min-width: 0;
        padding: 21px;
        border: 1px solid rgba(96, 165, 250, 0.18);
        border-radius: 15px;
        background: linear-gradient(
            135deg,
            rgba(30, 41, 75, 0.72),
            rgba(12, 20, 43, 0.82)
        );
        transition: border-color 0.2s ease, transform 0.2s ease,
                    background 0.2s ease;
    }

    .sc-info-item:hover {
        transform: translateY(-2px);
        border-color: rgba(129, 140, 248, 0.48);
        background: linear-gradient(
            135deg,
            rgba(37, 55, 100, 0.78),
            rgba(19, 24, 56, 0.9)
        );
    }

    .sc-info-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 43px;
        width: 43px;
        height: 43px;
        border: 1px solid rgba(129, 140, 248, 0.24);
        border-radius: 12px;
        background: linear-gradient(
            135deg,
            rgba(37, 99, 235, 0.22),
            rgba(124, 58, 237, 0.2)
        );
        font-size: 19px;
    }

    .sc-info-content {
        flex: 1;
        min-width: 0;
    }

    .sc-info-label {
        display: block;
        margin-bottom: 9px;
        color: #8ea5d0;
        font-size: 10px;
        font-weight: 750;
        letter-spacing: 1.4px;
    }

    .sc-info-value {
        margin: 0;
        color: #edf2ff;
        font-size: 14px;
        font-weight: 550;
        line-height: 1.8;
        overflow-wrap: anywhere;
    }

    .sc-info-multiline {
        white-space: pre-line;
    }

    .sc-info-bio {
        grid-column: 1 / -1;
    }

    @media (max-width: 640px) {
        .sc-info-grid {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .sc-info-bio {
            grid-column: auto;
        }

        .sc-info-item {
            padding: 17px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .sc-info-item {
            transition: none;
        }

        .sc-info-item:hover {
            transform: none;
        }
    }
</style>

    {{-- EDIT MODE --}}
    <div x-show="editing" x-cloak>
        <form id="send-verification" method="post"
              action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}"
              class="space-y-6">
            @csrf
            @method('patch')

            <div>
                <x-input-label for="name" value="Full Name" />
                <x-text-input id="name" name="name" type="text"
                    class="mt-1 block w-full"
                    :value="old('name', $user->name)"
                    required autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="email" value="Email Address" />
                <x-text-input id="email" name="email" type="email"
                    class="mt-1 block w-full"
                    :value="old('email', $user->email)"
                    required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <div>
                <x-input-label for="phone" value="Phone Number" />
                <x-text-input id="phone" name="phone" type="text"
                    class="mt-1 block w-full"
                    :value="old('phone', $user->phone)"
                    autocomplete="tel" />
                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
            </div>

            <div>
                <x-input-label for="skills" value="Skills" />
                <textarea id="skills" name="skills" rows="3"
                    maxlength="1000"
                    placeholder="PHP, Laravel, MySQL, JavaScript"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">{{ old('skills', $user->skills) }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('skills')" />
            </div>

            <div>
                <x-input-label for="bio" value="About Me / Bio" />
                <textarea id="bio" name="bio" rows="5"
                    maxlength="2000"
                    placeholder="Write a short introduction about yourself..."
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">{{ old('bio', $user->bio) }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('bio')" />
            </div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="mt-2 text-sm text-gray-800 dark:text-gray-200">
                        Your email address is unverified.
                        <button form="send-verification"
                            class="text-sm text-indigo-600 underline hover:text-indigo-900">
                            Click here to re-send the verification email.
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm font-medium text-green-600">
                            A new verification link has been sent.
                        </p>
                    @endif
                </div>
            @endif

            <div class="flex flex-wrap items-center gap-3">
                <x-primary-button>Save Changes</x-primary-button>

                <button type="button"
                    @click="editing = false"
                    class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-100 dark:border-gray-600 dark:text-gray-200 dark:hover:bg-gray-800">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</section>
