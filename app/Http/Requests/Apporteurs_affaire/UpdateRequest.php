<?php

namespace App\Http\Requests\Apporteurs_affaire;

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
            "raison_sociale"=>"required|string",
            "adresse"=>"required|string",
            "site_web"=>"required|string",
            "tel_fixe"=>"required|numeric",
            "mail"=>"required|string",
            "ninea"=>"required|string",
            "rc"=>"required|string",
            "nom_contrat"=>"required|string",
            "fonction"=>"required|string",
            "numero_cin_passeport"=>"required|string",
            "tel_1"=>"required|numeric",
            "tel_2"=>"required|numeric",
            "tel_3"=>"required|numeric",
            "mode_reglement"=>"required|string",
            "type_apporteur_affaire"=>"required|string",
            "remarque"=>"required|string",
            "document_associes"=>"required|string",
        ];
        
    }
}
