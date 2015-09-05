<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Fileentry;
use Request;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class FileEntryController extends Controller {
public function index()
	{
		$entries = Fileentry::all();
 
		return view('fileentries.index', compact('entries'));
	}
 
	public function add() {
		if (Auth::guest()) {
		
			return Redirect::back()->withInput()->withErrors('请先登录');
		}
 
		$file = Request::file('filefield');
		if ($file==null) {
		
			return Redirect::back()->withInput()->withErrors('未选择图片');
		}
		$extension = $file->getClientOriginalExtension();
		if ($extension<>'jpg') {
		
			return Redirect::back()->withInput()->withErrors('请用jpg格式的图片');
		}

		$user =  Auth::user();
		$user->avatar='t';
		$user->save();
		
		Storage::disk('avatar')->put(Auth::user()->email.'.'.$extension,  File::get($file));
		$entry = Fileentry::firstOrNew(['filename' => Auth::user()->email.'.'.$extension]);
		
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename =Auth::user()->email.'.'.$extension;
 
		$entry->save();
 
		return redirect('fileentry');
		
}


	public function get($filename){
		

		$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();	
		$file = Storage::disk('avatar')->get($entry->filename);
 		
 
 	
 	
		return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
	}


}
