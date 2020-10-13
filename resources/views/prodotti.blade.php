

    @extends('layout.app')

      @section('css')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
      @endsection

      @section('titolo','Prodotti Molisana')
    
      @section('main')
        <div class="h4">Cortissime</div>
        <section class="cortissime">
          
          
              @foreach ($cortissime as $key => $card)
              <div class="card" style="width: 15rem;">
              <a href="{{ route('show',['id' => $key]) }}"><img src="{{$card['src']}}" class="card-img-top" alt="{{$card['titolo']}}"></a>
                  <div class="card-body">
                    <p class="card-text">{{$card['titolo']}}</p>
                  </div>
              </div>
              @endforeach
            
        </section>

        <div class="h4">Corte</div>
        <section class="corte">
          
        
              @foreach ($corte as $key => $card)
              <div class="card" style="width: 15rem;">
                <a href="{{ route('show',['id' => $key]) }}"><img src="{{$card['src']}}" class="card-img-top" alt="{{$card['titolo']}}"></a>
                <div class="card-body">
                  <p class="card-text">{{$card['titolo']}}</p>
                </div>
            </div>
              @endforeach
            
        </section>

        <div class="h4">Lunghe</div>
        <section class="lunghe">
          
        
              @foreach ($lunghe as $key => $card)
              <div class="card" style="width: 15rem;">
                <a href="{{ route('show',['id' => $key]) }}"><img src="{{$card['src']}}" class="card-img-top" alt="{{$card['titolo']}}"></a>
                <div class="card-body">
                  <p class="card-text">{{$card['titolo']}}</p>
                </div>
              </div>
              @endforeach
            
        </section>
      @endsection

