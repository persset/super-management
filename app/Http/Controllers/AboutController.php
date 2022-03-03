<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AccessLogMiddleware;

class AboutController extends Controller
{
    public function __construct() {
        $this->middleware(AccessLogMiddleware::class);
    }

    public function About() {
        return view('site.about');
    }
}
