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
        ]);

        Subject::create([
            'subjectname' => 'Living in the IT Era',
            'coursecode' => 'GEE 002B-IT32S2',
            'instructor' => 'Adrian Villanueva',
        ]);

        Subject::create([
            'subjectname' => 'Data Mining and Warehousing',
            'coursecode' => 'CIS 202-IT32S2',
            'instructor' => 'Ira Llabres',
        ]);

        Subject::create([
            'subjectname' => 'Web Systems and Technologies 2',
            'coursecode' => 'CIT 511-IT32S2',
            'instructor' => 'Ira Llabres',
        ]);

        Subject::create([
            'subjectname' => 'Robotics and Engineering 2',
            'coursecode' => 'RBE 001-IT42S2',
            'instructor' => 'Elon Musk',
        ]);

        Subject::create([
            'subjectname' => 'Data Science and Astrology 2',
            'coursecode' => 'DSA 001-IT42S2',
            'instructor' => 'Elon Musk',
        ]);

        Subject::create([
            'subjectname' => 'Great Swordsmanship 1',
            'coursecode' => 'GSS 001-IT42S2',
            'instructor' => 'Kohta Yamamoto',
        ]);

        Subject::create([
            'subjectname' => 'Construction and Engineering 1',
            'coursecode' => 'CAE 001-IT42S2',
            'instructor' => 'Reiner Braun',
        ]);

        
 




    }
}
