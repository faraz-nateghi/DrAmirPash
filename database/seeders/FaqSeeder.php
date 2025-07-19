<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['title' => 'زیبایی', 'publish' => 1],
            ['title' => 'پزشکی', 'publish' => 1],
        ];

        $savedCategories = [];
        foreach ($categories as $categoryData) {
            $category = FaqCategory::create($categoryData);
            $savedCategories[$category->title] = $category->id;
        }

        $faqs = [
            [
                'faq_category_id' => $savedCategories['زیبایی'],
                'question' => 'آیا درمان‌های زیبایی درد دارند؟',
                'answer' => 'بیشتر درمان‌های زیبایی با کمترین درد همراه هستند و از بی‌حسی موضعی استفاده می‌شود.',
                'show_in_home' => 1,
                'publish' => 1,
            ],
            [
                'faq_category_id' => $savedCategories['زیبایی'],
                'question' => 'ماندگاری بوتاکس چقدر است؟',
                'answer' => 'بین ۳ تا ۶ ماه بسته به نوع پوست و متابولیسم بدن.',
                'show_in_home' => 0,
                'publish' => 1,
            ],
            [
                'faq_category_id' => $savedCategories['پزشکی'],
                'question' => 'چه زمانی باید آزمایش خون بدهیم؟',
                'answer' => 'در صورت احساس ضعف عمومی یا طبق توصیه پزشک.',
                'show_in_home' => 1,
                'publish' => 1,
            ],
            [
                'faq_category_id' => $savedCategories['پزشکی'],
                'question' => 'آیا مصرف مولتی‌ویتامین ضروری است؟',
                'answer' => 'در برخی موارد بله، ولی باید تحت نظر پزشک باشد.',
                'show_in_home' => 0,
                'publish' => 1,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
