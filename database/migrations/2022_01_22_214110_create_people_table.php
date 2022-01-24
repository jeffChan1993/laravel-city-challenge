<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('house_id');
            $table->foreign('house_id')->references('id')->on('houses');
            $table->string('name');
            $table->integer('age');
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
        Schema::dropIfExists('people');
    }
}
