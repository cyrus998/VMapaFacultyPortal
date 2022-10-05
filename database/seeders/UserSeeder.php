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
            'position' => 'teacher',
            'contactnumber' => '09556625512',
            'address' => 'B1 Milky Way Galaxy, Mars street, Pluto City',
            'aboutme' => 'Hello, I am a teacher who is passionate about creation of robotic parts and mechanical motors.',
            'subjectexpertise' => 'Robotics And Engineering',
            'facultyNumber' => '177544',
            'created_at' => '2022-02-23 11:12:05',
            'email_verified_at' => '2022-09-03 16:30:32',
            'password' => '$2y$10$BC.68w1PgRXldRTasbUX..fiijbK3LZ/4J9GmHO56etfx2eouN8Le', // dindi12345
        ]);

        User::create([
            'name' => 'Cyrus Francisco',
            'email' => 'jonathanfranciscosopro@gmail.com',
            'role' => '1',
            'position' => 'teacher',
            'contactnumber' => '09214673943',
            'address' => 'A2 Somewhere Street, Nowhere Village, Everywhere City',
            'aboutme' => 'I possess vast amount of knowledge towards procrastination, and I consider myself an expert at breathing.',
            'subjectexpertise' => 'Procrastination Exercises',
            'facultyNumber' => '177013',
            'created_at' => '2022-02-23 11:12:05',
            'email_verified_at' => '2022-09-03 16:30:32',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Ira Llabres',
            'email' => 'ilorenzollabres@gmail.com',
            'role' => '1',
            'position' => 'teacher',
            'contactnumber' => '09884451121',
            'address' => 'A2 Dont Know street, what do i type here Village, Yeet City',
            'aboutme' => 'I am an ambassador of a professional E-sports company. I have played in multiple .......',
            'subjectexpertise' => 'Valorant 001',
            'facultyNumber' => '1910414',
            'created_at' => '2022-02-23 11:12:05',
            'email_verified_at' => '2022-09-03 16:30:32',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Jamaico Padilla',
            'email' => 'mjdpadilla@gmail.com',
            'role' => '1',
            'position' => 'teacher',
            'contactnumber' => '09114451121',
            'address' => '36 Bonifacio Street Arty Subdivision 1440, Marikina City',
            'aboutme' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'subjectexpertise' => 'Painting',
            'facultyNumber' => '1771123',
            'created_at' => '2022-02-23 11:12:05',
            'email_verified_at' => '2022-09-03 16:30:32',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Elon Musk',
            'email' => 'user@gmail.com',
            'role' => '0',
            'position' => 'teacher',
            'contactnumber' => '09694451121',
            'address' => 'Tesla, Inc. 3500 Deer Creek Road, Palo Alto, CA 94304 United States.',
            'aboutme' => 'He is the founder, CEO, and chief engineer of SpaceX; angel investor, CEO, and product architect of Tesla, Inc.',
            'subjectexpertise' => 'Science and Technology',
            'facultyNumber' => '177885',
            'created_at' => '2022-02-23 11:12:05',
            'email_verified_at' => '2022-09-03 16:30:32',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Kohta Yamamoto',
            'email' => 'kohta@gmail.com',
            'role' => '0',
            'position' => 'teacher',
            'contactnumber' => '09665521141',
            'address' => '128-1047, Azukiyacho, Fushimi-ku-shi',
            'aboutme' => 'Kohta Yamamoto is a Japanese composer, arranger and lyricist. He has provided the music for several anime series, as well as television dramas and video games. ',
            'subjectexpertise' => 'Music and Orchestras',
            'facultyNumber' => '175202',
            'created_at' => '2022-02-23 11:12:05',
            'email_verified_at' => '2022-09-03 16:30:32',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Reiner Braun',
            'email' => 'reinerarmor@gmail.com',
            'role' => '0',
            'position' => 'teacher',
            'contactnumber' => '09556625521',
            'address' => '254-1275, Kurisawacho Gifu',
            'aboutme' => 'He is also a graduate of the 104th Trainees Squad and a former member of the Survey Corps. ',
            'subjectexpertise' => 'Civil Engineering',
            'facultyNumber' => '175522',
            'created_at' => '2022-02-23 11:12:05',
            'email_verified_at' => '2022-09-03 16:30:32',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Tommy Shelby',
            'email' => 'tommyshelby@gmail.com',
            'role' => '0',
            'position' => 'teacher',
            'contactnumber' => '09695565525',
            'address' => '1979 Cameron Road, Birmingham',
            'aboutme' => 'Thomas Michael Shelby, OBE, DCM, MM, MP is a fictional character born in 1890 in Birmingham, England, and the main protagonist in the British period crime drama Peaky Blinders',
            'subjectexpertise' => 'Horse Riding',
            'facultyNumber' => '1554841',
            'created_at' => '2022-02-23 11:12:05',
            'email_verified_at' => '2022-09-03 16:30:32',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);


    }
}
