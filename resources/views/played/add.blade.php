@extends('layouts.app') 

@section('content') 

<div class="container">
    <h3>Tambah Data Played</h3> 
    <form action="{{ url('/played') }}" method="POST"> 
     @csrf

        <div class="form-group">
            <label for="">ID</label>
            <input type="text" name="id" class="form-control">
        </div>

        <div class="form-group">
            <label for="">ID ARTIST</label>
            <input type="text" name="played_id_artist" class="form-control">
        </div>

        <div class="form-group">
            <label for="">ID ALBUM</label>
            <input type="text" name="played_id_album" class="form-control">
        </div>

        <div class="form-group">
            <label for="">ID TRACK</label>
            <input type="text" name="played_id_track" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection