<!-- resources/views/auth/register.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">Nom:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirmer le mot de passe:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
