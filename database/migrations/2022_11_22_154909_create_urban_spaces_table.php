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
        Schema::create('urban_spaces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->text('description');
            $table->string('participant')->nullable();
            $table->string('author')->nullable();
            $table->string('partnership')->nullable();
            $table->foreignId('urban_space_project_id');
            $table->string('thumbnail_landscape');
            $table->string('thumbnail_portrait');
            $table->text('photo_list')->nullable();
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
        Schema::dropIfExists('urban_spaces');
    }
};
