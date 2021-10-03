<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "person_id" => 1,
            "role_id" => 1,
            "typeProfession_id" => 1,
            "state" => 1,
            "email" => "yarlinson@gmail.com",
            "password" => Hash::make("yarlinson123"),
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);

        DB::table('users')->insert([
            "person_id" => 2,
            "role_id" => 2,
            "typeProfession_id" => 3,
            "state" => 1,
            "email" => "adrian@gmail.com",
            "password" => Hash::make("adrian123"),
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);

        DB::table('users')->insert([
            "person_id" => 3,
            "role_id" => 3,
            "state" => 1,
            "email" => "carlos@gmail.com",
            "password" => Hash::make("carlos123"),
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
    }
}
