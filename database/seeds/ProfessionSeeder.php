<?php

use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profession')->insert([
            'name' => 'Desarrollador Front-end '
        ]);
        DB::table('profession')->insert([
            'name' => 'Desarrollador Back-end '
        ]);
        DB::table('profession')->insert([
            'name' => 'Desarrollador UI'
        ]);
        DB::table('profession')->insert([
            'name' => 'Desarrollador Web'
        ]);
        DB::table('profession')->insert([
            'name' => 'Diseñador sistema web'
        ]);
        DB::table('profession')->insert([
            'name' => 'Full Stack Manager'
        ]);
        DB::table('profession')->insert([
            'name' => 'Desarrollador Senior'
        ]);
        DB::table('profession')->insert([
            'name' => 'Administrador base de datos'
        ]);
        DB::table('profession')->insert([
            'name' => 'Administrador de servidores'
        ]);
        DB::table('profession')->insert([
            'name' => 'Analista de sistema'
        ]);
    }
}

