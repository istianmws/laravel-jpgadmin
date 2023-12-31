<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex w-screen h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <div class="grow text-black" id="content">
            <div class="flex flex-col mt-3 px-3">
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="flex items-center bg-white dark:bg-gray-800 shadow">
                        <ion-icon id="menuToggleBtn" name="menu" class="text-3xl cursor-pointer ml-5">
                        </ion-icon>
                        <div class="max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    let toggleButton = document.querySelector("#menuToggleBtn").addEventListener("click", () => {
        let sidebar = document.querySelector("#sidebar");
        sidebar.classList.toggle("translate-x-[-100%]");
        sidebar.classList.toggle("w-0");
    });

    function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
    }
    dropdown();
</script>

</html>
