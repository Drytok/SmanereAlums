<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearbooks', function (Blueprint $table) {
            $table->id('id_yearbook');
            $table->unsignedBigInteger('category_id');
            $table->string('nama', 50);
            $table->string('angkatan',50);
            $table->date('motto',50);
            $table->foreign('category_id')->references('id_categories')->on('categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('yearbooks');
    }
};
