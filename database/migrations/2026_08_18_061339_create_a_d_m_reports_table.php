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
        Schema::create('a_d_m_reports', function (Blueprint $table) {

            $table->id();
            $table->string('name_of_borrower')->nullable();
            $table->string('name_of_co_borrower')->nullable();
            $table->date('date')->nullable();
            $table->string('source_of_income')->nullable();
            $table->decimal('total_monthly_income', 15, 2)->nullable();
            $table->string('employer_or_business_name')->nullable();
            $table->string('address_of_employer_or_business')->nullable();
            $table->string('name_of_account_officer')->nullable();
            $table->text('remarks')->nullable();
            $table->string('source_of_application')->nullable();
            $table->string('name_of_dealer')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('name_of_referrer')->nullable();
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
        Schema::dropIfExists('a_d_m_reports');
    }
};
