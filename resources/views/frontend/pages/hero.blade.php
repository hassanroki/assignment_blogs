 @if ($featuredBlog)
     <section class="relative bg-gray-50 py-16">
         <div class="container mx-auto grid lg:grid-cols-2 gap-12 items-center">
             <div class="animate-fade-up">
                 <span class="inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-full mb-4 text-sm font-semibold">
                     {{ $featuredBlog->category->name ?? 'Uncategorized' }}
                 </span>
                 <h1 class="text-4xl lg:text-5xl font-bold mb-6">
                     {{ $featuredBlog->title }}
                 </h1>
                 <p class="text-gray-600 mb-6 leading-relaxed">
                     {{ Str::limit($featuredBlog->short_desc, 200) }}
                 </p>
                 <div class="flex items-center text-gray-500 text-sm gap-2 mb-6">
                     <span>By {{ $featuredBlog->author }}</span>
                     <span class="dot"></span>
                     <span>{{ $featuredBlog->published_at->format('M d, Y') }}</span>
                     <span class="dot"></span>
                     <span>{{ $featuredBlog->read_minutes }} min read</span>
                 </div>
                 <a href="{{ route('blog.show', $featuredBlog->id) }}"
                     class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                     Read Article →
                 </a>
             </div>
             <div class="animate-fade-up delay-1">
                 <div class="overflow-hidden rounded-xl shadow-lg">
                     <img src="{{ asset('storage/' . $featuredBlog->image) }}" alt="{{ $featuredBlog->title }}"
                         class="w-full hero-image">
                 </div>
             </div>
         </div>
     </section>
 @endif
