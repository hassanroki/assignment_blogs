@extends('admin.layout')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Create New Blog</h2>

    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        {{-- Category --}}
        <div>
            <label class="block mb-1 font-medium">Category</label>
            <select name="category_id" class="w-full border p-2 rounded">
                <option value="">Select Category</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        {{-- Title --}}
        <div>
            <label class="block mb-1 font-medium">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="w-full border p-2 rounded">
            @error('title')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        {{-- Short Description --}}
        <div>
            <label class="block mb-1 font-medium">Short Description</label>
            <textarea name="short_desc" class="w-full border p-2 rounded">{{ old('short_desc') }}</textarea>
            @error('short_desc')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        {{-- Image --}}
        <div>
            <label class="block mb-1 font-medium">Image</label>
            <input type="file" name="image" class="w-full border p-2 rounded">
            @error('image')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            {{-- Author --}}
            <div>
                <label class="block mb-1 font-medium">Author</label>
                <input type="text" name="author" value="{{ old('author') }}" class="w-full border p-2 rounded"
                    placeholder="Admin">
            </div>

            {{-- Read Minutes --}}
            <div>
                <label class="block mb-1 font-medium">Read Time (minutes)</label>
                <input type="number" name="read_minutes" value="{{ old('read_minutes') }}" min="1" max="60"
                    class="w-full border p-2 rounded" placeholder="5">
                @error('read_minutes')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Published At --}}
        <div>
            <label class="block mb-1 font-medium">Publish Date & Time</label>
            <input type="datetime-local" name="published_at" value="{{ old('published_at') }}"
                class="w-full border p-2 rounded">
            @error('published_at')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        {{-- isFeature --}}
        <div>
            <label class="block mb-1 font-medium">Feature Blog?</label>
            <select name="isFeature" class="w-full border p-2 rounded">
                <option value="0" {{ old('isFeature') == '0' ? 'selected' : '' }}>Normal</option>
                <option value="1" {{ old('isFeature') == '1' ? 'selected' : '' }}>Featured</option>
            </select>
            @error('isFeature')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>


        {{-- Full Description --}}
        <div>
            <label class="block mb-1 font-medium">Full Description</label>
            <textarea name="full_desc" rows="6" class="w-full border p-2 rounded">{{ old('full_desc') }}</textarea>
            @error('full_desc')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <button class="px-5 py-2 bg-blue-600 text-white rounded">
            Create Blog
        </button>
    </form>
@endsection
