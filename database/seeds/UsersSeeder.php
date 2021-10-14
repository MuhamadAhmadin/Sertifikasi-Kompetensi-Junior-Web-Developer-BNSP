<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'username' => 'super_admin',
                'name' => 'Super Admin',
                'email' => 'superadmincovidsumbar@gmail.com',
                'password' => Hash::make('super_admin'),
                'role' => 'super_admin'
            ],
            [
                'username' => 'admin',
                'name' => 'Admin',
                'email' => 'admincovidsumbar@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'admin'
            ],
        ];

        DB::table('users')->insert($data);
    }
}
