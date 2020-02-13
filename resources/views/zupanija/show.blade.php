<!-- Stored in resources/views/zupanija/index.blade.php -->

@extends('adminlte::page')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p><a href="/zupanijas/">Popis svih županija</a><br>
        <a href="/mjestos/">Popis svih mjesta</a><br>
    <a href="/mjestos/byzup">Popis svih mjesta</a><br></p>
@endsection

@section('content')
<h1>{{ $z->naziv }}</h1>
Id:{{ $z->id }}<br>

<h2>Ispis svih mjesta županije {{ $z->naziv }} ({{$z->mjestos()->count()}})</h2>
<ol>
@foreach ($z->mjestos()->get() as $m)
<li> 
    <i class="fas fa-map"></i>
    <a href="/mjestos/{{ $m->id }}"> {{ $m->naziv }} <span class="details">({{ $m->pbr }})</span></a></li>
@endforeach
</ol>
<?php //print_r($zup);?>
    <p>This is my body content.</p>
@endsection