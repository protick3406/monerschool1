<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' =>'1',
            'name' =>'Mr.Admin',
            'username' =>'admin',
            'email' =>'admin@monerschool.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'role_id' =>'2',
            'name' =>'Reguser',
            'username' =>'reguser',
            'email' =>'reguser@monerschool.com',
            'password' => bcrypt('reguser'),
        ]);
    }
}
