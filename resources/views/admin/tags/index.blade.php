@extends ('layouts.app')

@section ('content')
<div class="main-control">
<a class="new_btn"href="{{route('admin.tags.create')}}">+</a>
<table class="main-table">
<tr class="control-ul">
        <th class="control-list">ID</th>
        <th class="control-list">Name</th>
        <th class="control-list">Slug</th>
        <th class="control-list">Edit</th>
        <th class="control-list">Show</th>
        <th class="control-list">Delete</th>
</tr>
    @foreach ($tags as $tag)
    <tr class="control-ul">
        <td class="control-list">{{$tag->id}}</td>
        <td class="control-list">{{$tag->title}}</td>
        <td class="control-list">{{$tag->slug}}</td>  
            <td class="control-list"><a href="{{route('admin.tags.edit', $tag->id )}}">Edit</a></td>
            <td class="control-list"><a href="{{route('admin.tags.show', $tag->id )}}">Show</a></td>
            <td>
            <form action="{{route('admin.tags.destroy', $tag->id)}}" method="POST">
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