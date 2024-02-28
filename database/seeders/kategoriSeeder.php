<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Seeder;


class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kategori::create([
            'kategori_name'=>'Romantik'
        ]);

        kategori::create([
            'kategori_name'=>'Komedi'
        ]);

        kategori::create([
            'kategori_name'=>'Polisiye'
        ]);

        kategori::create([
            'kategori_name'=>'Hikaye'
        ]);






    }
}
