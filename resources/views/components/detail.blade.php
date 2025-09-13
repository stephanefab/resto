@props(['resto'])

<section class="py-20 px-4 bg-gradient-to-br from-indigo-100 via-purple-100 to-white min-h-screen flex justify-center items-start">
    <div class="bg-white rounded-2xl shadow-2xl max-w-4xl w-full p-10 relative animate-fade-in-up">
        <!-- Gradient radial de fond subtil -->
        <div class="absolute inset-0 opacity-20 -z-10 pointer-events-none">
            <div class="absolute w-64 h-64 bg-[radial-gradient(circle,rgba(129,0,255,0.15),rgba(16,185,129,0.15),rgba(255,184,108,0.15))] rounded-full top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 blur-3xl mix-blend-soft-light"></div>
        </div>

        <!-- Titre -->
        <h1 class="text-4xl md:text-5xl font-extrabold mb-8 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent text-center drop-shadow-lg">
            {{ $resto['name'] }}
        </h1>

        <!-- Image -->
        <div class="mb-8">
            <img src="{{ $resto['image'] ?? 'https://placehold.co/600x300' }}" alt="{{ $resto['name'] }}" class="w-full h-72 object-cover rounded-2xl shadow-xl">
        </div>

        <!-- Informations -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-gray-700 mb-8">
            <div class="bg-indigo-50 rounded-xl p-6">
                <p class="font-semibold text-indigo-700 mb-2">📍 Localisation</p>
                <p class="text-lg">{{ $resto['location'] }}</p>
            </div>
            <div class="bg-purple-50 rounded-xl p-6">
                <p class="font-semibold text-purple-700 mb-2">🍽️ Places</p>
                <p class="text-lg">{{ $resto['nbr_place'] }}</p>
            </div>
        </div>

        <!-- Description -->
        @if(!empty($resto['description']))
            <div class="mb-8 text-center text-gray-600 text-lg italic">
                {{ $resto['description'] }}
            </div>
        @endif

        <!-- Actions -->
        <div class="mt-8 flex flex-col md:flex-row gap-4 justify-center">
            <a href="{{ route('restos.index') }}" class="px-8 py-3 bg-gray-200 hover:bg-gray-300 rounded-full transition-all font-semibold text-gray-700">
                Retour aux restos
            </a>
            <a href="#" class="px-8 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full shadow-lg hover:bg-indigo-700 transition-all font-bold">
                Réserver
            </a>
        </div>

    </div>
</section>
