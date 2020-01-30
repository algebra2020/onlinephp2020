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