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
        $random = mt_rand(0, count($posts)-1);

        //Fetch all facts and display three of them
        $facts = Fact::all();
        $randomfacts = array();
        $i = 0;
        $used = [];
        while($i < 3){
            $randomNum = mt_rand(0, count($facts)-1);
            
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
