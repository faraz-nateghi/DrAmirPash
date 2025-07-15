<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // پاک‌سازی جدول برای جلوگیری از تکراری شدن
        MenuItem::truncate();

        // منوهای اصلی (سطح اول)
        $topMenus = [
            'خانه' => ['type' => 'dropdown'],
            'صفحات' => ['type' => 'dropdown'],
            'خدمات' => ['type' => 'dropdown'],
            'پروژه ها' => ['type' => 'dropdown'],
            'تیم' => ['type' => 'dropdown'],
            'بلاگ' => ['type' => 'dropdown'],
            'تماس با ما' => ['type' => 'normal', 'url' => 'contact-us.html'],
        ];

        $menuIds = [];

        foreach ($topMenus as $title => $options) {
            $menuItem = MenuItem::create([
                'titre' => $title,
                'url' => $options['url'] ?? null,
                'type' => $options['type'],
                'parent_id' => -1,
                'order' => 0,
                'publish' => true,
            ]);

            $menuIds[$title] = $menuItem->id;
        }

        // زیرمنوها
        $subMenus = [
            'خانه' => [
                ['titre' => 'بیمه خانواده', 'url' => 'index-2.html'],
                ['titre' => 'بیمه عمر', 'url' => 'index-3.html'],
                ['titre' => 'بیمه شرکت', 'url' => 'index-4.html'],
                ['titre' => 'بیمه ماشین', 'url' => 'index-5.html'],
                ['titre' => 'بیمه سلامت', 'url' => 'index-6.html'],
            ],
            'صفحات' => [
                ['titre' => 'درباره ما', 'url' => 'about-us.html'],
                ['titre' => 'نقل قول', 'url' => 'testimonials.html'],
                ['titre' => 'نوبت', 'url' => 'appointment.html'],
                ['titre' => 'برنامه های پرداخت', 'url' => 'pricing.html'],
                ['titre' => 'سوالات متداول', 'url' => 'faq.html'],
                ['titre' => 'ورود', 'url' => 'login.html'],
                ['titre' => 'ثبت نام', 'url' => 'register.html'],
                ['titre' => 'حریم شخصی', 'url' => 'privacy-policy.html'],
                ['titre' => 'قوانین و مقررات', 'url' => 'terms-conditions.html'],
                ['titre' => 'خطای 404', 'url' => 'error-404.html'],
            ],
            'خدمات' => [
                ['titre' => 'خدمات', 'url' => 'services.html'],
                ['titre' => 'جزییات خدمات', 'url' => 'service-details.html'],
            ],
            'پروژه ها' => [
                ['titre' => 'پروژه ها', 'url' => 'projects.html'],
                ['titre' => 'جزییات پروژه ها', 'url' => 'project-details.html'],
            ],
            'تیم' => [
                ['titre' => 'تیم ما', 'url' => 'team.html'],
                ['titre' => 'جزییات تیم', 'url' => 'team-details.html'],
            ],
            'بلاگ' => [
                ['titre' => 'بلاگ ما', 'url' => 'blog.html'],
                ['titre' => 'جزییات بلاگ', 'url' => 'blog-details.html'],
            ],
        ];

        foreach ($subMenus as $parentTitle => $items) {
            foreach ($items as $index => $item) {
                MenuItem::create([
                    'titre' => $item['titre'],
                    'url' => $item['url'],
                    'type' => 'normal',
                    'parent_id' => $menuIds[$parentTitle],
                    'order' => $index,
                    'publish' => true,
                ]);
            }
        }
    }
}
