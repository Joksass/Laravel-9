<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Miestai;

class MiestaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Miestai::create([
            'miestas' => 'Šiauliai',
        ]);
        Miestai::create([
            'miestas' => 'Panevėžys',
        ]);
        Miestai::create([
            'miestas' => 'Radviliškis',
        ]);
        Miestai::create([
            'miestas' => 'Kuršėnai',
        ]);
        Miestai::create([
            'miestas' => 'Pakražantis',
        ]);
    }
}
