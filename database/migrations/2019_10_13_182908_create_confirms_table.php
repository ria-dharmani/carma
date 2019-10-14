<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('source');
            $table->string('des');
            $table->double('des_lat')->nullable;
            $table->double('des_long')->nullable;
            $table->double('src_lat')->nullable;
            $table->double('src_long')->nullable;
            $table->date('date');
            $table->time('time');
            $table->integer('r_id');
            $table->integer('o_id');
            $table->integer('seats');
            $table->boolean('ladies');
            $table->float('price');
            $table->float('distance');
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
        Schema::dropIfExists('confirms');
    }
}
