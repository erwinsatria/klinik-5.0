<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kberencana extends Model
{
    protected $fillable = [
        'nama',
        'nik',
        'umur',
        'nama_suami',
        'alamat',
        'jumlah_anak',
        'td',
        'bb',
        'tanggal_kembali',
        'keterangan'
    ];
}
