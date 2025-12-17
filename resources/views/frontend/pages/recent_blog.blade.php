<section class="py-16 bg-gray-50">
    <div class="container mx-auto">

        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2">Recent Posts</h2>
            <p class="text-gray-500">Fresh perspectives and latest stories</p>
        </div>

        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($blogs as $blog)
                <article
                    class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition animate-fade-up">

                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                        class="w-full h-48 object-cover">

                    <div class="p-6">
                        <span class="inline-block bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs mb-2">
                            {{ $blog->category->name ?? 'Uncategorized' }}
                        </span>

                        <h5 class="text-lg font-semibold mb-2">
                            {{ $blog->title }}
                        </h5>

                        <p class="text-gray-500 text-sm mb-4">
                            {{ Str::limit($blog->description, 120) }}
                        </p>

                        <div class="flex items-center justify-between text-gray-400 text-xs">
                            <span>
                                {{ $blog->author }} •
                                {{ $blog->published_at->diffForHumans() }} •
                                {{ $blog->read_minutes }} min read
                            </span>
                            <a href="{{ route('blog.show', $blog->id) }}" class="text-blue-600 font-medium">
                                Read →
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

    </div>
</section>
