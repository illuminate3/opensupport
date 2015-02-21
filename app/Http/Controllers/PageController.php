<?php namespace App\Http\Controllers;

class PageController extends Controller {

    /*
     *  Controller for mostly static pages.
     */
    
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.index');
	}
        
        public function about()
        {
            return view('pages.about');
        }

}
