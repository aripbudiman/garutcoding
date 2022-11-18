@extends('layouts.home')
@section('main')
<div class="w-full xl:w-full">
    <div class="hero-section pb-10 bg-gelap" id="hero-section">
        <div class="logo">
            <h1 class="text-white text-center text-4xl pt-14 font-bublegum xl:text-8xl"><i
                    class="fa-solid fa-laptop-code"></i>
                Garut Coding</h1>
        </div>
        <blockquote class="relative">
            <div class="relative z-10 text-center">
                <p class="text-white font-nunito mt-5 text-xl dark:text-white xl:text-2xl"><em>
                        "Incarlah ilmu coding sampai ke website Garut Coding"
                </p></em>
            </div>
        </blockquote>
        <div class="text-center mt-16">
            @if (!Auth::check())
            <a href="{{ route('register') }}"
                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                Register
            </a>
            <a href="{{ route('login') }}"
                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                Login <i class="fa-solid fa-right-to-bracket"></i>
            </a>
            @else
            <a href="{{ route('register') }}"
                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                Get Started
            </a>
            @endif
        </div>
    </div>
</div>
<!-- ========== END HEADER ========== -->
<main class="mt-20 mx-auto w-full xl:w-[1140px]">
    <div class="kategori bg-light pb-10" id="kategori">
        <h2 class="text-xl xl:text-2xl text-lightblue font-bublegum pl-5 pt-5 pb-2"><i
                class="fa-solid fa-book text-gelap"></i>
            Kategori
        </h2>
        <h3 class=" text-xl xl:text-3xl pl-5 font-semibold font-roboto text-gelap">Mau belajar apa hari ini?</h3>
        <div class="list-kategori mt-10 flex flex-wrap justify-between px-10">
            <a href="" class="w-full xl:w-[31%] bg-white box-border my-3  p-4 rounded-md shadow-md hover:scale-105">
                <div class="icon w-16 h-16 bg-lightblue flex justify-center items-center rounded-lg shadow-md">
                    {{-- <i class="fa-brands fa-php text-5xl text-light"></i> --}}
                    <i class="fa-brands fa-css3 text-5xl text-light"></i>
                </div>
                <div class="text mt-2">
                    <h2 class="font-bold text-lg xl:text-xl font-nunito">CSS (Cascading Stylesheet)</h2>
                    <p class="text-justify font-nunito text-sm xl:text-md">Lorem ipsum dolor, sit amet
                        consectetur
                        adipisicing
                        elit.
                    </p>
                </div>
            </a>
            <a href="" class="w-full xl:w-[31%] box-border my-3 bg-white p-4 rounded-md shadow-md hover:scale-105">
                <div class="icon w-16 h-16 bg-kuning flex justify-center items-center rounded-lg shadow-md">
                    <i class="fa-brands fa-js text-5xl text-gelap"></i>
                </div>
                <div class="text mt-2">
                    <h2 class="font-bold text-lg xl:text-xl font-nunito">Javascript</h2>
                    <p class="text-justify font-nunito text-sm xl:text-md">Lorem ipsum dolor, sit amet
                        consectetur
                        adipisicing
                        elit.
                    </p>
                </div>
            </a>
            <a href="" class="w-full xl:w-[31%] bg-white my-3 box-border p-4 rounded-md shadow-md hover:scale-105">
                <div class="icon w-16 h-16 bg-merah flex justify-center items-center rounded-lg shadow-md">
                    <i class="fa-brands fa-laravel text-light text-5xl"></i>
                </div>
                <div class="text mt-2">
                    <h2 class="font-bold text-lg xl:text-xl font-nunito">Laravel</h2>
                    <p class="text-justify font-nunito text-sm xl:text-md">Lorem ipsum dolor, sit amet
                        consectetur
                        adipisicing
                        elit.
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="terupdate bg-light" id="terupdate">
        <h2 class=" text-xl xl:text-2xl text-lightblue font-bublegum pl-5 pt-5 pb-2"><i
                class="fa-regular fa-newspaper text-gelap"></i>
            Terupdate</h2>
        <h3 class="text-xl xl:text-3xl pl-5 font-semibold font-roboto text-gelap pb-10">Buruan ada artikel baru nich
            😍
        </h3>
        <div class="list-terupdate flex flex-wrap justify-between mt-10 px-10">
            @foreach ($posts as $post)
            <a class="flex flex-col group bg-white w-full xl:w-[31%] mb-7  shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition dark:bg-gelap dark:border-gelap dark:shadow-gelap/70"
                href="{{ route('home.show',$post->slug) }}">
                <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden">
                    <img class="w-full h-full absolute top-0 left-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
                        src="{{ asset($post->cover) }}" alt="Image Description">
                </div>
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold font-nunito text-gray-800 dark:text-white">
                        {{ $post->category->name }}: {{ $post->title }}
                    </h3>
                    <p class="mt-3 text-gelap font-nunito text-sm">
                        <img class="inline-block h-[1.5rem] w-[1.5rem] rounded-full ring-2 ring-white dark:ring-gelap"
                            src="{{ asset($post->user->path_profile) }}" alt="Image Description">
                        {{ $post->user->name }} <i class="fa-regular fa-clock"></i>
                        {{ date('d M Y',strtotime($post->published)) }}
                    </p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</main>
@endsection
