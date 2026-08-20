<?php

namespace Database\Factories;

use App\Models\ADMReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ADMReport>
 */
class ADMReportFactory extends Factory
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
            'date' => $this->faker->date(),
            'source_of_income' => $this->faker->randomElement(['Employment', 'Business', 'Freelance', 'Other']),
            'total_monthly_income' => $this->faker->randomFloat(2, 10000, 200000),
            'employer_or_business_name' => $this->faker->company(),
            'address_of_employer_or_business' => $this->faker->address(),
            'name_of_account_officer' => $this->faker->name(),
            'remarks' => $this->faker->sentence(),
            'source_of_application' => $this->faker->randomElement(['Branch', 'Referral', 'Online', 'Walk-in']),
            'name_of_dealer' => $this->faker->company(),
            'branch_name' => $this->faker->company(),
            'name_of_referrer' => $this->faker->name(),
            'name_of_company' => $this->faker->company(),
            'name_of_broker' => $this->faker->name(),
            
        ];
    }
}
