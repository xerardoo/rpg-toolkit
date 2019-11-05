<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters_abilities', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('charactersid');
            $table->unsignedInteger('abilitiesid');
            $table->timestamps();

            $table->foreign('charactersid')
                ->references('id')
                ->on('characters');
            $table->foreign('abilitiesid')
                ->references('id')
                ->on('abilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters_abilities');
    }
}
