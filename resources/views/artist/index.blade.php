@extends('layouts.app')

@section('content')

<div class="container"> 

    <h3>
        Daftar Artist
        <a href="{{ url('/artist/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </h3>
    <table class="table table-bordered">
        <tr> 
            <th>ID</th>
            <th>NAMA</th>    
            <th>EDIT</th> 
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->artist_id }}</td>
            <td>{{ $row->artist_nama }}</td>
            <td><a href="{{ url('artist/' . $row->artist_id . '/edit') }}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection 