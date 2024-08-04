<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin LMS',
            'email' => 'admin@tes.com',
            'password' => bcrypt('12345678'),
            'level' => 'Admin',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'active' => 1
        ]);

        User::create([
            'name' => 'Awanama',
            'email' => 'awanama@tes.com',
            'password' => bcrypt('12345678'),
            'level' => 'Student',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'active' => 1
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@test.com',
            'password' => bcrypt('12345678'),
            'level' => 'Student',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'active' => 0
        ]);
    }
}
