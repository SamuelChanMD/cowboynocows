<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $this->validate($request, array(
                "title" => "required|max:255", 
                "slug" => "required|alpha_dash|min:5|max:255|unique:posts,slug",
                "image_url" => "string",
                "body" => "required"
            ));

        //Adding to database
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->image_url = $request->image_url;
        $post->body = $request->body;
        $post->save();

        Session::flash('success', 'The blog post was successfully saved!');

        //Redirect 
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
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
        //Validate
        $post = Post::find($id);

        if($request->input('slug') == $post->slug){
            $this->validate($request, array(
                'title' => 'required|max:255',
                "image_url" => "string",
                'body' => 'required'
                ));
        } else {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                "image_url" => "string",           
                'body' => 'required'
                )); 
        }

        //Adding to database
        //$post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->image_url = $request->input('image_url');
        $post->body = $request->input('body');
        $post->save();

        Session::flash('success', 'This post was successfully saved!');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('success', 'This post has been successfully destroyed');

        return redirect()->route('posts.index');
    }
}
