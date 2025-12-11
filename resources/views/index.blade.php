@extends('frontend.layout')
@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gray-50 py-16">
        <div class="container mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fade-up">
                <span
                    class="inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-full mb-4 text-sm font-semibold">Lifestyle</span>
                <h1 class="text-4xl lg:text-5xl font-bold mb-6">The Art of Mindful Morning Routines</h1>
                <p class="text-gray-600 mb-6 leading-relaxed">Discover how starting your day with intention can
                    transform your productivity and well-being.</p>
                <div class="flex items-center text-gray-500 text-sm gap-2 mb-6">
                    <span>By Sarah Mitchell</span>
                    <span class="dot"></span>
                    <span>Dec 5, 2024</span>
                    <span class="dot"></span>
                    <span>5 min read</span>
                </div>
                <a href="#"
                    class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">Read
                    Article →</a>
            </div>
            <div class="animate-fade-up delay-1">
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=800&q=80" alt="Morning routine"
                        class="w-full hero-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">Explore Topics</h2>
                <p class="text-gray-500">Discover stories across different themes</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-8">
                <a href="#"
                    class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition animate-fade-up">
                    <div class="flex justify-between items-start mb-3">
                        <span class="text-3xl">💻</span>
                    </div>
                    <h5 class="text-lg font-semibold mb-1">Technology</h5>
                    <p class="text-gray-500 text-sm mb-2">Latest tech trends and innovations</p>
                    <span class="text-gray-400 text-xs">12 articles</span>
                </a>
                <a href="#"
                    class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition animate-fade-up delay-1">
                    <div class="flex justify-between items-start mb-3">
                        <span class="text-3xl">🌿</span>
                    </div>
                    <h5 class="text-lg font-semibold mb-1">Lifestyle</h5>
                    <p class="text-gray-500 text-sm mb-2">Tips for better living</p>
                    <span class="text-gray-400 text-xs">8 articles</span>
                </a>
                <a href="#"
                    class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition animate-fade-up delay-2">
                    <div class="flex justify-between items-start mb-3">
                        <span class="text-3xl">✈️</span>
                    </div>
                    <h5 class="text-lg font-semibold mb-1">Travel</h5>
                    <p class="text-gray-500 text-sm mb-2">Adventures around the world</p>
                    <span class="text-gray-400 text-xs">15 articles</span>
                </a>
                <a href="#"
                    class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition animate-fade-up delay-3">
                    <div class="flex justify-between items-start mb-3">
                        <span class="text-3xl">🍳</span>
                    </div>
                    <h5 class="text-lg font-semibold mb-1">Food & Recipes</h5>
                    <p class="text-gray-500 text-sm mb-2">Culinary delights and cooking tips</p>
                    <span class="text-gray-400 text-xs">10 articles</span>
                </a>
                <a href="#"
                    class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition animate-fade-up delay-4">
                    <div class="flex justify-between items-start mb-3">
                        <span class="text-3xl">🎨</span>
                    </div>
                    <h5 class="text-lg font-semibold mb-1">Creativity</h5>
                    <p class="text-gray-500 text-sm mb-2">Art, design, and inspiration</p>
                    <span class="text-gray-400 text-xs">6 articles</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Recent Posts Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">Recent Posts</h2>
                <p class="text-gray-500">Fresh perspectives and latest stories</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Repeatable Blog Card -->
                <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition animate-fade-up">
                    <img src="https://images.unsplash.com/photo-1555881400-74d7acaacd8b?w=800&q=80" alt="Portugal"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span
                            class="inline-block bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs mb-2">Travel</span>
                        <h5 class="text-lg font-semibold mb-2">Exploring the Hidden Gems of Portugal</h5>
                        <p class="text-gray-500 text-sm mb-4">Beyond Lisbon and Porto lies a world of charming
                            villages, stunning coastlines, and unforgettable experiences.</p>
                        <div class="flex items-center justify-between text-gray-400 text-xs">
                            <span>Marco Santos • 7 min read</span>
                            <a href="#" class="text-blue-600 font-medium">Read →</a>
                        </div>
                    </div>
                </article>
                <!-- Repeat for other posts... -->
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <div class="max-w-xl mx-auto bg-blue-50 rounded-xl text-center p-10 shadow-lg">
                <h2 class="text-3xl font-bold mb-4">Stay Inspired</h2>
                <p class="text-gray-600 mb-6">Join our community of curious minds. Get weekly insights, stories, and
                    exclusive content delivered to your inbox.</p>
                <form class="flex flex-col sm:flex-row gap-4 justify-center">
                    <input type="email" placeholder="Enter your email"
                        class="flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
@endsection
