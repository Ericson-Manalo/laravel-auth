<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $typeList = [
            "Public",
            "Private",
            "Sources",
            "Forks",
            "Archived",
            "Can be sponsored",
            "Mirrors",
            "Templates",
        ];

        $languageList = [
            "PHP",
            "Hack",
            "Vue",
            "CSS",
            "HTML",
            "Javascript",
        ];

        
        for ($i=0; $i < 50; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->unique()->sentence(3);
            $newProject->description = $faker->paragraph(7);
            $newProject->type = $faker->randomElement($typeList);
            $newProject->language = $faker->randomElement($languageList);
            $newProject->save();
            # code...
        }
    }
}
