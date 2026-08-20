<?php

namespace Database\Factories;

use App\Models\CMAPLDReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CMAPLDReport>
 */
class CMAPLDReportFactory extends Factory
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
            'co_borrower_1_name' => $this->faker->name(),
            'co_borrower_2_name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'date_inquired' => $this->faker->date(),
            'requestor_name' => $this->faker->name(),
            'source_of_application' => $this->faker->word(),
            'dealer_name' => $this->faker->company(),
            'branch_name' => $this->faker->company(),
            'referror_name' => $this->faker->name(),
            'company_name' => $this->faker->company(),
            'broker_name' => $this->faker->name(),
        ];
    }
}
