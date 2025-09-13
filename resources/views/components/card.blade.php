@props(['restos'])

<section class="py-20 px-4 bg-gray-100">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
            Available Restos
        </h2>
        <div class="h-1 w-20 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto mb-6 rounded-full"></div>
        <p class="text-gray-600 text-lg">
            We're a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach ($restos as $resto)
            <div class="rounded-lg border border-gray-200 bg-white p-6 text-center shadow hover:shadow-xl transition-shadow duration-300">
                {{-- Optionnel : image --}}
                <div class="mb-4">
                    <img src="{{ $resto['image'] ?? 'https://placehold.co/150' }}" alt="{{ $resto['name'] }}" class="mx-auto rounded-md w-full h-32 object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2">{{ $resto['name'] }}</h3>
                <hr class="my-3 border-gray-300">
                <a href="{{ route('restos.show', $resto['id']) }}" class="inline-block mt-3 px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition-colors">
                    Details
                </a>
            </div>
        @endforeach
    </div>

    <div class="mt-10">
        {{ $restos->links() }}
    </div>
</section>
