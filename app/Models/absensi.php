<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;
    protected $fillable = ['nim', 'nama', 'jabatan'];
    protected $table = 'absensi';
    public $timestamps = false;
}
