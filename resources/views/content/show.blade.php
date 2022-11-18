@extends('layouts.dashboard')
@section('main')
<div class="bg-white my-10 p-8 xl:p-16 rounded-lg shadow-md w-full xl:w-[821px]">
    <p class="text-slate-700 capitalize mb-4 font-nunito"><img src="{{ asset($post->user->path_profile) }}"
            class="w-8 inline mr-2 rounded-full h-8">{{ $post->user->name }} .
        {{ date('d M Y',strtotime($post->published)) }}
    </p>
    <h1 class="text-5xl font-bublegum font-bold text-slate-700 mb-8">{{ $post->title }}</h1>
    <hr class="border-1 border-slate-700/30 mb-5">
    <a href=""
        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-blue-100 text-blue-800 mb-5">#{{ $post->category->name }}</a>
    <img src="{{ asset($post->cover) }}" class="rounded-lg w-full mb-5">
    <div class="text-xl font-roboto text-slate-700">{!! $post->content_text !!}</div>
</div>
@endsection
