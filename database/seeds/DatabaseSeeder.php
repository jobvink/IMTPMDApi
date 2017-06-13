<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(JaarSeeder::class);
        $this->call(KeuzevakkenSeeder::class);
        $this->call(SpecialisatieSeeder::class);
        $this->call(SpecialisatievakkenSeeder::class);
        $this->call(VerplichtenvakkenSeeder::class);
    }
}
