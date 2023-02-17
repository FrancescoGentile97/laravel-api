<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 50; $i++) {

            $users = new Project();

            $users->name = 'Titolo #' . $i;
            $users->description = 'Descrizione #' . $i;
            $users->cover_img = 'Immagine #' . $i;
            $users->github_link = 'GitHub #' . $i;

            $users->save();
        }
    }
}
