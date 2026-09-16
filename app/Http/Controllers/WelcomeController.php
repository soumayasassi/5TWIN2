<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
        public function about($p)
        {
            return view('about', ["var"=>$p, "var2"=>$p]);
        }


}
