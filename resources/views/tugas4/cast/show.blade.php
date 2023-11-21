@extends('tugas2.master')
@section('main-content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('ubah', ['id' => $data->id]) }}">
            @csrf

            <label for="first_name">Nama:</label>
            <input type="text" name="nama" value="{{ $data->nama }}" required>
            <br>

            <label for="email">umur:</label>
            <input type="number" name="umur" value="{{ $data->umur }}" required>
            <br>

            <label for="password">bio:</label>
            <input type="text" name="bio" value="{{ $data->bio }}" required>
            <br>

            <button type="submit">Update</button>
        </form>
    </div>
@endsection
