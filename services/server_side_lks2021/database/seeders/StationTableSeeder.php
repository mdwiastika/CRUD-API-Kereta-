<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        // DB::table('stations')->delete();

        DB::table('stations')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Wahren',
                'position_station' => 'START',
                'line_id' => 1,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Wiederitzscher Str.',
                'position_station' => 'INTER',
                'line_id' => 1,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Hohe Str,LVB',
                'position_station' => 'INTER',
                'line_id' => 1,
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Connewitz,Kreuz',
                'position_station' => 'INTER',
                'line_id' => 1,
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Wiedebachplatz',
                'position_station' => 'INTER',
                'line_id' => 1,
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Triftweg-T1',
                'position_station' => 'INTER',
                'line_id' => 1,
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Wildpark',
                'position_station' => 'END',
                'line_id' => 1,
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Messe-gel?nde',
                'position_station' => '',
                'line_id' => 2,
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Wiederitzsch-Mitte',
                'position_station' => '',
                'line_id' => 2,
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Wilhelminesnstr',
                'position_station' => '',
                'line_id' => 2,
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Pobplatz',
                'position_station' => '',
                'line_id' => 2,
            ),
            11 =>
            array(
                'id' => 12,
                'name' => '4Deutsche,National,bibliothek',
                'position_station' => '',
                'line_id' => 2,
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Triftweg-T2',
                'position_station' => '',
                'line_id' => 2,
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'L?bnig',
                'position_station' => '',
                'line_id' => 2,
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Gohlis-Nord',
                'position_station' => '',
                'line_id' => 2,
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Gott-schalstr',
                'position_station' => '',
                'line_id' => 2,
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'S-Bf. Gohlis',
                'position_station' => '',
                'line_id' => 2,
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'Nordplatz',
                'position_station' => '',
                'line_id' => 2,
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'Zoo',
                'position_station' => '',
                'line_id' => 2,
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'Lortzingstr',
                'position_station' => '',
                'line_id' => 2,
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'Johannis-platz',
                'position_station' => '',
                'line_id' => 2,
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'Gohlis,Landsberger Str.',
                'position_station' => '',
                'line_id' => 2,
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'Viertelsweg',
                'position_station' => '',
                'line_id' => 2,
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'Augustus-platz',
                'position_station' => '',
                'line_id' => 2,
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'Breite Str',
                'position_station' => '',
                'line_id' => 2,
            ),
            25 =>
            array(
                'id' => 26,
                'name' => 'Weibestr',
                'position_station' => '',
                'line_id' => 2,
            ),
            26 =>
            array(
                'id' => 27,
                'name' => 'Kolmstr',
                'position_station' => '',
                'line_id' => 2,
            ),
            27 =>
            array(
                'id' => 28,
                'name' => 'St?tteritz',
                'position_station' => '',
                'line_id' => 2,
            ),
            28 =>
            array(
                'id' => 29,
                'name' => 'Gr?nau-S?d',
                'position_station' => '',
                'line_id' => 2,
            ),
            29 =>
            array(
                'id' => 30,
                'name' => 'Hermann-Meyer-Str',
                'position_station' => '',
                'line_id' => 2,
            ),
            30 =>
            array(
                'id' => 31,
                'name' => 'Adler',
                'position_station' => '',
                'line_id' => 2,
            ),
            31 =>
            array(
                'id' => 32,
                'name' => 'Holbeinstr',
                'position_station' => '',
                'line_id' => 2,
            ),
            32 =>
            array(
                'id' => 33,
                'name' => 'MarsChnerstr',
                'position_station' => '',
                'line_id' => 2,
            ),
            33 =>
            array(
                'id' => 34,
                'name' => 'Johannisallee',
                'position_station' => '',
                'line_id' => 2,
            ),
            34 =>
            array(
                'id' => 35,
                'name' => 'Naunhofer Str',
                'position_station' => '',
                'line_id' => 2,
            ),
            35 =>
            array(
                'id' => 36,
                'name' => 'Tucha',
                'position_station' => '',
                'line_id' => 2,
            ),
            36 =>
            array(
                'id' => 37,
                'name' => 'O.-Schmidt-Str',
                'position_station' => '',
                'line_id' => 2,
            ),
            37 =>
            array(
                'id' => 38,
                'name' => 'Arcus Park',
                'position_station' => '',
                'line_id' => 2,
            ),
            38 =>
            array(
                'id' => 39,
                'name' => 'Hofmeisterstr',
                'position_station' => '',
                'line_id' => 2,
            ),
            39 =>
            array(
                'id' => 40,
                'name' => 'Felsenkeller',
                'position_station' => '',
                'line_id' => 2,
            ),
            40 =>
            array(
                'id' => 41,
                'name' => 'Huttenstr',
                'position_station' => '',
                'line_id' => 2,
            ),
            41 =>
            array(
                'id' => 42,
                'name' => 'Knaut-Kleeberg',
                'position_station' => '',
                'line_id' => 2,
            ),
        ));
    }
}
