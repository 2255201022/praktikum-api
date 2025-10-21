<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    public function run(): void
    {
        Fakultas::create([
            'kode_fakultas' => 'TI',
            'nama_fakultas' => 'Fakultas Teknik'
        ]);
    }
}