<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud</title>
  {{-- @vite('resources/css/app.css')  --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>

    

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
     
     {{-- @guest prevents items from showing when user is logged in --}}
    @guest 
      <a class="nav-item nav-link" href="/about">About Us</a>
      <a class="nav-item nav-link" href="/team">Our team</a>

 
       <a class="nav-item nav-link" href="/login">Login</a>
       <a class="nav-item nav-link" href="/register">Register</a>
       @endguest
      

{{-- @auth is used to display items only when the user is logged in --}}
       @auth
       <a class="nav-item nav-link" href="/create">Create Member</a>
  
 
       <a class="nav-item nav-link" href="/participant">New Participant</a>
       <form action="{{route('logout')}}" method="POST">
        @csrf
        <button class="btn btn-primary">Logout User</button>
       </form>
       <a class="nav-item nav-link" href="#">Welcome: {{Auth::user()->name}}</a>

       @endauth

      {{-- This route was taking from the web.php file it is unique name given to the route, it can be anything even a single word instead show.login show or show1, etc. --}}
        <a class="nav-item nav-link" href="{{route('show.login')}}">Test Route</a>

    </div>
  </div>
</nav>
    </header>

    <main class="container text-center">
        {{ $slot }}
    </main>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</body>
</html>