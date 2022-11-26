<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Log;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Log::create([
            'action' => 'Edited a Portfolio',
            'name' => 'Cyrus Francisco',
            'email' => 'jonathanfranciscosopro@gmail.com',
            'facultyNumber' => '177013',
            'position' => 'teacher',
            'role' => '1',
            'date_time' => 'Sat, Nov 26, 2022 6:02 PM',
        ]);

        Log::create([
            'action' => 'Deleted A Subject',
            'name' => 'Adrian Villanueva',
            'email' => 'kyleactive101@gmail.com',
            'facultyNumber' => '177544',
            'position' => 'teacher',
            'role' => '1',
            'date_time' => 'Sat, Nov 25, 2022 1:25 PM',
        ]);

        Log::create([
            'action' => 'Posted a Public Announcement',
            'name' => 'Ira Llabres',
            'email' => 'ilorenzollabres@gmail.com',
            'facultyNumber' => '1910414',
            'position' => 'teacher',
            'role' => '1',
            'date_time' => 'Sat, Nov 21, 2022 8:55 PM',
        ]);
//
    }
}
