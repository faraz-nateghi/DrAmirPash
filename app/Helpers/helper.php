<?php

function fa_slug($string): string
{
    $string = trim($string);
    $string = str_replace(['ي', 'ك'], ['ی', 'ک'], $string); // اصلاح عربی به فارسی
    $string = str_replace(['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'], ['0','1','2','3','4','5','6','7','8','9'], $string); // تبدیل اعداد فارسی به انگلیسی
    $string = preg_replace('/[^آ-یa-zA-Z0-9]+/u', '-', $string); // فقط حروف و عدد
    $string = preg_replace('/-+/', '-', $string); // چندتا خط تیره پشت‌هم → یکی
    return trim($string, '-'); // حذف خط‌تیره از ابتدا و انتها
}
