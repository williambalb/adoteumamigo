<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->enum('species', ['Gato', 'Cachorro'])->nullable(false);
            $table->string('name')->nullable(false);
            $table->unsignedBigInteger('main_picture');
            $table->enum('gender', ['M', 'F', 'N'])->nullable(false);
            $table->integer('age');
            $table->timestamps();

            $table->foreign('main_picture')->references('id')->on('pet_images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
