<?php
use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Seeds an 'admin' user
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'UDG_code' => '012345678',
            'password' => bcrypt('adminadmin')
        ]);
        // Seeds a test user
        User::create([
            'name' => 'test',
            'email' => 'test@test.com',
            'UDG_code' => '876543210',
            'password' => bcrypt('testtest')
        ]);
    }
}
