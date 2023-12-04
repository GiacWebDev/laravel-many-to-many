<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tecnology;

class TecnologiesTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['HTML', 'CSS', 'Javascript', 'PHP', 'C++'];
        foreach ($data as $tecnology) {
            $new_tecnology = new Tecnology();
            $new_tecnology->name = $tecnology;

            $new_tecnology->save();
        }

    }
}
