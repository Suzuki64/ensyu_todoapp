<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
/*以下を追加*/
use Illuminate\Support\Facades\DB;

class TodostableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'task' => 'aaa'
        ];
        DB::table('todos')->insert($param);
    }
}
