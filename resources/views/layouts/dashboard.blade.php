<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/richtexteditor/rte_theme_default.css" />
    <script type="text/javascript" src="{{ asset('/richtexteditor/rte.js') }}"></script>
    <script type="text/javascript" src='{{ asset('/richtexteditor/plugins/all_plugins.js') }}'></script>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    @vite('resources/css/hightliter.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-light flex flex-col h-full">
    <header class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-gelap text-sm py-4 dark:bg-white">
        <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
            <div class="flex items-center justify-between">
                <a class="flex-none text-xl font-bublegum font-semibold text-white dark:text-gelap"
                    href="{{ url('/') }}"><i class="fa-solid fa-laptop-code"></i>
                    Garut Coding</a>
                <div class="sm:hidden">
                    <button type="button"
                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border border-light font-medium bg-gelap text-light shadow-sm align-middle hover:bg-gray-700/[.25] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
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
                    <a class="font-medium text-lightblue" href="{{ route('dashboard') }}"
                        aria-current="page">Dashboard</a>
                    <a class="font-medium text-light hover:text-lightblue"
                        href="{{ route('category.index') }}">Category</a>
                    <a class="font-medium text-light hover:text-lightblue" href="{{ route('post.index') }}">Posts</a>
                    <a class="font-medium text-light hover:text-lightblue" href="#">Blog</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="w-full xl:w-[1140px] container mx-auto">
        @yield('main')
    </main>
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
