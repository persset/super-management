<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct() {
        //$this->middleware("access.log");
    }

    public function About() {
        return view('site.about');
    }
}
