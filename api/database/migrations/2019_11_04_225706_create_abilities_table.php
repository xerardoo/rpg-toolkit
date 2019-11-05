<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name', 100);
        });

        DB::table('abilities')->insert(['name' => 'Shadow Ball']);
        DB::table('abilities')->insert(['name' => 'Aerial Ace']);
        DB::table('abilities')->insert(['name' => 'Thunderbolt']);
        DB::table('abilities')->insert(['name' => 'Earthquake']);
        DB::table('abilities')->insert(['name' => 'Crunch']);
        DB::table('abilities')->insert(['name' => 'Double Team']);
        DB::table('abilities')->insert(['name' => 'Psychic']);
        DB::table('abilities')->insert(['name' => 'Ice Beam']);
        DB::table('abilities')->insert(['name' => 'Surf']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abilities');
    }
}
