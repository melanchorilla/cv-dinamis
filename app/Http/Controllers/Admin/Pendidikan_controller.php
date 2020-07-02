<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Pendidikan_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Manage Pendidikan';
        $pendidikan = \DB::table('pendidikan')->get();

        return view('pendidikan.pendidikan_index', compact('title', 'pendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Pendidikan';

        return view('pendidikan.pendidikan_create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jurusan' => 'required',
            'dari' => 'required',
            'sampai' => 'required',
            'deskripsi' => 'required'
        ]);

        try {
            \DB::table('pendidikan')->insert([
                'nama' => $request->nama,
                'jurusan' => $request->jurusan,
                'dari' => date('Y-m-d', strtotime($request->dari)),
                'sampai' => date('Y-m-d', strtotime($request->sampai)),
                'deskripsi' => $request->deskripsi
            ]);

            \Session::flash('sukses', 'Data berhasil ditambah');
        } catch(\Exception $e) {
            \Session::flash('gagal', 'insert table pendidikan' . $e->getMessage() . ' ' . $e->getLine());
        }


        return redirect('/admin/manage-pendidikan/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Pendidikan';
        $dt = \DB::table('pendidikan')->where('id', $id)->first();

        return view('pendidikan.pendidikan_edit', compact('title', 'dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jurusan' => 'required',
            'dari' => 'required',
            'sampai' => 'required',
            'deskripsi' => 'required'
        ]);

        try {
            \DB::table('pendidikan')->where('id', $id)->update([
                'nama' => $request->nama,
                'jurusan' => $request->jurusan,
                'dari' => date('Y-m-d', strtotime($request->dari)),
                'sampai' => date('Y-m-d', strtotime($request->sampai)),
                'deskripsi' => $request->deskripsi
            ]);

            \Session::flash('sukses', 'Data berhasil diupdate');
        } catch(\Exception $e) {
            \Session::flash('gagal', 'Proses update ' . $e->getMessage() . ' ' . $e->getLine());
        }

        return redirect('admin/manage-pendidikan/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            \DB::table('pendidikan')->where('id', $id)->delete();
            \Session::flash('sukses', 'Data berhasil dihapus');
        } catch(\Exception $e) {
            \Session::flash('gagal', $e->getMessage());
        }

        return redirect('admin/manage-pendidikan');
    }
}
