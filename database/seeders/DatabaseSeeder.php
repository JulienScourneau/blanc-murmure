<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Attendees;
use App\Models\Catalog;
use App\Models\Event;
use App\Models\PhotoProject;
use App\Models\PhotoUrbanspace;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectPhoto;
use App\Models\UrbanSpace;
use App\Models\UrbanSpaceProject;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'julien',
            'email' => 'julien@mail.com',
            'password' => 'password',
        ]);

        ProjectCategory::factory()->create([
            'title' => 'Illustration'
        ]);
        ProjectCategory::factory()->create([
            'title' => 'Sculpture'
        ]);
        Attendees::factory(5)->create();
        Event::factory(5)->create();
        Catalog::factory(3)->create();
        Video::factory(5)->create();

        UrbanSpace::factory(6)->create();
        UrbanSpaceProject::factory(3)->create();
        PhotoUrbanspace::factory(20)->create();

        Project::factory(10)->create();
        PhotoProject::factory(40)->create();
    }
}
