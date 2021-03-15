<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhiteWinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('white_wines', function (Blueprint $table) {
            $table->id();

            $table->string('sku')->nullable();
            $table->integer('citrusFruit')->nullable();
            $table->integer('stoneFruit')->nullable();
            $table->integer('tropicalFruit')->nullable();
            $table->integer('honey')->nullable();
            $table->integer('sweetness')->nullable();
            $table->integer('body')->nullable();
            $table->integer('creamness')->nullable();
            $table->integer('minerality')->nullable();
            $table->integer('herbalGreen')->nullable();
            $table->integer('floral')->nullable();

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
        Schema::dropIfExists('white_wines');
    }
}
