@extends('layout.app')

@section('titolo','Home')

@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
@endsection


@section('main')
    <div class="container-main">
    {{-- <img src="{{asset('img/spaghetti.jpg')}}" alt="immagine-pasta"> --}}
        <div class="p-3 mb-2 bg-dark text-light">
            <p> Grazie alla ricerca scientifica, condotta con un pool di agronomi, 
                abbiamo selezionato i semi italiani che restituiscono un grano duro alto-proteico, 
                di eccezionale tenacità ed elasticità, di cui necessita una pasta premium come la nostra.
            </p>
        </div>
    </div>
@endsection

{{-- bse --}}
