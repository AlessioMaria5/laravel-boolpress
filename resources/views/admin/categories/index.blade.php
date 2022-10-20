@extends ('layouts.app')

@section ('content')
<div class="main-control">
<a class="new_btn"href="{{route('admin.categories.create')}}">+</a>
<table class="main-table">
<tr class="control-ul">
        <th class="control-list">ID</th>
        <th class="control-list">Name</th>
        <th class="control-list">Slug</th>
        <th class="control-list">Edit</th>
        <th class="control-list">Show</th>
        <th class="control-list">Delete</th>
</tr>
    @foreach ($categories as $category)
    <tr class="control-ul">
        <td class="control-list">{{$category->id}}</td>
        <td class="control-list">{{$category->title}}</td>
        <td class="control-list">{{$category->slug}}</td>  
            <td class="control-list"><a href="{{route('admin.categories.edit', $category->id )}}">Edit</a></td>
            <td class="control-list"><a href="{{route('admin.categories.show', $category->id )}}">Show</a></td>
            <td>
            <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST">
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