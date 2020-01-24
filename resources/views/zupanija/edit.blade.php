<!-- Stored in resources/views/zupanija/index.blade.php -->

@extends('basic_template')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h1>Promjeni ime županije {{$z->naziv}}</h1>
<form action="/zupanijas/{{$z->id}}" method="post">
    @csrf
    @method('PUT')
    <label for="naziv">Unesi novi naziv županije</label>
    <input name="naziv" type="text" required="true" value="{{$z->naziv}}"><br>
    <input type="submit" name="unesi">
</form>
@endsection