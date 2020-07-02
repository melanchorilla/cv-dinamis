<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Photo_controller extends Controller
{

    public function index()
    {
    	$title = "Upload Photo";

    	return view('admin.photo_index', compact('title'));
    }

    public function store(Request $request){
        try {
            $file = $request->file('image');
            // dd($file);
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
 
            $pf = \DB::table('profile')->first();
 
            \DB::table('profile')->where('id',$pf->id)->update([
                'photo'=>$file->getClientOriginalName()
            ]);
 
            \Session::flash('sukses','Berhasil Upload');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }
 
        return redirect('admin/photo');
    }
}
