<!-- Stored in resources/views/zupanija/index.blade.php -->

@extends('adminlte::page')

@section('title', 'Županija popis')

@section('content_header')
    <h1 class="m-0 text-dark">Kompletan popis svih županija 
        <span class="badge badge-secondary">{{$zup->count()}}</span>
        </h1>
@stop
@component('alerts')
    <strong>Whoops!</strong> Something went wrong!
@endcomponent

@section('sidebar')
@parent

<a style="display: inline" class="btn btn-xs btn-success" href="{{ route("zupanijas.create") }}">
    <i class="fa fa-plus" aria-hidden="true"></i> Unesi novu županiju</a>
@endsection


@section('content')
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <form action="" id="deleteForm" method="post">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: #f4f3ec">DELETE CONFIRMATION</h4>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('DELETE')
                    <p class="text-center">Jeste li sigurni da želite obrisati županiju 
                        <span id="zupnaziv"></span>?</p>
                </div>
                <div class="modal-footer">
                    <center>
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                    </center>
                </div>
            </div>
        </form>
    </div>
</div>

<ul>
    @foreach ($zup as $z)
    <li style='list-style:none'>
        <img src="{{asset('images/map.svg')}}" width="25px">   
            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{ $z->id }},'{{ $z->naziv }}')" 
               data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
            <form action="/zupanijas/{{ $z->id }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" id="delete_zup_{{ $z->id }}" name="delete_zup_{{ $z->id }}" class="btn btn-outline-secondary btn-sm" data-title="Delete" data-toggle="modal" data-target="#delete">
                    <i class="fa fa-trash"></i> Delete
                </button>
            </form>
             <a href="/zupanijas/{{ $z->id }}/edit">
            <button class="btn btn-outline-secondary btn-sm" data-title="Edit" data-toggle="modal" data-target="#edit"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
        <a href="/zupanijas/{{ $z->id }}"> {{ $z->naziv }} </a> &nbsp; 
    </li>
    @endforeach
</ul>

<p>This is my body content.</p>
<script type="text/javascript">
    function deleteData(id, naziv)
    {
    var id = id;
    var naziv = naziv;
    var url = '{{ route("zupanijas.destroy", ":id") }}';
    url = url.replace(':id', id);
    $("#deleteForm").attr('action', url);
    $("#zupnaziv").html(naziv);
    console.log(naziv);
    }

    function formSubmit()
    {
    $("#deleteForm").submit();
    }
</script>
@endsection