<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number');
            $table->string('category');
            $table->string('more_ads')->nullable()->default('not interested');
            $table->string('featured_ads')->nullable()->default('not interested');
            $table->string('other_business_upgrated')->nullable()->default('not interested');
            $table->string('advertising')->nullable()->default('not interested');
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
        Schema::dropIfExists('businesses');
    }
}
