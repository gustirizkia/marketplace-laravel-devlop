<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Fatan',
            'email' => 'Fatan@admin.com',
            'password' => Hash::make('admin12345'),
            'roles' => 'ADMIN'
        ]);
    }
}
