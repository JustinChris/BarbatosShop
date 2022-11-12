<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'userName' => 'Joko',
            'userEmail' => 'joke-o@gmail.com',
            'password' => 'joko1234',
            'userGender' => 'Male',
            'userDoB' => '2022-10-22',
            'userCountry' => 'India',
            'userPhoto' => 'https://broonet.com/wp-content/uploads/2020/03/mewarnai-gambar-kartun-1.jpg',
            'userRole' => 'Admin'
        ]);
    }
}
