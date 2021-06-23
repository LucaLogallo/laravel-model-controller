<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class filmController extends Controller
{
    public function index(){

        $movies = Movie::where('vote','>', 8)->get();
        //dump($movies);
        
        $data = [
            'movies' => $movies
        ];

        return view('filmpiuvotati', $data);
    }
}
