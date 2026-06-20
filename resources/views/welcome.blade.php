<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
  <p>Sveiks, {{ Auth::user()->first_name}}</p>
@endauth

@guest
  <p>Sveiks, viesi!</p>
    <a href="/login" method="post">Login</a>

     <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    
    @endguest

@auth
 <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
        
    </form>
@endauth
</body>
</html>
