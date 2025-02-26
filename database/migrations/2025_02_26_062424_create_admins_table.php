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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('admin_name');
            $table->string('hotel_name');
            $table->string('owner_name'); // Fixed spelling mistake
            $table->string('email')->unique(); // Ensured email is unique
            $table->string('password'); // Password will be hashed while storing
            $table->string('contact_number')->unique();
            $table->text('address'); // Fixed spelling mistake
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
