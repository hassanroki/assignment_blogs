@extends('admin.layout')

@section('title', 'Blogs')

@section('content')

    <div class="flex justify-between mb-4">
        <h2 class="text-xl font-semibold">All Blogs</h2>
        <a href="{{ route('blogs.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Blog</a>
    </div>

    <table class="w-full bg-white shadow rounded-lg overflow-hidden">
        <thead class="bg-gray-200 text-gray-600 text-sm">
            <tr>
                <th class="py-3 px-4 text-left">Image</th>
                <th class="py-3 px-4 text-left">Title</th>
                <th class="py-3 px-4 text-left">Category</th>
                <th class="py-3 px-4 text-left">Published</th>
                <th class="py-3 px-4 text-left">Feature</th>
                <th class="py-3 px-4">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($blogs as $blog)
                <tr class="border-b">
                    <td class="py-3 px-4">
                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" class="h-12 rounded">
                        @endif
                    </td>
                    <td class="py-3 px-4">{{ $blog->title }}</td>
                    <td class="py-3 px-4">{{ $blog->category->name }}</td>
                    <td class="py-3 px-4">{{ $blog->published_at }}</td>
                    <td class="py-3 px-4">
                        <span
                            class="px-2 py-1 rounded-full text-xs {{ $blog->isFeature ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ $blog->isFeature ? 'Featured' : 'Normal' }}
                        </span>
                    </td>
                    <td class="py-3 px-4 flex gap-2">
                        <a href="{{ route('blogs.edit', $blog->id) }}"
                            class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>

                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="bg-red-600 text-white px-3 py-1 rounded"
                                onclick="return confirm('Delete this blog?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
