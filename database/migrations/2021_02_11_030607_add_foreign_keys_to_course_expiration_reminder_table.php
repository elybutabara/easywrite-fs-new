<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('course_expiration_reminder', function (Blueprint $table) {
            $table->foreign('course_id', ' course_expiration_reminder_course_id')->references('id')->on('courses')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course_expiration_reminder', function (Blueprint $table) {
            $table->dropForeign(' course_expiration_reminder_course_id');
        });
    }
};
