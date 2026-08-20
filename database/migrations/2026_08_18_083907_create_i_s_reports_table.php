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
        Schema::create('i_s_reports', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_borrower')->nullable();
            $table->string('name_of_co_borrower')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email_address')->nullable();
            $table->text('unit_details')->nullable();
            $table->decimal('selling_price', 15, 2)->nullable();
            $table->decimal('amount_finance', 15, 2)->nullable();
            $table->decimal('net_monthly_amortization', 15, 2)->nullable();
            $table->string('policy_number')->nullable();
            $table->date('date_of_coverage')->nullable();
            $table->date('expiration_date')->nullable();
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
        Schema::dropIfExists('i_s_reports');
    }
};
