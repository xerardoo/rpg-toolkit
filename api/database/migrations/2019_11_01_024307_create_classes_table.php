<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name', 100);
        });

        DB::table('classes')->insert(['name' => 'Paladin']);
        DB::table('classes')->insert(['name' => 'Ranger']);
        DB::table('classes')->insert(['name' => 'Barbarian']);
        DB::table('classes')->insert(['name' => 'Wizard']);
        DB::table('classes')->insert(['name' => 'Cleric']);
        DB::table('classes')->insert(['name' => 'Warrior']);
        DB::table('classes')->insert(['name' => 'Thief']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
