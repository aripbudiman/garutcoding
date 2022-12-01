@extends('layouts.home')
@section('main')
<div class="bg-white mx-auto my-10 p-8 xl:p-16 rounded-lg shadow-md w-full xl:w-[821px]">
    <p class="text-slate-700 capitalize mb-4 font-nunito"><img src="{{ asset($post->user->path_profile) }}"
            class="w-8 inline mr-2 rounded-full h-8">{{ $post->user->name }} .
        {{ date('d F Y',strtotime($post->published)) }}
    </p>
    <h1 class="text-5xl font-bublegum font-bold text-slate-700 mb-8">{{ $post->title }}</h1>
    <hr class="border-1 border-slate-700/30 mb-5">
    <a href="{{ route('showArtikel',$post->category->id) }}"
        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-blue-100 text-blue-800 mb-5">#{{ $post->category->name }}</a>
    <img src="{{ asset($post->cover) }}" class="rounded-lg w-full mb-5">
    <div class="text-xl font-roboto text-slate-700">{!! $post->content_text !!}</div>
</div>
<div class="bg-white mx-auto my-10 p-8 xl:p-16 rounded-lg shadow-md w-full xl:w-[821px]">
    <div id="disqus_thread"></div>
</div>
{{-- <div class="bg-white mx-auto my-10 p-8 xl:p-16 rounded-lg shadow-md w-full xl:w-[821px]">
    <h3 class="text-center">Bagaimana reaksimu setelah membaca artikel ini?</h3>
    <h4 class="text-center">0 Responses</h4>
    <div class="reaction text-center my-4">
        <a href="" class="text-5xl">💯</a>
        <a href="" class="text-5xl">😍</a>
        <a href="" class="text-5xl">👍</a>
        <a href="" class="text-5xl">🥲</a>
        <a href="" class="text-5xl">😡</a>
    </div>
    <div class="antialiased mx-auto max-w-screen-sm">
        <h3 class="mb-4 text-lg font-semibold text-gray-900">Comments</h3>
        <div class="mb-20">
            <form action="{{ route('comment.store') }}" method="post">
@csrf
<div class="flex">
    @if (Auth::check())
    <img class="mt-2 rounded-full w-8 h-8 mr-3 sm:w-10 sm:h-10" src="{{ asset(Auth::user()->path_profile) }}"
        alt="{{ Auth::user()->name }}">
    @endif
    <textarea name="text_comment" id="text_comment"
        class="w-full border-0  rounded-lg mb-3 @error('text_comment') border-2 border-red-500 @enderror"
        placeholder="Add your comment"></textarea>
    <input type="hidden" name="post_id" value="{{ $post->id }}">
</div>
<button type="submit"
    class="py-3 px-4 inline-flex float-right justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-gray-800 text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:focus:ring-gray-900 dark:focus:ring-offset-gray-800">
    Post
</button>
</form>
<div class="flex">
    @if (Auth::check())
    <img class="mt-2 rounded-full w-8 h-8 mr-3 sm:w-10 sm:h-10" src="{{ asset(Auth::user()->path_profile) }}"
        alt="{{ Auth::user()->name }}">
    @endif
    <textarea name="text_comment" id="text_comment" class="w-full border-0 rounded-lg mb-3"
        placeholder="Add your comment"></textarea><br>
    <input type="hidden" name="post_id" value="{{ $post->id }}" id="post_id">
</div>
<button type="button"
    class="py-3 px-4 inline-flex float-right justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-gray-800 text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:focus:ring-gray-900 dark:focus:ring-offset-gray-800"
    id="btn-post-comment">
    Post
</button>
</div>

<hr class="border-1 my-3">
<div class="space-y-4">
    @foreach ($post->comments as $comment)
    <div class="flex">
        <div class="flex-shrink-0 mr-3">
            <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="{{ asset($comment->user->path_profile) }}"
                alt="">
        </div>
        <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
            <strong>{{ $comment->user->name }}</strong> <span
                class="text-xs text-gray-400">{{ date('H:i A',strtotime($comment->created_at)) }}</span>
            <p class="text-sm">
                {{ $comment->text_comment }}
            </p>
            <div class="mt-4 flex items-center">
                <div class="flex -space-x-2 mr-2">
                    <img class="rounded-full w-6 h-6 border border-white"
                        src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                        alt="">
                    <img class="rounded-full w-6 h-6 border border-white"
                        src="https://images.unsplash.com/photo-1513956589380-bad6acb9b9d4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                        alt="">
                </div>
                <div class="text-sm text-gray-500 font-semibold">
                    5 Replies
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="flex">
        <div class="flex-shrink-0 mr-3">
            <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                alt="">
        </div>
        <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
            <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
            <p class="text-sm">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua.
            </p>

            <h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Replies</h4>

            <div class="space-y-4">
                <div class="flex">
                    <div class="flex-shrink-0 mr-3">
                        <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                            src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                            alt="">
                    </div>
                    <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                        <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                        <p class="text-xs sm:text-sm">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                            sed diam nonumy eirmod tempor invidunt ut labore et dolore
                            magna aliquyam erat, sed diam voluptua.
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-shrink-0 mr-3">
                        <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                            src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                            alt="">
                    </div>
                    <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                        <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                        <p class="text-xs sm:text-sm">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                            sed diam nonumy eirmod tempor invidunt ut labore et dolore
                            magna aliquyam erat, sed diam voluptua.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div> --}}
<script id="dsq-count-scr" src="//garutcoding-com.disqus.com/count.js" async></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#btn-post-comment').click(function (e) {
            e.preventDefault();
            const comment = $('#text_comment').val();
            const idPost = $('#post_id').val();
            $.ajax({
                type: "post",
                url: "/comment",
                data: {
                    comment: comment,
                    idPost: idPost
                },
                // dataType: "JSON",
                success: function (response) {
                    if (response == 'login') {
                        location.href = '/login'
                    }
                    // console.log(response.errors.comment)
                    if (response.errors) {
                        $('#text_comment').removeClass('border-0');
                        $('#text_comment').addClass('border-1 border-red-500');
                    }
                    if (response.success) {
                        $('#text_comment').val('')
                        $('#post_id').val('')
                    }
                }
            });
        });
    });

    // var disqus_config = function () {
    //     this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
    //     this.page.identifier =
    //         PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    // };

    (function () { // DON'T EDIT BELOW THIS LINE
        var d = document,
            s = d.createElement('script');
        s.src = 'https://garutcoding-com-1.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();

</script>
@endsection
