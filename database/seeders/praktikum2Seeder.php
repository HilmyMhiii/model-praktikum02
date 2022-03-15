<?php

namespace Database\Seeders;

use App\Models\praktikum2;
use Illuminate\Database\Seeder;

class praktikum2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        praktikum2::create([
            'judul' => 'Toko Buah',
            'deskripsi' => 'Berbagai macam buah terdapat di web ini',
        ]);
    }
}
