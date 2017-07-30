<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DownloadController extends Controller
{

	function download($f){
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.$f);
		$location = asset('downloadables/' . $f);
		readfile($location); 
		exit;
	}
}
