<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        // DB::table('drivers')->delete();

        DB::table('drivers')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'GERHARD',
                'birth_date' => '1981-10-05',
                'email' => 'ger@localhost.com',
                'phone' => '640100257',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 1,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'PLAMEN',
                'birth_date' => '1978-10-05',
                'email' => 'pla@localhost.com',
                'phone' => '550167289',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 2,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'PENTTI OLAVI',
                'birth_date' => '1956-06-25',
                'email' => 'penti@localhost.es',
                'phone' => '640100456',
                'avatar' => 'avatar.png',
                'type' => 'Nightliner',
                'vehicle_id' => 3,
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'LEOPOLD LUTZ',
                'birth_date' => '1995-03-05',
                'email' => 'leo@localhost.es',
                'phone' => '78852522',
                'avatar' => 'avatar.png',
                'type' => 'Nightliner',
                'vehicle_id' => 3,
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'LOTHAR MARCEL',
                'birth_date' => '1895-01-05',
                'email' => 'lot@localhost.es',
                'phone' => '66658595',
                'avatar' => 'avatar.png',
                'type' => 'Autobus',
                'vehicle_id' => 3,
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'DOLF DOMINIK',
                'birth_date' => '1986-07-05',
                'email' => 'dol@localhost.es',
                'phone' => '778856566',
                'avatar' => 'avatar.png',
                'type' => 'Autobus',
                'vehicle_id' => 3,
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'ENGELBERT PHILIPP',
                'birth_date' => '1903-01-05',
                'email' => 'eng@localhost.es',
                'phone' => '45569111',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'ELIAS EGON',
                'birth_date' => '1994-01-05',
                'email' => 'eli@localhost.es',
                'phone' => '33366555',
                'avatar' => 'avatar.png',
                'type' => 'Nightliner',
                'vehicle_id' => 3,
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'ELMAR WOLFGANG',
                'birth_date' => '1996-01-05',
                'email' => 'elm@localhost.es',
                'phone' => '9985633',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'JOHANN OTTO',
                'birth_date' => '1994-09-05',
                'email' => 'joh@localhost.es',
                'phone' => '123655558',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 3,
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'CURD MAX',
                'birth_date' => '1994-05-03',
                'email' => 'ccr@localhost.uk',
                'phone' => '788999',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Jhon Doe 2',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '123123',
                'avatar' => 'avatar.png',
                'type' => 'Nightliner',
                'vehicle_id' => 3,
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Jhon Doe 3',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '32331323',
                'avatar' => 'avatar.png',
                'type' => 'Autobus',
                'vehicle_id' => 3,
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Jhon Doe 4',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '78893399',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Jhon Doe 5',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '12312312',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 3,
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Jhon Doe 6',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '13212123',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Jhon Doe 7',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '333123223',
                'avatar' => 'avatar.png',
                'type' => 'Nightliner',
                'vehicle_id' => 3,
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'Jhon Doe 8',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '23322313',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'Jhon Doe 9',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '1233123',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 4,
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'Jhon Doe 1',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '123123',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 10,
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'Jhon Doe 2',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '33331434537',
                'avatar' => 'avatar.png',
                'type' => 'Autobus',
                'vehicle_id' => 3,
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'Jhon Doe 3',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '545456',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'Jhon Doe 4',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '6445646',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 3,
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'Jhon Doe 5',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '6786788',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'Jhon Doe 6',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '86778787',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            25 =>
            array(
                'id' => 26,
                'name' => 'Jhon Doe 7',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '67867867',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 3,
            ),
            26 =>
            array(
                'id' => 27,
                'name' => 'Jhon Doe 8',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '6868678',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            27 =>
            array(
                'id' => 28,
                'name' => 'Jhon Doe 9',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '23424234',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 5,
            ),
            28 =>
            array(
                'id' => 29,
                'name' => 'Jhon Doe 1',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '2234234',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            29 =>
            array(
                'id' => 30,
                'name' => 'Jhon Doe 2',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '788999',
                'avatar' => 'avatar.png',
                'type' => 'Autobus',
                'vehicle_id' => 3,
            ),
            30 =>
            array(
                'id' => 31,
                'name' => 'Jhon Doe 3',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '234234',
                'avatar' => 'avatar.png',
                'type' => 'Nightliner',
                'vehicle_id' => 3,
            ),
            31 =>
            array(
                'id' => 32,
                'name' => 'Jhon Doe 4',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '24234234',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            32 =>
            array(
                'id' => 33,
                'name' => 'Jhon Doe 5',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '23424234',
                'avatar' => 'avatar.png',
                'type' => 'Nightliner',
                'vehicle_id' => 3,
            ),
            33 =>
            array(
                'id' => 34,
                'name' => 'Jhon Doe 6',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '324234',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            34 =>
            array(
                'id' => 35,
                'name' => 'Jhon Doe 7',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '234234234',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 6,
            ),
            35 =>
            array(
                'id' => 36,
                'name' => 'Jhon Doe 8',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '234234234',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            36 =>
            array(
                'id' => 37,
                'name' => 'Jhon Doe 9',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '234234443',
                'avatar' => 'avatar.png',
                'type' => 'Nightliner',
                'vehicle_id' => 3,
            ),
            37 =>
            array(
                'id' => 38,
                'name' => 'Jhon Doe 1',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '797897',
                'avatar' => 'avatar.png',
                'type' => 'Autobus',
                'vehicle_id' => 3,
            ),
            38 =>
            array(
                'id' => 39,
                'name' => 'Jhon Doe 2',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '6456465',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            39 =>
            array(
                'id' => 40,
                'name' => 'Jhon Doe 3',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '97897',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 7,
            ),
            40 =>
            array(
                'id' => 41,
                'name' => 'Jhon Doe 4',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '46456456',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            41 =>
            array(
                'id' => 42,
                'name' => 'Jhon Doe 5',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '4565666',
                'avatar' => 'avatar.png',
                'type' => 'Nightliner',
                'vehicle_id' => 3,
            ),
            42 =>
            array(
                'id' => 43,
                'name' => 'Jhon Doe 6',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '123113213',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            43 =>
            array(
                'id' => 44,
                'name' => 'Jhon Doe 7',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '456456456',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            44 =>
            array(
                'id' => 45,
                'name' => 'Jhon Doe 8',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '456456889',
                'avatar' => 'avatar.png',
                'type' => 'Nightliner',
                'vehicle_id' => 3,
            ),
            45 =>
            array(
                'id' => 46,
                'name' => 'Jhon Doe 9',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '4564668',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            46 =>
            array(
                'id' => 47,
                'name' => 'Jhon Doe 1',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '569797',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 8,
            ),
            47 =>
            array(
                'id' => 48,
                'name' => 'Jhon Doe 2',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '9789798',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            48 =>
            array(
                'id' => 49,
                'name' => 'Jhon Doe 3',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '46545679',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            49 =>
            array(
                'id' => 50,
                'name' => 'Jhon Doe 4',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '64646456',
                'avatar' => 'avatar.png',
                'type' => 'Tram',
                'vehicle_id' => 9,
            ),
            50 =>
            array(
                'id' => 51,
                'name' => 'Jhon Doe 5',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '645645666',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            51 =>
            array(
                'id' => 52,
                'name' => 'Jhon Doe 6',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '4654566',
                'avatar' => 'avatar.png',
                'type' => 'Nightliner',
                'vehicle_id' => 3,
            ),
            52 =>
            array(
                'id' => 53,
                'name' => 'Jhon Doe 7',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '99887999',
                'avatar' => 'avatar.png',
                'type' => 'Autobus',
                'vehicle_id' => 3,
            ),
            53 =>
            array(
                'id' => 54,
                'name' => 'Jhon Doe 8',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '666346456',
                'avatar' => 'avatar.png',
                'type' => 'Regionalbus',
                'vehicle_id' => 3,
            ),
            54 =>
            array(
                'id' => 55,
                'name' => 'Jhon Doe 9',
                'birth_date' => '1999-05-03',
                'email' => 'joe@localhost.uk',
                'phone' => '97979',
                'avatar' => 'avatar.png',
                'type' => 'Nightliner',
                'vehicle_id' => 3,
            ),
        ));
    }
}
