<?php

use Illuminate\Database\Seeder;

class SpecialisatievakkenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('specialisatievaks')->insert([
            [
                'code' => 'IIPDBAM',
                'name' => 'Project inleiding BDaM',
                'ec' => 10,
                'jaar_id' => 1,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IIPMEDT',
                'name' => 'Project inleiding MedT',
                'ec' => 10,
                'jaar_id' => 1,
                'specialisatie_id' => 1,
            ],
            [
                'code' => 'IIPSEN',
                'name' => 'Project inleiding SE',
                'ec' => 10,
                'jaar_id' => 1,
                'specialisatie_id' => 4,
            ],
            [
                'code' => 'IIPFIT',
                'name' => 'Project inleiding FICT',
                'ec' => 10,
                'jaar_id' => 1,
                'specialisatie_id' => 3,
            ],


            [
                'code' => 'IPBDAM2',
                'name' => 'Project Business DataManagement 2',
                'ec' => 6,
                'jaar_id' => 2,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IPRODAM',
                'name' => 'Proces- en Data-modelleren',
                'ec' => 3,
                'jaar_id' => 2,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IPBDAM3',
                'name' => 'Project Business DataManagement 3',
                'ec' => 6,
                'jaar_id' => 2,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IDAAN1',
                'name' => 'Data-analyse Basis',
                'ec' => 3,
                'jaar_id' => 2,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IPDBAM4',
                'name' => 'Project Business DataManagement 4',
                'ec' => 6,
                'jaar_id' => 2,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IDAM',
                'name' => 'Datamanagement',
                'ec' => 3,
                'jaar_id' => 2,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IPBDAM5',
                'name' => 'Project Business DataManagement 5',
                'ec' => 6,
                'jaar_id' => 2,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IBUID',
                'name' => 'Business Intelligence & Data Warehousing',
                'ec' => 3,
                'jaar_id' => 2,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IPDAMH',
                'name' => 'Hoofdfaseproject Business DataManagement',
                'ec' => 9,
                'jaar_id' => 3,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IDARE',
                'name' => 'Data Realisatie',
                'ec' => 3,
                'jaar_id' => 3,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IDAAN2',
                'name' => 'Data-analyse 2',
                'ec' => 3,
                'jaar_id' => 3,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IDARCH',
                'name' => 'Data Architectuur',
                'ec' => 3,
                'jaar_id' => 3,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IWLS',
                'name' => 'Stage',
                'ec' => 30,
                'jaar_id' => 3,
                'specialisatie_id' => 2,
            ],
            [
                'code' => 'IWLA',
                'name' => 'Afstudeerverslag',
                'ec' => 30,
                'jaar_id' => 3,
                'specialisatie_id' => 2,
            ],



        ]);
    }
}
