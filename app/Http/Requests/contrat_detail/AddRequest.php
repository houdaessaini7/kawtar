<?php

namespace App\Http\Requests\contrat_detail;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            "contrat"=>"required|integer",
            "engins"=>"required|string",
            "frais"=>"required|string",
            "chauffeur_1"=>"required|string",
            "chauffeur_2"=>"required|string",
            "chauffeur_3"=>"required|string",
        ];
    }
}
