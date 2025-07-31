<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud</title>
  @vite('resources/css/app.css') 
</head>
<body>

    <header>

        <nav>
        <a href="/about">About us</a>
        <a href="/team">Our team</a>
        <a href="/create">Create Member</a>
        </nav>
    </header>

    <main class="container text-center">
        {{ $slot }}
    </main>
    
</body>
</html>