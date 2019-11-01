<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->tinyInteger('type');
            $table->tinyInteger('level');
            $table->unsignedInteger('racesid');
            $table->unsignedInteger('classesid');
            $table->unsignedInteger('weaponsid');
            $table->unsignedInteger('picturesid');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('racesid')
                ->references('id')
                ->on('races');
            $table->foreign('classesid')
                ->references('id')
                ->on('classes');
            $table->foreign('weaponsid')
                ->references('id')
                ->on('weapons');
            $table->foreign('picturesid')
                ->references('id')
                ->on('pictures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
