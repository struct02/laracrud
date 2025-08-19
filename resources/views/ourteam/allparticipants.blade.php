<x-layout>
<div class="w-50 text-center mx-auto d-block">
    @if(Session::has('success'))

    <div class="alert alert-success mx-auto" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
</div>

    <table class="table table-stripped">
<thead>

<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Edit</th>
             <th>Delete</th>
</tr>
</thead>
<tbody>


</tbody>
<tbody>
    @foreach ($part as $post)
<tr>
    <td>{{$post->id}}</td>
    <td>{{$post->name}}</td>
    <td>{{$post->description}}</td>
    <td><a href="{{route('editparticipant', ['participant' => $post->id])}}">Edit</a></td>
    <td><form action="{{route('post.delete', $post->id) }}" method="POST">
    @csrf

@method('delete')
<button type="submit" onclick="return confirm('Are you sure you want to delete')">Del</button>
</form>
</td>
</tr>
@endforeach
</tbody>

    </table>
</x-layout>