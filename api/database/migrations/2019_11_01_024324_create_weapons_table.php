<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name', 100);
        });

        DB::table('weapons')->insert(['name' => 'Sword']);
        DB::table('weapons')->insert(['name' => 'Dagger']);
        DB::table('weapons')->insert(['name' => 'Hammer']);
        DB::table('weapons')->insert(['name' => 'Bow and Arrows']);
        DB::table('weapons')->insert(['name' => 'Staff']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weapons');
    }
}
