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
            'coursecode' => 'CIT 400',
            'instructor' => 'Adrian Villanueva',
            'subjectday' => 'Wednesday',
            'section' => 'Section 7',
            'roomno' => 'H-117',
            'starttime' => '11:00',
            'endtime' => '12:00',
        ]);

        Subject::create([
            'subjectname' => 'Living in the IT Era',
            'coursecode' => 'GEE 002B',
            'instructor' => 'Adrian Villanueva',
            'subjectday' => 'Tuesday',
            'section' => 'Section 2',
            'roomno' => 'H-225',
            'starttime' => '12:00',
            'endtime' => '13:00',
        ]);

        Subject::create([
            'subjectname' => 'Data Mining and Warehousing',
            'coursecode' => 'CIS 202',
            'instructor' => 'Ira Llabres',
            'subjectday' => 'Monday',
            'section' => 'Section 6',
            'roomno' => 'H-566',
            'starttime' => '12:00',
            'endtime' => '14:15',
        ]);

        Subject::create([
            'subjectname' => 'Web Systems and Technologies 2',
            'coursecode' => 'CIT 511',
            'instructor' => 'Ira Llabres',
            'subjectday' => 'Thursday',
            'section' => 'Section 2',
            'roomno' => 'H-663',
            'starttime' => '13:30',
            'endtime' => '15:30',
        ]);

        Subject::create([
            'subjectname' => 'Data Mining and Warehousing',
            'coursecode' => 'CIS 202',
            'instructor' => 'Ira Llabres',
            'subjectday' => 'Thursday',
            'section' => 'Section 21',
            'roomno' => 'A-202',
            'starttime' => '13:00',
            'endtime' => '14:00',
        ]);

        Subject::create([
            'subjectname' => 'Robotics and Engineering 2',
            'coursecode' => 'RBE 001',
            'instructor' => 'Elon Musk',
            'subjectday' => 'Friday',
            'section' => 'Section 17',
            'roomno' => 'A-214',
            'starttime' => '07:00',
            'endtime' => '08:00',
        ]);

        Subject::create([
            'subjectname' => 'Robotics and Engineering 2',
            'coursecode' => 'RBE 001',
            'instructor' => 'Cyrus Francisco',
            'subjectday' => 'Tuesday',
            'section' => 'Section 16',
            'roomno' => 'A-120',
            'starttime' => '09:00',
            'endtime' => '10:00',
        ]);

        Subject::create([
            'subjectname' => 'Web Systems and Technologies 2',
            'coursecode' => 'CIT 511',
            'instructor' => 'Adrian Villanueva',
            'subjectday' => 'Monday',
            'section' => 'Section 16',
            'roomno' => 'A-130',
            'starttime' => '12:00',
            'endtime' => '13:30',
        ]);

        Subject::create([
            'subjectname' => 'Web Systems and Technologies 2',
            'coursecode' => 'CIT 511',
            'instructor' => 'Ira Llabres',
            'subjectday' => 'Friday',
            'section' => 'Section 6',
            'roomno' => 'A-154',
            'starttime' => '13:00',
            'endtime' => '14:00',
        ]);

        Subject::create([
            'subjectname' => 'Data Science and Astrology 2',
            'coursecode' => 'DSA 001',
            'instructor' => 'Elon Musk',
            'subjectday' => 'Wednesday',
            'section' => 'Section 12',
            'roomno' => 'A-221',
            'starttime' => '11:00',
            'endtime' => '12:30',
        ]);

        Subject::create([
            'subjectname' => 'Data Science and Astrology 2',
            'coursecode' => 'DSA 001',
            'instructor' => 'Cyrus Francisco',
            'subjectday' => 'Monday',
            'section' => 'Section 19',
            'roomno' => 'A-554',
            'starttime' => '08:00',
            'endtime' => '09:00',
        ]);

        Subject::create([
            'subjectname' => 'Great Swordsmanship 1',
            'coursecode' => 'GSS 001',
            'instructor' => 'Kohta Yamamoto',
            'subjectday' => 'Wednesday',
            'section' => 'Section 18',
            'roomno' => 'A-202',
            'starttime' => '08:00',
            'endtime' => '09:30',
        ]);

        Subject::create([
            'subjectname' => 'Construction and Engineering 1',
            'coursecode' => 'CAE 001',
            'instructor' => 'Reiner Braun',
            'subjectday' => 'Wednesday',
            'section' => 'Section 16',
            'roomno' => 'A-201',
            'starttime' => '11:00',
            'endtime' => '14:00',
        ]);

        Subject::create([
            'subjectname' => 'Construction and Engineering 1',
            'coursecode' => 'CAE 001',
            'instructor' => 'Cyrus Francisco',
            'subjectday' => 'Friday',
            'section' => 'Section 9',
            'roomno' => 'A-200',
            'starttime' => '11:00',
            'endtime' => '12:15',
        ]);

        Subject::create([
            'subjectname' => 'Construction and Engineering 1',
            'coursecode' => 'CAE 001',
            'instructor' => 'Cyrus Francisco',
            'subjectday' => 'Thursday',
            'section' => 'Section 18',
            'roomno' => 'A-120',
            'starttime' => '14:00',
            'endtime' => '15:30',
        ]);


    }
}
