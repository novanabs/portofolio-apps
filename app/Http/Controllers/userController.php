<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\user;
use App\Application;
use App\article;

class userController extends Controller {

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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

	public function show(User $user)
	{		
		$app = Application::where('user_id',$user->id)->paginate(8);
		$checkApp=$app->isEmpty();
		$article = article::with('ArticleCategories')->where('user_id',$user->id)->get();
		$checkArticle=$article->isEmpty();
		//dd($article);

		if(\Auth::check()){
			$url = str_contains($this->checkloginpage($user->name),\Auth::user()->name);
		}
		else
		{
			$url = false;
		}
		

		return view('profile.showProfile',compact('user','app','article','url','checkApp','checkArticle'));
	}

	public function showArticle(User $user)
	{

		$article = article::with('ArticleCategories')->where('user_id',$user->id)->get();
		$checkArticle=$article->isEmpty();
		//dd($article);

		if(\Auth::check()){
			$url = str_contains($this->checkloginpage($user->name),\Auth::user()->name);
		}
		else
		{
			$url = false;
		}
		

		return view('userArticle.index',compact('user','article','url','checkArticle'));
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

}
