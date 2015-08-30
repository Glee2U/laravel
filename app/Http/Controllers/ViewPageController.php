<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ViewPageController extends Controller {

	public function to_intro()
	{
		return view('intro');
	}


}
