@extends('layouts.app')

@section('titlehead', 'Fatture')

@section('content')

    <h1>Fatture: </h1>
    @php
        $nomi=['fattura1', 'fattura2'];
    @endphp

    <ol>
    @foreach($nomi as $nome)
        <li>{{ $nome }}</li>
    @endforeach
    </ol>

@endsection

