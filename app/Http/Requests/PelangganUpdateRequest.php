<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelangganUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() != null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_gol' => 'required',
            'no_kamar' => 'required|max:20',
            'nama' => 'required|max:50',
            'no_hp' => 'required|max:20',
            'id_user' => 'required',
            'status' => 'required'
        ];
    }
}
