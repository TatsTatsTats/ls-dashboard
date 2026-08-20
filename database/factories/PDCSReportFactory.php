<?php

namespace Database\Factories;

use App\Models\PDCSReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PDCSReport>
 */
class PDCSReportFactory extends Factory
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
            'email' => $this->faker->email(),
            'unit_details' => $this->faker->text(),
            'selling_price' => $this->faker->randomFloat(2, 100000, 1000000),
            'amount_finance' => $this->faker->randomFloat(2, 50000, 800000),
            'net_monthly_amortization' => $this->faker->randomFloat(2, 5000, 50000),
            'number_of_submitted_pdc' => $this->faker->numberBetween(1, 36),
            'last_issued_check' => $this->faker->date(),
            'due_date' => $this->faker->date(),
            'maturity_date' => $this->faker->date(),
            'account_officer_name' => $this->faker->name(),
            'source_of_application' => $this->faker->word(),
            'dealer_name' => $this->faker->company(),
            'branch_name' => $this->faker->word(),
            'referrer_name' => $this->faker->name(),
            'company_name' => $this->faker->company(),
            'broker_name' => $this->faker->name(),
        ];
    }
}
