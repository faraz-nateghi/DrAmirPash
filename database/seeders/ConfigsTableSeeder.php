<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Config::query()->create([
            'index_title' => 'آموزش، سیگنال، تحلیل و جدیدترین اخبار کریپتو | کریپتونگار',
            'index_keywords' => 'کریپتونگار',
            'index_description' => 'مرجع جدیدترین و آخرین اخبار ، بررسی و تحلیل و مقالات در زمینه انواع کریپتو کریپتونگار را دنبال کنید.',
            'facebook' => 'https://www.facebook.com/Bitexroom1',
            'telegram' => 'https://t.me/cryptonegarmain',
            'youtube' => 'https://youtube.com/@Cryptonegar',
            'instagram' => 'https://instagram.com/bitexroom',
            'email' => 'info@cryptonegar.com',
        ]);
    }
}
