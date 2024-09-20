<?php

namespace App\Http\Requests\Info;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string',
            'phone_number' => 'required|string|regex:/^[0-9]{11}$/',
            'email' => 'required|email',
            'body' => 'required|string',
            'status_id' => 'required|integer',
        ];
    }
}
