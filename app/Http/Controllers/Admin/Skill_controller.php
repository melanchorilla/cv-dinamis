<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Skill_controller extends Controller
{
    public function index()
    {
    	$title = 'Manage Skill';
    	$skill = \DB::table('skill')->first();

    	return view('skill.skill_index', compact('title', 'skill'));
    }

    public function update(Request $request)
    {
    	$this->validate($request, [
    		'description' => 'required',
    		'skill' => 'required',
    	]);

    	try {
    		$skill = \DB::table('skill')->first();

    		\DB::table('skill')->where('id', $skill->id)->update([
    			'description' => $request->description,
    			'skill' => $request->skill
    		]);

    		\Session::flash('sukses', 'Skill berhasil di Update');
    	} catch(\Exception $e) {
    		\Session::flash('gagal', $e->getMessage());
    	}

    	return redirect('admin/manage-skill');
    }
}
