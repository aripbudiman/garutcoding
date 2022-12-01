@extends('layouts.home')
@section('main')
<div class="w-[821px] mx-auto my-10 bg-white p-10 rounded-lg shadow-lg">
    <form action="{{ route('home.update',$users->id) }}" method="POST" enctype="multipart/form-data"
        class="text-center">
        @csrf
        @method('PUT')
        <h1 class="text-center text-3xl font-bublegum text-gelap">Profile Setting</h1>
        <hr class="my-3">
        <div class="mt-5 grid grid-cols-2 gap-5">
            <div class="left">
                <div class="mx-auto w-80 mb-4">
                    <img src="{{ asset($users->path_profile) }}" class="rounded-full border-4 border-slate-800/75">
                </div>
                <label class="inline-block">
                    <span class="sr-only">Choose profile photo</span>
                    <input type="file" class="block w-full text-sm text-gray-500
                  file:mr-4 file:py-2 file:px-4
                  file:rounded-md file:border-0
                  file:text-sm file:font-semibold
                  file:bg-blue-500 file:text-white
                  hover:file:bg-blue-600
                " name="image" />
                </label>
            </div>
            <div class="right text-start">
                <div class="mb-4">
                    <label for="hs-leading-icon" class="block text-sm font-medium mb-2 dark:text-white">
                        Nama</label>
                    <div class="relative">
                        <input type="text" id="hs-leading-icon" name="hs-leading-icon"
                            class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                            value="{{ $users->name }}" disabled>
                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                            <i class="fa-regular fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="hs-leading-icon" class="block text-sm font-medium mb-2 dark:text-white">
                        Email</label>
                    <div class="relative">
                        <input type="text" id="hs-leading-icon" name="hs-leading-icon"
                            class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                            value="{{ $users->email }}" disabled>
                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="hs-leading-icon" class="block text-sm font-medium mb-2 dark:text-white">
                        Role</label>
                    <div class="relative">
                        <input type="text"
                            class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                            value="{{ $users->role }}" disabled>
                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                            <i class="fa-regular fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="hs-leading-icon" class="block text-sm font-medium mb-2 dark:text-white">
                        Tanggal Gabung</label>
                    <div class="relative">
                        <input type="text"
                            class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                            value="{{ date('l, d F Y',strtotime($users->created_at)) }}" disabled>
                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                            <i class="fa-regular fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">
        <div class="action text-end">
            <button type="submit"
                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-indigo-500 text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                Update
            </button>
            <button type="button"
                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                Cancel
            </button>
        </div>
    </form>
</div>
@endsection
