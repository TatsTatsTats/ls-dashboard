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
        Schema::create('d_o_c_d_e_f_s_reports', function (Blueprint $table) {
            $table->id();
            $table->string('borrower_name')->nullable();
            $table->string('co_borrower_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();
            $table->text('unit_details')->nullable();
            $table->decimal('amount_finance', 15, 2)->nullable();
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
        Schema::dropIfExists('d_o_c_d_e_f_s_reports');
    }
};
