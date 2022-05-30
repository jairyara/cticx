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
        Schema::create('challenges', static function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->integer('category');
            $table->unsignedBigInteger('s1');
            $table->unsignedBigInteger('s2');
            $table->unsignedBigInteger('s3');
            $table->unsignedBigInteger('s4');
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
        Schema::drop('challenges');
    }
};
