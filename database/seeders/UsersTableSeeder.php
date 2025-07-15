<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'Faraz Nateghi Rad',
            'alias' => 'faraz',
            'email' => 'f.nateghirad@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => 1,
            'super_admin' => 1
        ]);


    }
}
