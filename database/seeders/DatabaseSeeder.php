<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CaregoriesTableSeeder::class);
        $this->call(ConfigsTableSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(MenuItemSeeder::class);
    }
}
