<section class="py-16">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2">Explore Topics</h2>
            <p class="text-gray-500">Discover stories across different themes</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-8">
            @foreach ($categories as $category)
                <a href="{{ route('category', $category->id) }}"
                    class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition animate-fade-up">

                    <div class="flex justify-between items-start mb-3">
                        <span class="text-3xl">
                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                                class="w-12 h-12 object-cover rounded">
                        </span>
                    </div>

                    <h5 class="text-lg font-semibold mb-1">
                        {{ $category->name }}
                    </h5>

                    <p class="text-gray-500 text-sm mb-2">
                        {{ $category->description }}
                    </p>

                    <span class="text-gray-400 text-xs">
                        {{ $category->blogs_count }} articles
                    </span>
                </a>
            @endforeach




        </div>
    </div>
</section>
