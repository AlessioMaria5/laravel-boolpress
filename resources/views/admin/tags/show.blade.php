@extends ('layouts.app')

@section ('content')
<div class="show-wrapper">


    <h1>{{$tag->title}}</h1>
    <h2>Tutti i Post associati al Tag : {{$tag->title}}</h2>

    <ul>
    @foreach ($tag->posts as $post)
    <a href="{{route('admin.posts.show',$post->id)}}"><li>{{$post->title}}</li></a>
    @endforeach
    </ul>
</div>
@endsection 