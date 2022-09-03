<?php

namespace Database\Seeders;
use App\Models\Announcement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Announcement::create([

            'date' => '09/4/2022',
            'title' => 'Typhoon Henry moving away from PH; Rainy, cloudy Saturday expected',
            'description' => 'MANILA, Philippines – Typhoon Henry (international name: Hinnamnor) is swirling away from the country but will still trigger moderate to heavy rainfall in Batanes, Babuyan Islands and other parts of Luzon on Saturday.',
            'photourl' => 'https://newsinfo.inquirer.net/files/2022/08/1-him-colored-202-620x448.png',
    
        ]);

        Announcement::create([

            'date' => '09/4/2022',
            'title' => 'Flooding hits parts of Metro Manila, nearby areas amid heavy rains',
            'description' => 'MANILA (2nd UPDATE)— Flooding hit parts of Metro Manila on Saturday amid intense rains brought by the trough of Typhoon Henry and the southwest monsoon or habagat.',
            'photourl' => 'https://sa.kapamilya.com/absnews/abscbnnews/media/2022/news/09/03/20220903-typhoon-henry-flood-gc-4_medium.jpg',
    
        ]);
    }
}
