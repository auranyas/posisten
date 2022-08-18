<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Menfess;
use App\Models\Komentar;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menfess::create([
            "id" => 1,
            "menfess" => "Halo kamu",
        ]);

        Menfess::create([
            "id" => 2,
            "menfess" => "Assalamualaikum semua",
        ]);

        Komentar::create([
            "id" => 10,
            "menfess_id" => 1,
            "komentar" => "Halo juga",
        ]);

        Komentar::create([
            "id" => 11,
            "menfess_id" => 1,
            "komentar" => "Hai juga",
        ]);

        User::create([
            "name" => "Admin 1",
            "username" => "adminidi",
            "password" => Hash::make("Admin1")
        ]);
    }
}
