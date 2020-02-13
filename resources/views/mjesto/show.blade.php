<!-- Stored in resources/views/mjesto/show.blade.php -->

@extends('adminlte::page')

@section('title', 'Mjesto Detalji') <!-- //TODO Postavi blade mjesto->naziv -->

@section('sidebar')
    @parent
    <p><a href="/zupanijas/">Popis svih županija</a><br>
        <a href="/mjestos/">Popis svih mjesta</a><br>
    <a href="/mjestos/byzup">Popis svih mjesta</a><br></p>
    <p><ul class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/zupanijas/">Sve županije</a></li>
  <li><a href="/zupanijas/{{ $m->zupanija()->first()->id }}">{{ $m->zupanija()->first()->naziv }}</a></li>
  <li><a href="/mjestos/{{ $m->id }}">{{ $m->naziv }}</a></li>
  <li>{{ $m->naziv }}</li>
</ul></p>
@endsection

@section('content')
<h1>{{ $m->naziv }}</h1>
Id:{{ $m->id }}<br>

<h2>Ispis detalja {{ $m->naziv }}</h2>


    <p><iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  <!-- 
  Obavezno resetirati cache u slučaju promjene .env
  php artisan config:clear 
  -->
  src="https://www.google.com/maps/embed/v1/place?key={{env('GOOGLE_MAPS_API', false)}}
    &q=caffe,{{ $m->naziv }}" allowfullscreen>
</iframe></p>
    
@endsection