<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaregoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $data = [
            [
                'title' => 'صفحات',
                'titre' => 'صفحات',
                'alias' => 'صفحات',
                'keywords' => 'صفحات',
                'description' => 'صفحات',
                'publish' => 1,
                'blog' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'آموزش',
                'titre' => 'آموزش',
                'alias' => 'آموزش',
                'keywords' => 'آموزش',
                'description' => 'آموزش',
                'publish' => 1,
                'blog' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];

        Category::query()->insert($data);
    }
}
