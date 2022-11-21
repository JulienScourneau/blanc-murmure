<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Attendees;
use App\Models\Catalog;
use App\Models\Event;
use App\Models\ProjectCategory;
use App\Models\ProjectPhoto;
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
        ProjectCategory::factory()->create([
            'title' => 'Illustration'
        ]);
        ProjectCategory::factory()->create([
            'title' => 'Sculpture'
        ]);
        Attendees::factory(5)->create();
        Event::factory(5)->create();
        ProjectPhoto::factory(5)->create();
        Catalog::factory(3)->create();
        Video::factory(5)->create();
    }
}
