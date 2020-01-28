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
    <a href="/zupanijas/{{ $z->id }}"> {{ $z->naziv }} </a> &nbsp; 
    <a href="/zupanijas/{{ $z->id }}/edit">
        <form action="/zupanijas/{{ $z->id }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <input type="submit" name="delete" value="Delete" class="btn btn-outline-secondary btn-sm" data-title="Delete" data-toggle="modal" data-target="#delete">
        </form>
        <button class="btn btn-outline-secondary btn-sm" data-title="Edit" data-toggle="modal" data-target="#edit">Edit</button></a></li>
@endforeach
</ul>
<?php //print_r($zup);?>
    <p>This is my body content.</p>
@endsection