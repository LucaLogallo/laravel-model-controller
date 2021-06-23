<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class filmController extends Controller
{
    public function index(){

        $movies = Movie::where('vote', >9)->get();

        $data = [
            'movies' => $movies
        ];

        return view('filmpiuvotati', $data);
    }
}
