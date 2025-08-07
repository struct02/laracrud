<x-layout>
<h1>Reset Password</h1>

<form method="POST" action="{{route('password.update')}}" class="w-50 mx-auto">
    @csrf
<input type="hidden" name="token" value="{{$token}}">
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ old('email') }}">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_confirmation" required>
  </div>
  
  <button type="submit" class="btn btn-primary mt-2">Submit</button>


  
</form>
</x-layout>