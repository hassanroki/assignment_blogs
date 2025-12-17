@extends('frontend.layout')
@section('content')
    <!-- Hero Section -->
   @include('frontend.pages.hero')

    <!-- Categories Section -->
    @include('frontend.pages.categories')

    <!-- Recent Posts Section -->
    @include('frontend.pages.recent_blog')

    <!-- Newsletter Section -->
   @include('frontend.pages.newsletter')
@endsection
