<?php

namespace App\Http\Requests\chauffeur;

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
                "nom_prenom"=>"required|string",
                "adresse"=>"required|string",
                "tel_1"=>"required|numeric",
                "tel_2"=>"required|numeric",
                "tel_3"=>"required|numeric",
                "date_naissance"=>"required|date",
                "numero_cin_passeport"=>"required|numeric",
                "numero_permis"=>"required|numeric",
                "type_permis"=>"required|string",
                "date_derniere_visite_medicale"=>"required|date",
                "date_prochaine_visite_medicale"=>"required|date",
                "remarque"=>"required|string",
                "documents_associes"=>"required|string",
            ];
    }
}
