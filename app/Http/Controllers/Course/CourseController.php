<?php namespace App\Http\Controllers\Course;
use App\Course;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CourseController extends Controller {

	
	
	 public function show($id)
  {
    return view('mainpages.content')->withCourse(Course::find($id));
  }



}