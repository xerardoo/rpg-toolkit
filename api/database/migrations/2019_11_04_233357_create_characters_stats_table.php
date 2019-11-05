<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters_stats', function (Blueprint $table) {
            $table->Increments('id');
            $table->tinyInteger('strength');
            $table->tinyInteger('intelligence');
            $table->tinyInteger('dexterity');
            $table->unsignedInteger('charactersid');
            $table->timestamps();

            $table->foreign('charactersid')
                ->references('id')
                ->on('characters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters_stats');
    }
}
