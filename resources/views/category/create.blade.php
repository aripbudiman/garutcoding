@extends('layouts.dashboard')
@section('main')
<div class="mt-10">
    <div class="w-96">
        <form action="{{ route('category.store') }}" method="POST" class="text-right">
            @csrf
            <input type="text"
                class="py-3 px-5 block w-full  @error('name') border-red-500  @enderror rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                placeholder="New Category" name="name">

    </div>
    @error('name')
    <div>
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{ $message }}
        </p>
    </div>
    @enderror
    <button type="submit"
        class="py-3 px-4 mt-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-indigo-500 text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
        Save
    </button>
    </form>
</div>
</div>
@endsection
