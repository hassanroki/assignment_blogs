@extends('admin.layout')

@section('title', 'Create Category')

@section('content')

    <div class="max-w-3xl mx-auto">
        <!-- Page Header -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Create New Category</h1>
            <p class="text-gray-500 text-sm">Add a new blog category with details.</p>
        </div>

        <!-- Form Card -->
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-8 rounded-2xl shadow-md border border-gray-100">
            @csrf

            {{-- Category Name --}}
            <div class="mb-5">
                <label class="block font-semibold text-gray-700 mb-1">Category Name <span
                        class="text-red-500">*</span></label>
                <input type="text" name="name"
                    class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="e.g. Technology, Lifestyle" value="{{ old('name') }}">

                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Description --}}
            <div class="mb-5">
                <label class="block font-semibold text-gray-700 mb-1">Description</label>
                <input type="text" name="description"
                    class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Short description" value="{{ old('description') }}">
            </div>


            {{-- Image Upload --}}
            <div class="mb-5">
                <label class="block font-semibold text-gray-700 mb-1">Category Image</label>

                <div class="border border-gray-300 rounded-lg p-4 cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                    <input type="file" name="image" class="w-full text-gray-700">
                </div>

                <p class="text-gray-400 text-xs mt-1">Recommended: 600x400px (JPG, PNG)</p>
            </div>

            {{-- Submit --}}
            <button
                class="w-full md:w-auto bg-blue-600 text-white px-6 py-2.5 rounded-lg font-medium hover:bg-blue-700 transition">
                Save Category
            </button>

        </form>
    </div>

@endsection
