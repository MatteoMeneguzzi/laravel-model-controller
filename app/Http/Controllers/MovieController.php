<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    


    //HOME
    public function index() {

        // Ottenere database movies
        $movies = Movie::all();

        // Pagina che voglio visualizzare
        return view('home', compact('movies'));
    }

}
