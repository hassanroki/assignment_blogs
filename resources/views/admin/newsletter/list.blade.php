@extends('admin.layout')

@section('title', 'Newsletter')

@section('content')

    <div class="flex justify-between mb-4">
        <h2 class="text-xl font-semibold">All Newsletters</h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full bg-white shadow rounded-lg overflow-hidden">
            <thead class="bg-gray-200 text-gray-600 text-sm">
                <tr>
                    <th class="py-3 px-4 text-left">SL</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Actions</th>
                </tr>
            </thead>

            <tbody class="text-gray-700">
                @foreach ($newsLetters as $newsLetter)
                    <tr class="border-b">
                        <td class="py-3 px-4">{{ $loop->iteration }}</td>
                        <td class="py-3 px-4">{{ $newsLetter->email }}</td>
                        <td class="py-3 px-4">
                            <form action="{{ route('newsLetter.destroy', $newsLetter->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button class="px-3 py-1 bg-red-600 text-white rounded"
                                    onclick="return confirm('Delete this Newsletter?')">
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
