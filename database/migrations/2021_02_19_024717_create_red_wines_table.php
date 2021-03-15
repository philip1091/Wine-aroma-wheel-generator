<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedWinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('red_wines', function (Blueprint $table) {
            $table->id();

            $table->string('sku')->nullable();
            $table->integer('redFruit')->nullable();
            $table->integer('blackFruit')->nullable();
            $table->integer('floral')->nullable();
            $table->integer('herbaceous')->nullable();
            $table->integer('pepper')->nullable();
            $table->integer('earth')->nullable();
            $table->integer('sweetSpice')->nullable();
            $table->integer('leather')->nullable();
            $table->integer('tannin')->nullable();
            $table->integer('body')->nullable();

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
        Schema::dropIfExists('red_wines');
    }
}
