<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <style>
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

       html {
    margin: 0 !important;
    padding: 0 !important;
    background: #0b1020 !important;
}

body {
    margin: 0 !important;
    padding: 0 !important;
    border: none !important;
    background: #0b1020 !important;
}

body > div.min-h-screen {
    margin-top: 0 !important;
    border-top: none !important;
}

</style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
