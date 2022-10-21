@extends ('layouts.app')

@section ('content')
<div class="show-wrapper">
    <h1>{{$category->title}}</h1>
    <h2>Tutti i Post relativi alla categoria: {{$category->title}} </h2>

    @if(count($category->posts))
    @foreach($category->posts as $post)
        <a href="{{route('admin.posts.show',$post->id)}}"><li>{{$post->title}}</li></a>
    @endforeach
    @endif
</div>
@endsection

