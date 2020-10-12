<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function prodotti(){
        #mettere qui la logica!
        #passa gli array ciclati qui!

        return view('prodotti');
    }

    public function contatti(){

        return view('contatti');
    }
}
