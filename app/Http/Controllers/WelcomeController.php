<?php namespace App\Http\Controllers;

use App\Article;
use App\Application;
use App\ArticleCategory;
use App\AppCategory;
use App\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class WelcomeController extends Controller {

	public function index()
	{
	
		$article = Article::with('users')->limit(2)->orderBy('updated_at','desc')->get();
		$app = Application::with('users')->paginate(6);
		$ArticleCategory = ArticleCategory::all();
		$AppCategory = AppCategory::all();

		$test = AppCategory::with('applications')->where('name','=','communication')->get();
		
		dd($test);


		return view('homepage.welcome',compact('article','app','ArticleCategory','AppCategory'));
	}

	public function About()
	{
		return view('homepage.about');
	}

}
