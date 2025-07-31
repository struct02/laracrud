<x-layout>


    <table class="table table-stripped">
<thead>

<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
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
</tr>
@endforeach
</tbody>

    </table>
</x-layout>