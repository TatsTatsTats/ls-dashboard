<?php

namespace Database\Seeders;

use App\Models\ADMReport;
use App\Models\AECReport;
use App\Models\BADGReport;
use App\Models\CMAPLDReport;
use App\Models\CPIRReport;
use App\Models\DOCDEFSReport;
use App\Models\DTIReport;
use App\Models\ISReport;
use App\Models\ORCRSReport;
use App\Models\PDCSReport;
use App\Models\PDReport;
use App\Models\TADReport;
use App\Models\TBMReport;
use App\Models\TPPCReport;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        AECReport::factory(10)->create();
        ADMReport::factory(10)->create();
        BADGReport::factory(10)->create();
        CPIRReport::factory(10)->create();
        CMAPLDReport::factory(10)->create();
        DTIReport::factory(10)->create();
        PDReport::factory(10)->create();
        TADReport::factory(20)->create();
        TBMReport::factory(10)->create();
        TPPCReport::factory(10)->create();
        // Monitoring Report
        PDCSReport::factory(10)->create();
        ISReport::factory(10)->create();
        ORCRSReport::factory(10)->create();
        DOCDEFSReport::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
