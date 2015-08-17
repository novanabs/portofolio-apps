<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Aplication;
use App\User;
use App\Profile;

class profileController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('profile.createProfile');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$file = $request->file('photo');
      	$destination_path = 'uploads/';
      	$filename = str_random(6).'_'.$file->getClientOriginalName();
      	$file->move($destination_path, $filename);

		$profile = \Auth::user()->profiles()->create([
			'photo'=>$destination_path . $filename,
			'full_name'=>$request->input('full_name'),
			'birthday'=>$request->input('birthday'),
			'birthplace'=>$request->input('birthplace'),
			'domisili'=>$request->input('domisili'),
			'gender'=>$request->input('gender'),
			'religion'=>$request->input('religion'),
			'status'=>$request->input('status'),
			'occupation'=>$request->input('occupation'),
			'phone_number'=>$request->input('phone_number')
			]);

		User::find(\Auth::user()->id)->profiles()->save($profile);

		return redirect('user/'.\Auth::user()->name);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int   $id
	 * @return Response
	 */
	public function show($id)
	{
		$profile = Profile::with('users')->where('user_id','=',$id)->first();
		return view('profile.fullProfile',compact('profile'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function accountSetting()
	{
		//ambil photo, username : profileController
		$profile = 'as';
		// ganti password : userController
		$password;
		
		return view('profile.account_setting',compact(''));
	}

}
