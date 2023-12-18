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
        Schema::create('officials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mds_id'); // Foreign key to reference the main table (mds)
            $table->string('name');
            $table->string('position');
            $table->string('sex')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('national_id_number')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('email')->nullable();
            $table->string('school')->nullable();
            $table->string('company')->nullable();
            $table->string('designation')->nullable();
            $table->text('special_abilities')->nullable();
            $table->boolean('overseas_employment_plan')->nullable();
            $table->text('service_to_society')->nullable();
            $table->text('personal_life_vision')->nullable();
            $table->text('political_involvement')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

            $table->foreign('mds_id')->references('id')->on('mds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('officials');
    }
};
