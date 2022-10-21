@extends ('layouts.app')

@section ('content')

<div class="crud-form">
<h1>Edit Category</h1>
<form action="{{route('admin.categories.update', ['category' => $category->id])}}" method="POST">
    @csrf

    @method('PUT')

    
    <input value="{{old('title',$category->title)}}" class="@error('title') is-invalid @enderror" type="text" id="title" name='title'>

    @error('title')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
    @enderror

    <input value="{{old('slug',$category->slug)}}" type="text" class="@error('slug') is-invalid @enderror" id="slug" name="slug" >

    @error('slug')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
    @enderror

    
    <div class="button-wrapper">
        <button type="submit">Edit Category</button>
    </div>

</form>
</div>

@endsection