<?php

namespace Database\Seeders;

use App\Models\veri;
use Illuminate\Database\Seeder;

class veriekle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        veri::create([
            'name'=>'Kübra',
            'surname'=>'Karsavuran',
            'age'=>24,
            'kabul'=>'1'
        ]);

        veri::create([
            'name'=>'Ahmet',
            'surname'=>'veri',
            'age'=>30,
            'kabul'=>'0'
        ]);

        veri::create([
            'name'=>'Ayten',
            'surname'=>'cenel',
            'age'=>40,
            'kabul'=>'0'
        ]);

        veri::create([
            'name'=>'Suray',
            'surname'=>'Ayroma',
            'age'=>35,
            'kabul'=>'1'
        ]);
    }
}
