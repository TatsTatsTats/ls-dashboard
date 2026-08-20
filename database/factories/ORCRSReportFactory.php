<?php

namespace Database\Factories;

use App\Models\ORCRSReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ORCRSReport>
 */
class ORCRSReportFactory extends Factory
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
            'unit_details' => $this->faker->word(),
            'engine_number' => strtoupper($this->faker->bothify('ENG#######')),
            'chassis_number' => strtoupper($this->faker->bothify('CHS########')),
            'plate_number_or_conduction_sticker_number' => strtoupper($this->faker->bothify('???-####')),
            'color' => $this->faker->safeColorName(),
            'or_number' => $this->faker->bothify('OR-########'),
            'cr_number' => $this->faker->bothify('CR-########'),
            'selling_price' => $this->faker->numberBetween(50000, 5000000),
            'amount_finance' => $this->faker->numberBetween(10000, 4000000),
            'account_officer' => $this->faker->name(),
            'source_of_application' => $this->faker->word(),
            'dealer_name' => $this->faker->company(),
            'branch_name' => $this->faker->city(),
            'referrer' => $this->faker->name(),
            'company_name' => $this->faker->company(),
            'broker_name' => $this->faker->name(),
        ];
    }
}
