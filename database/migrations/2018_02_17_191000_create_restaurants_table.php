<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('registration_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_id');

            $table->string('image')->default('/images/restaurant_default_image.svg');
            $table->string('cover')->default('/images/restaurant_default_cover.svg');

            $table->string('place');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('address');

            $table->string('website')->nullable();
            $table->string('description');

            $table->boolean('phone_verified')->default(false);
            $table->boolean('email_verified')->default(false);

            $table->softDeletes();
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
        Schema::dropIfExists('restaurants');
    }
}
