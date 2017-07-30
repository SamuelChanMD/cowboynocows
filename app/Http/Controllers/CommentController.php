<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;
use Session;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id, $user_id)
    {
        //Validate
        $this->validate($request, [
            'comment' => 'required|min:3|max:1000',
        ]);

        //Store
        $post = Post::find($post_id);
        $user = User::find($user_id);

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->post()->associate($post);
        $comment->user()->associate($user);

        $comment->save();

        Session::flash('success', 'Comment was added!');

        return redirect()->route('blog.single', $post->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $comment_id)
    {

        $comment = Comment::find($comment_id);

        //Validate
        $this->validate($request, [
            'commentModified' => 'required|min:3|max:1000',
        ]);

        $comment->comment = $request->commentModified;
        $comment->save();

        Session::flash('success', 'Comment Modified');

        return redirect()->route('blog.single', $comment->post->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        Session::flash('success', 'Comment has been successfully destroyed');

        return redirect()->back();
    }
}
