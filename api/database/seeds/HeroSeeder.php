<?php

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            'firstname' => 'Clark',
            'lastname' => 'Kent',
            'type' => 1,
            'level' => 1,
            'racesid' => 2,
            'classesid' => 2,
            'weaponsid' => 2,
        ]);
    }
}
