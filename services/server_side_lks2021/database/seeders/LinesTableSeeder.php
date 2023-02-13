<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        // DB::table('lines')->delete();

        DB::table('lines')->insert(array(
            0 =>
            array(
                'id' => 1,
                'code' => 'T21',
                'start_time_operation' => '06:00:00',
                'end_time_operation' => '23:00:00',
                'type' => 'Tram',
                'map' => 'map/7OQR0ulVOZyjfFzMQplyJP3O0nnU802CdJDcRzGX.svg',
                'created_at' => '2022-12-03 14:04:32',
                'updated_at' => '2022-12-03 14:04:32',
            ),
            1 =>
            array(
                'id' => 2,
                'code' => 'A33',
                'start_time_operation' => '08:00:00',
                'end_time_operation' => '16:00:00',
                'type' => 'Autobus',
                'map' => 'map/nPs85Gr2booJ3UA9texBzewHhFfyRZhFsw1jszcU.svg',
                'created_at' => '2022-12-03 14:09:21',
                'updated_at' => '2022-12-03 14:09:21',
            ),
            2 =>
            array(
                'id' => 3,
                'code' => 'N45',
                'start_time_operation' => '18:00:00',
                'end_time_operation' => '07:00:00',
                'type' => 'Nightliner',
                'map' => 'map/KTanUbAlnWL2h6QViqblcgMra6ij1g2EKxYORW9E.svg',
                'created_at' => '2022-12-03 14:11:35',
                'updated_at' => '2022-12-03 14:28:49',
            ),
            3 =>
            array(
                'id' => 4,
                'code' => 'R87',
                'start_time_operation' => '06:00:00',
                'end_time_operation' => '20:00:00',
                'type' => 'Regional Bus',
                'map' => 'map/EnJJMmQlvMbTTeOIcxUDHvMPm6qsvkIenkUphwWT.svg',
                'created_at' => '2022-12-03 14:12:29',
                'updated_at' => '2022-12-03 14:12:29',
            ),
        ));
    }
}
