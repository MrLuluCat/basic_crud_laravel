<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presensi extends Model
{
    use HasFactory;

    protected $table = 'presensi';
    protected $fillable = ['nim', 'tanggal', 'jam_masuk', 'jam_keluar'];
    public $timestamps = true;

}
