<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function list() {
        $libri = Movie::all();
        //dd($libri);
        return view('listaLibri',['libri'=>$libri]);
    }
}
