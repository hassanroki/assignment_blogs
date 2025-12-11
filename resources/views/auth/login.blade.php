<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">

        <h2 class="text-2xl font-bold text-center mb-6">Admin Login</h2>

        <!-- Errors -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 px-4 py-3 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Login Form -->
        <form action="{{ url('/login') }}" method="POST">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label class="block font-semibold mb-1">Email</label>
                <input type="email" name="email"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-200"
                    placeholder="Enter your email" value="{{ old('email') }}" required>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="block font-semibold mb-1">Password</label>
                <input type="password" name="password"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-200"
                    placeholder="Enter your password" required>
            </div>

            <!-- Submit Button -->
            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition">
                Login
            </button>

        </form>

        {{-- <!-- Register Link -->
        <p class="text-center text-sm text-gray-600 mt-4">
            Don’t have an account?
            <a href="{{ route('register') }}" class="text-blue-600 font-medium hover:underline">
                Register
            </a>
        </p> --}}

    </div>

</body>

</html>
