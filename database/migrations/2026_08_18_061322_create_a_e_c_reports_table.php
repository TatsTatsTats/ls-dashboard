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
        Schema::create('a_e_c_reports', function (Blueprint $table) {

            $table->id();
            $table->string('name_of_borrower')->nullable();
            $table->string('name_of_co_borrower')->nullable();
            $table->date('date_endorsed')->nullable();
            $table->string('name_of_account_officer')->nullable();
            $table->string('source_of_income')->nullable();
            $table->string('employer_or_business_name')->nullable();
            $table->string('address_of_employer_or_business')->nullable();
            $table->string('unit_details')->nullable();
            $table->string('type_of_transmission')->nullable();
            $table->decimal('selling_price', 15, 2)->nullable();
            $table->decimal('amount_finance', 15, 2)->nullable();
            $table->decimal('downpayment_percentage', 8, 4)->nullable();
            $table->decimal('downpayment_amount', 15, 2)->nullable();
            $table->decimal('add_on_rate', 8, 4)->nullable();
            $table->decimal('net_ey', 8, 4)->nullable();
            $table->decimal('gross_ey', 8, 4)->nullable();
            $table->decimal('dealer_incentive_percentage', 8, 4)->nullable();
            $table->decimal('salesman_incentive_percentage', 8, 4)->nullable();
            $table->decimal('effective_interest_rate', 8, 4)->nullable();
            $table->decimal('total_monthly_income', 15, 2)->nullable();
            $table->string('industry')->nullable();
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
        Schema::dropIfExists('a_e_c_reports');
    }
};
