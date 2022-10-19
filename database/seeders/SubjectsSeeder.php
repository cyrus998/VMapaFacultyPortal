<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Subject::create([
            'subjectname' => 'Capstone 2',
            'coursecode' => 'CIT 400-IT41S2',
            'instructor' => 'Adrian Villanueva',
            'subjectday' => '3',
            'starttime' => '3:00',
            'endtime' => '4:00',
        ]);

        Subject::create([
            'subjectname' => 'Living in the IT Era',
            'coursecode' => 'GEE 002B-IT32S2',
            'instructor' => 'Adrian Villanueva',
            'subjectday' => '2',
            'starttime' => '3:00',
            'endtime' => '4:00',
        ]);

        Subject::create([
            'subjectname' => 'Data Mining and Warehousing',
            'coursecode' => 'CIS 202-IT32S2',
            'instructor' => 'Ira Llabres',
            'subjectday' => '1',
            'starttime' => '3:00',
            'endtime' => '4:00',
        ]);

        Subject::create([
            'subjectname' => 'Web Systems and Technologies 2',
            'coursecode' => 'CIT 511-IT32S2',
            'instructor' => 'Ira Llabres',
            'subjectday' => '4',
            'starttime' => '3:00',
            'endtime' => '4:00',
        ]);

        Subject::create([
            'subjectname' => 'Robotics and Engineering 2',
            'coursecode' => 'RBE 001-IT42S2',
            'instructor' => 'Elon Musk',
            'subjectday' => '5',
            'starttime' => '3:00',
            'endtime' => '4:00',
        ]);

        Subject::create([
            'subjectname' => 'Data Science and Astrology 2',
            'coursecode' => 'DSA 001-IT42S2',
            'instructor' => 'Elon Musk',
            'subjectday' => '3',
            'starttime' => '3:00',
            'endtime' => '4:00',
        ]);

        Subject::create([
            'subjectname' => 'Great Swordsmanship 1',
            'coursecode' => 'GSS 001-IT42S2',
            'instructor' => 'Kohta Yamamoto',
            'subjectday' => '3',
            'starttime' => '3:00',
            'endtime' => '4:00',
        ]);

        Subject::create([
            'subjectname' => 'Construction and Engineering 1',
            'coursecode' => 'CAE 001-IT42S2',
            'instructor' => 'Reiner Braun',
            'subjectday' => '3',
            'starttime' => '3:00',
            'endtime' => '4:00',
        ]);

        
 




    }
}
