<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Fortify</title>
    <!-- Tailwind CSS 4 Official CDN -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 min-h-screen flex flex-col font-sans">

    <main>
        @yield('childContent')
    </main>

    <footer class="py-4 text-center text-sm text-gray-500 border-t border-gray-200 bg-white mt-auto">
        &copy; {{ date('Y') }} Fortify Learning App - All rights reserved.
    </footer>

</body>

</html>