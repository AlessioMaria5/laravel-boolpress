@extends ('layouts.app')

@section ('content')
<div class="show-wrapper">
  <h1>{{$post->title}}</h1>
  <p>{{$post->content}}</p>
</div>
@endsection