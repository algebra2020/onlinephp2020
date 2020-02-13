<!-- /resources/views/alerts.blade.php -->

@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
@if (Session::has('message-success'))
<div class="alert-success" role="alert">{{ Session::get('message-success') }}</div>
@endif
@if(!empty($errors->first()))

<div class="alert alert-danger">
    <span>{{ $errors->first() }}</span>
</div>

@endif

