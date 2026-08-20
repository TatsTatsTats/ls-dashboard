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
        Schema::create('t_a_d_reports', function (Blueprint $table) {
            $table->id();
            $table->string('borrower_name')->nullable();
            $table->string('co_borrower_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email_address')->nullable();
            $table->string('unit_details')->nullable();
            $table->decimal('selling_price', 15, 2)->nullable();
            $table->decimal('downpayment', 15, 2)->nullable();
            $table->decimal('amount_finance', 15, 2)->nullable();
            $table->decimal('monthly_amortization', 15, 2)->nullable();
            $table->decimal('gross_effective_yield', 8, 4)->nullable();
            $table->decimal('net_effective_yield', 8, 4)->nullable();
            $table->decimal('effective_interest_rate', 8, 4)->nullable();
            $table->decimal('dealer_incentive', 15, 2)->nullable();
            $table->decimal('salesman_incentive', 15, 2)->nullable();
            $table->decimal('keyman_incentive', 15, 2)->nullable();
            $table->string('account_officer_name')->nullable();
            $table->string('source_of_application')->nullable();
            $table->string('dealer_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('referrer_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('broker_name')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_a_d_reports');
    }
};
