@extends('layout.app')

@section('content')
    
    @foreach ($paste as $pasta)

    <div class="sigle-product">

        <ul>
            <li><img src="{{ $pasta['src'] }}" alt=""></li>
            <li><h2>{{ $pasta['titolo'] }}</h2></li>
            <li>Tipo: {{ $pasta['tipo']}}</li>
            <li>Tempo di Cottura: {{ $pasta['cottura']}}</li>
            <li>Peso: {{ $pasta['peso']}} </li>
            <li><p>{{ $pasta['descrizione']}}</p></li>
        </ul>

    </div>

    {{-- <div class="product">
        <span>{{ $pasta['titolo'] }}</span>
    </div> --}}


        
    @endforeach

@endsection