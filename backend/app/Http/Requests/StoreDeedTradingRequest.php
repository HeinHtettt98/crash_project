<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreDeedTradingRequest extends FormRequest
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
            'contract_no' => 'required',
            'register_year' => 'required',
            'book_no' => 'required',
            'volume' => 'required',
            'register_date' => 'required',
            'final_contract_date' => 'required',
            'contract_submit_date' => 'required',
            'contract_date' => 'required',
            'stamp_fee' => 'required',
            'register_fee' => 'required',
            'deposit_stubs' => 'required',
            'translation_fee' => 'required',
            'maintenance_fee' => 'required',
            'maintenance_date' => 'required',
            'transportation_fee' => 'required',
            'commission_letter_fee' => 'required',
            'copy_fee' => 'required',
            'cost' => 'required',
            'office_id' => 'required',
            'remark' => 'required',
            'fines' => 'required',
            'modify_remarks' => 'required',
            // 'deed_no' => 'required',
            // 'approved_user_id' => 'required',
            // 'approved_at' => 'required',
            'contractor1_name' => 'required',
            'contractor1_nric_no' => 'required',
            'no_of_contractors1' => 'required',
            'contractor1_father_name' => 'required',
            'contractor1_address' => 'required',
            // 'other_agents' => 'required',
            'contractor2_name' => 'required',
            'contractor2_nric_no' => 'required',
            'no_of_contractors2' => 'required',
            'contractor2_father_name' => 'required',
            'contractor2_address' => 'required',
            // 'others_received' => 'required',
            'state_id' => 'required',
            'district_id' => 'required',
            'township_id' => 'required',
            'town' => 'required',
            'quarter' => 'required',
            'holding_no' => 'required',
            'land' => 'required',
            'land_detail' => 'required',
            'land_no' => 'required',
            'land_type' => 'required',
            'area' => 'required',
            'unit' => 'required',
            'created_by' => 'required',
            'other_property' => 'required',
        ];
    }

        protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422)
        );
    }
}
