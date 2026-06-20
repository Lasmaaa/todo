<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reģistrēties</h1>
    <form action="/register" method="POST">
        @csrf
        @if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif

        <label for="first_name">Vārds</label>
        <input type="text" name="first_name" id="first_name" placeholder="Vārds" required>
        <label for="last_name">Uzvārds</label>
        <input type="text" name="last_name" id="last_name" placeholder="Uzvārds" required>
        <label for="email">E-pasts</label>
        <input type="email" name="email" id="email" placeholder="E-pasts" required>
        <label for="password">Parole</label>
        <input type="password" name="password" id="password" placeholder="Parole" required>
        <label for="password_confirmation">Apstiprināt paroli</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Apstiprināt paroli" required>
        <button type="submit">Reģistrēties</button>
    </form>

</body>
</html>