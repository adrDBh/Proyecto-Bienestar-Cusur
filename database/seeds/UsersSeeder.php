<?php

use App\Models\User;
use App\Models\Role;
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
        factory(User::class, 5)->create()->each(function ($i) {
            $i->attachRole(Role::where('name', '=', 'registered')->first());
        });

        // After you seed, you can use this test user
        User::create([
            'first_name' => 'test',
            'last_name' => 'TestUser',
            'email' => 'test@test.com',
            'password' => bcrypt('123456789'),
            'UDG_Code' => '123456789',
            'remember_token' => str_random(60)
        ])->attachRole(Role::where('name', '=', 'admin')->first());
    }
}
