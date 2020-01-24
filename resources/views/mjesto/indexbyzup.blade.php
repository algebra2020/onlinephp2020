<!-- Stored in resources/views/zupanija/index.blade.php -->

@extends('basic_template')

@section('title', 'Mjesto popis')

@section('sidebar')
    @parent
    <p><a href="/zupanijas/">Popis svih županija</a><br>
        <a href="/mjestos/">Popis svih mjesta</a><br>
    <a href="/mjestos/byzup">Popis svih mjesta grupirano po zupanijama</a><br></p>
    <h1>Kompletan popis svih mjesta grupirano po županijama</h1> 
@endsection

@section('content')
<!-- //TODO posavi listu u dropdown meni -->
<ul>

@foreach ($zup as $z)
<li style='list-style:square'>
    <a href="/zupanijas/{{ $z->id }}"> {{ $z->naziv }} </a>
    
    <ul>@foreach ($z->mjestos()->get() as $m)
        <li><a href="/mjestos/{{ $m->id }}"> {{ $m->naziv }} </a></li>
        @endforeach
    </ul>
</li>
@endforeach
</ul>
    <p>This is my body content.</p>
@endsection