<?php

namespace App\Http\Requests;

use App\Models\Category;
use App\Rules\CategoryRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class StoreAdRequest extends FormRequest
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
            'title' => 'required|max:255|min:3',
            'description' => 'required|max:4096',
            'price' => 'required|numeric|max:1000000000|min:0',
            'category_id' => 'required',
            'img' => 'required|mimes:jpeg,png,gif,webp,jpg',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Введите заголовок',
            'title.max' => 'Заголовок должен быть не больше 255 символов',
            'title.min' => 'Заголовок должен быть не менее 3 символов',
            'description.required' => 'Введите описание',
            'description.max' => 'Описание должно быть не больше 4096 символов',
            'price.required' => 'Введите цену',
            'price.numeric' => 'Цена должна быть числом',
            'price.max' => 'На нашем сайте можно продавать товары ценой не больше 1 млрд. рублей',
            'price.min' => 'Цена должна быть не ниже 0 рублей',
            'category_id.required' => 'Выберите категорию',
            'img.required' => 'Для публикации объявления необходимо изображение',
        ];
    }
}
