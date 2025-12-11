@extends('admin.layout')

@section('content')
<h2 class="text-xl font-semibold mb-4">Edit Blog</h2>

<form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    @method('PUT')

    {{-- Category --}}
    <div>
        <label class="block mb-1 font-medium">Category</label>
        <select name="category_id" class="w-full border p-2 rounded">
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ $blog->category_id == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
        @error('category_id') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    {{-- Title --}}
    <div>
        <label class="block mb-1 font-medium">Title</label>
        <input type="text" name="title" value="{{ $blog->title }}" class="w-full border p-2 rounded">
        @error('title') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    {{-- Short Description --}}
    <div>
        <label class="block mb-1 font-medium">Short Description</label>
        <textarea name="short_desc" class="w-full border p-2 rounded">{{ $blog->short_desc }}</textarea>
        @error('short_desc') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    {{-- Old Image --}}
    <div>
        <label class="block mb-1 font-medium">Current Image</label>
        @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" class="w-32 h-32 object-cover rounded mb-2">
        @else
            <p class="text-gray-500">No image uploaded</p>
        @endif
    </div>

    {{-- New Image --}}
    <div>
        <label class="block mb-1 font-medium">Change Image</label>
        <input type="file" name="image" class="w-full border p-2 rounded">
        @error('image') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    {{-- Author + Read Time --}}
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block mb-1 font-medium">Author</label>
            <input type="text" name="author" value="{{ $blog->author }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block mb-1 font-medium">Read Time</label>
            <input type="text" name="read_time" value="{{ $blog->read_time }}" class="w-full border p-2 rounded">
        </div>
    </div>

    {{-- Published Date --}}
    <div>
        <label class="block mb-1 font-medium">Published Date</label>
        <input type="date" name="published_date" value="{{ $blog->published_date }}" class="w-full border p-2 rounded">
        @error('published_date') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    {{-- Full Description --}}
    <div>
        <label class="block mb-1 font-medium">Full Description</label>
        <textarea name="full_desc" rows="6" class="w-full border p-2 rounded">{{ $blog->full_desc }}</textarea>
        @error('full_desc') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    {{-- Submit --}}
    <button class="px-5 py-2 bg-blue-600 text-white rounded">Update Blog</button>
</form>

@endsection
