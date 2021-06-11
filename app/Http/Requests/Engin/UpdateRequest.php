<?php

namespace App\Http\Requests\Engin;

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
            "fournisseur"=>"required|string",
            "type_engin"=>"required|string",
            "modele"=>"required|string",
            "annee"=>"required|numeric",
            "nombre_heure"=>"required|numeric",
            "kilometrage"=>"required|string",
            "consommation_heure_100km"=>"required|string",
            "date_dernier_controle"=>"required|date",
            "date_prochain_controle"=>"required|date",
            "numero_police_assurance"=>"required|string",
            "compagnie"=>"required|string",
            "date_fin_validite"=>"required|date",
            "remarque"=>"required|string",
            "documents_associes"=>"required|string",
        ];
    }
}
