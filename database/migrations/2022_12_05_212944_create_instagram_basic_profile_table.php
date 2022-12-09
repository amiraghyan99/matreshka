<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstagramBasicProfileTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('dymantic_instagram_basic_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('identity_token')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('dymantic_instagram_basic_profiles');
    }
}
