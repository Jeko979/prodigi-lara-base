@extends('layouts.app')

@section('titlehead', 'Ordini')

@section('content')

    <h1>Ordini: </h1>
    @php
        $nomi=['ordine1', 'ordine2', 'ordine3'];
    @endphp

    <ol>
    @foreach($nomi as $nome)
        <li>{{ $nome }}</li>
    @endforeach
    </ol>

@endsection
