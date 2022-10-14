<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PublicAnnouncement;

class PublicNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        PublicAnnouncement::create([
            'title' => 'Rainy weekend expected for northern Luzon due to Neneng',
            'setdate' => '10-11-2022',
            'image' => 'public/publicannouncements/93k2NgpNullC0n3sagOiZ9uOGJswrWb2LCbHxOp7.png',
            'description' => 'Heavy rains may be expected over northern Luzon on Saturday due to Tropical Depression Neneng, which entered the Philippine Area of Responsibility (PAR) Thursday.',
        ]);

        PublicAnnouncement::create([
            'title' => 'PH, US Defense officials vow commitment to Mutual Defense Treaty',
            'setdate' => '10-14-2022',
            'image' => 'public/publicannouncements/IlugZ074wqkQW8u0ykwsDs3TtGcKei1DiQSrmsZQ.jpg',
            'description' => 'The head of the Philippines’ Department of National Defense (DND) and his American counterpart reaffirmed commitments to the Mutual Defense Treaty of the two long-time allies.',
        ]);

        PublicAnnouncement::create([
            'title' => 'SpaceX fully stacks Starship rocket for the first time in six months',
            'setdate' => '10-4-2022',
            'image' => 'public/publicannouncements/jdLitRtF35M4IUgz9vrh3ncsxDfiIFrtftTVj8Mv.png',
            'description' => 'For the first time in more than six months, SpaceX has stacked both stages of its next-generation Starship rocket, creating the largest and most powerful launch vehicle ever fully assembled.',
        ]);

    }
}
