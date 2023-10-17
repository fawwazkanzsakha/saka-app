
    @extends('layout.main')
    @section('title,mahasiswa')
    @section('content')
    <h1>halaman mahasiswa </h1>
    <table class="table table-success table-striped-columns">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
        </tr>
    @foreach ($mahasiswa as $item)
        <tr>
            <td>{{$item['npm']}}</td>
            <td>{{$item['nama']}}</td>
        </tr>
    @endforeach
    </table>
    @endsection
