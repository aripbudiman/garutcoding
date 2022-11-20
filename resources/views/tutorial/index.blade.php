@extends('layouts.home')
@section('main')
<main class="mt-20 mx-auto w-full xl:w-[1140px]">
    <h2 class="text-xl xl:text-2xl text-lightblue font-bublegum pl-5 pt-5 pb-2"><i
            class="fa-solid fa-book text-gelap"></i>
        Explore
    </h2>
    <h3 class=" text-xl xl:text-3xl pl-5 font-semibold font-roboto text-gelap">Semua Artikel Berdasarkan Bahasa</h3>
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-5 mt-10 mb-20">
        @foreach ($categories as $category)
        <a href="{{ route('showArtikel',['id'=>$category->id]) }}"
            class="w-full bg-white p-4 rounded-lg shadow-md flex">
            <img src="{{ $category->logo }}" class="w-32">
            <div class="ml-4">
                <h1 class="text-1xl font-nunito text-gelap">{{ $category->name }}</h1>
                <i class="fa-solid fa-book text-gelap"></i> {{ $category->posts_count }} Artikel
            </div>
        </a>
        @endforeach
    </div>
</main>
@endsection
