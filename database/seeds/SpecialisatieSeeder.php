<?php

use Illuminate\Database\Seeder;

class SpecialisatieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('specialisaties')->insert([
            [
                'id' => 1,
                'code' => 'MEDT',
                'naam' => 'Mediatechnologie'
            ],
            [
                'id' => 2,
                'code' => 'BDAM',
                'naam' => 'Business data management'
            ],
            [
                'id' => 3,
                'code' => 'FICT',
                'naam' => 'Forensische ict'
            ],
            [
                'id' => 4,
                'code' => 'SE',
                'naam' => 'Software engineering'
            ],
        ]);
    }
}
