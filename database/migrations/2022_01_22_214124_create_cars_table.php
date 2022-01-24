<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('house_id')->unique();
            $table->foreign('house_id')->references('id')->on('houses');
            $table->string('license_plate')->unique(); // assume that the license plat is unique
            $table->string('brand');
            $table->string('color');
//            $table->integer('status')->default(1);
//            $table->timestamps('created_at')->useCurrent();
//            $table->integer('created_by'); // refer to use id
//            $table->timestamps('updated_at')->nullable()->useCurrentOnUpdate();
//            $table->integer('updated_by')->nullable(); // refer to user id
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
        Schema::dropIfExists('cars');
    }
}
