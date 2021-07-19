@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Data Album</h3>
    <form action="{{ url('/album/' . $row->id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" name="album_id" class="form-control" value="{{ $row->album_id }}">
        </div>
        <div class="form-group">
            <label for="">NAMA</label>
            <input type="text" name="album_nama" class="form-control" value="{{ $row->album_nama }}">
        </div>
        <div class="form-group">
            <label for="">ID Artist</label>
            <input type="text" name="album_id_artist" class="form-control" value="{{ $row->album_id_artist }}">
        </div>
        <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>

    </form>
</div>

@endsection