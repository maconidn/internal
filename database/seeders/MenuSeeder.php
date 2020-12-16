<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::truncate();
        Menu::create([
            'menu_titles_id' => 1,
            'name' => 'Dashboard',
            'url' => 'dashboard',
            'icon' => 'fas fa-th',
            'active' => 1,
            'queu' => 1
        ]);
        Menu::create([
            'menu_titles_id' => 2,
            'name' => 'Nomor surat keluar',
            'url' => 'outmail',
            'icon' => 'fas fa-envelope',
            'active' => 1,
            'queu' => 1
        ]);
        Menu::create([
            'menu_titles_id' => 1,
            'name' => 'Karyawan',
            'url' => 'user',
            'icon' => 'fas fa-user',
            'active' => 1,
            'queu' => 2
        ]);
        Menu::create([
            'menu_titles_id' => 2,
            'name' => 'Surat Izin',
            'url' => 'permit',
            'icon' => 'fas fa-id-card',
            'active' => 1,
            'queu' => 2
        ]);
    }
}
