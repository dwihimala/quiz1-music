@extends('layouts.app')

@section('content')

<div class="container"> 

    <h3>
        Daftar Album
        <a href="{{ url('/album/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </h3>
    <table class="table table-bordered">
        <tr> 
            <th>ID</th>
            <th>NAMA</th>    
            <th>ID ARTIST</th>
            <th>EDIT</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->album_id }}</td>
            <td>{{ $row->album_nama }}</td>
            <td>{{ $row->album_id_artist }}</td>
            <td><a href="{{ url('album/' . $row->album_id . '/edit') }}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection 