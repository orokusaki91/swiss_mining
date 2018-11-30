<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionVisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mision_vision', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('body_en')->nullable(false);
            $table->text('body_de')->nullable(false);
            $table->text('body_fr')->nullable(false);
            $table->text('body_it')->nullable(false);
            $table->text('body_es')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mision_visions');
    }
}
