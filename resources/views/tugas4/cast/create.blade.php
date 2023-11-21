@extends('tugas2.master')
@section('main-content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('submit') }}">
            @csrf

            <label for="first_name">Nama:</label>
            <input type="text" name="nama" required>
            <br>

            <label for="email">umur:</label>
            <input type="number" name="umur" required>
            <br>

            <label for="password">bio:</label>
            <input type="text" name="bio" required>
            <br>

            <button type="submit">Daftar</button>
        </form>
    </div>
@endsection
