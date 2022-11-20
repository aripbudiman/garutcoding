@extends('layouts.home')
@section('main')
<div class="mt-20 mx-auto w-full xl:w-[821px] bg-white  rounded-lg p-10">
    <img src="{{ asset($categories->logo) }}" class="w-60">
    <hr class="mt-3">
    @foreach ($categories->posts as $post)
    <a href="{{ route('home.show',$post->slug) }}"
        class="block mt-5 bg-biru/20 hover:bg-biru p-3 rounded-md">#{{ $post->title }}</a>
    @endforeach
</div>
@endsection
