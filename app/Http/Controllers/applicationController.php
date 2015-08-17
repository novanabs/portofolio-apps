<?php namespace App\Http\Controllers;

use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\AppRequest;
use Illuminate\Http\Request;
use App\Application;
use App\User;
use App\AppCategory;
use App\log;

class applicationController extends Controller {


	public function index()
	{
		$app = application::all();
			
		return view('application.application',compact('app'));
	}

	public function AllApps()
	{
		$apps = Application::with('users')->paginate(6);
		$AppCategory = AppCategory::all();
		return view('application.all_apps',compact('apps','AppCategory'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$AppCategories = AppCategory::lists('name','id');
		return view('Application.createApplication',compact('AppCategories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AppRequest $request)
	{
		$app = \Auth::user()->articles()->create($request->all());
		
		$app->AppCategories()->attach($request->input('AppCategoriesList'));
		
		return redirect('admin/application');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$app = application::find($id);  
		// Get all reviews that are not spam for the product and paginate them
		 //$reviews = $app->reviews()->with('user')->approved()->notSpam()->orderBy('created_at','desc')->paginate(100);


		return view('application.showApplication',compact('app'));
	}

	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$app=application::find($id);
   		return view('application.EditApplication',compact('app'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$appUpdate=Request2::all();
  		$app=application::find($id);
   		$app->update($appUpdate);
   		return redirect('admin/application');
	}



	public function destroy($id)
	{
		application::find($id)->delete();
   		return redirect('admin/application');
	}

	public function download(Request $request, Application $application)
	{
		$total =$application->download + $request->input('download');
		$application->update([
			'download'=>$total
			]);
		return redirect('/');
	}


}
