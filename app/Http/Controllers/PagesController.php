<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // function that returns the welcome view with foo data
        // returns bar on the screen where foo variable is used
    public function home() {
        return view('welcome',[
            'foo' => 'bar'
        ]);
    }

    public function contact() {
        return view('welcome',[
            'foo' => 'bar'
        ]);
    }

    public function about() {
        return view('welcome',[
            'foo' => 'bar'
        ]);
    }
}
