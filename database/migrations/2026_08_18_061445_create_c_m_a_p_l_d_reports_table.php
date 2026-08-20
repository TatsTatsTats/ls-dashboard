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
        Schema::create('c_m_a_p_l_d_reports', function (Blueprint $table) {
            $table->id();
            $table->string('borrower_name')->nullable();
            $table->string('co_borrower_1_name')->nullable();
            $table->string('co_borrower_2_name')->nullable();
            $table->text('address')->nullable();
            $table->date('date_inquired')->nullable();
            $table->string('requestor_name')->nullable();
            $table->string('source_of_application')->nullable();
            $table->string('dealer_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('referror_name')->nullable();
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
        Schema::dropIfExists('c_m_a_p_l_d_reports');
    }
};
