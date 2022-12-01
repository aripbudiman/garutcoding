@extends('layouts.home')
@section('main')
<div class="my-20 mx-auto w-full xl:w-[821px] bg-white  rounded-lg p-10 shadow-md">
    <div class="flex">
        <img src="{{ asset($categories->logo) }}" class="w-60">
        <h1 class="text-5xl font-bublegum ml-3 text-gelap">{{ $categories->name }}</h1>
    </div>
    <hr class="mt-3">
    @foreach ($categories->posts as $post)
    <a href="{{ route('home.show',$post->slug) }}" class="block mt-3 bg-biru/20 hover:bg-biru p-3 rounded-md"><i
            class="fa-regular fa-file-lines"> </i> {{ $post->title }}</a>
    @endforeach
</div>
@endsection
