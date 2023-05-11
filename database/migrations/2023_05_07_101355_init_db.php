<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('cities');
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::dropIfExists('travels');
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_japanese');
            $table->addColumn('text', 'description');
            $table->boolean('is_premiere');
            $table->string('card_image_url');
            $table->string('page_image_url');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('price');
        });

        Schema::dropIfExists('travel_city');
        Schema::create('travel_city', function (Blueprint $table) {
            $table->unsignedBigInteger('travel_id');
            $table->unsignedBigInteger('city_id');
            $table->primary(['travel_id', 'city_id']);
            $table->foreign('travel_id')->references('id')->on('travels')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });

        Schema::dropIfExists('orders');
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->unsignedBigInteger('travel_id');
            $table->timestamps();
            $table->foreign('travel_id')->references('id')->on('travels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
        Schema::dropIfExists('travels');
        Schema::dropIfExists('travel_city');
        Schema::dropIfExists('orders');
    }
};
