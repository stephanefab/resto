<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">
    <!-- Navbar -->
    <header class="bg-white shadow w-full z-20">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-indigo-600">{{ config('app.name', 'Laravel') }}</h1>
            <button id="sidebarToggle" class="md:hidden text-indigo-600 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
            </button>
            <nav class="hidden md:block">
                <ul class="flex space-x-6">
                    <li><a href="{{ route('home') }}" class="text-gray-700 hover:text-indigo-600 transition-colors">Home</a></li>
                    <li><a href="{{ route('restos.index') }}" class="text-gray-700 hover:text-indigo-600 transition-colors">Restos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="flex flex-1 w-full min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="bg-white shadow-lg w-60 h-full fixed md:relative z-10 transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out md:flex flex-col hidden">
            <div class="p-6 font-bold text-xl text-blue-600">Menu</div>
            <nav class="flex-1 px-4 space-y-2">
                <a href="{{ route('home') }}" class="block py-2 px-4 rounded hover:bg-blue-100 text-gray-700">Accueil</a>
                <a href="{{ route('restos.index') }}" class="block py-2 px-4 rounded hover:bg-blue-100 text-gray-700">Restaurants</a>
                <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100 text-gray-700">Utilisateurs</a>
                <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100 text-gray-700">Paramètres</a>
            </nav>
            <div class="p-4 border-t text-sm text-gray-500">© {{ date('Y') }} Resto</div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-0 md:ml-2 p-8 min-h-screen">
            {{ $slot }}
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-white shadow-inner mt-auto w-full">
        <div class="container mx-auto px-6 py-4 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
        </div>
    </footer>

    <!-- Sidebar Toggle Script -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggle = document.getElementById('sidebarToggle');
        if(toggle) {
            toggle.addEventListener('click', () => {
                sidebar.classList.toggle('hidden');
                sidebar.classList.toggle('-translate-x-full');
            });
        }
    </script>
</body>
</html>
