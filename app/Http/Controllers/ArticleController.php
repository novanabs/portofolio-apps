<?php namespace App\Http\Controllers;

use App\User;
use App\Article;
use App\ArticleCategory;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
//use Request as Request2;

class ArticleController extends Controller {

	

	public function index()
	{
		echo "index admin";
	}

	public function AllArticle()
	{
		$articles = Article::with('users')->paginate(6);
		$ArticleCategory =ArticleCategory::all();
		return view('Article.all_articles',compact('articles','ArticleCategory'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		echo "create admin";
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArticleRequest $request , Article $article)
	{
		echo "store admin";
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Article $article)
	{
		echo "show admin";

		//return view('userArticle.show',compact('article'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Article $article)
	{
		echo "edit admin";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ArticleRequest $request, Article $article)
	{

		echo "update admin";
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

	public function checkloginpage($user)
	{
		$url = action('userController@show',$user);
		return $url;
	}

	public function userArticleIndex(User $user)
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
		
		return view('userArticle.index',compact('article','checkArticle','user','url'));
	}

	/*

	public function pdf(){
		//$parameterr = array();
        //$parameter['param'] = "Hello World!!";
		$article = Article::all();
				
        $pdf = \PDF::loadView('admin.biodata',compact('article'));
        
		//use download untuk langsung download
		//use stream agar ada preview
        return $pdf->stream("Hello.pdf");
	}

	public function datatables()
	{
		$articles = Article::all();
		
		return view('admin.table',compact('articles'));
	}
*/

}


