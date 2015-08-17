<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Application;
use App\AppCategory;
use App\Http\Requests\AppRequest;
use App\Http\Requests\AppUpdate;
use App\log;
use App\user;
use App\review;
class userAppController extends Controller {

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
		$user = User::find(\Auth::user()->id);
		$AppCategories = AppCategory::lists('name','id');
		$update=null;
		return view('userApp.createUserApp',compact('user','AppCategories','update'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AppRequest $request)
	{

		
		$file = $request->file('photo');
      	$destination_path = 'uploads/';
      	$filename = str_random(6).'_'.$file->getClientOriginalName();
      	$file->move($destination_path, $filename);


      	//upload app file
      	$file2 = $request->file('application');
      	$filename2 = str_random(6).'_'.$file2->getClientOriginalName();
      	$file2->move($destination_path, $filename2);
		

		$application =\Auth::user()->applications()->create([
			'application'=>$destination_path . $filename2,
			'photo'=>$destination_path . $filename,
			'name'=>$request->input('name'),
			'slug'=>str_slug($request->input('name')),
			'version'=>$request->input('version'),
			'description'=>$request->input('description'),
			'email'=>$request->input('email'),
			'platform'=>$request->input('platform')
			]);
		
		 
		$application->AppCategories()->attach($request->input('AppCategoryList'));
      	
		Application::All()->last()->logs()->save(
			log::create([
				'content'=>'',
				'user_id'=>$request->input('user_id'),
				'descriptions'=>'Kamu berhasil membuat Aplikasi , Name :'.$request->input('name').', version: '.$request->input('version').', platform :'.$request->input('platform'),
			]));

		
		\Session::flash('pesan','your Application Portofolio has been created!');
		return redirect('user/'.\Auth::user()->name);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function checkloginpage($user)
	{
		$url = action('userController@show',$user);
		return $url;
	}


	public function show(User $user,Application $app)
	{
		if(\Auth::check()){
			$url = str_contains($this->checkloginpage($user->name),\Auth::user()->name);
		}
		else
		{
			$url = false;
		}

		$review = Review::with('users')->where('application_id','=',$app->id)->get();
		return view('userApp.showUserApp',compact('app','review','user','url'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Application $app)
	{
		$update = true;
		$AppCategories = AppCategory::lists('name','id');	
   		return view('userApp.EditUserApp',compact('app','AppCategories','update'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,Application $application)
	{
		
		if($request->hasFile('photo'))
		{
			\File::delete($application->photo);

			$file = $request->file('photo');
      		$destination_path = 'uploads/';
      		$filename = str_random(6).'_'.$file->getClientOriginalName();
      		$file->move($destination_path, $filename);
      		$photo =$destination_path . $filename;

      		
		}
		else
		{
			$photo = $application->photo;
		}


		if($request->hasFile('application'))
		{
			\File::delete($application->application);

			$file = $request->file('application');
      		$destination_path = 'uploads/';
      		$filename = str_random(6).'_'.$file->getClientOriginalName();
      		$file->move($destination_path, $filename);
      		$app =$destination_path . $filename;


		}
		else
		{
			$app = $application->application;
		}
		

		$application->update([
			'application'=>$app,
			'photo'=>$photo,
			'slug'=>str_slug($request->input('name')),
			'name'=>$request->input('name'),
			'version'=>$request->input('version'),
			'description'=>$request->input('description'),
			'email'=>$request->input('email'),
			'platform'=>$request->input('platform')
			]);
		
		$this->syncCategory($application,$request->input('AppCategoryList'));
		$id = $application->id;

		Application::find($id)->logs()->save(
			log::create([
				'content'=>'',
				'user_id'=>$request->input('user_id'),
				'descriptions'=>'Kamu berhasil Update Aplikasi , Name :'.$request->input('name').', version: '.$request->input('version').', platform :'.$request->input('platform'),
			]));


   		return redirect('user/'.\Auth::user()->name);
	}

	private function syncCategory(Application $app,array $AppCategoryList)
	{
		$app->AppCategories()->sync($AppCategoryList);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($app)
	{
		Application::where('slug','=',$app->slug)->delete();
		\File::delete($app->photo);
		\File::delete($app->application);
      	return redirect('user/'.\Auth::user()->name);
	}

	public function download()
	{
		
	}

	

}
