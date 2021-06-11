<?php

namespace App\Http\Requests\Devi;

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
            "client"=>"required|numeric",
            "date"=>"required|date",
            "valide_a_date"=>"required|date",
            "total_ht"=>"required|numeric",
            "total_tva"=>"required|numeric",
            "total_ttc"=>"required|numeric",
            "status"=>"required|string",

           
        ];
    }
}
