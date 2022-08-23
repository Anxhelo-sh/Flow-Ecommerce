<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\Types\Boolean;

class StoreProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
//            'category_id' => ['required','integer'],
//            'name' => ['required','string'],
//            'color' => ['required','string'],
//            'photo' => 'required',
//            'price' => 'required',
//            'short_description' => 'required',
//            'long_description' => 'required',
//            'available' => 'required',
//            'quantity' => 'required',
        ];
    }
}
