<?php

namespace Database\Factories;

use App\Models\TADReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TADReport>
 */
class TADReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'borrower_name' => $this->faker->name(),
            'co_borrower_name' => $this->faker->name(),
            'contact_number' => $this->faker->phoneNumber(),
            'email_address' => $this->faker->safeEmail(),
            'unit_details' => $this->faker->sentence(3),
            'selling_price' => $this->faker->randomFloat(2, 100000, 5000000),
            'downpayment' => $this->faker->randomFloat(2, 50000, 1500000),
            'amount_finance' => $this->faker->randomFloat(2, 100000, 4500000),
            'monthly_amortization' => $this->faker->randomFloat(2, 5000, 250000),
            'gross_effective_yield' => $this->faker->randomFloat(2, 1, 25),
            'net_effective_yield' => $this->faker->randomFloat(2, 1, 20),
            'effective_interest_rate' => $this->faker->randomFloat(2, 1, 18),
            'dealer_incentive' => $this->faker->randomFloat(2, 1000, 500000),
            'salesman_incentive' => $this->faker->randomFloat(2, 1000, 300000),
            'keyman_incentive' => $this->faker->randomFloat(2, 1000, 250000),
            'account_officer_name' => $this->faker->name(),
            'source_of_application' => $this->faker->randomElement(['Online', 'Walk-in', 'Referral', 'Dealer', 'Broker']),
            'dealer_name' => $this->faker->company(),
            'branch_name' => $this->faker->company(),
            'referrer_name' => $this->faker->name(),
            'company_name' => $this->faker->company(),
            'broker_name' => $this->faker->name(),
        ];
    }
}
