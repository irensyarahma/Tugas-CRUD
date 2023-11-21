@extends('tugas2.master')
@section('main-content')
    <div class="container-fluid">
        <a href="{{ route('create') }}">
            <button>Create Cast</button>
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>bio</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->umur }}</td>
                        <td>{{ $item->bio }}</td>
                        <td><a href="{{ route('tampilkan', ['id' => $item->id]) }}">
                                <button>show</button>
                            </a>
                            <a href="{{ route('hapus', ['id' => $item->id]) }}">
                                <button>delet</button>
                            </a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
