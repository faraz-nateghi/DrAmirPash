<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentStoreRequest extends FormRequest
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
            'article_id'   => ['required', 'exists:articles,id'],
            'name'         => ['required', 'string', 'max:255'],
            'email'        => ['required', 'email', 'max:255'],
            'body'         => ['required', 'string', 'min:5'],
        ];
    }

    public function messages(): array
    {
        return [
            'article_id.required' => 'شناسه مقاله الزامی است.',
            'article_id.exists'   => 'مقاله انتخاب شده وجود ندارد.',
            'name.required'       => 'نام الزامی است.',
            'name.string'         => 'نام باید به صورت متن باشد.',
            'email.required'      => 'ایمیل اجباری.',
            'email.email'         => 'ایمیل وارد شده معتبر نیست.',
            'body.required'       => 'متن نظر الزامی است.',
            'body.min'            => 'متن نظر باید حداقل :min کاراکتر باشد.',
        ];
    }
}
