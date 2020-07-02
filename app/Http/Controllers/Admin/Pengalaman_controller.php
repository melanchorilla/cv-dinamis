<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Pengalaman_controller extends Controller
{
    public function index()
    {
    	$title = 'List Pengalaman';

    	try {

    		$pengalaman = \DB::table('pengalaman')->get();

    	} catch(\Exception $e) {

    		dd($e->getMessage());

    	}

    	return view('pengalaman.pengalaman_index', compact('title', 'pengalaman'));

    }


    public function create()
    {
    	$title = 'Tambah pengalaman Kerja';

    	return view('pengalaman.pengalaman_add', compact('title'));
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'nama' => 'required',
    		'jabatan' => 'required',
    		'deskripsi' => 'required',
    		'dari' => 'required'
    	]);

    	try {
    		$sampai = $request->sampai;

    		if($sampai == null){
    			$sampai = 'Sekarang';
    		}

    		\DB::table('pengalaman')->insert([
    			'nama' => $request->nama,
    			'jabatan' => $request->jabatan,
    			'deskripsi' => $request->deskripsi,
    			'dari' => $request->dari,
    			'sampai' => $sampai
    		]);

    		\Session::flash('sukses', 'Data berhasil Ditambah');

    	} catch(\Exception $e) {
    		\Session::flash('gagal', $e->getMessage());
    	}

    	return redirect('admin/manage-pengalaman/create');

    }

    public function edit($id)
    {
    	$title = 'Edit Pengalaman';
    	$dt = \DB::table('pengalaman')->where('pengalaman_id', $id)->first();

    	return view('pengalaman.pengalaman_edit', compact('title', 'dt'));
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'nama' => 'required',
    		'jabatan' => 'required',
    		'deskripsi' => 'required',
    		'dari' => 'required'
    	]);

    	try {
            $sampai = $request->sampai;
 
            if($sampai == null){
                $sampai = 'Sekarang';
            }
 
            \DB::table('pengalaman')->where('pengalaman_id',$id)->update([
                'nama'=>$request->nama,
                'jabatan'=>$request->jabatan,
                'deskripsi'=>$request->deskripsi,
                'dari'=>$request->dari,
                'sampai'=>$sampai
            ]);
 
            \Session::flash('sukses','Data berhasil Diupdate');

        } catch(\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        return redirect('admin/manage-pengalaman');

    }


    public function destroy($id)
    {
    	try {
    		\DB::table('pengalaman')->where('pengalaman_id', $id)->delete();

    		\Session::flash('sukses', 'Data berhasil dihapus');
    	} catch(\Exception $e){
    		\Session::flash('gagal', $e->getMessage());
    	}

    	return redirect('admin/manage-pengalaman');
    }



}
