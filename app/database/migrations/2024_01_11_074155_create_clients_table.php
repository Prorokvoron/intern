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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('last_name',191);
            $table->string('first_name',191);
            $table->string('middle_name',191);
            $table->string('full_name');
            $table->timestamp('date_of_birth');
            $table->boolean('sex');
            $table->string('preferred_name');
            $table->string('telegram');
            $table->string('phone');
            $table->string('phone_comment');
            $table->string('email');
            $table->string('email_comment');
            $table->string('address');
            $table->string('country_code',3);
            $table->string('city');
            $table->string('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
