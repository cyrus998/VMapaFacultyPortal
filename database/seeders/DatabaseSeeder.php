<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            UserSeeder::class,
            SubjectsSeeder::class,
            PublicNewsSeeder::class,
            FacultyAnnouncementsSeeder::class,
            ContactSeeder::class,
            SubmissionsSeeder::class,
        ]);

        \App\Models\User::factory(200)->create();
        \App\Models\Submission::factory(450)->create();
    }
}
