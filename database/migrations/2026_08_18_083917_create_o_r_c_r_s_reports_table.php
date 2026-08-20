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
        Schema::create('o_r_c_r_s_reports', function (Blueprint $table) {
            $table->id();
            $table->string('borrower_name');
            $table->string('co_borrower_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email_address')->nullable();
            $table->string('unit_details')->nullable();
            $table->string('engine_number')->nullable();
            $table->string('chassis_number')->nullable();
            $table->string('plate_number_or_conduction_sticker_number')->nullable();
            $table->string('color')->nullable();
            $table->string('or_number')->nullable();
            $table->string('cr_number')->nullable();
            $table->decimal('selling_price', 15, 2)->nullable();
            $table->decimal('amount_finance', 15, 2)->nullable();
            $table->string('account_officer')->nullable();
            $table->string('source_of_application')->nullable();
            $table->string('dealer_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('referrer')->nullable();
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
        Schema::dropIfExists('o_r_c_r_s_reports');
    }
};
