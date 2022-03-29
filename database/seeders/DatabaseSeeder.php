<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dokter;
use App\Models\Pasien;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Dokter::factory(5)->create();
        Pasien::factory(5)->create();
        // \App\Models\User::factory(10)->create();
    }
}
