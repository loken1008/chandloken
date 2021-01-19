<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hall_tbl')->insert([

           'b_id'=>3,
           'hall_name'=>'B2-Hall33',
           'created_at'=>date('y-m-d'),
        ]);
    }
}
