<?php

namespace Database\Factories;

use App\Models\CPIRReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CPIRReport>
 */
class CPIRReportFactory extends Factory
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
            'application_date' => $this->faker->date(),
            'unit_details' => $this->faker->sentence(6),
            'employer_or_business_name' => $this->faker->company(),
            'position' => $this->faker->jobTitle(),
            'total_monthly_income' => $this->faker->randomFloat(2, 15000, 200000),
            'industry' => $this->faker->companySuffix(),
            'account_officer_name' => $this->faker->name(),
            'source_of_application' => $this->faker->randomElement(['Walk-in', 'Referral', 'Online', 'Dealer']),
            'dealer_name' => $this->faker->name(),
            'branch_name' => $this->faker->company(),
            'referrer_name' => $this->faker->name(),
            'company_name' => $this->faker->company(),
            'broker_name' => $this->faker->name(),
        ];
    }
}
