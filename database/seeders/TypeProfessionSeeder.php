<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_professions')->insert([
            "name" => "Odontólogos",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);

        DB::table('type_professions')->insert([
            "name" => "Traumatólogo",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);

        DB::table('type_professions')->insert([
            "name" => "Dermatólogo",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table('type_professions')->insert([
            "name" => "Urólogo",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table('type_professions')->insert([
            "name" => "Ginecólogo",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
        DB::table('type_professions')->insert([
            "name" => "Cardiólogo",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
    }
}
