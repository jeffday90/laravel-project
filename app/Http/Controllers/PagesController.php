<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // function that returns the welcome view with foo data
    public function home() {
        return view('welcome',[
            'foo' => 'bar'
        ]);
    }
}
