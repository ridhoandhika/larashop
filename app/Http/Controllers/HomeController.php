<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $this->load_theme('home');
    }
   /* protected function load_theme($view, $data = [])
    //{
        return view('themes/'. env('APP_THEME').'/'. $view, $data);
    }*/
}
