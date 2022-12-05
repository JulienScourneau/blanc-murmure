<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Attendees;
use App\Models\Catalog;
use App\Models\Event;
use App\Models\Illustration;
use App\Models\PhotoIllustration;
use App\Models\PhotoProject;
use App\Models\PhotoSculpture;
use App\Models\PhotoUrbanspace;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectPhoto;
use App\Models\Sculpture;
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
//        TODO: Remove on production
        User::factory()->create([
            'name' => 'julien',
            'email' => 'julien@mail.com',
            'password' => 'password',
        ]);

        Attendees::factory(5)->create();
        Event::factory(5)->create();
        Catalog::factory(3)->create();
        Video::factory(5)->create();

        UrbanSpace::factory(6)->create();
        UrbanSpaceProject::factory(3)->create();
        PhotoUrbanspace::factory(20)->create();

        Illustration::factory(5)->create();
        PhotoIllustration::factory(20)->create();

        Sculpture::factory(5)->create();
        PhotoSculpture::factory(20)->create();

    }
}
