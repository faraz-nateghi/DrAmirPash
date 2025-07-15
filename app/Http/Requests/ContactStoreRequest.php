<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'subject'       => 'required|string|max:255',
            'name'        => 'required|string|max:255',
            'phone'      => ['required', 'regex:/^\+?\d{9,15}$/'],
            'description' => 'nullable|string',
        ];
    }

    /**
     * Custom messages for validation errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'subject.required'       => 'وارد کردن عنوان الزامی است.',
            'subject.string'         => 'عنوان باید رشته متنی باشد.',
            'subject.max'            => 'طول عنوان نمی‌تواند بیش از :max کاراکتر باشد.',

            'name.required'        => 'وارد کردن نام و نام خانوادگی الزامی است.',
            'name.string'          => 'نام و نام خانوادگی باید رشته متنی باشد.',
            'name.max'             => 'طول نام و نام خانوادگی نمی‌تواند بیش از :max کاراکتر باشد.',

            'phone.required'      => 'وارد کردن شماره تلفن الزامی است.',
            'phone.regex'         => 'شماره تلفن باید بین ۹ تا ۱۵ رقم باشد و فقط شامل اعداد و پیش‌شماره اختیاری + باشد.',

            'description.string'   => 'توضیحات باید رشته متنی باشد.',
        ];
    }

    /**
     * Custom attribute names.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'subject'       => 'عنوان',
            'name'        => 'نام و نام خانوادگی',
            'phone'      => 'شماره تلفن',
            'description' => 'توضیحات',
        ];
    }
}
