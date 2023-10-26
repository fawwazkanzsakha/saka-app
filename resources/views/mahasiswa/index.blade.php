
    @extends('layout.main')
    @section('title,mahasiswa')
    @section('content')
    <h1>halaman mahasiswa </h1>
    <table class="table table-success table-striped-columns">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal lahir</th>
             <th>foto</th>
            <th>Nama prodi</th>
             <th>Fakultas</th>
        </tr>
    @foreach ($mahasiswa as $item)
             <tr>
            <td>{{$item['npm']}}</td>
            <td>{{$item['nama']}}</td>
            <td>{{$item['tempat_lahir']}}</td>
            <td>{{$item['tanggal_lahir']}}</td>
            <td><img src="image/{{$item['foto']}}"class="rounded-circle" width="70px" /></td>
             <td>{{$item['prodi']['nama']}}</td>
             <td>{{$item['prodi']['fakultas']['nama']}}</td>
        </tr>
    @endforeach
    </table>
    @endsection
