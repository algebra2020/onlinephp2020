<!-- Stored in resources/views/zupanija/index.blade.php -->

@extends('basic_template')

@section('title', 'Mjesto popis')

@section('sidebar')
    @parent

    <h1>Kompletan popis svih mjesta.</h1> <!-- //TODO group by zupanija i sort po abc -->
@endsection

@section('content')

<ul>

@foreach ($mjesta as $m)
<li style='list-style:none'>
    <img src="{{asset('images/map.svg')}}" width="25px">
    <a href="/mjestos/{{ $m->id }}"> {{ $m->naziv }} </a></li>
@endforeach
</ul>
    <p>This is my body content.</p>
@endsection