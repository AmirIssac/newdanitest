<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Food;

class CreateFoodRequest extends FormRequest
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
        return Food::$rules;
    }

public function messages()
{
    return [
        'name.required' => 'الرجاء إدخال أسم الوجبة',
        'price.required' => 'الرجاء إدخال سعر الوجبة',
        'image.required' => 'الرجاء إدخال صورة توضيحية الوجبة',
        'restaurant_id.required' => 'الرجاء تحديد المطعم المقدم للوجبة',
        'category_id.required' => 'الرجاء   تحديد صنف الوجبــة',
        'discount_price.required' => 'الرجاء   تحديد سعر الخصم',
        'description.required' => 'الرجاء إدخال وصف الوجبة',
        'ingredients.required' => 'الرجاء إدخال مكونات الوجبة',
        'weight.required' =>'أدخل وزن الوحدات الغذائية بــ غرام ',
        'package_items_count.required' => 'أدخل عدد العناصر الموجودة في الوجبة ',
        'unit.required' => 'أدخل الوحدة الخاصة بالوجبة جرام  مثلاَ كليوجرام - ملى غرام',

       
  
    ];
}
}
