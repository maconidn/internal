<?php

namespace Database\Seeders;

use App\Models\Permit;
use Illuminate\Database\Seeder;

class PermitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permit::truncate();
        Permit::create(['users_id' => 1, 'start_at' => '2020-12-25 15:03:26', 'end_at' => '2020-12-30 15:03:26', 'status' => 'Approved', 'reason' => 'Jalan-jalan']);
        Permit::create(['users_id' => 1, 'start_at' => '2020-12-25 15:03:26', 'end_at' => '2020-12-30 15:03:26', 'status' => 'Reviewed', 'reason' => 'Belanja']);
        Permit::create(['users_id' => 1, 'start_at' => '2020-12-25 15:03:26', 'end_at' => '2020-12-30 15:03:26', 'status' => 'Pending', 'reason' => 'Ke Singapura']);
        Permit::create(['users_id' => 1, 'start_at' => '2020-12-25 15:03:26', 'end_at' => '2020-12-30 15:03:26', 'status' => 'Hold', 'reason' => 'Jalan-jalan']);
        Permit::create(['users_id' => 1, 'start_at' => '2020-12-25 15:03:26', 'end_at' => '2020-12-30 15:03:26', 'status' => 'Rejected', 'reason' => 'Belanja']);
        Permit::create(['users_id' => 3, 'start_at' => '2020-12-25 15:03:26', 'end_at' => '2020-12-30 15:03:26', 'status' => 'Approved', 'reason' => 'Ke Singapura']);
        Permit::create(['users_id' => 3, 'start_at' => '2020-12-25 15:03:26', 'end_at' => '2020-12-30 15:03:26', 'status' => 'Approved', 'reason' => 'Jalan-jalan']);
        Permit::create(['users_id' => 4, 'start_at' => '2020-12-25 15:03:26', 'end_at' => '2020-12-30 15:03:26', 'status' => 'Approved', 'reason' => 'Belanja']);
        Permit::create(['users_id' => 4, 'start_at' => '2020-12-25 15:03:26', 'end_at' => '2020-12-30 15:03:26', 'status' => 'Approved', 'reason' => 'Ke Singapura']);
    }
}
