<?php

namespace Database\Factories;

use App\Models\PDReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PDReport>
 */
class PDReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_of_borrower' => $this->faker->name(),
            'name_of_co_borrower' => $this->faker->name(),
            'contact_number' => $this->faker->phoneNumber(),
            'email_address' => $this->faker->unique()->safeEmail(),
            'unit_details' => $this->faker->sentence(4),
            'selling_price' => $this->faker->randomFloat(2, 10000, 1000000),
            'amount_finance' => $this->faker->randomFloat(2, 5000, 900000),
            'net_monthly_amortization' => $this->faker->randomFloat(2, 100, 50000),
            'gross_ey' => $this->faker->randomFloat(2, 0, 100),
            'due_date' => $this->faker->date(),
            'date_past_due' => $this->faker->optional()->date(),
            'number_of_days_past_due' => $this->faker->numberBetween(0, 365),
            'mode_of_payment' => $this->faker->randomElement(['cash', 'check', 'bank_transfer', 'credit_card']),
            'savings_checking_account_number' => $this->faker->bothify('############'),
            'name_of_branch' => $this->faker->company(),
            'maturity_date' => $this->faker->dateTimeBetween('now', '+10 years')->format('Y-m-d'),
            'name_of_account_officer' => $this->faker->name(),
            'source_of_application' => $this->faker->randomElement(['online', 'referral', 'branch', 'dealer']),
            'name_of_dealer' => $this->faker->company(),
            'branch_name' => $this->faker->companySuffix(),
            'name_of_referrer' => $this->faker->name(),
            'name_of_company' => $this->faker->company(),
            'name_of_broker' => $this->faker->name(),
        ];
    }
}
