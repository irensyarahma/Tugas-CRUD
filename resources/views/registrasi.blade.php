<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Registrasi</title>
</head>

<body>
    <h2>Formulir Registrasi</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="first_name">Nama Depan:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br>

        <label for="last_name">Nama Belakang:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <label for="password_confirmation">Konfirmasi Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
        <br>

        <button type="submit">Daftar</button>
    </form>
</body>

</html>
