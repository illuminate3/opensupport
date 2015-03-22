<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Set the view to system, the first view in the
     * administration page.
     * 
     * @return type
     */
    public function index() {
        return view('admin.system');
    }

    public function system() {
        return view('admin.system');
    }

}
