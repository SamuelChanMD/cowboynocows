<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{

    /*
	 * Show homepage
	 */
	function show(){
		return view("about_me")->with('img_banner', 'images/cowboy-sam.jpg');
	}
}
