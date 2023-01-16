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
        Schema::create('attendees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->foreignId('internship_id');
            $table->date('date_birth');
            $table->string('parent_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('address');
            $table->string('postal_code');
            $table->string('city');
            $table->string('phone_number');
            $table->string('right_to_image');
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
        Schema::dropIfExists('attendees');
    }
};
