@php

$cards=config('prodotti'); 
 #prova a mettere false
#$cards=json_last_error ($data);
#dd($cards);
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

#var_dump($lunghe,$corte,$cortissime);

@endphp


    {{-- @include('templates.header') --}}


      @extends('layout.app')

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

