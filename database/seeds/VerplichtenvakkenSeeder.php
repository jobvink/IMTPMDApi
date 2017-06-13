<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VerplichtenvakkenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('verplichtvaks')->insert([
            [
                'code' => 'IARCH',
                'naam' => 'IT Architechtuur',
                'ec' => 3,
                'jaar_id' => 1,
                'periode_id' => 1,
            ],
            [
                'code' => 'IIBPM',
                'naam' => 'Informatiemanagement',
                'ec' => 3,
                'jaar_id' => 1,
                'periode_id' => 1,
            ],
            [
                'code' => 'IHBO',
                'naam' => 'Fundamentele HBO-(I)-vaardigheden',
                'ec' => 3,
                'jaar_id' => 1,
                'periode_id' => 1,
            ],
            [
                'code' => 'IOPR1',
                'naam' => 'Objectgeoriënteerd programmeren 1',
                'ec' => 4,
                'jaar_id' => 1,
                'periode_id' => 1,
            ],
            [
                'code' => 'IRDB',
                'naam' => 'Relationele databases',
                'ec' => 3,
                'jaar_id' => 2,
                'periode_id' => 1,
            ],
            [
                'code' => 'IIBUI',
                'naam' => 'Inleiding Business Intelligence',
                'ec' => 3,
                'jaar_id' => 1,
                'periode_id' => 2,
            ],
            [
                'code' => 'INET',
                'naam' => 'IT Netwerkstructuren',
                'ec' => 3,
                'jaar_id' => 1,
                'periode_id' => 2,
            ],
            [
                'code' => 'IPODM',
                'naam' => 'Practische Opdracht Business datamanagement',
                'ec' => 2,
                'jaar_id' => 1,
                'periode_id' => 2,
            ],
            [
                'code' => 'IPOMEDT',
                'naam' => 'Practische Opdracht Mediatechnologie',
                'ec' => 2,
                'jaar_id' => 1,
                'periode_id' => 2,
            ],
            [
                'code' => 'IWDR',
                'naam' => 'Webdesign & Realisatie',
                'ec' => 3,
                'jaar_id' => 1,
                'periode_id' => 3,
            ],
            [
                'code' => 'IOPR2',
                'naam' => 'Objectgeoriënteerd programmeren 2',
                'ec' => 4,
                'jaar_id' => 1,
                'periode_id' => 3,
            ],
            [
                'code' => 'IFIT',
                'naam' => 'Inleiding Forensische ICT',
                'ec' => 3,
                'jaar_id' => 1,
                'periode_id' => 3,
            ],
            [
                'code' => 'IMUML',
                'naam' => 'Modeleren in UML',
                'ec' => 3,
                'jaar_id' => 1,
                'periode_id' => 3,
            ],
            [
                'code' => 'IPROV',
                'naam' => 'ICT Projectvaardigheden',
                'ec' => 3,
                'jaar_id' => 1,
                'periode_id' => 3,
            ],
            [
                'code' => 'IPOSE',
                'naam' => 'Practische Opdracht Software Engineering',
                'ec' => 2,
                'jaar_id' => 1,
                'periode_id' => 3,
            ],
            [
                'code' => 'IPOFIT',
                'naam' => 'Practische Opdracht Forensisch ICT',
                'ec' => 2,
                'jaar_id' => 1,
                'periode_id' => 3,
            ],
            [
                'code' => 'ICOMMP',
                'naam' => 'Communicatie 1',
                'ec' => 3,
                'jaar_id' => 1,
                'periode_id' => 4,
            ],
            [
                'code' => 'ISLP',
                'naam' => 'Studieloopbaanbegeleiding',
                'ec' => 1,
                'jaar_id' => 1,
                'periode_id' => 4,
            ],
        ]);
    }
}
