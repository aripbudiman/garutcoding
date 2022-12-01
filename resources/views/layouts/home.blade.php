<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}" />
    {{-- font family --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Autour+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    @vite('resources/css/hightliter.css')
    @vite('resources/js/app.js')
    <title>{{ $title }}</title>
</head>

<body class="bg-bg flex flex-col h-full">
    <header
        class="flex flex-wrap sm:justify-start sm:flex-nowrap fixed z-50 w-full bg-lightblue text-sm py-1 dark:bg-white">
        <nav class="max-w-[1140px] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
            <div class="flex items-center justify-between">
                <a href="/"
                    class="flex-none text-xl xl:text-2xl font-bublegum font-semibold text-white hover:text-gelap hover:transition-all hover:delay-75"
                    href="#"><i class="fa-solid fa-laptop-code"></i>
                    Garut Coding</a>
                <div class="sm:hidden">
                    <button type="button"
                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border border-white font-medium  text-white shadow-sm align-middle hover:bg-gray-700/[.25] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-lightblue focus:ring-lightblue transition-all text-sm dark:bg-gelap dark:hover:bg-gelap dark:border-gray-700 dark:text-white dark:hover:text-white dark:focus:ring-offset-gelap"
                        data-hs-collapse="#navbar-dark" aria-controls="navbar-dark" aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="navbar-dark"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5">
                    <a class="font-medium text-white xl:text-lg font-nunito hover:text-gelap" href="/"
                        aria-current="page">Home</a>
                    <a class="font-medium text-white xl:text-lg font-nunito hover:text-gelap dark:text-gelap dark:hover:text-gray-400"
                        href="{{ route('tutorial.index') }}">Tutorial</a>
                    <a class="font-medium text-white xl:text-lg font-nunito hover:text-gelap dark:text-gelap dark:hover:text-gray-400"
                        href="#">About</a>
                    <a class="font-medium text-white xl:text-lg font-nunito hover:text-gelap dark:text-gelap dark:hover:text-gray-400"
                        href="#">Contact</a>
                    <div class="flex flex-row items-center justify-end gap-2">
                        <div class="hs-dropdown relative inline-flex" data-hs-dropdown-placement="bottom-right">
                            <button id="hs-dropdown-with-header" type="button"
                                class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center gap-2 h-[3.375rem] w-[3.375rem] rounded-full font-medium  text-gray-700 align-middle transition-all text-xs dark:bg-gray-800 dark:hover:bg-slate-800 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800">
                                <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full ring-2 ring-white dark:ring-gelap"
                                    src=" @if (Auth::check()) {{ asset(Auth::user()->path_profile) }} @else {{ asset('assets/user.png') }} @endif"
                                    alt="Image Description">
                            </button>

                            @if (Auth::check())
                            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] z-10 bg-white shadow-md rounded-lg p-2 dark:bg-gray-800 dark:border dark:border-gray-700"
                                aria-labelledby="hs-dropdown-with-header">
                                <div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg dark:bg-gray-700">
                                    {{-- <p class="text-sm text-gray-500 dark:text-gray-400">Signed in as</p> --}}
                                    <p class="text-sm font-medium text-gray-800 dark:text-gray-300">
                                        @if (Auth::check() == 1)
                                        {{ Auth::user()->name }}</p>
                                    @else
                                    <a href="{{ route('login') }}" class="text-biru font-nunito underline">Anda belum
                                        login</a>
                                    @endif

                                </div>
                                <div class="mt-2 py-2 first:pt-0 last:pb-0">
                                    @if (Auth::user()->role == 'admin')
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gelap hover:bg-gelap/5 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="{{ route('dashboard') }}">
                                        <i class="fa-solid fa-gauge"></i>
                                        Dashboard
                                    </a>
                                    @endif
                                    <form action="{{ route('edit_profile',Auth::id()) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="flex items-center gap-x-3.5 px-3 rounded-md text-sm text-gelap hover:bg-gelap/5 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                            <i class="fa-regular fa-user"></i>
                                            Profile
                                        </button>
                                    </form>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gelap hover:bg-gelap/5 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="#">
                                        <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                            fill="currentColor">
                                            <path
                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                        </svg>
                                        Newsletter
                                    </a>

                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gelap hover:bg-gelap/5 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="#">
                                        <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                            fill="currentColor">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                        </svg>
                                        Team Account
                                    </a>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gelap hover:bg-gelap/5 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                            <i class="fa-solid fa-right-from-bracket"></i>
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
        </nav>
    </header>
    <div class="h-[60px]"></div>
    @yield('main')
    <footer class=" bg-gelap">
        <div class="container xl:w-[1140px]  mx-auto pt-16 pb-32 xl:flex justify-between">
            <div class="text-center px-4 lg:px-8">
                <h1 class="text-5xl xl:text-7xl font-bublegum text-light"><i class="fa-solid fa-laptop-code"></i> Garut
                    Coding</h1>
                <h2 class="text-light font-nunito text-sm xl:text-xl pt-3 italic">"Incarlah ilmu coding sampai ke
                    website garut
                    coding"</h2>
                <div class="text-light text-xl flex justify-between pt-5 px-14 xl:px-32">
                    <a href=""><i class="fa-brands fa-instagram"></i>
                        <a href=""><i class="fa-brands fa-facebook"></i>
                            <a href=""><i class="fa-brands fa-youtube"></i>
                                <a href=""><i class="fa-brands fa-whatsapp"></i>
                </div>
            </div>
            <div class="mt-5 px-4 lg:px-8 text-center xl:text-left lg:flex justify-between">
                <ul class="text-light font-nunito">
                    <li class="pb-3 font-bold text-xl">Product</li>
                    <li class="hover:text-lightblue hover:delay-75">Artikel</li>
                    <li class="hover:text-lightblue hover:delay-75">Tutorial</li>
                    <li class="hover:text-lightblue hover:delay-75">Sharing</li>
                </ul>
                <ul class="text-light xl:ml-10 font-nunito">
                    <li class="pb-3 font-bold text-xl">Social Media</li>
                    <li class="hover:text-lightblue hover:delay-75">Facebook</li>
                    <li class="hover:text-lightblue hover:delay-75">Instagram</li>
                    <li class="hover:text-lightblue hover:delay-75">YouTube</li>
                    <li class="hover:text-lightblue hover:delay-75">WhatsApp</li>
                </ul>
                <ul class="text-light xl:ml-10 font-nunito">
                    <li class="pb-3 font-bold text-xl">Company</li>
                    <li class="hover:text-lightblue hover:delay-75">About</li>
                    <li class="hover:text-lightblue hover:delay-75">FAQ</li>
                    <li class="hover:text-lightblue hover:delay-75">Contact</li>
                </ul>
            </div>
        </div>
        <div class="container mx-auto border-t-[1px] border-light/30 h-10">
            <p class="text-light font-nunito text-center">©{{ date('Y') }} garut coding . Arip budiman ❤</p>
        </div>
    </footer>
</body>

</html>
