<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $prodotti;

    public function __construct()
    {
        $this->prodotti=config('prodotti',true);#prova a mettere false
    }

    public function prodotti()
    {
        $cards=$this->prodotti; 

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
    }

    public function show($id)
    {
        if(!array_key_exists($id,$this->prodotti)){
            abort(404);
        }

        $card= $this->prodotti[$id];
        return view("show",compact(('card')));
    }
}
