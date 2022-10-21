@extends ('layouts.app')

@section ('content')
<div class="crud-form">
    <h1>Edit Tag</h1>
<form action="{{route('admin.tags.update', compact('tag'))}}" method="POST">
    @csrf

    @method('PUT')

    <label for="title">Tags</label>
    <input type="text" id="title" name='title'>
    
    <div class="button-wrapper">
        <button type="submit">Edit Tag</button>
    </div>
    
</form>

</div>


@endsection