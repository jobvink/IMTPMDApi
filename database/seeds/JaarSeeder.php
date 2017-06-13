<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JaarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jaars')->insert([
            [
                'id' => 1,
                'beschrijving' => 'jaar 1'
            ],
            [
                'id' => 2,
                'beschrijving' => 'jaar 2'
            ],
            [
                'id' => 3,
                'beschrijving' => 'jaar 3'
            ],
            [
                'id' => 4,
                'beschrijving' => 'jaar 4'
            ],
        ]);
    }
}
