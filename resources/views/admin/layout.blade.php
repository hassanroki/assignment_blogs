<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Admin Panel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style></style>
    @endif

</head>

<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white min-h-screen hidden md:block">
        <div class="p-6 text-2xl font-bold">
            Admin Panel
        </div>

        <nav class="mt-6">
            <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-6 hover:bg-gray-700">Dashboard</a>
            <a href="{{ route('categories.index') }}" class="block py-2.5 px-6 hover:bg-gray-700">Manage Categories</a>
            <a href="{{ route('blogs.index') }}" class="block py-2.5 px-6 hover:bg-gray-700">Manage Blogs</a>
            <a href="{{ route('newsletter.list') }}" class="block py-2.5 px-6 hover:bg-gray-700">NewsLetter</a>

            <form action="{{ route('logout') }}" method="POST" class="mt-4">
                @csrf
                <button class="w-full text-left py-2.5 px-6 hover:bg-red-600">Logout</button>
            </form>
        </nav>
    </aside>


    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col">

        <!-- Top Navbar -->
        <header class="bg-white shadow-md px-4 py-3 flex justify-between items-center">
            <h2 class="text-xl font-semibold">@yield('title')</h2>

            <button class="md:hidden bg-gray-800 text-white px-4 py-2 rounded">
                Menu
            </button>
        </header>

        <!-- Page Content -->
        <main class="p-6">
            @yield('content')
        </main>
    </div>

</body>

</html>
