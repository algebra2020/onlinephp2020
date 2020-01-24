<!-- Stored in resources/views/zupanija/index.blade.php -->

@extends('basic_template')

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

<h2>Ispis svih mjesta županije {{ $z->naziv }}</h2>
<ul>
@foreach ($z->mjestos()->get() as $m)
<li> 
    <img src='map.png'>
    <a href="/mjestos/{{ $m->id }}"> {{ $m->naziv }} <span class="details">({{ $m->pbr }})</span></a></li>
@endforeach
</ul>
<?php //print_r($zup);?>
    <p>This is my body content.</p>
@endsection