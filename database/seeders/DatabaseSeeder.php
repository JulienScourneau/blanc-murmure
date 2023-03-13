<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Attendees;
use App\Models\Catalog;
use App\Models\Event;
use App\Models\HomePhoto;
use App\Models\Illustration;
use App\Models\NewsPhoto;
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
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => 'password',
        ]);

        NewsPhoto::factory()->create([
            'title' => "Mercredi s'éveille (Grand format)",
            'path' => 'images/mercredi_1.png'
        ]);
        NewsPhoto::factory()->create([
            'title' => "Mercredi s'éveille (Petit format 1)",
            'path' => 'images/mercredi_2.png'
        ]);
        NewsPhoto::factory()->create([
            'title' => "Mercredi s'éveille (Petit format 2)",
            'path' => 'images/mercredi_3.png'
        ]);

        HomePhoto::factory()->create([
            'title'=> 'Stages et Ateliers',
            'path' => 'images/stage.png'
        ]);
        HomePhoto::factory()->create([
            'title'=> 'Collaborateurs',
            'path' => 'images/collab.png'
        ]);
        HomePhoto::factory()->create([
            'title'=> 'Projets',
            'path' => 'images/project.png'
        ]);

        Attendees::factory(5)->create();
        Event::factory(5)->create();
        Catalog::factory(3)->create();
        Video::factory(5)->create();

        UrbanSpace::factory(6)->create();
        UrbanSpaceProject::factory(3)->create();

        Illustration::factory(5)->create();

        Sculpture::factory(5)->create();
        Attendees::factory()->create([
            'internship_id'=>'1'
        ]);
        Attendees::factory()->create([
            'internship_id'=>'2'
        ]);
        Attendees::factory()->create([
            'internship_id'=>'3'
        ]);
        Attendees::factory()->create([
            'internship_id'=>'4'
        ]);
        Attendees::factory()->create([
            'internship_id'=>'5'
        ]);
        Attendees::factory()->create([
            'internship_id'=>'1'
        ]);

    }
}
