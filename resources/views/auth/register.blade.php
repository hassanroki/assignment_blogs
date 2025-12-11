<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
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

<body class="bg-gray-200 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">

        <h2 class="text-2xl font-bold text-center mb-6">Create Admin Account</h2>

        <!-- Errors -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 px-4 py-3 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Register Form -->
        <form action="{{ url('/register') }}" method="POST">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label class="block font-semibold mb-1">Full Name</label>
                <input type="text" name="name"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-200"
                    placeholder="Your full name" value="{{ old('name') }}" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block font-semibold mb-1">Email</label>
                <input type="email" name="email"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-200"
                    placeholder="Your email address" value="{{ old('email') }}" required>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="block font-semibold mb-1">Password</label>
                <input type="password" name="password"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-200"
                    placeholder="Choose a password" required>
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label class="block font-semibold mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-200"
                    placeholder="Re-type your password" required>
            </div>

            <!-- Submit -->
            <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg transition">
                Register
            </button>
        </form>

        <!-- Login Link -->
        <p class="text-center text-sm text-gray-600 mt-4">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline">
                Login
            </a>
        </p>

    </div>

</body>

</html>
