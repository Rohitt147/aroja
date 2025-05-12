<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
    public function rules()
    {
        return match($this->method()){
            'POST' => $this->store(),
            'PUT', 'PATCH' => $this->update(),
        };
    }

    public function store(){
        return [
            'name'         => 'required|string|max:255',
            'code'         => 'required|string|max:50|unique:companies,code',
            'address_1'    => 'required|string|max:255',
            'address_2'    => 'nullable|string|max:255',
            'city'         => 'required|string|max:100',
            'state'        => 'required|string|max:100',
            'mobile'       => 'required|digits:10',
            'email'        => 'required|email|max:255',
            'website'      => 'nullable',
            'gstin'        => 'required|string|max:20',
            'pan'          => 'required|string|max:20',
            'cin'          => 'nullable|string|max:30',
            'logo'         => 'nullable:mimes:png,jpg,jpeg:max:2048',
            'toggle'       => 'sometimes|boolean',
            'admin_id'     => 'nullable|integer|exists:users,id',
            'admin_user'   => 'nullable|string|max:255',
        ];
    }

    public function update(){
        return [
            'name'         => 'required|string|max:255',
            'code'         => 'required|string|max:50|unique:companies,code',
            'address_1'    => 'required|string|max:255',
            'address_2'    => 'nullable|string|max:255',
            'city'         => 'required|string|max:100',
            'state'        => 'required|string|max:100',
            'mobile'       => 'required|digits:10',
            'email'        => 'required|email|max:255',
            'website'      => 'nullable',
            'gstin'        => 'required|string|max:20',
            'pan'          => 'required|string|max:20',
            'cin'          => 'nullable|string|max:30',
            'logo'         => 'nullable:mimes:png,jpg,jpeg:max:2048',
            'toggle'       => 'sometimes|boolean',
            'admin_id'     => 'nullable|integer|exists:users,id',
            'admin_user'   => 'nullable|string|max:255',
        ];
    }


    /**
     * Get the messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages(){
        return [
            'code.unique' => 'The company code must be unique.',
            'mobile.digits' => 'The mobile number must be exactly 10 digits.',
            'logo.image' => 'The company logo must be an image file.',
        ];
    }
}
