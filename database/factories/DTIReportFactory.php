<?php

namespace Database\Factories;

use App\Models\DTIReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DTIReport>
 */
class DTIReportFactory extends Factory
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
            'unit_details' => $this->faker->sentence(6),
            'application_date' => $this->faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d'),
            'employer_or_business_name' => $this->faker->company(),
            'employer_or_business_address' => $this->faker->address(),
            'source_of_application' => $this->faker->randomElement(['Walk-in', 'Referral', 'Online', 'Dealer']),
            'dealer_name' => $this->faker->company(),
            'branch_name' => $this->faker->company(),
            'referrer_name' => $this->faker->name(),
            'company_name' => $this->faker->company(),
            'broker_name' => $this->faker->name(),
        ];
    }
}
