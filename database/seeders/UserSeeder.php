<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $superAdminRole = Role::where('name', 'superadmin')->first();
        $directorRole = Role::where('name', 'director')->first();
        $sekretarisRole = Role::where('name', 'sekretaris')->first();
        $managerRole = Role::where('name', 'manager')->first();
        $staffRole = Role::where('name', 'staff')->first();

        $antar = User::create([
            'name' => 'Antar Eko Laksono',
            'divitions_id' => 1,
            'positions_id' => 4,
            'email' => 'antar@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
            ]);

        $damar = User::create([
            'name' => 'Sis Damar Wahyudi',
            'divitions_id' => 3,
            'positions_id' => 4,
            'email' => 'damar@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $eridani = User::create([
            'name' => 'Eridani',
            'divitions_id' => 4,
            'positions_id' => 4,
            'email' => 'eridani@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $reza = User::create([
            'name' => 'Reza Mulia',
            'divitions_id' => 6,
            'positions_id' => 4,
            'email' => 'reza.mulia@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $ningrum = User::create([
            'name' => 'Nugrahaningrum',
            'divitions_id' => 9,
            'positions_id' => 2,
            'email' => 'ningrum@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $ingrid = User::create([
            'name' => 'Ingrid Mustamu',
            'divitions_id' => 2,
            'positions_id' => 2,
            'email' => 'ingridmustamu@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $jovan = User::create([
            'name' => 'Jovan Patriot',
            'divitions_id' => 2,
            'positions_id' => 1,
            'email' => 'jovan@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $denny = User::create([
            'name' => 'Denny Patriot',
            'divitions_id' => 10,
            'positions_id' => 3,
            'email' => 'denny@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $adel = User::create([
            'name' => 'Adeline Adelia',
            'divitions_id' => 12,
            'positions_id' => 3,
            'email' => 'aadelia@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $abdul = User::create([
            'name' => 'Abdul Mutholib',
            'divitions_id' => 9,
            'positions_id' => 4,
            'email' => 'abdul@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $eby = User::create([
            'name' => 'Eby Christianto',
            'divitions_id' => 8,
            'positions_id' => 3,
            'email' => 'eby@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $felix = User::create([
            'name' => 'Felix Dalope',
            'divitions_id' => 3,
            'positions_id' => 4,
            'email' => 'felix@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $joko = User::create([
            'name' => 'Joko Supriyanto',
            'divitions_id' => 8,
            'positions_id' => 4,
            'email' => 'joko@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $marsudi = User::create([
            'name' => 'Marsudi',
            'divitions_id' => 5,
            'positions_id' => 3,
            'email' => 'marsudi@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $diana = User::create([
            'name' => 'Rosdiana Simanjuntak',
            'divitions_id' => 3,
            'positions_id' => 4,
            'email' => 'diana@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $melly = User::create([
            'name' => 'Rosmeliany Tarihoran',
            'divitions_id' => 3,
            'positions_id' => 3,
            'email' => 'melly@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $sriyanto = User::create([
            'name' => 'Sriyanto',
            'divitions_id' => 10,
            'positions_id' => 4,
            'email' => 'sriyanto@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $titik = User::create([
            'name' => 'Titiek Sumiastuti',
            'divitions_id' => 7,
            'positions_id' => 4,
            'email' => 'titiek@maximamaritima.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $antar->roles()->attach($superAdminRole);
        // $antar->roles()->attach($sekretarisRole);
        // $antar->roles()->attach($managerRole);
        // $antar->roles()->attach($staffRole);
        $damar->roles()->attach($staffRole);
        $reza->roles()->attach($staffRole);
        $ningrum->roles()->attach($sekretarisRole);
        $ingrid->roles()->attach($sekretarisRole);
        $jovan->roles()->attach($directorRole);
        $denny->roles()->attach($managerRole);
        $adel->roles()->attach($managerRole);
        $abdul->roles()->attach($staffRole);
        $eby->roles()->attach($managerRole);
        $felix->roles()->attach($staffRole);
        $marsudi->roles()->attach($managerRole);
        $diana->roles()->attach($staffRole);
        $sriyanto->roles()->attach($staffRole);
        $titik->roles()->attach($staffRole);
    }
}
