<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home(){
        return view('home');
    }

    /* public function prodotti(){
        #mettere qui la logica!
        #passa gli array ciclati qui!
        $cards=config('prodotti',true);  #prova a mettere false

        $cortissime=[];
        $corte=[];
        $lunghe=[];

        foreach ($cards as $key => $val) {
            if($val['tipo'] == 'lunga'){
                $lunghe[$key]= $val;
            }elseif($val['tipo'] == 'corta'){
                $corte[$key]= $val;
            }else
                $cortissime[$key]= $val;
        }

        #dd($cortissime,$corte,$lunghe);
        return view('prodotti',compact('cortissime','corte','lunghe'));
    } */

    public function contatti(){

        return view('contatti');
    }
}
