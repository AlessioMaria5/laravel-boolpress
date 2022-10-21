@extends ('layouts.app')

@section ('content')
<div class="crud-form">
    <h1>Create New Post</h1>
<form action="{{route('admin.posts.store')}}" method="POST">
    @csrf

   
    <input placeholder="Title" class="@error('title') is-invalid @enderror text-input" type="text" id="title" name='title'>

    @error('title')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
    @enderror
    
    <input type="text" placeholder="Slug" class="text-input @error('slug') is-invalid @enderror" id="slug" name="slug" >

    @error('slug')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
    @enderror



    <textarea placeholder="Write your Post" class="text-area" type="text" id="content" name="content" ></textarea>

    <label for="category_id">Post Category</label>
    <select name="category_id" id="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
    </select>
                <h5>Tags</h5>
                <div class="tags">
                 @foreach ($tags as $tag)
                    <div>
                        <input {{(in_array($tag->id, old('tags', [])))?'checked':''}} name="tags[]" type="checkbox" id="{{$tag->id}}" value="{{$tag->id}}">
                        <label class="tag-label" for="{{$tag->id}}">{{$tag->title}}</label>
                        <span class="checkmark"></span>
                    </div>
                @endforeach
                </div>
    
    <div class="button-wrapper">
        <button type="submit">Crea Post</button>
    </div>
    
</form>
</div>


@endsection