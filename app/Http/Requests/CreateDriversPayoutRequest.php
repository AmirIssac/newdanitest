<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\DriversPayout;

class CreateDriversPayoutRequest extends FormRequest
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
        return DriversPayout::$rules;
    }
    public function messages()
    {
        return [
            'amount.required' => 'الرجاء إدخال المبلغ ',
            'note.required' => 'الرجاء إدخال وصف لعملية الدفع ',
      
        ];
    }
}
