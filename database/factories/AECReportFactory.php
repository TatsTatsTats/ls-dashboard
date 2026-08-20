<?php

namespace Database\Factories;

use App\Models\AECReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AECReport>
 */
class AECReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_of_borrower' => fake()->name(),
            'name_of_co_borrower' => fake()->name(),
            'date_endorsed' => fake()->date(),
            'name_of_account_officer' => fake()->name(),
            'source_of_income' => fake()->randomElement(['Salary', 'Business', 'Freelance']),
            'employer_or_business_name' => fake()->company(),
            'address_of_employer_or_business' => fake()->address(),
            'unit_details' => fake()->randomElement(['Car', 'Motorcycle', 'Truck', 'Van']),
            'type_of_transmission' => fake()->randomElement(['Automatic', 'Manual']),
            'selling_price' => fake()->randomFloat(2, 100000, 5000000),
            'amount_finance' => fake()->randomFloat(2, 50000, 4000000),
            'downpayment_percentage' => fake()->randomFloat(2, 10, 50),
            'downpayment_amount' => fake()->randomFloat(2, 20000, 500000),
            'add_on_rate' => fake()->randomFloat(2, 0.5, 20),
            'net_ey' => fake()->randomFloat(2, 1, 30),
            'gross_ey' => fake()->randomFloat(2, 1, 50),
            'dealer_incentive_percentage' => fake()->randomFloat(2, 0, 10),
            'salesman_incentive_percentage' => fake()->randomFloat(2, 0, 10),
            'effective_interest_rate' => fake()->randomFloat(2, 1, 20),
            'total_monthly_income' => fake()->randomFloat(2, 20000, 500000),
            'industry' => fake()->randomElement(['Retail', 'Manufacturing', 'Services', 'Agriculture']),
            'source_of_application' => fake()->randomElement(['Walk-in', 'Referral', 'Online']),
            'name_of_dealer' => fake()->company(),
            'branch_name' => fake()->company(),
            'name_of_referror' => fake()->name(),
            'name_of_company' => fake()->company(),
            'name_of_broker' => fake()->name(),
        ];
    }
}
