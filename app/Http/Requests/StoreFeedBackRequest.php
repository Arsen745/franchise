<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedBackRequest extends FormRequest
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
            'name' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
            'consent_pd' => ['required']
        ];
    }

    /**
     * @return string[]
     */
    public function message(): array
    {
        return [
            'name.string' => 'Поле название должно быть строкой.',
            'name.required' => 'Поле имя не должно быть пустым.',
            'email.required' => 'Поле email не должно быть пустым.',
            'phone_number.required' => 'Поле телефон номер не должно быть пустым.',
            'consent_pd.required' => 'Поле Согласие обработки ПД номер укажите флажок.',
        ];
    }
}
