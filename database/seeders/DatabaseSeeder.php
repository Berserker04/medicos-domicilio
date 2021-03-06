<?php

namespace Database\Seeders;

use App\Models\Person;
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
            PersonSeeder::class,
            RoleSeeder::class,
            TypeProfessionSeeder::class,
            UserSeeder::class,
        ]);
    }
}
