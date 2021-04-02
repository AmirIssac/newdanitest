<?php
/**
 * File name: CreateRestaurantRequest.php
 * Last modified: 2020.04.30 at 08:21:08
 * Author: mohammedkhalid733@yahoo.com
 * Copyright (c) 2020
 *
 */

namespace App\Http\Requests;

use App\Models\Restaurant;
use Illuminate\Foundation\Http\FormRequest;

class CreateRestaurantRequest extends FormRequest
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
        if (auth()->user()->hasRole('admin')) {
            return Restaurant::$adminRules;
        } elseif (auth()->user()->hasAnyRole(['manager', 'client'])) {
            return Restaurant::$managerRules;
        }
    }
    public function messages()
    {
        return [
            'name.required' => 'الرجاء إدخال أسم مطعم',
            'description.required' => 'الرجاءإدخال وصف مناسب',
        'delivery_fee.required' => 'الرجاء إدخال المبلغ مع كل طلب',
        'longitude.required' => 'longitudeالرجاء إدخال عنوان  خريطة المطعــم',
        'latitude.required' => 'latitude إدخال عنوان خريطة المطعم ',
        'admin_commission.required' => ' الرجاء إدخال نسبة المدير في كل طلب',
        'image.required' => 'الرجاء إدخال صورة المطعم',
        'address.required' => 'الرجاء إدخال عنوان المطعم',
        'phone.phone_number'=> '05 الرجاء إدخال رقم جوال صالح يبدا بي',
        'phone.required' => 'الرجاء إدخال رقم جوال',
        'phone.digits' => 'الرجاء إدخال رقم جوال مكون من 10 ارقام',
        'mobile.required' => 'الرجاء إدخال رقم هاتف المطعم',
        'mobile.digits' => 'الرجاء إدخال رقم هاتف المطعم مكون من 10 ارقام',
        'default_tax.required'=>'الرجاء إدخال الرقم الافتراضي',
        'delivery_range.required'=>'الرجاء ادخال بيانات التوصيل ',
        'available_for_delivery.required'=>'الرجاء الإختيار وجود توصيل من عدمة',
        'closed.required'=>'الرجاء  توضيح اذا كان المطعم يعمل ام متوقف',
        'information.required' => 'الرجاء تعبئة  المعلومات الخاصة بالمطعم '
        ];
    }

}
