<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Arsip;

class UploadController extends Controller
{
    public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
                // upload file
		$path = $file->store('uploads');

		//store ke database
		$fileBaru = new Arsip;

		$fileBaru->fileName = $file->getClientOriginalName();
		$fileBaru->url = $path;
		$fileBaru->save();

		 return redirect('history');
	}

}
