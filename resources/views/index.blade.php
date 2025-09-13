<x-layout>
    <section class="bg-gray-100 min-h-screen flex flex-col justify-center items-center text-center px-4 py-20">
        <!-- Hero -->
        <h1 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
            Welcome on Resto App
        </h1>
        <p class="text-gray-700 text-lg mb-8 max-w-xl">
            Discover the best restaurants around you and book your table easily. Explore, choose and enjoy!
        </p>
        <a href="{{ route('restos.index') }}" class="px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow-lg transition-all">
            Explore Restos
        </a>

        <!-- Optionnel : Grid avec quelques restos -->
        @if(isset($restos) && $restos->count())
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($restos->take(4) as $resto)
                    <div class="rounded-lg border border-gray-200 bg-white p-6 text-center shadow hover:shadow-xl transition-shadow">
                        <h3 class="text-xl font-semibold mb-2">{{ $resto['name'] }}</h3>
                        <p class="text-gray-500 mb-3">{{ $resto['location'] }}</p>
                        <a href="{{ route('restos.show', $resto['id']) }}" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition-colors">
                            Details
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
</x-layout>
