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
        Schema::create('t_p_p_c_reports', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_borrower')->nullable();
            $table->string('name_of_co_borrower')->nullable();
            $table->date('date_endorsed')->nullable();
            $table->string('name_of_account_officer')->nullable();
            $table->string('source_of_application')->nullable();
            $table->string('name_of_dealer')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('name_of_referror')->nullable();
            $table->string('name_of_company')->nullable();
            $table->string('name_of_broker')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_p_p_c_reports');
    }
};
