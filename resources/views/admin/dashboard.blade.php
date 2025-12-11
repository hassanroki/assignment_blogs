@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <div class="bg-white shadow rounded-lg p-6 border-l-4 border-blue-500">
        <h4 class="text-gray-600 text-sm uppercase">Total Categories</h4>
        <p class="text-3xl font-bold mt-2">{{ $totalCategory }}</p>
    </div>

    <div class="bg-white shadow rounded-lg p-6 border-l-4 border-green-500">
        <h4 class="text-gray-600 text-sm uppercase">Total Blogs</h4>
        <p class="text-3xl font-bold mt-2">{{ $totalBlog }}</p>
    </div>

</div>

@endsection
