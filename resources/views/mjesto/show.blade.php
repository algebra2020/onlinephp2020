<!-- Stored in resources/views/mjesto/show.blade.php -->

@extends('basic_template')

@section('title', 'Mjesto Detalji') <!-- //TODO Postavi blade mjesto->naziv -->

@section('sidebar')
    @parent
    <p><a href="/zupanijas/">Popis svih županija</a><br>
        <a href="/mjestos/">Popis svih mjesta</a><br>
    <a href="/mjestos/byzup">Popis svih mjesta</a><br></p>
@endsection

@section('content')
<h1>{{ $m->naziv }}</h1>
Id:{{ $m->id }}<br>

<h2>Ispis detalja {{ $m->naziv }}</h2>


    <p><iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key={{env('GOOGLE_MAPS_API', false)}}
    &q=caffe,{{ $m->naziv }}" allowfullscreen>
</iframe></p>
    
@endsection