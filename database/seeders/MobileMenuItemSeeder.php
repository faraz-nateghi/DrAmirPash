<?php

namespace Database\Seeders;

use App\Models\MobileMenuItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobileMenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mobile_menu_items')->truncate();

        // آیتم‌های اصلی منو
        $homeId = DB::table('mobile_menu_items')->insertGetId([
            'titre' => 'خانه',
            'url' => null,
            'order' => 1,
            'publish' => true,
            'parent_id' => -1,
        ]);

        $pagesId = DB::table('mobile_menu_items')->insertGetId([
            'titre' => 'صفحات',
            'url' => null,
            'order' => 2,
            'publish' => true,
            'parent_id' => -1,
        ]);

        $servicesId = DB::table('mobile_menu_items')->insertGetId([
            'titre' => 'خدمات',
            'url' => null,
            'order' => 3,
            'publish' => true,
            'parent_id' => -1,
        ]);

        $blogId = DB::table('mobile_menu_items')->insertGetId([
            'titre' => 'بلاگ',
            'url' => null,
            'order' => 4,
            'publish' => true,
            'parent_id' => -1,
        ]);

        $contactId = DB::table('mobile_menu_items')->insertGetId([
            'titre' => 'تماس با ما',
            'url' => '/contact-us',
            'order' => 5,
            'publish' => true,
            'parent_id' => -1,
        ]);

        // زیرمنوهای "خانه"
        DB::table('mobile_menu_items')->insert([
            ['titre' => 'بیمه خانواده', 'url' => '/index-2.html', 'order' => 1, 'publish' => true, 'parent_id' => $homeId],
            ['titre' => 'بیمه عمر', 'url' => '/index-3.html', 'order' => 2, 'publish' => true, 'parent_id' => $homeId],
            ['titre' => 'بیمه شرکت', 'url' => '/index-4.html', 'order' => 3, 'publish' => true, 'parent_id' => $homeId],
            ['titre' => 'بیمه ماشین', 'url' => '/index-5.html', 'order' => 4, 'publish' => true, 'parent_id' => $homeId],
            ['titre' => 'بیمه سلامت', 'url' => '/index-6.html', 'order' => 5, 'publish' => true, 'parent_id' => $homeId],
        ]);

        // زیرمنوهای "صفحات"
        DB::table('mobile_menu_items')->insert([
            ['titre' => 'درباره ما', 'url' => '/about-us.html', 'order' => 1, 'publish' => true, 'parent_id' => $pagesId],
            ['titre' => 'نقل قول', 'url' => '/testimonials.html', 'order' => 2, 'publish' => true, 'parent_id' => $pagesId],
            ['titre' => 'نوبت', 'url' => '/appointment.html', 'order' => 3, 'publish' => true, 'parent_id' => $pagesId],
            ['titre' => 'برنامه‌های پرداخت', 'url' => '/pricing.html', 'order' => 4, 'publish' => true, 'parent_id' => $pagesId],
            ['titre' => 'سوالات متداول', 'url' => '/faq.html', 'order' => 5, 'publish' => true, 'parent_id' => $pagesId],
            ['titre' => 'ورود', 'url' => '/login.html', 'order' => 6, 'publish' => true, 'parent_id' => $pagesId],
            ['titre' => 'ثبت‌نام', 'url' => '/register.html', 'order' => 7, 'publish' => true, 'parent_id' => $pagesId],
            ['titre' => 'بازیابی رمزعبور', 'url' => '/reset-password.html', 'order' => 8, 'publish' => true, 'parent_id' => $pagesId],
            ['titre' => 'حریم شخصی', 'url' => '/privacy-policy.html', 'order' => 9, 'publish' => true, 'parent_id' => $pagesId],
            ['titre' => 'قوانین و مقررات', 'url' => '/terms-conditions.html', 'order' => 10, 'publish' => true, 'parent_id' => $pagesId],
            ['titre' => 'خطای 404', 'url' => '/error-404.html', 'order' => 11, 'publish' => true, 'parent_id' => $pagesId],
        ]);

        // زیرمنوهای "خدمات"
        DB::table('mobile_menu_items')->insert([
            ['titre' => 'خدمات', 'url' => '/services.html', 'order' => 1, 'publish' => true, 'parent_id' => $servicesId],
            ['titre' => 'جزییات خدمات', 'url' => '/service-details.html', 'order' => 2, 'publish' => true, 'parent_id' => $servicesId],
        ]);

        // زیرمنوهای "بلاگ"
        DB::table('mobile_menu_items')->insert([
            ['titre' => 'بلاگ ما', 'url' => '/blog.html', 'order' => 1, 'publish' => true, 'parent_id' => $blogId],
            ['titre' => 'جزییات بلاگ', 'url' => '/blog-details.html', 'order' => 2, 'publish' => true, 'parent_id' => $blogId],
        ]);
    }
}
