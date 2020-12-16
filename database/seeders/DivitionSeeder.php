<?php

namespace Database\Seeders;

use App\Models\Divition;
use Illuminate\Database\Seeder;

class DivitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Divition::truncate();
        Divition::create([
            'name' => 'IT - System Development',
            'code' => 'IT'
        ]);
        Divition::create([
            'name' => 'Director',
            'code' => 'DIR'
        ]);
        Divition::create([
            'name' => 'Finance',
            'code' => 'FIN'
        ]);
        Divition::create([
            'name' => 'Operation',
            'code' => 'OPS'
        ]);
        Divition::create([
            'name' => 'Crewing',
            'code' => 'CREW'
        ]);
        Divition::create([
            'name' => 'Health Safety Environment',
            'code' => 'HSE'
        ]);
        Divition::create([
            'name' => 'Tax',
            'code' => 'TAX'
        ]);
        Divition::create([
            'name' => 'Logistic & Purchasing',
            'code' => 'LOG'
        ]);
        Divition::create([
            'name' => 'General Affair & Legal',
            'code' => 'GA'
        ]);
        Divition::create([
            'name' => 'Technical',
            'code' => 'TECH'
        ]);
        Divition::create([
            'name' => 'Fleet',
            'code' => 'FLT'
        ]);
        Divition::create([
            'name' => 'Human Resources Divition',
            'code' => 'HRD'
        ]);
    }
}
