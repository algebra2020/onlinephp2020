<!-- Stored in resources/views/mjesto/show.blade.php -->

@extends('basic_template')

@section('title', 'Mjesto Detalji') <!-- //TODO Postavi blade mjesto->naziv -->

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h1>{{ $m->naziv }}</h1>
Id:{{ $m->id }}<br>

<h2>Ispis detalja {{ $m->naziv }}</h2>


    <p>This is my body content.</p>
@endsection