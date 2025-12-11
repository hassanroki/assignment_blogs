<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Technology Articles - The Journal</title>
  <meta name="description" content="Explore our collection of technology articles covering the latest trends and innovations.">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Source+Sans+3:wght@300;400;500;600&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Source Sans 3', sans-serif; }
    h1, h2, h3, h4, h5, h6 { font-family: 'Playfair Display', serif; }
    .dot::before { content: '•'; margin: 0 0.25rem; color: #6b7280; }
    .animate-fade-up { opacity: 0; transform: translateY(20px); animation: fadeUp 0.8s forwards; }
    .delay-1 { animation-delay: 0.2s; }
    .delay-2 { animation-delay: 0.4s; }
    .delay-3 { animation-delay: 0.6s; }

    @keyframes fadeUp {
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body class="bg-white text-gray-800">

  <!-- Header -->
  <header class="sticky top-0 bg-white border-b z-50">
    <nav class="container mx-auto flex items-center justify-between py-4">
      <a href="index.html" class="text-2xl font-bold text-gray-900">The Journal</a>
      <div class="hidden md:flex gap-8">
        <a href="index.html" class="text-gray-800 hover:text-blue-600 font-medium">Home</a>
        <a href="category.html?cat=technology" class="text-gray-800 hover:text-blue-600 font-medium">Technology</a>
        <a href="category.html?cat=lifestyle" class="text-gray-800 hover:text-blue-600 font-medium">Lifestyle</a>
        <a href="category.html?cat=travel" class="text-gray-800 hover:text-blue-600 font-medium">Travel</a>
      </div>
      <button class="md:hidden p-2 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </nav>
  </header>

  <!-- Category Header -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto">
      <a href="index.html" class="inline-flex items-center gap-2 text-gray-500 mb-6 hover:text-blue-600 transition">
        ← Back to Home
      </a>
      <div class="animate-fade-up">
        <span class="text-6xl mb-4 block">💻</span>
        <h1 class="text-4xl lg:text-5xl font-bold mb-3">Technology</h1>
        <p class="text-gray-600 text-lg">Latest tech trends and innovations — Explore 12 articles in this collection.</p>
      </div>
    </div>
  </section>

  <!-- Posts Grid -->
  <section class="py-16">
    <div class="container mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Post 1 -->
      <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition animate-fade-up">
        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800&q=80" alt="AI" class="w-full h-56 object-cover">
        <div class="p-6">
          <span class="inline-block bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs mb-2">Technology</span>
          <h5 class="text-lg font-semibold mb-2">The Future of AI in Creative Industries</h5>
          <p class="text-gray-500 text-sm mb-4">How artificial intelligence is reshaping the landscape of art, design, and content creation.</p>
          <div class="flex justify-between items-center text-gray-400 text-xs">
            <span>Elena Chen • 6 min read</span>
            <a href="blog-post.html" class="text-blue-600 font-medium">Read →</a>
          </div>
        </div>
      </article>

      <!-- Post 2 -->
      <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition animate-fade-up delay-1">
        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800&q=80" alt="Tech habits" class="w-full h-56 object-cover">
        <div class="p-6">
          <span class="inline-block bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs mb-2">Technology</span>
          <h5 class="text-lg font-semibold mb-2">Building Sustainable Tech Habits</h5>
          <p class="text-gray-500 text-sm mb-4">Practical strategies for a healthier relationship with our devices and digital lives.</p>
          <div class="flex justify-between items-center text-gray-400 text-xs">
            <span>David Park • 5 min read</span>
            <a href="blog-post.html" class="text-blue-600 font-medium">Read →</a>
          </div>
        </div>
      </article>

      <!-- Post 3 -->
      <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition animate-fade-up delay-2">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&q=80" alt="Edge Computing" class="w-full h-56 object-cover">
        <div class="p-6">
          <span class="inline-block bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs mb-2">Technology</span>
          <h5 class="text-lg font-semibold mb-2">The Rise of Edge Computing</h5>
          <p class="text-gray-500 text-sm mb-4">Understanding how distributed computing is changing the way we process data.</p>
          <div class="flex justify-between items-center text-gray-400 text-xs">
            <span>Alex Thompson • 7 min read</span>
            <a href="blog-post.html" class="text-blue-600 font-medium">Read →</a>
          </div>
        </div>
      </article>

      <!-- Post 4 -->
      <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition animate-fade-up delay-3">
        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&q=80" alt="Cybersecurity" class="w-full h-56 object-cover">
        <div class="p-6">
          <span class="inline-block bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs mb-2">Technology</span>
          <h5 class="text-lg font-semibold mb-2">Cybersecurity in the Modern Age</h5>
          <p class="text-gray-500 text-sm mb-4">Essential practices to protect your digital identity and personal data.</p>
          <div class="flex justify-between items-center text-gray-400 text-xs">
            <span>Maria Garcia • 8 min read</span>
            <a href="blog-post.html" class="text-blue-600 font-medium">Read →</a>
          </div>
        </div>
      </article>
    </div>
  </section>

  <!-- Other Categories -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold mb-6">Explore Other Topics</h2>
      <div class="flex flex-wrap gap-4">
        <a href="category.html?cat=lifestyle" class="flex items-center gap-2 px-5 py-2 border border-gray-300 rounded-full hover:bg-blue-600 hover:text-white transition">🌿 Lifestyle</a>
        <a href="category.html?cat=travel" class="flex items-center gap-2 px-5 py-2 border border-gray-300 rounded-full hover:bg-blue-600 hover:text-white transition">✈️ Travel</a>
        <a href="category.html?cat=food" class="flex items-center gap-2 px-5 py-2 border border-gray-300 rounded-full hover:bg-blue-600 hover:text-white transition">🍳 Food & Recipes</a>
        <a href="category.html?cat=creativity" class="flex items-center gap-2 px-5 py-2 border border-gray-300 rounded-full hover:bg-blue-600 hover:text-white transition">🎨 Creativity</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-100 py-16 mt-16">
    <div class="container mx-auto grid md:grid-cols-3 gap-8">
      <div>
        <h4 class="text-xl font-bold mb-3">The Journal</h4>
        <p class="text-gray-500 max-w-xs">A curated collection of stories, insights, and ideas. We believe in the power of words to inspire, educate, and connect.</p>
      </div>
      <div>
        <h6 class="font-semibold mb-3">Categories</h6>
        <ul class="space-y-2 text-gray-500">
          <li><a href="category.html?cat=technology" class="hover:text-blue-600">Technology</a></li>
          <li><a href="category.html?cat=lifestyle" class="hover:text-blue-600">Lifestyle</a></li>
          <li><a href="category.html?cat=travel" class="hover:text-blue-600">Travel</a></li>
          <li><a href="category.html?cat=food" class="hover:text-blue-600">Food & Recipes</a></li>
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
