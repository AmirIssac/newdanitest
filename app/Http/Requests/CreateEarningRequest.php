<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Earning;

class CreateEarningRequest extends FormRequest
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
        return Earning::$rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'الرجاء إدخال أسم الإضافة',
            'price.required' => 'الرجاء إدخال سعر الإضافة',
            'food_id.required' => 'الرجاء إختيار الوجبة',
            'extra_group_id.required' => 'الرجاء إختيار مجموعه الإضافات',
            'image.required' => 'الرجاء إدخال صورة توضيحية للإضافة',
            'description.required' => 'الرجاء إدخال وصف للإضافة',
      
        ];
    }
}
