<x-layout>
<h1>Password Reset</h1>

@if (session('status'))
<div>{{session('status')}}</div>
@endif

<form method="POST" action="{{route('password.request')}}" class="w-50 mx-auto">
    @csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
   
  </div>
  
  
  <button type="submit" class="btn btn-primary mt-2">Reset</button>

{{--   
  @if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        
    <li>{{ $error }}</li>
     
    @endforeach
  </ul>
  @endif --}}
</form>
</x-layout>