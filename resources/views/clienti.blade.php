@extends('layouts.app')

@section('titlehead', 'Clienti')

@section('content')

    <h1>Clienti: </h1>
    @php
        $nomi=['mario rossi', 'luigi bianchi'];
    @endphp

    <table>
    @foreach($nomi as $nome)
        <tr><td>{{ $nome }}</td></tr>
    @endforeach
    </table>

@endsection

