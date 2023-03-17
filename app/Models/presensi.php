<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presensi extends Model
{
    use HasFactory;

    protected $table = 'presensi';
    protected $fillable = ['id','idabsensi', 'jam_masuk', 'jam_keluar'];
    public $timestamps = true;

    public function absensi()
    {
        return $this->belongsTo(absensi::class, 'idabsensi');
    }

}
