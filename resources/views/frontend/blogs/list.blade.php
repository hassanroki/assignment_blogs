@extends('frontend.layout')

@section('content')
    <!-- Article Header -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto animate-fade-up">
            <a href="{{ url()->previous() }}"
                class="inline-flex items-center gap-2 text-gray-500 mb-4 hover:text-blue-600 transition">← Back to Home</a>
            <a href="{{ route('category', $blog->category->id ?? 0) }}"
                class="inline-block bg-blue-100 text-blue-600 rounded-full px-4 py-1 mb-4 text-sm font-semibold hover:bg-blue-200 transition">
                {{ $blog->category->name ?? 'Uncategorized' }}
            </a>

            <h1 class="text-4xl lg:text-5xl font-bold mb-4">{{ $blog->title }}</h1>
            <p class="text-gray-600 text-lg mb-6">{{ $blog->short_desc }}</p>

            <div class="flex flex-wrap gap-6 text-gray-500 text-sm">
                <div class="flex items-center gap-2"><i class="bi bi-person"></i> {{ $blog->author ?? 'Admin' }}</div>
                <div class="flex items-center gap-2"><i class="bi bi-calendar3"></i>
                    {{ $blog->published_at?->format('M d, Y') }}</div>
                <div class="flex items-center gap-2"><i class="bi bi-clock"></i> {{ $blog->read_minutes ?? 5 }} min read
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Image -->
    <div class="container mx-auto my-12 animate-fade-up delay-1">
        @if ($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                class="rounded-3xl w-full object-cover shadow-lg">
        @endif
    </div>

    <!-- Article Content -->
    <article class="container mx-auto mb-16">
        <div class="prose lg:prose-xl max-w-3xl mx-auto animate-fade-up delay-2">
            {!! $blog->full_desc !!}
        </div>
    </article>

    <!-- Related Articles -->
    @if ($relatedBlogs->count())
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold mb-8">Related Articles</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($relatedBlogs as $rBlog)
                        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition animate-fade-up">
                            @if ($rBlog->image)
                                <img src="{{ asset('storage/' . $rBlog->image) }}" alt="{{ $rBlog->title }}"
                                    class="rounded-t-xl w-full object-cover h-48">
                            @endif
                            <div class="p-5">
                                <a href="{{ route('category', $rBlog->category->id ?? 0) }}"
                                    class="inline-block bg-gray-100 text-gray-800 text-xs font-semibold px-2 py-1 rounded-full mb-2">
                                    {{ $rBlog->category->name ?? 'Uncategorized' }}
                                </a>
                                <h5 class="font-semibold mb-2">{{ $rBlog->title }}</h5>
                                <p class="text-gray-500 text-sm mb-3">{{ Str::limit($rBlog->short_desc, 80) }}</p>
                                <div class="flex justify-between text-gray-400 text-xs">
                                    <span>{{ $rBlog->read_minutes ?? 5 }} min read</span>
                                    <a href="{{ route('blog.show', $rBlog->id) }}" class="text-blue-600 font-medium">Read
                                        →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
