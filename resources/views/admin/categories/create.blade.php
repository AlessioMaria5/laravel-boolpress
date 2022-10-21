@extends ('layouts.app')

@section ('content')
<div class="crud-form">
    <h1>New Category</h1>
<form action="{{route('admin.categories.store')}}" method="POST">
    @csrf

    
    <input placeholder="Name" class="text-input" type="text" id="title" name='title'>
    <input placeholder="Slug" class="text-input" type="text" class="" id="slug" name="slug" >

    <div class="button-wrapper">
    <button type="submit">New Category</button>
    </div>
</form>

</div>
@endsection