<!-- Stored in resources/views/zupanija/index.blade.php -->

@extends('adminlte::page')

@section('title', 'Mjesto popis')

@section('content_header')
    <h1 class="m-0 text-dark">Kompletan popis svih mjesta 
        <span class="badge badge-secondary">{{$mjesta->count()}}</span>
        </h1>
@stop

@section('content')
<div class="m-0 text-dark"><p>
    <a href="mjestos/create"><i class="fa fa-plus-square" aria-hidden="true"></i> Dodaj mjesto </a><br>
    </p>
     
 </div>

<ul>

    @foreach ($mjesta as $m)
    <li style='list-style:none'>
        <form action="/mjestos/{{ $m->id }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" name="delete" class="btn btn-outline-secondary btn-sm" data-title="Delete" data-toggle="modal" data-target="#delete">
                <i class="fa fa-trash"></i> Delete
            </button>
        </form>
        <a href="/mjestos/{{ $m->id }}/edit">
            <button class="btn btn-outline-secondary btn-sm" data-title="Edit" data-toggle="modal" data-target="#edit"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
        <a href="/mjestos/{{ $m->id }}"> {{ $m->naziv }} </a></li>
    @endforeach
</ul>
<p>This is my body content.</p>
@endsection