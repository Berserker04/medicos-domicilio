<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            "firstName" => "Yarlinson",
            "lastName" => "Admin",
            "document" => "23543775",
            "birthDate" => "1997-10-12",
            "image" => null,
            "state" => 1,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);

        DB::table('people')->insert([
            "firstName" => "Adrian",
            "lastName" => "Copete",
            "document" => "4353536",
            "birthDate" => "1998-11-02",
            "image" => null,
            "state" => 1,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);

        DB::table('people')->insert([
            "firstName" => "Carlos",
            "lastName" => "Hernandez",
            "document" => "74574747",
            "birthDate" => "1999-04-05",
            "image" => null,
            "state" => 1,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
    }
}
