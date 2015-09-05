<?php namespace App\Http\Controllers\User;
use App\Http;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller {

	/**
 * 返回修改资料页面
 */
public function editprofile()
{
    return view('mainpages.editprofile');
}

public function update(Request $request,$email)
	{
		
		$this->validate($request, [

			'name' => 'required',
			'position' => 'required',
			
		]);
		$user =  \Auth::user();
		$user->name = \Input::get('name');
		$user->position = \Input::get('position');
		$user->phone =\ Input::get('phone');


		if ($user->save()) {
			return Redirect::to('/profile');
		} else {
			return Redirect::back()->withInput()->withErrors('保存失败！');
		}


    return Redirect::route('/profile');

}
}