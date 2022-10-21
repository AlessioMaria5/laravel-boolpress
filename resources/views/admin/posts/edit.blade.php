@extends ('layouts.app')

@section ('content')
<div class="crud-form">
<form action="{{route('admin.posts.update', ['post' => $post->id])}}" method="POST">
    @csrf

    @method('PUT')

    
    <input value="{{old('title', $post->title)}}" class="@error('title') is-invalid @enderror" type="text" id="title" name='title'>

    @error('title')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
    @enderror

    <input value="{{old('slug', $post->slug)}}" type="text" class="@error('slug') is-invalid @enderror" id="slug" name="slug" >

    @error('slug')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
    @enderror

    

    <textarea type="text" id="content" name="content" >
    {{old('content', $post->content)}}
    </textarea>

    <h5>Tags</h5>

                <div class="tags">
                 @foreach ($tags as $tag)
                    <div>
                        <input name="tags[]" type="checkbox" id="{{$tag->id}}" value="{{$tag->id}}">
                        <label class="tag-label" for="{{$tag->id}}">{{$tag->title}}</label>
                        <span class="checkmark"></span>
                    </div>
                @endforeach
                </div>
                
    <div class="button-wrapper">
    <button type="submit">Edit Post</button>
    </div>
</form>
</div>

@endsection