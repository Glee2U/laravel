<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Course;

use Redirect, Input, Auth;

class CoursesController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.courses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'id' => 'required|unique:courses',
			'id_1' => 'required',
            'id_2' => 'required',
            'id_3' => 'required',
            'id_4' => 'required',
            'name' => 'required',
            'author' => 'required',
            'introduction' => 'required',
            'body' => 'required',
            'pay_type' => 'required',
            'score' => 'required',
            'ava_dir' => 'required',
            'vid_dir' => 'required',
		]);

		$course = new Course;
		$course->id = Input::get('id');
        $course->id_1 = Input::get('id_1');
        $course->id_2 = Input::get('id_2');
        $course->id_3 = Input::get('id_3');
        $course->id_4 = Input::get('id_3');
        $course->name = Input::get('name');
        $course->author = Input::get('author');
        $course->introduction = Input::get('introduction');
        $course->body = Input::get('body');
        $course->pay_type = Input::get('pay_type');
        $course->score = Input::get('score');
        $course->ava_dir = Input::get('ava_dir');
        $course->vid_dir = Input::get('vid_dir');
		

		if ($course->save()) {
			return Redirect::to('admin');
		} else {
			return Redirect::back()->withInput()->withErrors('保存失败！');
		}

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin.courses.edit')->withcourse(Course::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$this->validate($request, [
			'id' => 'required|unique:courses,id,'.$id.'',
			'id_1' => 'required',
            'id_2' => 'required',
            'id_3' => 'required',
            'id_4' => 'required',
            'name' => 'required',
            'author' => 'required',
            'introduction' => 'required',
            'body' => 'required',
            'pay_type' => 'required',
            'score' => 'required',
            'ava_dir' => 'required',
            'vid_dir' => 'required',
		]);

		$course = course::find($id);
		$course->id = Input::get('id');
        $course->id_1 = Input::get('id_1');
        $course->id_2 = Input::get('id_2');
        $course->id_3 = Input::get('id_3');
        $course->id_4 = Input::get('id_3');
        $course->name = Input::get('name');
        $course->author = Input::get('author');
        $course->introduction = Input::get('introduction');
        $course->body = Input::get('body');
        $course->pay_type = Input::get('pay_type');
        $course->score = Input::get('score');
        $course->ava_dir = Input::get('ava_dir');
        $course->vid_dir = Input::get('vid_dir');

		if ($course->save()) {
			return Redirect::to('admin');
		} else {
			return Redirect::back()->withInput()->withErrors('保存失败！');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$course = Course::find($id);
		$course->delete();

		return Redirect::to('admin');
	}

}