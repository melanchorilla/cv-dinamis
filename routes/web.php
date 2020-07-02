<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$profile = \DB::table('profile')->first();
	$pengalaman = \DB::table('pengalaman')->orderBy('pengalaman_id', 'asc')->get();
	$skill = \DB::table('skill')->first();
	$skills = preg_split('/\r\n|\r\n/', $skill->skill);
	$skills = array_chunk($skills, 4);

	// dd($skills);

	$pendidikan = \DB::table('pendidikan')->orderBy('id', 'asc')->get();



    return view('welcome', compact('profile', 'pengalaman', 'skill', 'skills', 'pendidikan'));
});

Route::get('add-user', function(){
	\DB::table('users')->insert([
		'name' => 'admin',
		'email' => 'admin@sangcahaya.com',
		'password' => bcrypt('123456'),
		'created_at' => date('Y-m-d H:i:s'),
		'updated_at' => date('Y-m-d H:i:s'),
	]);
	dd('User berhasil ditambah');
});


// ============= ADMIN =============
Route::group(['middleware' => 'auth'], function(){

	// Beranda Admin
	Route::get('/admin', 'Admin\Beranda_controller@index');

	// Management Profile
	Route::get('/admin/profile', 'Admin\Profile_controller@index');
	Route::put('/admin/profile/{id}', 'Admin\Profile_controller@update');

	Route::get('/admin/photo', 'Admin\Photo_controller@index');
	Route::post('/admin/photo', 'Admin\Photo_controller@store');

	// Manage pengalaman kerja
	Route::get('/admin/manage-pengalaman', 'Admin\Pengalaman_controller@index');
	Route::get('/admin/manage-pengalaman/create', 'Admin\Pengalaman_controller@create');
	Route::post('/admin/manage-pengalaman', 'Admin\Pengalaman_controller@store');
	Route::delete('/admin/manage-pengalaman/{id}', 'Admin\Pengalaman_controller@destroy');
	Route::get('/admin/manage-pengalaman/{id}', 'Admin\Pengalaman_controller@edit');
	Route::put('/admin/manage-pengalaman/{id}', 'Admin\Pengalaman_controller@update');

	// Manage Skill
	Route::get('/admin/manage-skill', 'Admin\Skill_controller@index');
	Route::put('/admin/manage-skill/{id}', 'Admin\Skill_controller@update');

	// Manage Pendidikan
	Route::get('/admin/manage-pendidikan', 'Admin\Pendidikan_controller@index');
	Route::get('/admin/manage-pendidikan/create', 'Admin\Pendidikan_controller@create');
	Route::post('/admin/manage-pendidikan', 'Admin\Pendidikan_controller@store');
	Route::get('/admin/manage-pendidikan/{id}', 'Admin\Pendidikan_controller@edit');
	Route::put('/admin/manage-pendidikan/{id}', 'Admin\Pendidikan_controller@update');
	Route::delete('/admin/manage-pendidikan/{id}', 'Admin\Pendidikan_controller@destroy');

});


Auth::routes();

Route::get('/home', function(){
	return redirect('admin');
});
