<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user = User::create([
            'name' => 'Rivaldo Ismir2',
            'email' => 'rivaldo2@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('rivaldo1'), // password
            'remember_token' => Str::random(10),
        ]);


        $role = Role::create(['name' => 'admin']);
        // $permission = Permission::create(['name' => 'edit articles']);

        $user->assignRole($role); // ngeset role user rivaldo 2
    }
}
