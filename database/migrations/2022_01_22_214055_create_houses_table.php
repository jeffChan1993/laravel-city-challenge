<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('street_id');
            $table->foreign('street_id')->references('id')->on('streets');
            $table->string('address');
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
        Schema::dropIfExists('houses');
    }
}
