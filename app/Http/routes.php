<?php
/**===================================================================================================================================================*/
Route::get('/','WelcomeController@index');
Route::get('about','WelcomeController@About');

/**=========================  Application  ==========================================================================================================================*/
Route::bind('app', function($slug)
{
	return App\Application::whereSlug($slug)->first();
});
Route::bind('user/app', function($slug)
{
	return App\Application::whereSlug($slug)->first();
});
Route::get('All-apps',['as'=>'all.apps','uses'=>'ApplicationController@AllApps']);
Route::resource('user/app','userAppController');

Route::patch('download/{app}',['as'=>'download.Counter','uses'=>'ApplicationController@download']);


Route::resource('app','applicationController');


/**==========================  User    =========================================================================================================================*/


Route::bind('user', function($name)
{
	return App\User::whereName($name)->first();
});

$router->resource('user','userController');



/**===========================  Profile  ========================================================================================================================*/

Route::get('account-setting',['as'=>'account.setting','uses'=>'profileController@accountSetting']);
$router->resource('profile','profileController');

/**===========================  Profile  ========================================================================================================================*/
$router->resource('admin','adminController');

/**========================  Article ===========================================================================================================================*/


Route::bind('article', function($slug)
{
	return App\Article::whereSlug($slug)->first();
});
Route::bind('user/article', function($slug)
{
	return App\Article::whereSlug($slug)->first();
});

Route::get('All-Articles',['as'=>'all.article','uses'=>'ArticleController@AllArticle']);
$router->resource('article','ArticleController');
$router->resource('user/article','userArticleController');
Route::get('{user}/article',['as'=>'user.article.index','uses'=>'userController@showArticle']);


/**=============== Review  ====================================================================================================================================*/


$router->resource('review','reviewController');



/**=============== Dan lain lain  ====================================================================================================================================*/


Route::bind('AppCategories', function($name)
{
	return App\AppCategory::whereName($name)->first();
});

Route::bind('ArticleCategories', function($name)
{
	return App\ArticleCategory::whereName($name)->first();
});

Route::resource('AppCategories','AppCategoryController');
Route::resource('ArticleCategories','ArticleCategoryController');
/**=============== Dan lain lain  ====================================================================================================================================*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
