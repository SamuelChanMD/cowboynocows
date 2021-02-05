<?php

use Illuminate\Database\Seeder;

class FactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            'fact' => 'I was born in Japan in 1994.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('facts')->insert([
            'fact' => 'Against popular opinion, I kind of like the movie Batman v Superman.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('facts')->insert([
            'fact' => 'I love Martial Arts. I love Martial Arts movies and I used to do quite a bit of Taekwondo and Karate.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('facts')->insert([
            'fact' => 'I really got into chess back when I lived in Iceland.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('facts')->insert([
            'fact' => 'For a couple of semesters in university, I dyed my hair during exam season. I have had both blonde and bright red hair.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}