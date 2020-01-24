<!-- Stored in resources/views/zupanija/index.blade.php -->

@extends('basic_template')

@section('title', 'Županija popis')

@section('sidebar')
    @parent

    <h1>Kompletan popis svih županija.</h1>
@endsection

@section('content')
<ul>
    <?php
    //dd($zup);
    ?>
@foreach ($zup as $z)
<li style='list-style:none'>
    <img src="{{asset('images/map.svg')}}" width="25px">
    <a href="/zupanijas/{{ $z->id }}"> {{ $z->naziv }} </a></li>
@endforeach
</ul>
<?php //print_r($zup);?>
    <p>This is my body content.</p>
@endsection