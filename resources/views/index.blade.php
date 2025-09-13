
<x-layout>
    <section class="min-h-screen flex flex-col justify-center items-center text-center px-4 py-20 bg-gradient-to-br from-indigo-100 via-purple-100 to-white">
        <!-- Hero -->
        <div class="mb-10 animate-fade-in-up">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent drop-shadow-lg">
                Welcome on Resto App
            </h1>
            <p class="text-gray-700 text-xl mb-8 max-w-xl mx-auto">
                Discover the best restaurants around you and book your table easily. Explore, choose and enjoy!
            </p>
            <a href="{{ route('restos.index') }}" class="inline-block px-10 py-4 bg-indigo-600 hover:bg-purple-600 text-white rounded-full shadow-xl transition-all text-lg font-semibold">
                Explore Restos
            </a>
        </div>

        <!-- Grid avec quelques restos -->
        @if(isset($restos) && $restos->count())
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 w-full max-w-6xl animate-fade-in">
                @foreach($restos->take(4) as $resto)
                    <div class="rounded-2xl border border-gray-200 bg-white p-8 text-center shadow-xl hover:scale-105 hover:shadow-2xl transition-all duration-300">
                        <h3 class="text-2xl font-bold mb-2 text-indigo-700">{{ $resto['name'] }}</h3>
                        <p class="text-gray-500 mb-3">{{ $resto['location'] }}</p>
                        <a href="{{ route('restos.show', $resto['id']) }}" class="px-6 py-2 bg-purple-600 text-white rounded-full hover:bg-indigo-600 transition-colors font-medium">
                            Détails
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
</x-layout>
