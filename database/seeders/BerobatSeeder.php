<?php

namespace Database\Seeders;

use App\Models\Berobat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BerobatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berobat::insert([
            'nama' => 'Agus Jamaludin',
            'umur' => '23',
            'alamat' => 'Air Batu',
            'Keluhan' => 'Sakit Perut',
            'pemeriksaan_fisik' => 'TB = 180',
            'terapi' => 'apa aja',
            'keterangan' => '100.000'

        ]);
    }
}
