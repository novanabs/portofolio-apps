<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Article;
use App\ArticleCategory;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\AppUpdate;
use App\log;
use App\user;
use App\review;

class userArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(User $user)
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
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$ArticleCategories = ArticleCategory::lists('name','id');
		return view('userArticle.create',compact('ArticleCategories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArticleRequest $request , Article $article)
	{
		$this->createArticle($request);

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


	public function show(User $user,Article $article)
	{
		if(\Auth::check()){
			$url = str_contains($this->checkloginpage($user->name),\Auth::user()->name);
		}
		else
		{
			$url = false;
		}
		return view('userArticle.show',compact('article','user','url'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Article $article)
	{
		$ArticleCategories = Articlecategory::lists('name','id');	
		return view('userArticle.edit',compact('article','ArticleCategories'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ArticleRequest $request, Article $article)
	{

		$article->update($request->all());
		$this->syncCategory($article,$request->input('ArticleCategoryList'));
		
		return redirect('user/'.\Auth::user()->name);
	}



	private function syncCategory(Article $article,array $ArticleCategoryList)
	{
		$article->ArticleCategories()->sync($ArticleCategoryList);
	}
	

	private function createArticle(ArticleRequest $request)
	{ 

		$article = \Auth::user()->articles()->create([
		'title' => $request->input('title'),
		'content' => $request->input('content'),
		'slug' =>str_slug($request->input('title'))
		]);
		
		$article->articleCategories()->attach($request->input('ArticleCategoryList'));

		return $article;
	}
	

	public function destroy(Article $article)
	{
		
		$article=Article::where('slug','=',$article->slug)->delete();
      	return redirect('user/'.\Auth::user()->name);
	}
	/*=======================================================================*/

}
