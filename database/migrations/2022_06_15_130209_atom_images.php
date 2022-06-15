<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atom_images', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('atom_id')->unsigned();
            $table->foreign('atom_id')->references('id')->on('atoms');

            $table->string('file_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atom_images');
    }
};
