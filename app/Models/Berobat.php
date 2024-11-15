<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berobat extends Model
{
    protected $fillable = [
        'nama',
        'umur',
        'alamat',
        'keluhan',
        'pemeriksaan_fisik',
        'terapi',
        'keterangan',
    ];
}
