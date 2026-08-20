<?php

namespace Database\Factories;

use App\Models\BADGReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<BADGReport>
 */
class BADGReportFactory extends Factory
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
            'name_of_co_borrower' => $this->faker->optional()->name(),
            'unit_details' => $this->faker->sentence(4),
            'selling_price' => $this->faker->randomFloat(2, 100000, 5000000),
            'downpayment' => $this->faker->randomFloat(2, 50000, 2000000),
            'amount_finance' => $this->faker->randomFloat(2, 100000, 4000000),
            'net_monthly_amortization' => $this->faker->randomFloat(2, 5000, 200000),
            'name_of_account_officer' => $this->faker->name(),
            'source_of_application' => $this->faker->randomElement(['Online', 'Walk-in', 'Referral', 'Dealer']),
            'name_of_dealer' => $this->faker->company(),
            'mother_company_of_dealer' => $this->faker->company(),
            'branch_name' => $this->faker->city(),
            'name_of_referror' => $this->faker->name(),
            'name_of_company' => $this->faker->company(),
            'name_of_broker' => $this->faker->name(),
        ];
    }
}
