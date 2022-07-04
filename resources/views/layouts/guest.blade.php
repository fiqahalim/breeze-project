<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
        <header class="max-w-lg mx-auto">
            <a href="#">
                <h1 class="text-4xl font-bold text-white text-center">Startup</h1>
            </a>
        </header>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <footer class="max-w-lg mx-auto flex justify-center text-white">
            {{-- <a href="#" class="hover:underline">Contact</a> --}}
            <span class="block text-sm text-white-500 sm:text-center dark:text-white-400 mx-3">
                &copy; <?php echo date("Y"); ?> <a href="#" class="hover:underline">Startup™</a>
            </span>
            {{-- <a href="#" class="hover:underline">Privacy</a> --}}
        </footer>
    </body>
</html>
