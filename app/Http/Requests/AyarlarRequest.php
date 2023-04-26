<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AyarlarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'facebook' => 'required',
            'github' => 'required',
            'in' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'text' => 'required',
            'logo' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'image' => 'required|file|mimes:jpeg,png,jpg|max:2048',

            
        ];
    }
}
