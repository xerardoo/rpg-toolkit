<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->Increments('id');
            $table->tinyInteger('type');
            $table->string('name', 100);
        });

        // Heroes
        DB::table('races')->insert(['name' => 'Human', 'type' => 1]);
        DB::table('races')->insert(['name' => 'Elf', 'type' => 1]);
        DB::table('races')->insert(['name' => 'Halfling', 'type' => 1]);
        DB::table('races')->insert(['name' => 'Dwarf', 'type' => 1]);
        DB::table('races')->insert(['name' => 'Half-orc', 'type' => 1]);
        DB::table('races')->insert(['name' => 'Half-elf', 'type' => 1]);
        DB::table('races')->insert(['name' => 'Dragonborn', 'type' => 1]);

        // Monsters
        DB::table('races')->insert(['name' => 'Beholder', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Mind Flayer', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Drow', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Dragons', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Owlbear', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Bulette', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Rust Monster', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Gelatinous Cube', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Hill Giant', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Stone Giant', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Frost Giant', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Fire Giant', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Cloud Giant', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Storm Giant', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Displacer Beast', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Githyanki', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Kobold', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Kuo-Toa', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Lich', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Orc', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Slaad', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Umber Hulk', 'type' => 2]);
        DB::table('races')->insert(['name' => 'Yuan-ti', 'type' => 2]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('races');
    }
}
