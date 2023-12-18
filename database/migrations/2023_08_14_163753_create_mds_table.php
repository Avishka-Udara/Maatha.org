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
        Schema::create('mds', function (Blueprint $table) {
            $table->id();
            $table->text('District');
            $table->text('Divisional_Secretariat');
            $table->text('Grama_Niladhari_Division');
            $table->text('Grama_Niladhari_Division_Number');
            $table->text('Village');
            $table->text('Office_Address');
            $table->text('Contact_person');
            $table->text('Position');
            $table->text('Contact_number');
            $table->text('WhatsApp_number');
            $table->string('Religious_Authority');//file
            $table->string('Grama_Niladhari');//file
            $table->string('Minutes_with_members_signature_list');//file
            $table->string('Prioritized_project_proposal');//file
            $table->text('President');
            $table->text('Secretory');
            $table->text('Treasurer');
            $table->text('Assistant_treasurer');
            $table->text('Agriculture_Coordinator');
            $table->text('Vocational_Training_and_Entrepreneurship_Coordinator');
            $table->text('English_language_and_Education_Coordinator');
            $table->text('mitcordinator');
            $table->text('Entertainment_and_Reconciliation_Coordinator');
            $table->text('Health_Promotion_Coordinator');
            $table->text('Women_affaires_and_child_development_Coordinator');
            $table->text('Coordinator');
            $table->string('image');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mds');
    }
};
