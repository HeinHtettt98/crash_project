<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDeedCommentRequest extends FormRequest
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
            'deed_id'        => 'nullable|exists:deeds,id',
            'from_office_id' => 'nullable|integer',
            'from_user_id'   => 'nullable|integer',
            'to_office_id'   => 'nullable|integer',
            'to_user_id'     => 'nullable|integer',
            'message'        => 'required|string',
        ];
    }
}
