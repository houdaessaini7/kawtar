<?php

namespace App\Http\Requests\Devis_d;

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
            "date"=>"required|date",
            "date_fin_validite"=>"required|date",
            "engin"=>"required|string",
            "tva"=>"required|string",
            "p_u_ht"=>"required|string",
            "qte"=>"required|string",
            "reduction"=>"required|string",
            "montant_ht"=>"required|string",
            "montant_tva"=>"required|string",
            "montant_ttc"=>"required|string",
        ];
    }
}
