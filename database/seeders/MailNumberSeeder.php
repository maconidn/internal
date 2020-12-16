<?php

namespace Database\Seeders;

use App\Models\MailNumber;
use Illuminate\Database\Seeder;

class MailNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MailNumber::truncate();
        MailNumber::create([
            'for' => 'Perhubungan Laut',
            'subject' => 'Permohonan Perjalanan',
            'users_id' => 1,
            'divitions_id' => 1
        ]);
    }
}
