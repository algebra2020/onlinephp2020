<!-- Stored in resources/views/zupanija/index.blade.php -->

@extends('basic_template')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<ul>
@foreach ($zup as $z)
<li style='list-style:none'>
    <img src="{{asset('images/map.svg')}}" width="25px">
    <a href=" zupanijas/{{ $z->id }}"> {{ $z->naziv }} </a></li>
@endforeach
</ul>
<?php //print_r($zup);?>
    <p>This is my body content.</p>
@endsection