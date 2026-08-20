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
        Schema::create('c_p_i_r_reports', function (Blueprint $table) {
            $table->id();
            $table->string('borrower_name')->nullable();
            $table->string('co_borrower_name')->nullable();
            $table->date('application_date')->nullable();
            $table->string('unit_details')->nullable();
            $table->string('employer_or_business_name')->nullable();
            $table->string('position')->nullable();
            $table->decimal('total_monthly_income', 15, 2)->nullable();
            $table->string('industry')->nullable();
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
        Schema::dropIfExists('c_p_i_r_reports');
    }
};
