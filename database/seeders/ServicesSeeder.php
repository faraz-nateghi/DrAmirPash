<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'زیبایی',
                'publish' => true,
            ],[
                'title' => 'پزشکی',
                'publish' => true,
            ]
        ];
        $savedCategories = [];
        foreach ($categories as $categoryData) {
            $category = ServiceCategory::create($categoryData);
            $savedCategories[$category->title] = $category->id;
        }
        $services = [
            'پزشکی' => [
                ['title' => 'تشخیص و تعیین مسیر درمان سرطان پستان', 'alias' => 'breast-cancer-diagnosis'],
                ['title' => 'جراحی سرطان پستان با استفاده از تکنیکهای روز', 'alias' => 'breast-cancer-modern-surgery'],
                ['title' => 'آنکوپلاستی یکطرفه', 'alias' => 'unilateral-oncoplasty'],
                ['title' => 'آنکوپلاستی همزمان با ماموپلاستی سمت مقابل', 'alias' => 'oncoplasty-with-contralateral-mammoplasty'],
                ['title' => 'تخلیه پستان(ماستکتومی) همراه', 'alias' => 'mastectomy-with-reconstruction'],
                ['title' => 'تخلیه(ماستکتومی) پیشگیرانه دوطرفه', 'alias' => 'bilateral-prophylactic-mastectomy'],
                ['title' => 'بازسازی همزمان', 'alias' => 'immediate-reconstruction'],
                ['title' => 'جراحی توده های خوش خیم', 'alias' => 'benign-breast-tumor-surgery'],
                ['title' => 'درمان کیست پستان', 'alias' => 'breast-cyst-treatment'],
                ['title' => 'درمان روماتیسم پستان', 'alias' => 'breast-rheumatism-treatment'],
                ['title' => 'درمان ترشح پستان', 'alias' => 'nipple-discharge-treatment'],
                ['title' => 'درمان دردهای پستان', 'alias' => 'breast-pain-treatment'],
            ],
            'زیبایی' => [
                ['title' => 'ماموپلاستی کاهشی( کوچک کردن)', 'alias' => 'reduction-mammoplasty'],
                ['title' => 'لیفت(اصلاح افتادگی)', 'alias' => 'breast-lift'],
                ['title' => 'پروتزگذاری', 'alias' => 'breast-augmentation'],
                ['title' => 'ابدومینوپلاستی', 'alias' => 'abdominoplasty'],
                ['title' => 'پیکرتراشی', 'alias' => 'body-contouring'],
                ['title' => 'تخلیه درمانی یا پیشگیرانه همزمان بازسازی با پروتز یا فلپ', 'alias' => 'mastectomy-with-prosthesis-reconstruction'],
                ['title' => 'بازسازی نوک پستان', 'alias' => 'nipple-reconstruction'],
                ['title' => 'رفع عدم قرینگی', 'alias' => 'asymmetry-correction'],
                ['title' => 'جراحی و درمان ژنیکوماستی', 'alias' => 'gynecomastia-treatment'],
                ['title' => 'جراحی سرطان پستان آقایان', 'alias' => 'male-breast-cancer-surgery'],
            ],
        ];

        foreach ($services as $categoryTitle => $serviceList) {
            $categoryId = $savedCategories[$categoryTitle];

            foreach ($serviceList as $service) {
                Service::create([
                    'service_category_id' => $categoryId,
                    'title' => $service['title'],
                    'alias' => $service['alias'],
                    'publish' => true,
                    'intro_text' => 'توضیح کوتاه درباره ' . $service['title'],
                    'body' => 'متن کامل درباره ' . $service['title'],
                ]);
            }
        }
    }
}
