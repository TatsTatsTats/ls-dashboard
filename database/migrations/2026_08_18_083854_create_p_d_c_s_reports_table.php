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
        Schema::create('p_d_c_s_reports', function (Blueprint $table) {
            $table->id();
            $table->string('borrower_name')->nullable();
            $table->string('co_borrower_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();
            $table->text('unit_details')->nullable();
            $table->decimal('selling_price', 15, 2)->nullable();
            $table->decimal('amount_finance', 15, 2)->nullable();
            $table->decimal('net_monthly_amortization', 15, 2)->nullable();
            $table->unsignedInteger('number_of_submitted_pdc')->default(0);
            $table->string('last_issued_check')->nullable();
            $table->date('due_date')->nullable();
            $table->date('maturity_date')->nullable();
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
        Schema::dropIfExists('p_d_c_s_reports');
    }
};
