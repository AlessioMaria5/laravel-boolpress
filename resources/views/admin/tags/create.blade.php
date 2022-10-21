@extends ('layouts.app')

@section ('content')
<div class="crud-form">
    <h1>New Tag</h1>
<form action="{{route('admin.tags.store')}}" method="POST">
    @csrf

    
    <input placeholder ="Name" class="" type="text" id="title" name='title'>

    <div class="button-wrapper">
    <button type="submit">New Tag</button>
    </div>
</form>
</div>

@endsection