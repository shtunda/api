<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'username' => 'paprika',
                'password' => Hash::make('12345678'),
                'position' => 'admin',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 2,
                'username' => 'OAdruNse',
                'password' => Hash::make('12345678'),
                'position' => 'admin',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 3,
                'username' => 'UreSCOCk',
                'password' => Hash::make('12345678'),
                'position' => 'admin',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 4,
                'username' => 'aSPARIoN',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 5,
                'username' => 'iUMiStdO',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 6,
                'username' => 'TuREjoHN',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 7,
                'username' => 'user',
                'password' => Hash::make('12345678'),
                'position' => 'admin',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 8,
                'username' => 'THEAdIOu',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 9,
                'username' => 'EMIdAvAl',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 10,
                'username' => 'tUsaSONA',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 11,
                'username' => 'HICRiFTr',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 12,
                'username' => 'EzERGSTU',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 13,
                'username' => 'mplAUrSK',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 14,
                'username' => 'aCiALIbm',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 15,
                'username' => 'reaBOwba',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 16,
                'username' => 'CenTakAp',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 17,
                'username' => 'trecepTO',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 18,
                'username' => 'asTescRO',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 19,
                'username' => 'ITORbORP',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 20,
                'username' => 'RATErESI',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 21,
                'username' => 'RIalegIe',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 22,
                'username' => 'sCOnoIto',
                'password' => Hash::make('12345678'),
                'position' => 'admin',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 23,
                'username' => 'luMblExT',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 24,
                'username' => 'CreTIAnc',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 25,
                'username' => 'PWatEgAn',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 26,
                'username' => 'oMoUSibI',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 27,
                'username' => 'cALeAGUT',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 28,
                'username' => 'bUrveNuN',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 29,
                'username' => 'SonquITo',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 30,
                'username' => 'bITIcYci',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 31,
                'username' => 'AvErEiSi',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 32,
                'username' => 'OtstANeY',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 33,
                'username' => 'cEnDLerI',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 34,
                'username' => 'ightfuMB',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 35,
                'username' => 'ULYmcIan',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 36,
                'username' => 'skInFugi',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 37,
                'username' => 'WYNcOmIL',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 38,
                'username' => 'paprika',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 39,
                'username' => 'NEwAYteR',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 40,
                'username' => 'ibOvE',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 41,
                'username' => 'AvaticHungesI',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 42,
                'username' => 'lANTrAIcIA',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 43,
                'username' => 'BIl',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 44,
                'username' => 'TIoN',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],
            [
                'id' => 45,
                'username' => 'LIQuaTeLDown',
                'password' => Hash::make('12345678'),
                'position' => 'user',
                'api_token' => Str::random(80),
            ],

        ];
        DB::table('users')->insert($data);
    }
}
