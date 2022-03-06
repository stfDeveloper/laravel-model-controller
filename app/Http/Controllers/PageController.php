<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{   
    public function index(){
        $data = Movie::all();   
        return view('app', ['movie' => $data]);
    }
}
