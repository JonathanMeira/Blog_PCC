<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SystemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('system')->insert(array (
            0 =>[
                    'id' => 1,
                    'name' => 'Insira nome',
                    'color' => '#1e1e2c',
                    'logo' => 'noimage.jpg',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
        )
    );
    }
}
