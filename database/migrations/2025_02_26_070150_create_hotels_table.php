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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade'); // Foreign key referencing admins(id)
            $table->string('hotel_name'); // NOT NULL by default
            $table->enum('hotel_type', ['Luxury', 'Budget', 'Resort', 'Business', 'Others']);
            $table->enum('hotel_category', ['1-star', '2-star', '3-star', '4-star', '5-star']);
            $table->string('registration_number')->nullable(); // Optional field
            $table->date('establishment_date')->nullable(); // Optional field
            $table->enum('legally_registered', ['Yes', 'No']);
            $table->string('hotel_website'); // NOT NULL by default
            $table->string('contact_number'); // NOT NULL by default
            $table->string('email')->unique(); // Email should be unique
            $table->text('address'); // Using text() for longer addresses
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
