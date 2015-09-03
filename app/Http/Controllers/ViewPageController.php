<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ViewPageController extends Controller {

	public function to_intro()
	{
		return view('intro');
	}

	public function to_index()
	{
		return view('mainpages.index');
	}


	public function to_lesson()
	{
		return view('mainpages.content');
	}
	public function to_profile()
	{
		return view('mainpages.profile');
	}


}
