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
        Schema::create('photo_illustrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('photos_id')->unsigned();
            $table->unsignedBigInteger('illustrations_id')->unsigned();

            $table->foreign('photos_id')->references('id')
                ->on('photos')->onDelete('cascade');

            $table->foreign('illustrations_id')->references('id')
                ->on('illustrations')->onDelete('cascade');
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
        Schema::dropIfExists('photo_illustrations');
    }
};