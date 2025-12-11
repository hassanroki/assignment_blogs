@extends('admin.layout')

@section('title', 'Categories')

@section('content')

<div class="flex justify-between mb-4">
    <h2 class="text-xl font-semibold">All Categories</h2>
    <a href="{{ route('categories.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Add Category
    </a>
</div>

<div class="overflow-x-auto">
    <table class="w-full bg-white shadow rounded-lg overflow-hidden">
        <thead class="bg-gray-200 text-gray-600 text-sm">
            <tr>
                <th class="py-3 px-4 text-left">Name</th>
                <th class="py-3 px-4 text-left">Description</th>
                <th class="py-3 px-4 text-left">Image</th>
                <th class="py-3 px-4">Actions</th>
            </tr>
        </thead>

        <tbody class="text-gray-700">
            @foreach($categories as $category)
            <tr class="border-b">
                <td class="py-3 px-4">{{ $category->name }}</td>
                <td class="py-3 px-4">{{ Str::limit($category->description, 40) }}</td>
                <td class="py-3 px-4">
                    @if($category->image)
                        <img src="{{ asset('storage/'.$category->image) }}" class="h-12 rounded" />
                    @endif
                </td>
                <td class="py-3 px-4 flex gap-2">
                    <a href="{{ route('categories.edit', $category->id) }}"
                       class="px-3 py-1 bg-yellow-500 text-white rounded">Edit</a>

                    <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="px-3 py-1 bg-red-600 text-white rounded"
                        onclick="return confirm('Delete this category?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
