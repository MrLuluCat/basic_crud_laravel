<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;
    protected $fillable = ['id','nim', 'nama', 'jabatan'];
    protected $table = 'absensi';
    public $timestamps = false;
    protected $primarykey = "id";

    public function presensi()
    {
        return $this->hasMany(presensi::class);
    }
}
