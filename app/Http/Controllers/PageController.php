<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{   
    public function index(){
        $data = Movie::all();
        @dd($data);
        return view('welcome');
    }
}
