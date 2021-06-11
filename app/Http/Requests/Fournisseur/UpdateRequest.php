<?php

namespace App\Http\Requests\Fournisseur;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            "id"=>"required|numeric",
            "full_name"=>"required|string",
            "adress"=>"required|string",
            "phone"=>"required|numeric",
            "site_web"=>"required|string",
            "mail"=>"required|string",
            "ninea"=>"required|string",
            "rc"=>"required|string",
            "nom_contrat"=>"required|string",
            "fonction"=>"required|string",
            "numero_cin"=>"required|string",
            "phone1"=>"required|numeric",
            "phone2"=>"required|numeric",
            "phone3"=>"required|numeric",
            "type_de_fournisseur"=>"required|string",
            "remarque"=>"required|string",
            "documents_associes"=>"required|string",
        ];
    }
}
