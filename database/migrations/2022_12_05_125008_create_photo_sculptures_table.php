<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_sculptures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('photos_id')->unsigned();
            $table->unsignedBigInteger('sculptures_id')->unsigned();

            $table->foreign('photos_id')->references('id')
                ->on('photos')->onDelete('cascade');

            $table->foreign('sculptures_id')->references('id')
                ->on('sculptures')->onDelete('cascade');
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
        Schema::dropIfExists('photo_sculptures');
    }
};
