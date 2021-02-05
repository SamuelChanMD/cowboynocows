<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Fact;
//use App\Libraries\Phpmarkdown\Michelf\Markdown; //use this
//include app_path() . "\Libraries\phpmarkdown\Michelf\Markdown.inc.php";

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Fetch all posts and display one of them
        //$posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->take(2)->get();
        $maxPosts = 0;
        if (count($posts) > 0) {
            $maxPosts = count($posts)-1;
        }
        $random = mt_rand(0, $maxPosts);

        //Fetch all facts and display three of them
        $facts = Fact::all();
        $randomfacts = array();
        $i = 0;
        $used = [];
        while($i < 3){
            $maxFacts = 0;
            if (count($facts) > 0) {
                $maxFacts = count($facts)-1;
            }
            $randomNum = mt_rand(0, $maxFacts);
            
            if(in_array($randomNum, $used)){
                continue;
            }

            //$my_html = Markdown::defaultTransform($my_text);
            //$tempFact = Markdown::defaultTransform($facts[$randomNum]->fact);
            //$facts[$randomNum]->fact = $tempFact;
            $randomfacts[] = $facts[$randomNum];
            $used[] = $randomNum;
            $i++;
        }


        return view('home')->with('posts', $posts)->with('random', $random)->with('randomFacts', $randomfacts);
    }
}
