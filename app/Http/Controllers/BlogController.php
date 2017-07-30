<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

/*
 * Controller for public access of posts
 */ 

class BlogController extends Controller
{
    
    //Display post
    public function getSingle($slug){
    	//Fetch from the database based on slug
    	$post = Post::where('slug', '=', $slug)->first();
    	return view('blog.single')->withPost($post)->with('img_banner', 'images/' . $post->image_url);
    }

    public function getIndex(){
    	$posts = Post::paginate(9);
    	return view('blog.index')->with('posts', $posts)->with('img_banner', 'images/blog_archive.jpg');
    }
}
