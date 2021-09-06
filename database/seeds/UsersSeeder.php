<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'mozojosue19971@gmail.com',
            'password' => bcrypt('Ezequiel'),
            'profession_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'mozojosue19972@gmail.com',
            'password' => bcrypt('Ezequiel'),
            'profession_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'mozojosue19973@gmail.com',
            'password' => bcrypt('Ezequiel'),
            'profession_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'mozojosue19974@gmail.com',
            'password' => bcrypt('Ezequiel'),
            'profession_id' => 4
        ]);
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'mozojosue19975@gmail.com',
            'password' => bcrypt('Ezequiel'),
            'profession_id' => 5
        ]);
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'mozojosue19976@gmail.com',
            'password' => bcrypt('Ezequiel'),
            'profession_id' => 6
        ]);
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'mozojosue19977@gmail.com',
            'password' => bcrypt('Ezequiel'),
            'profession_id' => 7
        ]);
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'mozojosue19978@gmail.com',
            'password' => bcrypt('Ezequiel'),
            'profession_id' => 8
        ]);
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'mozojosue19979@gmail.com',
            'password' => bcrypt('Ezequiel'),
            'profession_id' => 9
        ]);
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'mozojosue199710@gmail.com',
            'password' => bcrypt('Ezequiel'),
            'profession_id' => 10
        ]);
    }
}

