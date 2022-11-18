@extends('layouts.dashboard')
@section('main')
<div class="card-group mt-10 px-5 grid xl:grid-cols-3 grid-cols-1 gap-5 mb-10">
    <div class="bg-lightblue shadow-md p-5 flex items-center justify-between rounded-lg">
        <div class="title">
            <h1 class="text-2xl xl:text-3xl text-light font-nunito font-bold">Category</h1>
            <h2 class="text-light text-xl">15 Category</h2>
        </div>
        <div class="icon text-5xl text-light">
            <i class="fa-solid fa-folder"></i>
        </div>
    </div>
    <div class="bg-lightblue shadow-md p-5 flex items-center justify-between rounded-lg">
        <div class="title">
            <h1 class="text-2xl xl:text-3xl text-light font-nunito font-bold">Post</h1>
            <h2 class="text-light text-xl">15 Post</h2>
        </div>
        <div class="icon text-5xl text-light">
            <i class="fa-solid fa-pencil"></i>
        </div>
    </div>
    <div class="bg-lightblue shadow-md p-5 flex items-center justify-between rounded-lg">
        <div class="title">
            <h1 class="text-2xl xl:text-3xl text-light font-nunito font-bold">Users</h1>
            <h2 class="text-light text-xl">15</h2>
        </div>
        <div class="icon text-5xl text-light">
            <i class="fa-solid fa-users"></i>
        </div>
    </div>
</div>
@endsection
