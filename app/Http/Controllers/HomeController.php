<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){ //prima funzione di default da fare che restituisce la rotta

        $movies = Movie::all();
        //dump($movies);

        $data =[
            'movies' => $movies
        ];

        return view('home', $data);
    }
}
