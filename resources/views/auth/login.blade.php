<x-layout>
<h1>Login page</h1>

<form method="POST" action="{{route('login')}}" class="w-50 mx-auto">
    @csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ old('email') }}">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary mt-2">Submit</button>

  
  @if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        
    <li>{{ $error }}</li>
     
    @endforeach
  </ul>
  @endif
</form>
</x-layout>