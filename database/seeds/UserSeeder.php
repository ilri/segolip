<?php

use App\Role;
use App\User;
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
        $adminRole = Role::whereName('admin')->first();

        $userRole = Role::whereName('user')->first();
        
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret123')
        ]);

        $user->assignRole($adminRole);
        $user->assignRole($userRole);

        $user = User::create([
            'name' => 'Adam',
            'email' => 'adam@gmail.com',
            'password' => bcrypt('secret123')
        ]);

        $user->assignRole($userRole);

        $user = User::create([
            'name' => 'Lalo',
            'email' => 'lalo@gmail.com',
            'password' => bcrypt('secret123')
        ]);

        $user->assignRole($userRole);
    }
}
