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
        Schema::table('lesson_comments', function (Blueprint $table)
        {
            $table->foreignId('lesson_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lesson_comments', function (Blueprint $table)
        {
            $table->dropColumn('lesson_id');
            $table->integer('lesson_id');
        });
    }
};
