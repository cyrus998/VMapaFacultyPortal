<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FacultyAnnouncement;
class FacultyAnnouncementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FacultyAnnouncement::create([
            'title' => 'Welcome Back! ',
            'setdate' => '10-12-2022',
            'image' => 'public/facultyannouncements/2e8T5JVNVhjogOYWmjxWRqmOK59PzNVtzEldv4F1.jpg',
            'description' => 'I hope you are enjoying a wonderful summer. I also hope you are relaxed, recharged and ready to start a new school year. I am so delighted that you are part of our amazing learning community.',
            'linkurl' => 'https://mb.com.ph/2022/08/21/ph-schools-to-open-sy-2022-2023-with-face-to-face-classes/',
        ]);

        FacultyAnnouncement::create([
            'title' => 'Happy Halloween! We would like to invite you to the annual Cosplay Party! ',
            'setdate' => '10-5-2022',
            'image' => 'public/facultyannouncements/sO0r5sohgnMhF2SrU5fdhkdIXbZX7ouzKzJ6CRBL.png',
            'description' => 'This event is exclusive to the school teachers and faculty only, where everyone may attend with their favourite costume to portray their favourite characters! Join Now!',
            'linkurl' => 'https://www.clickthecity.com/events/article/131713/halloween-2022-parties-events-metro-manila/',
        ]);

        FacultyAnnouncement::create([
            'title' => 'Last day of Grade Encoding!',
            'setdate' => '10-11-2022',
            'image' => 'public/facultyannouncements/Gp08xZowpsIABDJ8cgFp2Ap26hUWjG7cXNuQrCz0.jpg',
            'description' => 'Please do accomplish all grading activities, as the modular group 2 is nearing its end. Stay Safe Everyone ! Have a great day ahead',
            'linkurl' => 'https://www.facebook.com/photo/?fbid=488159473352531&set=a.226791122822702',
        ]);
    }
}
