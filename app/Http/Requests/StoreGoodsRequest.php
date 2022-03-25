<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGoodsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Получить сообщения об ошибках для определенных правил валидации.
     *
     * @return array
     */
    public function messages() {
        return [
            'name.required' => 'Название: обязательное поле',
            'userfile.image' => 'Изображение: неверный формат',
        ];
    }

    /**
     * Получить массив правил валидации, которые будут применены к запросу.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required',
            'userfile' => 'image',
        ];
    }
}
