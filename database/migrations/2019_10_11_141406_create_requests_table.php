<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('source');
            $table->string('des');
            $table->integer('user_id');
            $table->date('date');
            $table->time('time');
            $table->double('des_lat')->nullable();
            $table->double('des_long')->nullable();
            $table->double('src_long')->nullable();
            $table->double('src_lat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
