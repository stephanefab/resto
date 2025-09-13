<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//cdn.tailwindcss.com"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="flex flex-col min-h-screen bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-indigo-600">{{ config('app.name', 'Laravel') }}</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-700 hover:text-indigo-600 transition-colors">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('restos.index') }}" class="text-gray-700 hover:text-indigo-600 transition-colors">Restos</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 container mx-auto px-6 py-8 max-w-7xl">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-inner mt-auto">
        <div class="container mx-auto px-6 py-4 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
        </div>
    </footer>

</body>
</html>
