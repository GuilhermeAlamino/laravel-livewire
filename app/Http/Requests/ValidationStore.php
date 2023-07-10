<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationStore extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "user_name" => "required",
            "user_cpf" => "required",
            "user_rg" => "required",
            "user_phone" => "required",
            "user_birthdate" => "required",
            "user_estadocivil" => "required",
            "cep" => "required",
            "address" => "required",
            "complement" => "required",
            "district" => "required",
            "state" => "required",
        ];
    }

    public function messages()
    {
        return [
            "user_name.required" => "O campo nome é obrigatório.",
            "user_cpf.required" => "O campo CPF é obrigatório.",
            "user_rg.required" => "O campo RG é obrigatório.",
            "user_phone.required" => "O campo telefone é obrigatório.",
            "user_birthdate.required" => "O campo data de nascimento é obrigatório.",
            "user_estadocivil.required" => "O campo estado civil é obrigatório.",
            "cep.required" => "O campo CEP é obrigatório.",
            "address.required" => "O campo endereço é obrigatório.",
            "complement.required" => "O campo complemento é obrigatório.",
            "district.required" => "O campo bairro é obrigatório.",
            "state.required" => "O campo estado é obrigatório.",
        ];
    }
}
