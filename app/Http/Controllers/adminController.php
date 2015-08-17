<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class adminController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function timeline()
	{
		return view('admin.timeline');
	}
	public function table()
	{
		return view('admin.table');
	}

}
