<?php

namespace Database\Factories;

use App\Models\DOCDEFSReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DOCDEFSReport>
 */
class DOCDEFSReportFactory extends Factory
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
            'co_borrower_name' => $this->faker->optional()->name(),
            'contact_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'unit_details' => $this->faker->sentence(6),
            'amount_finance' => $this->faker->randomFloat(2, 1000, 1000000),
            'account_officer_name' => $this->faker->name(),
            'source_of_application' => $this->faker->randomElement(['online', 'walk-in', 'referral', 'dealer']),
            'dealer_name' => $this->faker->company(),
            'branch_name' => $this->faker->city() . ' Branch',
            'referrer_name' => $this->faker->optional()->name(),
            'company_name' => $this->faker->company(),
            'broker_name' => $this->faker->optional()->name(),
        ];
    }
}
