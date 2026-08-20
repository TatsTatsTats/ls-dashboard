<?php

namespace Database\Factories;

use App\Models\TBMReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TBMReport>
 */
class TBMReportFactory extends Factory
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
            'application_date' => $this->faker->date(),
            'unit_details' => $this->faker->sentence(6),
            'type_of_transmission' => $this->faker->randomElement(['Manual', 'Automatic', 'CVT', 'Semi-Auto']),
            'selling_price' => $this->faker->randomFloat(2, 10000, 1000000),
            'amount_finance' => $this->faker->randomFloat(2, 1000, 1000000),
            'downpayment_percentage' => $this->faker->numberBetween(0, 100),
            'downpayment_amount' => $this->faker->randomFloat(2, 0, 500000),
            'add_on_rate' => $this->faker->randomFloat(2, 0, 20),
            'net_effective_yield' => $this->faker->randomFloat(2, 0, 20),
            'gross_effective_yield' => $this->faker->randomFloat(2, 0, 20),
            'dealer_incentive_percentage' => $this->faker->numberBetween(0, 100),
            'salesman_incentive_percentage' => $this->faker->numberBetween(0, 100),
            'effective_interest_rate' => $this->faker->randomFloat(2, 0, 30),
            'employer_or_business_name' => $this->faker->company(),
            'total_monthly_income' => $this->faker->numberBetween(10000, 500000),
            'industry' => $this->faker->word(),
            'name_of_account_officer' => $this->faker->name(),
            'source_of_application' => $this->faker->randomElement(['Walk-in', 'Online', 'Referral', 'Dealer']),
            'name_of_dealer' => $this->faker->company(),
            'branch_name' => $this->faker->city(),
            'name_of_referror' => $this->faker->optional()->name(),
            'name_of_company' => $this->faker->company(),
            'name_of_broker' => $this->faker->optional()->name(),
        ];
    }
}
