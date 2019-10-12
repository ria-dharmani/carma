<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('source');
            $table->string('des');
            $table->integer('user_id');
            $table->date('date');
            $table->time('time');
            $table->double('des_lat')->nulllable();
            $table->double('des_long')->nullable();
            $table->double('src_long')->nullable();
            $table->double('src_lat')->nullable();
            $table->integer('no_of_seats');
            $table->boolean('ladies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
