<?php

namespace App\Http\Requests\contrat;

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
                "statut_client"=>"required|string",
                "Lieux_mobilisation"=>"required|string",
                "description_sommaire_travail"=>"required|string",
                "date_debut"=>"required|date",
                "date_derniere_facture"=>"required|date",
                "duree_HJSMA"=>"required|numeric",
                "duree_quotidienne_travail"=>"required|numeric",
                "duree_pause"=>"required|numeric",
                "duree_hebdomadaire_travail"=>"required|numeric",
                "carburant"=>"required|string",
                "exonere"=>"required|string",
                "type"=>"required|string",
        ];
    }
}
