<?php

use Illuminate\Database\Seeder;

class KeuzevakkenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('keuzevaks')->insert([
            [
                'code' => 'ITRAP',
                'naam' => 'Taal in Rapporteren',
                'ec' => 3,
            ],
            [
                'code' => 'IBROZ',
                'naam' => 'Open bronnenonderzoek',
                'ec' => 3,
            ],
            [
                'code' => 'ISTAT',
                'naam' => 'Statistiek voor IT-ers',
                'ec' => 3,
            ],
            [
                'code' => 'ICOMAS',
                'naam' => 'Assessment en Zelfonderzoek',
                'ec' => 3,
            ],
            [
                'code' => 'IDEPA',
                'naam' => 'Inleiding Design Patterns',
                'ec' => 3,
            ],
            [
                'code' => 'ISDELI',
                'naam' => 'IT Servicemanagement Delivery',
                'ec' => 3,
            ],
            [
                'code' => 'IWIS',
                'naam' => 'Wiskunde voor ICT-ers',
                'ec' => 3,
            ],
            [
                'code' => 'ISDEMA',
                'naam' => 'IT Servicemanagement Demand',
                'ec' => 3,
            ],
            [
                'code' => 'IKPMD',
                'naam' => 'Programming for Mobile Devices',
                'ec' => 3,
            ],
            [
                'code' => 'IITPS',
                'naam' => 'IT Psychologie',
                'ec' => 3,
            ],
            [
                'code' => 'IBK5',
                'naam' => 'Opzetten eigen IT bedrijf ',
                'ec' => 3,
            ],
            [
                'code' => 'IFP2',
                'naam' => 'Functioneel Projectmanagement',
                'ec' => 3,
            ],
            [
                'code' => 'IKLO',
                'naam' => 'Logica',
                'ec' => 3,
            ],
            [
                'code' => 'ITREWA',
                'naam' => 'Trend Watching',
                'ec' => 3,
            ],
            [
                'code' => 'IKUE',
                'naam' => 'Usability Engineering',
                'ec' => 3,
            ],
            [
                'code' => 'IKEMA',
                'naam' => 'Kennis Management',
                'ec' => 3,
            ],
            [
                'code' => 'IKGEO',
                'naam' => 'Geografische data / Open Data',
                'ec' => 3,
            ],
            [
                'code' => 'IKCP',
                'naam' => 'Concepten in Programmeertalen',
                'ec' => 3,
            ],
            [
                'code' => 'IFRAME',
                'naam' => 'Frameworks',
                'ec' => 3,
            ],
            [
                'code' => 'ILNUX1',
                'naam' => 'Linux 1',
                'ec' => 3,
            ],
        ]);
    }
}
