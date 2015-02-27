<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SettingsController extends Controller {

	public function index() 
        {
            return view('settings.index');
        }

        public function system()
        {
            return view('settings.system');
        }
        
        public function user()
        {
            return view('settings.users');
        }
}
