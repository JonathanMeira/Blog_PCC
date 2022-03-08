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
                    'role' => 'admin'
                ],
        )
    );
    }
}
