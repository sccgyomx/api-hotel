<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rooms')->insert([
            'room_number' => 5
        ]);
        DB::table('rooms')->insert([
            'room_number' => 3
        ]);
        DB::table('rooms')->insert([
            'room_number' => 1
        ]);
    }
}
