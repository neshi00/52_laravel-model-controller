<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller {
    function index () {
        $data = Movie::all();

        dump($data);



        return view('home', compact("data"));
    }
}
