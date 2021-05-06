@extends('layout.app')

@section('content')
    
    <div class="product-grid">

        @foreach ($paste as $pasta)

        <div class="single-product">

            <img class="single-product__image" src="{{ $pasta['src'] }}" alt="">
            <h2  class="single-product__title">{{ $pasta['titolo'] }}</h2>

                {{-- <li>Tipo: {{ $pasta['tipo']}}</li> --}}
                {{-- <li>Tempo di Cottura: {{ $pasta['cottura']}}</li> --}}
                {{-- <li>Peso: {{ $pasta['peso']}} </li> --}}
                {{-- <li><p>{!! $pasta['descrizione'] !!}</p></li> --}}
            </ul>

        </div>
        
        @endforeach
        
    </div>
@endsection