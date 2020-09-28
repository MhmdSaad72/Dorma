<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSinglePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('type')->nullable();
            $table->string('price')->nullable();
            $table->string('period')->nullable();
            $table->string('detail_1')->nullable();
            $table->string('detail_2')->nullable();
            $table->string('detail_3')->nullable();
            $table->string('detail_4')->nullable();
            $table->string('detail_5')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('single_prices');
    }
}
