<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branch_tbl')->insert([
            'branch_name'=>'Branch C',
            'created_at'=>date('y-m-d'),
        ]);
    }
}
