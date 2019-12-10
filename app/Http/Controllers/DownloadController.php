<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Arsip;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arsips = Arsip::all();

        return view('storage',['arsips' => $arsips]);
    }

    /**
     * Buat download file.
     *
     * @return \Illuminate\Http\Response
     */
    public function download($id)
    {
        $arsip = Arsip::find($id);
        return Storage::download($arsip->url , $arsip->fileName);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arsip = Arsip::find($id);
        $arsip->delete();

        return redirect('storage');
    }
}
