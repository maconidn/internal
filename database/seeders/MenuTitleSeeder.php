<?php

namespace Database\Seeders;

use App\Models\MenuTitle;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MenuTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuTitle::truncate();
        MenuTitle::create([
            'name' => 'Super Admin Menu',
            'active' => 'Y',
            'queu' => '1',
            'rights' => 'superadmin',
            'created_at' => Carbon::now()
        ]);
        MenuTitle::create([
            'name' => 'Employee Menus',
            'active' => 'Y',
            'queu' => '2',
            'rights' => 'staff',
            'created_at' => Carbon::now()
        ]);
    }
}
