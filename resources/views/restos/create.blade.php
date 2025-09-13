<x-layout>
    <section
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-100 via-purple-100 to-white py-20 px-4">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-xl p-10 animate-fade-in-up">
            <h2
                class="text-3xl font-extrabold mb-8 text-center bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent drop-shadow-lg">
                Créer un nouveau restaurant
            </h2>
             
            <form action="{{ route('restos.store') }}" method="POST" class="space-y-8">
                @csrf

                @if(session('success'))
                    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition
                        class="z-10 fixed top-6 right-5 w-96 p-4 bg-green-100 border border-green-300 text-green-800 rounded-lg shadow-lg flex justify-between items-start">
                        <span class="text-sm font-medium">
                            {{ session('success') }}
                        </span>

                        <!-- Bouton close -->
                        <button @click="show = false" class="ml-3 text-green-800 hover:text-green-600" type="button" >
                            ✕
                        </button>
                    </div>
                @endif

                <!-- Name -->
                <div>
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Nom du restaurant</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="w-full px-5 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('name') border-red-500 @enderror transition-all">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Location -->
                <div>
                    <label for="location" class="block text-gray-700 font-semibold mb-2">Localisation</label>
                    <input type="text" name="location" id="location" value="{{ old('location') }}"
                        class="w-full px-5 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('location') border-red-500 @enderror transition-all">
                    @error('location')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Number of Places -->
                <div>
                    <label for="nbr_place" class="block text-gray-700 font-semibold mb-2">Nombre de places</label>
                    <input type="number" name="nbr_place" id="nbr_place" value="{{ old('nbr_place') }}"
                        class="w-full px-5 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('nbr_place') border-red-500 @enderror transition-all">
                    @error('nbr_place')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="w-full px-5 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('description') border-red-500 @enderror transition-all">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- image Url -->
                <div>
                    <label for="image" class="block text-gray-700 font-semibold mb-2">Image URL du restaurant</label>
                    <input type="url" name="image" id="image" value="{{ old('image') }}"
                        class="w-full px-5 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('image') border-red-500 @enderror transition-all">
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit -->
                <div class="text-center">
                    <button type="submit"
                        class="px-8 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full shadow-lg hover:bg-indigo-700 transition-all font-bold text-lg">
                        Créer le restaurant
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>