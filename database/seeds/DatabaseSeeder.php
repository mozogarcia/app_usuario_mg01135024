<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable(['profession','users']); 
        $this->call(ProfessionSeeder::class);
        $this->call(UsersSeeder::class);

    }
    public function truncateTable($table = array()){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        for ($i = 0; $i < count($table); $i++){
            DB::table($table[$i])->truncate();
        }
        
    }
}
