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
        Schema::create('RegistrationForms', function (Blueprint $table) {
            $table->id('User_ID');
            $table->string('First_Name',50);
            $table->string('Last_Name',50);
            $table->string('email')->unique();
            $table->string('email_confirmation')->unique();
            $table->string('password');
            $table->string('password_confirmation');
            $table->enum('Gender', array('M', 'F','O'));
            $table->integer('birthday_day');
            $table->integer('birthday_month');
            $table->integer('birthday_year');
            $table->string('UserName')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

