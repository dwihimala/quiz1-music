@extends('layouts.app')

@section('content')

<div class="container"> 

    <h3>
        Daftar Track
        <a href="{{ url('/track/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </h3>
    <table class="table table-bordered">
        <tr> 
            <th>ID</th>
            <th>NAMA</th>
            <th>TIME</th>     
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->track_id }}</td>
            <td>{{ $row->track_nama }}</td>
            <td>{{ $row->time }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection 