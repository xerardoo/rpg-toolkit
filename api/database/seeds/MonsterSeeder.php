<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonsterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')
            ->insert([
                'firstname' => 'Thanos',
                'lastname' => '',
                'type' => 2,
                'level' => 1,
                'racesid' => 8,
                'classesid' => 3,
                'weaponsid' => 3,
            ]);

        DB::table('characters_abilities')
            ->insert([
                'charactersid' => 2,
                'abilitiesid' => 1,
            ]);
    }
}
