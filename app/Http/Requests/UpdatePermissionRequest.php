<?php
/**
 * File name: UpdatePermissionRequest.php
 * Last modified: 2020.05.21 at 18:07:49
 * Author: mohammedkhalid733@yahoo.com
 * Copyright (c) 2020
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Permission\Models\Permission;


class UpdatePermissionRequest extends FormRequest
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
        return [
            'name' => 'required',
        ];
    }
}
