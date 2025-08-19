<x-layout>
<h1>New participant</h1>

  
  @if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        
    <li>{{ $error }}</li>
     
    @endforeach
  </ul>
  @endif
<div class="w-50 text-center mx-auto d-block">
    @if(Session::has('post_created'))

    <div class="alert alert-success mx-auto" role="alert">
        {{Session::get('post_created')}}
    </div>
    @endif
</div>
<form method="POST" action="{{route('post.participant')}}" enctype="multipart/form-data">
@csrf
<div class="w-50 mx-auto mt-5">

  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Participant Image</label><br>
 <input type="file" name="image">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Participant Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="prodname" placeholder="">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Participant Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="proddesc"></textarea>

    <button type="submit" class="btn btn-primary mb-3 mt-3">Submit</button>
</div>

</form>
</x-layout>