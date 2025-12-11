@extends('admin.layout')

@section('content')
<h2 class="text-xl font-semibold mb-4">Create New Blog</h2>

<form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <div>
        <label class="block mb-1 font-medium">Category</label>
        <select name="category_id" class="w-full border p-2 rounded">
            <option value="">Select Category</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
        @error('category_id') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block mb-1 font-medium">Title</label>
        <input type="text" name="title" class="w-full border p-2 rounded">
        @error('title') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block mb-1 font-medium">Short Description</label>
        <textarea name="short_desc" class="w-full border p-2 rounded"></textarea>
    </div>

    <div>
        <label class="block mb-1 font-medium">Image</label>
        <input type="file" name="image" class="w-full border p-2 rounded">
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block mb-1 font-medium">Author</label>
            <input type="text" name="author" class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block mb-1 font-medium">Read Time</label>
            <input type="time" name="read_time" class="w-full border p-2 rounded">
        </div>
    </div>

    <div>
        <label class="block mb-1 font-medium">Published Date</label>
        <input type="date" name="published_date" class="w-full border p-2 rounded">
    </div>

    <div>
        <label class="block mb-1 font-medium">Full Description</label>
        <textarea name="full_desc" rows="6" class="w-full border p-2 rounded"></textarea>
        @error('full_desc') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <button class="px-5 py-2 bg-blue-600 text-white rounded">Create Blog</button>
</form>
@endsection
