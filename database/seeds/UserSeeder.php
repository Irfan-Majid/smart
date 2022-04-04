<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name' => 'super-Admin',
            'email' => 'sadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$nBcFmdKHFT/R5X.ntbJTjuYke7gEabhg55CJTCanOwUzkpOyZfhB2', // sadmin@gmail.com
            'remember_token' => Str::random(10),
        ]);
        $role = \App\Role::where('name', 'super-admin')->first();
        $user->assignRole($role->id);
    }
}
