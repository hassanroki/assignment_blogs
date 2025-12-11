<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Journal - A Curated Blog</title>
    <meta name="description"
        content="A curated collection of stories, insights, and ideas. Discover articles on technology, lifestyle, travel, food, and creativity.">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Source+Sans+3:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style></style>
    @endif
    <style>
        body {
            font-family: 'Source Sans 3', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
        }

        .dot::before {
            content: '•';
            margin: 0 0.25rem;
            color: #6b7280;
        }

        .hero-image {
            transition: transform 0.5s ease;
        }

        .hero-image:hover {
            transform: scale(1.05);
        }

        .animate-fade-up {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 0.8s forwards;
        }

        .delay-1 {
            animation-delay: 0.2s;
        }

        .delay-2 {
            animation-delay: 0.4s;
        }

        .delay-3 {
            animation-delay: 0.6s;
        }

        .delay-4 {
            animation-delay: 0.8s;
        }

        .delay-5 {
            animation-delay: 1s;
        }

        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <!-- Header -->
    <header class="sticky top-0 bg-white border-b z-50">
        <nav class="container mx-auto flex items-center justify-between py-4">
            <a href="#" class="text-2xl font-bold text-gray-900">The Journal</a>
            <div class="hidden md:flex gap-8">
                <a href="#" class="text-gray-800 hover:text-blue-600 font-medium">Home</a>
                <a href="#" class="text-gray-800 hover:text-blue-600 font-medium">Technology</a>
                <a href="#" class="text-gray-800 hover:text-blue-600 font-medium">Lifestyle</a>
                <a href="#" class="text-gray-800 hover:text-blue-600 font-medium">Travel</a>
            </div>
            <button class="md:hidden p-2 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </nav>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-100 py-16 mt-16">
        <div class="container mx-auto grid md:grid-cols-3 gap-8">
            <div>
                <h4 class="text-xl font-bold mb-3">The Journal</h4>
                <p class="text-gray-500 max-w-xs">A curated collection of stories, insights, and ideas. We believe in
                    the power of words to inspire, educate, and connect.</p>
            </div>
            <div>
                <h6 class="font-semibold mb-3">Categories</h6>
                <ul class="space-y-2 text-gray-500">
                    <li><a href="#" class="hover:text-blue-600">Technology</a></li>
                    <li><a href="#" class="hover:text-blue-600">Lifestyle</a></li>
                    <li><a href="#" class="hover:text-blue-600">Travel</a></li>
                    <li><a href="#" class="hover:text-blue-600">Food & Recipes</a></li>
                </ul>
            </div>
            <div>
                <h6 class="font-semibold mb-3">Connect</h6>
                <ul class="space-y-2 text-gray-500">
                    <li><a href="#" class="hover:text-blue-600">Twitter</a></li>
                    <li><a href="#" class="hover:text-blue-600">Instagram</a></li>
                    <li><a href="#" class="hover:text-blue-600">Newsletter</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-300 pt-6 text-center text-gray-400 text-sm">
            © 2024 The Journal. All rights reserved.
        </div>
    </footer>

</body>

</html>
