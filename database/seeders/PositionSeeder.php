<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::truncate();
        Position::create(['name' => 'Director']);
        Position::create(['name' => 'Secretary']);
        Position::create(['name' => 'Manager']);
        Position::create(['name' => 'Staff']);
        Position::create(['name' => 'Super Intendent']);
    }
}
