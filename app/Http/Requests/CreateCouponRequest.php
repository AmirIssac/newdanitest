<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Coupon;

class CreateCouponRequest extends FormRequest
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
        return Coupon::$rules;
    }
       
public function messages()
{
    return [
        'code.required' => 'الرجاء إدخال كود الخصم',
        'discount.required' => 'الرجاء إدخال قيمة الخصم',
        'discount_type.required' => 'الرجاء إدخال نوع الخصم',
        'expires_at.required' => 'الرجاء إدخال تاريخ إنتهاء الخصم',
  
    ];
}
}
