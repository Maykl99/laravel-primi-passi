@php

$cards=config('prodotti',true);  #prova a mettere false

$cortissime=[];
$corte=[];
$lunghe=[];

foreach ($cards as $val) {
    if($val['tipo'] == 'lunga'){
        $lunghe[]= $val;
    }elseif($val['tipo'] == 'corta'){
        $corte[]= $val;
    }else
        $cortissime[]= $val;
}

@endphp

      @extends('layout.app')

      @section('css')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
      @endsection

      @section('titolo','Prodotti Molisana')
    
      @section('main')
        <div class="h4">Cortissime</div>
        <section class="cortissime">
          
          
              @foreach ($cortissime as $card)
              <div class="card" style="width: 15rem;">
                  <img src="{{$card['src']}}" class="card-img-top" alt="{{$card['titolo']}}">
                  <div class="card-body">
                    <p class="card-text">{{$card['titolo']}}</p>
                  </div>
              </div>
              @endforeach
            
        </section>

        <div class="h4">Corte</div>
        <section class="corte">
          
        
              @foreach ($corte as $card)
              <div class="card" style="width: 15rem;">
                <img src="{{$card['src']}}" class="card-img-top" alt="{{$card['titolo']}}">
                <div class="card-body">
                  <p class="card-text">{{$card['titolo']}}</p>
                </div>
            </div>
              @endforeach
            
        </section>

        <div class="h4">Lunghe</div>
        <section class="lunghe">
          
        
              @foreach ($lunghe as $card)
              <div class="card" style="width: 15rem;">
                <img src="{{$card['src']}}" class="card-img-top" alt="{{$card['titolo']}}">
                <div class="card-body">
                  <p class="card-text">{{$card['titolo']}}</p>
                </div>
              </div>
              @endforeach
            
        </section>
      @endsection

