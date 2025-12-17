<header class="sticky top-0 bg-white border-b z-50">
    <nav class="container mx-auto flex items-center justify-between py-4 px-4">

        <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-900">
            The Journal
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex gap-8">
            <a href="{{ route('home') }}" class="text-gray-800 hover:text-blue-600 font-medium">Home</a>

            @foreach ($latestThreeCategories as $latestThreeCategory)
                <a href="{{ route('category', $latestThreeCategory->id) }}"
                    class="text-gray-800 hover:text-blue-600 font-medium">
                    {{ $latestThreeCategory->name }}
                </a>
            @endforeach
        </div>

        <!-- Mobile Button -->
        <button id="menuBtn"
            class="md:hidden p-2 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t">
        <div class="flex flex-col p-4 space-y-3">
            <a href="{{ route('home') }}" class="text-gray-800 font-medium">Home</a>

            @foreach ($latestThreeCategories as $latestThreeCategory)
                <a href="{{ route('category', $latestThreeCategory->id) }}"
                    class="text-gray-800 font-medium">
                    {{ $latestThreeCategory->name }}
                </a>
            @endforeach
        </div>
    </div>
</header>
<script>
    document.getElementById('menuBtn').addEventListener('click', function () {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
</script>
