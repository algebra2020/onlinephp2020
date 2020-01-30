<!-- Stored in resources/views/zupanija/index.blade.php -->

@extends('basic_template')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h1>Promjeni ime mjesta {{$mjesto->naziv}}</h1>
<div class="forma">
<form action="/mjestos/{{$mjesto->id}}" method="post">
    @csrf
    @method('PUT')
    <label for="naziv">Unesi ime mjesta</label>
    <input name="naziv" type="text" required="true" class="right" value="{{$mjesto->naziv}}"><br>
    
    <label for="pbr">Unesi poštanski broj mjesta</label>
    <input name="pbr" type="number" required="true" class="right" min="10000" max="60000" value="{{$mjesto->pbr}}"><br>
    
    <label for="zupanija_id">Odaberi županiju</label>
    <select name="zupanija_id" class="right">
        <option value="{{$mjesto->zupanija_id}}">{{$mjesto->zupanija()->first()->naziv}}</option>
        @foreach ($zupanije as $z)
        <option value="{{$z->id}}">{{$z->naziv}}</option>
        @endforeach
    </select> 

    <br>
    <input type="submit" name="unesi" class="right">
    </div>
    </form>

@endsection