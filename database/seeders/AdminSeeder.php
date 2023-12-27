<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '012345678',
            'password' => Hash::make('12345678'),
            'role_id' => 1,
        ];
        User::create($data);
    }
}
