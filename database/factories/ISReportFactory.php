<?php

namespace Database\Factories;

use App\Models\ISReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ISReport>
 */
class ISReportFactory extends Factory
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
            'contact_number' => $this->faker->phoneNumber(),
            'email_address' => $this->faker->safeEmail(),
            'unit_details' => $this->faker->sentence(3),
            'selling_price' => $this->faker->randomFloat(2, 10000, 1000000),
            'amount_finance' => $this->faker->randomFloat(2, 1000, 900000),
            'net_monthly_amortization' => $this->faker->randomFloat(2, 100, 50000),
            'policy_number' => $this->faker->bothify('POL-#####'),
            'date_of_coverage' => $this->faker->date(),
            'expiration_date' => $this->faker->dateTimeBetween('now', '+5 years')->format('Y-m-d'),
            'name_of_account_officer' => $this->faker->name(),
            'source_of_application' => $this->faker->word(),
            'name_of_dealer' => $this->faker->company(),
            'branch_name' => $this->faker->city() . ' Branch',
            'name_of_referrer' => $this->faker->name(),
            'name_of_company' => $this->faker->company(),
            'name_of_broker' => $this->faker->name(),
        ];
    }
}
