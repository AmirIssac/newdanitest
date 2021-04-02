<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Slide;

class CreateSlideRequest extends FormRequest
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
        return Slide::$rules;
    }
    public function messages()
    {
        return [
            'text_position.required' => 'الرجاء تحديد موضع النص',
            'image_fit.required' => 'الرجاء التاكد من حدود الصورة' ,
            'order.required' => 'الرجاء تحديد الطلب',
            'text.required' => 'الرجاء ادخال النص',
            'button.required' => 'الرجاء إختر الذر',
            'text_color.required' => 'الرجاء تحديد لون النص',
            'button_color.required' => 'الرجاء تحديد لون الذر',
            'background_color.required' => 'الرجاء تحديد لون الخلفية',
            'indicator_color.required' => 'الرجاء تحديد لون المؤشر',
            'image.required' => 'الرجاء ادراج صورة',
            'food_id.required' => 'الرجاء تحديد الوحبة',
            'restaurant_id.required' => 'الرجاء تحديد المطعم',
        ];
    }

}
