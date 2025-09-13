@props(['restos'])


<section class="py-20 px-4 bg-gradient-to-br from-indigo-100 via-purple-100 to-white">
    <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in-up">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent drop-shadow-lg">
            Les meilleurs restaurants
        </h2>
        <div class="h-1 w-24 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto mb-6 rounded-full"></div>
        <p class="text-gray-700 text-lg mb-4">
            Découvrez, réservez et profitez des meilleurs établissements autour de vous !
        </p>
        <a href="{{ route('restos.create') }}" class="inline-block mt-3 px-6 py-3 bg-indigo-600 hover:bg-purple-600 text-white rounded-full shadow-lg transition-all font-semibold">
            Ajouter un resto
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 w-full max-w-6xl mx-auto animate-fade-in">
        @foreach ($restos as $resto)
            <div class="rounded-2xl border border-gray-200 bg-white p-8 text-center shadow-xl hover:scale-105 hover:shadow-2xl transition-all duration-300">
                <div class="mb-4">
                    <img src="{{ $resto['image'] ?? 'https://placehold.co/300x200' }}" alt="{{ $resto['name'] }}" class="mx-auto rounded-xl w-full h-40 object-cover shadow-md">
                </div>
                <h3 class="text-2xl font-bold mb-2 text-indigo-700">{{ $resto['name'] }}</h3>
                <p class="text-gray-500 mb-3">{{ $resto['location'] }}</p>
                <a href="{{ route('restos.show', $resto['id']) }}" class="inline-block mt-3 px-6 py-2 bg-purple-600 text-white rounded-full hover:bg-indigo-600 transition-colors font-medium">
                    Détails
                </a>
            </div>
        @endforeach
    </div>

    <div class="mt-10">
        {{ $restos->links() }}
    </div>
</section>
