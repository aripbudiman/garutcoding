<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('content.index',['title'=>'Post'],compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('content.create',['title'=>'Create New Post'],compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:post|max:255',
            'content_text'=>'required',
        ]);
        
        $file = $request->file('file');
        $tes = $file->getClientOriginalName();
        $tujuan='cover';
        $file->move($tujuan,$tes);
        $post = new Post;
        $post->author_id=Auth::id();
        $post->title=$request->title;
        $post->slug=Str::slug($request->slug);
        $post->id_category=$request->category;
        $post->content_text=$request->content_text;
        $post->cover=$tujuan.'/'.$tes;
        $post->published=date('Y-m-d H:i:s');
        $post->save();
        return redirect()->route('post.index')->with('success','Postingan has been successfully uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('slug',$id)->first();
       
        return view('content.show',['title'=>$post->title],compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        $categories = Category::all();
        return view('content.edit',['title'=>'Edit post'],compact('posts','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts = post::findOrFail($id);
        $posts->title=$request->title;
        $posts->slug=Str::slug($request->title);
        $posts->id_category=$request->category;
        $posts->content_text=$request->content_text;
        $posts->save();
        return redirect()->route('post.index')->with('success','Postingan berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

}
