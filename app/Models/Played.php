<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    use HasFactory;

    protected $table = "tb_played";  

    protected $primaryKey = 'id';
    protected $fillable = ['played_id_artist', 'played_id_album', 'played_id_track'];
}
