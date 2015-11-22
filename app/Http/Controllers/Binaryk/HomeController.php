<?php namespace App\Http\Controllers\Binaryk;

use App\Http\Controllers\Controller;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class HomeController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		var_dump('index');
		return view('~template.~layout');
	}
}