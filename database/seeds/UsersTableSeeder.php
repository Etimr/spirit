<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();


        $users = array(
            array(
                'name'      => 'admin',
                'email'      => 'admin@example.org',
                'password'   => Hash::make('admin'),                
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'name'      => 'user',
                'email'      => 'user@example.org',
                'password'   => Hash::make('user'),                
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            )
        );

        DB::table('users')->insert($users);
    }

}
