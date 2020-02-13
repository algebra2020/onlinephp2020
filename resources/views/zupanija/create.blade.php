<!-- Stored in resources/views/zupanija/index.blade.php -->

@extends('adminlte::page')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h1>Unesi novu županiju</h1>
<form action="/zupanijas" method="post">
    @csrf
    <label for="naziv">Unesi ime županije</label>
    <input name="naziv" type="text" required="true"><br>
    <input type="submit" name="unesi">
</form>
@endsection