<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Create an 'index' method that displays the default view of the home page
    public function index() {
        return view('home');
    }
}
