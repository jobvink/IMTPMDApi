<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialisatievaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialisatievaks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('naam');
            $table->integer('ec');
            $table->integer('jaar_id');
            $table->integer('specialisatie_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialisatievaks');
    }
}
