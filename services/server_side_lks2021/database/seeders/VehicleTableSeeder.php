<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        // DB::table('vehicles')->delete();

        DB::table('vehicles')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'LVB-T101',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 1,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'LVB-T102',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 1,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'LVB-T103',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 1,
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'LVB-T104',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 1,
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'LVB-T105',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 1,
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'LVB-T106',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 1,
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'LVB-T107',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 1,
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'LVB-T108',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 1,
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'LVB-T109',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 1,
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'LVB-T111',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 1,
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'LVB-T112',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 2,
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'LVB-T113',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 2,
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'LVB-T114',
                'capacity' => 300,
                'type' => 'Tram',
                'line_id' => 2,
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'LVB-A203',
                'capacity' => 80,
                'type' => 'Autobus',
                'line_id' => 2,
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'LVB-A205',
                'capacity' => 50,
                'type' => 'Autobus',
                'line_id' => 2,
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'LVB-A208',
                'capacity' => 80,
                'type' => 'Autobus',
                'line_id' => 2,
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'LVB-A210',
                'capacity' => 100,
                'type' => 'Autobus',
                'line_id' => 2,
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'LVB-A211',
                'capacity' => 80,
                'type' => 'Autobus',
                'line_id' => 2,
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'LVB-A212',
                'capacity' => 80,
                'type' => 'Autobus',
                'line_id' => 2,
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'LVB-A213',
                'capacity' => 80,
                'type' => 'Autobus',
                'line_id' => 2,
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'LVB-A214',
                'capacity' => 100,
                'type' => 'Autobus',
                'line_id' => 2,
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'LVB-A215',
                'capacity' => 150,
                'type' => 'Autobus',
                'line_id' => 2,
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'LVB-A216',
                'capacity' => 100,
                'type' => 'Autobus',
                'line_id' => 2,
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'LVB-A217',
                'capacity' => 80,
                'type' => 'Autobus',
                'line_id' => 2,
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'LVB-A218',
                'capacity' => 50,
                'type' => 'Autobus',
                'line_id' => 2,
            ),
            25 =>
            array(
                'id' => 26,
                'name' => 'LVB-N109',
                'capacity' => 100,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            26 =>
            array(
                'id' => 27,
                'name' => 'LVB-N110',
                'capacity' => 100,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            27 =>
            array(
                'id' => 28,
                'name' => 'LVB-N111',
                'capacity' => 100,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            28 =>
            array(
                'id' => 29,
                'name' => 'LVB-N112',
                'capacity' => 100,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            29 =>
            array(
                'id' => 30,
                'name' => 'LVB-N113',
                'capacity' => 120,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            30 =>
            array(
                'id' => 31,
                'name' => 'LVB-N114',
                'capacity' => 120,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            31 =>
            array(
                'id' => 32,
                'name' => 'LVB-N115',
                'capacity' => 130,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            32 =>
            array(
                'id' => 33,
                'name' => 'LVB-N116',
                'capacity' => 130,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            33 =>
            array(
                'id' => 34,
                'name' => 'LVB-N117',
                'capacity' => 130,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            34 =>
            array(
                'id' => 35,
                'name' => 'LVB-N118',
                'capacity' => 130,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            35 =>
            array(
                'id' => 36,
                'name' => 'LVB-N119',
                'capacity' => 100,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            36 =>
            array(
                'id' => 37,
                'name' => 'LVB-N120',
                'capacity' => 100,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            37 =>
            array(
                'id' => 38,
                'name' => 'LVB-N121',
                'capacity' => 100,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            38 =>
            array(
                'id' => 39,
                'name' => 'LVB-N122',
                'capacity' => 150,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            39 =>
            array(
                'id' => 40,
                'name' => 'LVB-N123',
                'capacity' => 150,
                'type' => 'Nightliner',
                'line_id' => 2,
            ),
            40 =>
            array(
                'id' => 41,
                'name' => 'LVB-RB89',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            41 =>
            array(
                'id' => 42,
                'name' => 'LVB-RB90',
                'capacity' => 90,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            42 =>
            array(
                'id' => 43,
                'name' => 'LVB-RB91',
                'capacity' => 90,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            43 =>
            array(
                'id' => 44,
                'name' => 'LVB-RB92',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            44 =>
            array(
                'id' => 45,
                'name' => 'LVB-RB93',
                'capacity' => 90,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            45 =>
            array(
                'id' => 46,
                'name' => 'LVB-RB94',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            46 =>
            array(
                'id' => 47,
                'name' => 'LVB-RB95',
                'capacity' => 90,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            47 =>
            array(
                'id' => 48,
                'name' => 'LVB-RB96',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            48 =>
            array(
                'id' => 49,
                'name' => 'LVB-RB97',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            49 =>
            array(
                'id' => 50,
                'name' => 'LVB-RB98',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            50 =>
            array(
                'id' => 51,
                'name' => 'LVB-RB99',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            51 =>
            array(
                'id' => 52,
                'name' => 'LVB-RB10',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            52 =>
            array(
                'id' => 53,
                'name' => 'LVB-RB20',
                'capacity' => 90,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            53 =>
            array(
                'id' => 54,
                'name' => 'LVB-RB30',
                'capacity' => 90,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            54 =>
            array(
                'id' => 55,
                'name' => 'LVB-RB40',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            55 =>
            array(
                'id' => 56,
                'name' => 'LVB-RB50',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            56 =>
            array(
                'id' => 57,
                'name' => 'LVB-RB55',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            57 =>
            array(
                'id' => 58,
                'name' => 'LVB-RB56',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            58 =>
            array(
                'id' => 59,
                'name' => 'LVB-RB70',
                'capacity' => 100,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            59 =>
            array(
                'id' => 60,
                'name' => 'LVB-RB77',
                'capacity' => 110,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
            60 =>
            array(
                'id' => 61,
                'name' => 'LVB-RB78',
                'capacity' => 110,
                'type' => 'Regionalbus',
                'line_id' => 2,
            ),
        ));
    }
}
