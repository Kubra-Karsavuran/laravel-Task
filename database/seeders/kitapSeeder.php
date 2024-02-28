<?php

namespace Database\Seeders;

use App\Models\kitap;
use Illuminate\Database\Seeder;

class kitapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kitap::create([
            'kitap_name'=>'Daldaki Kuş',
            'kitap_yazari'=>'Ragıp Ak',
            'kitap_kategori'=>1
        ]);

        kitap::create([
            'kitap_name'=>'Portakal',
            'kitap_yazari'=>'Ragıp Ak',
            'kitap_kategori'=>2
        ]);

        kitap::create([
            'kitap_name'=>'Sabır',
            'kitap_yazari'=>'Ragıp Ak',
            'kitap_kategori'=>3
        ]);

        kitap::create([
            'kitap_name'=>'Gözlerin',
            'kitap_yazari'=>'Ragıp Ak',
            'kitap_kategori'=>4
        ]);
    }
}
