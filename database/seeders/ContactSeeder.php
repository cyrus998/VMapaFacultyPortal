<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'email' => 'jonathanfranciscosopro@gmail.com',
            'message' => 'Bacon ipsum dolor amet spare ribs chuck pastrami beef ribs burgdoggen sausage shankle shank. Meatball chicken turducken drumstick strip steak pork, ground round pork chop hamburger tongue. Sausage tri-tip fatback pork chop. ',
        ]);

        Contact::create([
            'email' => 'cyrusfranciscotwitch@gmail.com',
            'message' => 'May i ask, what are the requirements for enrollment during this school semester? Do i need to be physically present on the day of enrollment?',
        ]);

        Contact::create([
            'created_at' => '2022-11-09 09:05:49',
            'email' => 'ilorenzollabres@gmail.com',
            'message' => 'How much usually is the tution fee for incoming freshmen (Grade 7) enrollees? Also, are there any installment plans available?',
        ]);

        Contact::create([
            'created_at' => '2022-11-01 09:05:49',
            'email' => 'kyleactive101@gmail.com',
            'message' => 'I would like to see a list of all your available programs for Senior High School. Thank you.',
        ]);

    }
}
