<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Nutrition;

class CreateNutritionRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Nutrition::$rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'الرجاء إدخال أسم المكون الغذائي ',
            'food_id.required' => 'الرجاء إختيار الوحبة',
            'quantity.required' => 'الرجاء إدخال الكمية ',

        ];
    }
}
