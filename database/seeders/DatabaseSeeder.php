<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            MenuSeeder::class,
            MenuTitleSeeder::class,
            DivitionSeeder::class,
            PositionSeeder::class,
            MailNumberSeeder::class,
            UserDetail::class,
            PermitSeeder::class

        ]);
        // $this->call(UserSeeder::class);
    }
}
