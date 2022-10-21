@extends ('layouts.app')

@section ('content')
<div class="main-control">
<a class="new_btn"href="{{route('admin.posts.create')}}">+</a>
<table class="main-table">
<tr class="control-ul">
        <th class="control-list">ID</th>
        <th class="control-list">Name</th>
        <th class="control-list">Slug</th>
        <th class="control-list">Category</th>
        <th class="control-list">Edit</th>
        <th class="control-list">Preview</th>
        <th class="control-list">Delete</th>
</tr>
    @foreach ($posts as $post)
    <tr class="control-ul">
        <td class="control-list">{{$post->id}}</td>
        <td class="control-list">{{$post->title}}</td>
        <td class="control-list">{{$post->slug}}</td>
        <td class="control-list">{{$post->category->title}}</td> 
            <td class="control-list"><a href="{{route('admin.posts.edit', $post->id )}}">Edit</a></td>
            <td class="control-list"><a href="{{route('admin.posts.show', $post->id )}}">Preview</a></td>
            <td>
            <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="control-btn" type="submit">✖</button>
            </form>
            </td>    
    </tr>
    @endforeach
</table>
</div>
@endsection