@props(['resto'])

<section class="py-20 px-4 bg-gray-100 min-h-screen flex justify-center items-start">
    <div class="bg-cool-950 text-cool-100 rounded-xl shadow-lg max-w-4xl w-full p-8 relative">

        <!-- Gradient radial de fond subtil -->
        <div class="absolute inset-0 opacity-20 -z-10">
            <div class="absolute w-48 h-48 bg-[radial-gradient(circle,rgba(255,184,108,0.3),rgba(129,0,255,0.2),rgba(16,185,129,0.2))] rounded-full top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 blur-3xl pointer-events-none mix-blend-soft-light"></div>
        </div>

        <!-- Titre -->
        <h1 class="text-3xl md:text-4xl font-bold mb-6 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent text-center">
            {{ $resto['name'] }}
        </h1>

        <!-- Image placeholder -->
        <div class="mb-6">
            <img src="{{ $resto['image'] ?? 'https://placehold.co/600x300' }}" alt="{{ $resto['name'] }}" class="w-full h-64 object-cover rounded-lg shadow-md">
        </div>

        <!-- Informations -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-400">
            <div>
                <p class="font-semibold">📍 Location:</p>
                <p>{{ $resto['location'] }}</p>
            </div>
            <div>
                <p class="font-semibold">🍽️ Places:</p>
                <p>{{ $resto['nbr_place'] }}</p>
            </div>
        </div>

        <!-- Actions -->
        <div class="mt-8 flex space-x-4">
            <a href="{{ route('restos.index') }}" class="px-6 py-3 bg-gray-700 hover:bg-gray-800 rounded-lg transition-colors">
                Retour aux restos
            </a>
            <a href="#" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 rounded-lg text-white transition-colors">
                Réserver
            </a>
        </div>

    </div>
</section>
