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
        Schema::create('p_d_reports', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_borrower')->nullable();
            $table->string('name_of_co_borrower')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email_address')->nullable();
            $table->string('unit_details')->nullable();
            $table->decimal('selling_price', 12, 2)->nullable();
            $table->decimal('amount_finance', 12, 2)->nullable();
            $table->decimal('net_monthly_amortization', 12, 2)->nullable();
            $table->decimal('gross_ey', 12, 2)->nullable();
            $table->date('due_date')->nullable();
            $table->date('date_past_due')->nullable();
            $table->integer('number_of_days_past_due')->nullable();
            $table->string('mode_of_payment')->nullable();
            $table->string('savings_checking_account_number')->nullable();
            $table->string('name_of_branch')->nullable();
            $table->date('maturity_date')->nullable();
            $table->string('name_of_account_officer')->nullable();
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
        Schema::dropIfExists('p_d_reports');
    }
};
