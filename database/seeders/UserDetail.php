<?php

namespace Database\Seeders;

use App\Models\UserDetail as ModelsUserDetail;
use Illuminate\Database\Seeder;

class UserDetail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsUserDetail::truncate();
        ModelsUserDetail::create(['user_id' => 1, 'avatar' => 'avatar-1.png', 'nik' => '190430']);
        ModelsUserDetail::create(['user_id' => 2, 'avatar' => 'avatar-2.png', 'nik' => '150817']);
        ModelsUserDetail::create(['user_id' => 3, 'avatar' => 'avatar-3.png', 'nik' => '170125']);
        ModelsUserDetail::create(['user_id' => 4, 'avatar' => 'avatar-4.png', 'nik' => '170326']);
        ModelsUserDetail::create(['user_id' => 5, 'avatar' => 'avatar-5.png', 'nik' => '150813']);
        ModelsUserDetail::create(['user_id' => 6, 'avatar' => 'avatar-1.png', 'nik' => '171127']);
        ModelsUserDetail::create(['user_id' => 7, 'avatar' => 'avatar-2.png', 'nik' => '120404']);
        ModelsUserDetail::create(['user_id' => 8, 'avatar' => 'avatar-3.png', 'nik' => '120403']);
        ModelsUserDetail::create(['user_id' => 9, 'avatar' => 'avatar-4.png', 'nik' => '150805']);
        ModelsUserDetail::create(['user_id' => 10, 'avatar' => 'avatar-5.png', 'nik' => '150806']);
        ModelsUserDetail::create(['user_id' => 11, 'avatar' => 'avatar-1.png', 'nik' => '150807']);
        ModelsUserDetail::create(['user_id' => 12, 'avatar' => 'avatar-2.png', 'nik' => '150808']);
        ModelsUserDetail::create(['user_id' => 13, 'avatar' => 'avatar-3.png', 'nik' => '150811']);
        ModelsUserDetail::create(['user_id' => 14, 'avatar' => 'avatar-4.png', 'nik' => '150812']);
        ModelsUserDetail::create(['user_id' => 15, 'avatar' => 'avatar-5.png', 'nik' => '150815']);
        ModelsUserDetail::create(['user_id' => 16, 'avatar' => 'avatar-1.png', 'nik' => '150816']);
        ModelsUserDetail::create(['user_id' => 17, 'avatar' => 'avatar-2.png', 'nik' => '150818']);
        ModelsUserDetail::create(['user_id' => 18, 'avatar' => 'avatar-3.png', 'nik' => '150819']);
    }
}
