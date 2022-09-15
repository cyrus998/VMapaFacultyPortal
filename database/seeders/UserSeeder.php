<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Adrian Villanueva',
            'email' => 'kyleactive101@gmail.com',
            'role' => '0',
            'facultyNumber' => '177544',
            'created_at' => '2022-02-23 11:12:05',
            'email_verified_at' => '2022-09-03 16:30:32',
            'password' => '$2y$10$BC.68w1PgRXldRTasbUX..fiijbK3LZ/4J9GmHO56etfx2eouN8Le', // dindi12345
        ]);

        User::create([
            'name' => 'Cyrus Francisco',
            'email' => 'jonathanfranciscosopro@gmail.com',
            'role' => '1',
            'facultyNumber' => '177013',
            'created_at' => '2022-02-23 11:12:05',
            'email_verified_at' => '2022-09-03 16:30:32',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Ira Llabres',
            'email' => 'ilorenzollabres@gmail.com',
            'role' => '1',
            'facultyNumber' => '1910414',
            'created_at' => '2022-02-23 11:12:05',
            'email_verified_at' => '2022-09-03 16:30:32',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);
    }
}
