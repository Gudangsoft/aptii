<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'institution' => 'required',
            'date' => 'required',
            'budget' => 'required|integer',
            'no_rekening' => 'required',
            'description' => '',
        ];
    }
}
