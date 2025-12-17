@extends('frontend.layout')

@section('content')
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto">
            <a href="{{ route('home') }}"
                class="inline-flex items-center gap-2 text-gray-500 mb-6 hover:text-blue-600 transition">
                ← Back to Home
            </a>

            <div class="animate-fade-up">
                <span class="text-6xl mb-4 block">💻</span>
                <h1 class="text-4xl lg:text-5xl font-bold mb-3">{{ $category->name }}</h1>
                <p class="text-gray-600 text-lg">
                    {{ $category->description }} — Explore {{ $categoryWiseBlogs->count() }} articles in this collection.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($categoryWiseBlogs as $blog)
                <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition animate-fade-up">
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <span class="inline-block bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs mb-2">
                            {{ $blog->category->name ?? 'Uncategorized' }}
                        </span>
                        <h5 class="text-lg font-semibold mb-2">{{ $blog->title }}</h5>
                        <p class="text-gray-500 text-sm mb-4">{{ Str::limit($blog->short_desc, 120) }}</p>
                        <div class="flex justify-between items-center text-gray-400 text-xs">
                            <span>{{ $blog->author ?? 'Admin' }} • {{ $blog->published_at->diffForHumans() }} •
                                {{ $blog->read_minutes ?? 5 }} min read</span>
                            <a href="{{ route('blog.show', $blog->id) }}" class="text-blue-600 font-medium">Read →</a>
                        </div>
                    </div>
                </article>
            @empty
                <p class="text-gray-500 col-span-3">No articles found in this category.</p>
            @endforelse
        </div>
    </section>

    <!-- Other Categories -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-6">Explore Other Topics</h2>
            <div class="flex flex-wrap gap-4">
                @foreach ($otherCategories as $cat)
                    <a href="{{ route('category', $cat->id) }}"
                        class="flex items-center gap-2 px-5 py-2 border border-gray-300 rounded-full hover:bg-blue-600 hover:text-white transition">

                        {{-- Category Image --}}
                        <img src="{{ asset('storage/' . $cat->image) }}" alt="{{ $cat->name }}"
                            class="w-6 h-6 object-cover rounded-full">

                        {{-- Category Name --}}
                        <span>{{ $cat->name }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
