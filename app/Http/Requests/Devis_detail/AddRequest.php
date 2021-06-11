<?php

namespace App\Http\Requests\Devis_detail;

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

            // "devi"=>"required|numeric",
            "engin"=>"required|numeric",
            "prix_unit"=>"required|numeric",
            "tva"=>"required|numeric",
            "qte"=>"required|numeric",
            // "total_ht"=>"required|numeric",
            // "total_tva"=>"required|numeric",
            // "total_ttc"=>"required|numeric",
            "reduction"=>"required|numeric",
            // "date"=>"required|string",
            // "date_fin_validite"=>"required|string",
            
        ];
    }
}
