<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('role');
            $table->string('username');
            $table->string('password');
            $table->integer('login_limit');
            $table->dateTime('login_time');
            $table->string('student_number',5 )->unique();
            $table->string('firstname',100);
            $table->string('lastname', 100);
            $table->date('date_of_birth');
            $table->string('email', 200);
            $table->string('klas', 50);
            $table->string('address', 500);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
