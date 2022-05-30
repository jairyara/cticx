<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('challenges', static function (Blueprint $table) {
            $table->foreign("s1")->references("id")->on("answers");
            $table->foreign("s2")->references("id")->on("answers");
            $table->foreign("s3")->references("id")->on("answers");
            $table->foreign("s4")->references("id")->on("answers");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        //
    }
};
