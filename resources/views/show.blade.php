
    @extends('layout.app')

    @section('css')
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    @endsection

    @section('titolo','Prodotti Molisana')
  
    @section('main')
      <div class="h4">Cortissime</div>
      <section class="cortissime">
            <div class="card" style="width: 15rem;">
            <a href="#"><img src="{{$card['src']}}" class="card-img-top" alt="{{$card['titolo']}}"></a>
                <div class="card-body">
                  <p class="card-text">{{$card['titolo']}}</p>
                </div>
            </div>
      </section>
    @endsection

