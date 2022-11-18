@extends('layouts.dashboard')
@section('main')

<div class="mt-7 bg-gelap/5 p-6 rounded-md mb-10">
    <h1 class="text-3xl font-nunito font-bold text-gelap">Create New Post</h1>
    <form action="{{ route('post.update',$posts->id) }}" class="mt-2" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium mb-2 dark:text-white">Title</label>
            <input type="text" id="title" name="title"
                class="py-3 px-4 block w-full border-gray-200 @error('title') border-red-500 border-2 @enderror rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                placeholder="your title post" value="{{ $posts->title }}">
            @error('title')
            <p class="text-sm text-red-500 mt-2" id="hs-input-helper-text">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="category" class="block text-sm font-medium mb-2 dark:text-white">Category</label>
            <select id="category" name="category"
                class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                <option value="{{ $posts->category->id }}">{{ $posts->category->name }}</option>
                {{ $posts }}
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block">
                <span class="sr-only">Choose profile photo</span>
                <input type="file" class="block w-full text-sm text-gray-500
                  file:mr-4 file:py-2 file:px-4
                  file:rounded-md file:border-0
                  file:text-sm file:font-semibold
                  file:bg-gray-800 file:text-white
                  hover:file:bg-gray-900
                " name="file" value="{{ $posts->cover }}" />
            </label>
        </div>
        <div class="mb-4">
            <label for="content_text" class="block text-sm font-medium mb-2 dark:text-white">Content Text</label>
            <textarea id="content_text" name="content_text">
                {{ $posts->content_text }}
            </textarea>
        </div>
        <div class="mb-4">
            <button type="submit"
                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-indigo-500 text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                Update Post
            </button>
        </div>
    </form>
</div>

<script>
    var editor1 = new RichTextEditor("#content_text");

</script>
@endsection
