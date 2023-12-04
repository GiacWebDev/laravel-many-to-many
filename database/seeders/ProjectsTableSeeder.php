<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Type;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_project = new Project();
            //ottengo un tipo random prendendolo dall'id
            $new_project->type_id = Type::all()->random()->id;
            $new_project->name = $faker->words(2, true);
            $new_project->status = $faker->word;
            $new_project->description = $faker->paragraph;

            $new_project->save();
        }
    }
}
