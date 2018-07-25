<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Post;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

	public function __construct(){
	    $this->name = 
	    [
	      "firstName" => "Web",
	      "lastName" => "BookThai",
	      "birthYear" => 2014,
	      "website" => "www.webbookthai.com",
	      "image" => "webbookthai.png"
	    ];
	}

    public function getIndex(){
		$get_request = Post::all();
	    return view('landing.index')->with('get_request', $get_request);
	}
		    
    public function getName (){
    // return view('welcome')->with($this->me['firstName'] . " " . $this->me['lastName']) ;
   		// return view('welcome', compact('me'));
   
   		return view('welcome')->with('name', $this->name);
   }

}