<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array (
            0 =>[
                    'id' => 1,
                    'name' => 'Super Admin',
                    'email' => 'guigato62@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                1 =>[
                    'id' => 2,
                    'name' => 'Super Admin',
                    'email' => 'guigato6a2@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],

                2 =>[
                    'id' => 3,
                    'name' => 'Super Admin',
                    'email' => 'guigato622@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                3 =>[
                    'id' => 4,
                    'name' => 'Super Admin',
                    'email' => 'guigato632@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                4 =>[
                    'id' => 5,
                    'name' => 'Super Admin',
                    'email' => 'guigato642@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                5 =>[
                    'id' => 6,
                    'name' => 'Super Admin',
                    'email' => 'guigato652@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                6 =>[
                    'id' => 7,
                    'name' => 'Super Admin',
                    'email' => 'guigato662@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                7 =>[
                    'id' => 8,
                    'name' => 'Super Admin',
                    'email' => 'guigato672@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                8 =>[
                    'id' => 9,
                    'name' => 'Super Admin',
                    'email' => 'guigato682@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                9 =>[
                    'id' => 10,
                    'name' => 'Super Admin',
                    'email' => 'guigato12682@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                10 =>[
                    'id' => 11,
                    'name' => 'Super Admin',
                    'email' => 'guigato6vv2@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                11 =>[
                    'id' => 12,
                    'name' => 'Super Admin',
                    'email' => 'guigato6112@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                12 =>[
                    'id' => 13,
                    'name' => 'Super Admin',
                    'email' => 'guigato6112s2@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                13 =>[
                    'id' => 14,
                    'name' => 'Super Admin',
                    'email' => 'guigato6asd2@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                14 =>[
                    'id' => 15,
                    'name' => 'Super Admin',
                    'email' => 'guigatasdo62@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                15 =>[
                    'id' => 16,
                    'name' => 'Super Admin',
                    'email' => 'guasdigato62@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ],
                16 =>[
                    'id' => 17,
                    'name' => 'Super Admin',
                    'email' => 'guigato62@gmailasd.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'created_at' => now(),
                    'updated_at' => now(),   
                ]
        )
    );
    }
}
