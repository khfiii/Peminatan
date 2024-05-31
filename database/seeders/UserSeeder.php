<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

       $superAdmin= User::create([
            'name' => 'kahfi',
            'email' => 'kahfi@gmail.com',
            'password' => 'kahfi'
        ]);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin'
        ]);

        $superAdmin->assignRole('super-admin');
        $admin->assignRole('admin');
    }
}
