<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MewaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'barcode' => 'integer|min_digits:15|max_digits:15|required'
        ];
    }
}
