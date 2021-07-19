@extends('layouts.app')

@section('content')

<div class="container"> 

    <h3>
        Daftar Played
        <a href="{{ url('/played/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </h3>
    <table class="table table-bordered">
        <tr> 
            <th>ID</th>
            <th>ID ARTIST</th>
            <th>ID ALBUM</th> 
            <th>ID TRACK</th> 
            <th>EDIT</th>    
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->played_id_artist }}</td>
            <td>{{ $row->played_id_album}}</td>
            <td>{{ $row->played_id_track }}</td>
            <td><a href="{{ url('played/' . $row->id . '/edit') }}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection 