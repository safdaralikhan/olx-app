<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->string('Postman_Name');
            $table->string('type')->nullable();
            $table->string('condition')->nullable();
            $table->text('description');
            $table->integer('price');
            $table->string('main_img');
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('img5')->nullable();
            $table->string('img6')->nullable();
            $table->string('img7')->nullable();
            $table->string('img8')->nullable();
            $table->string('img9')->nullable();
            $table->string('img10')->nullable();
            $table->string('img11')->nullable();
            $table->string('img12')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('make')->nullable();
            $table->integer('IsPhone')->nullable();
            $table->string('year')->nullable();
            $table->string('KmDriven')->nullable();
            $table->string('fuel')->nullable();
            $table->string('Registered_In')->nullable();
            $table->string('transmission')->nullable();
            $table->string('registered')->nullable();
            $table->string('down_payment')->nullable();
            $table->string('monthly_installment')->nullable();
            $table->string('installment_plan')->nullable();
            $table->string('area_unit')->nullable();
            $table->string('area')->nullable();
            $table->string('furnished')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('floor_level')->nullable();
            $table->string('type_of_ad')->nullable();
            $table->string('package_type')->nullable();
            $table->string('is_featured')->nullable();
            $table->string('featured_expirt_date')->nullable();
            $table->string('is_liked')->nullable();
            $table->string('sallery_period')->nullable();
            $table->string('sallery_from')->nullable();
            $table->string('sallery_to')->nullable();
            $table->string('position_type')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('posts');
    }
}
