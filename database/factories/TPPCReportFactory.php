<?php

namespace Database\Factories;

use App\Models\TPPCReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TPPCReport>
 */
class TPPCReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name_of_borrower' => $this->faker->name(),
            'name_of_co_borrower' => $this->faker->optional()->name(),
            'date_endorsed' => $this->faker->date(),
            'name_of_account_officer' => $this->faker->name(),
            'source_of_application' => $this->faker->randomElement(['website', 'referral', 'walk-in', 'dealer']),
            'name_of_dealer' => $this->faker->company(),
            'branch_name' => $this->faker->city() . ' Branch',
            'name_of_referror' => $this->faker->optional()->name(),
            'name_of_company' => $this->faker->company(),
            'name_of_broker' => $this->faker->optional()->name(),
        ];
    }
}
