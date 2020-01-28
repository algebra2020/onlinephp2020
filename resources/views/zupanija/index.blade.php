<!-- Stored in resources/views/zupanija/index.blade.php -->

@extends('basic_template')

@section('title', 'Županija popis')

@section('sidebar')
    @parent

    <h1>Kompletan popis svih županija.</h1>
@endsection

@section('content')
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
   <div class="modal-dialog ">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
             </div>
             <div class="modal-body">
                 @csrf
                 @method('DELETE')
                 <p class="text-center">Are You Sure Want To Delete ?</p>
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
   
    <a href="/zupanijas/{{ $z->id }}/edit">
        <a href="javascript:;" data-toggle="modal" onclick="deleteData({{ $z->id }})" 
data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
        <form action="/zupanijas/{{ $z->id }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <input type="submit" name="delete" value="Delete" class="btn btn-outline-secondary btn-sm" data-title="Delete" data-toggle="modal" data-target="#delete">
        </form>
        <button class="btn btn-outline-secondary btn-sm" data-title="Edit" data-toggle="modal" data-target="#edit">Edit</button></a>
        <a href="/zupanijas/{{ $z->id }}"> {{ $z->naziv }} </a> &nbsp; 
</li>
@endforeach
</ul>

    <p>This is my body content.</p>
    <script type="text/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("zupanijas.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>
@endsection