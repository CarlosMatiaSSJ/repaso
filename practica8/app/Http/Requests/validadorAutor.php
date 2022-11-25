<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorAutor extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'txtNOMBRECOMPLETO'=>'required|min:4',
            'txtFECHANACIMIENTO'=>'required|min:4',
            'txtLIBROSPUBLICADOS'=>'required|digits_between:1,99'
        ];
    }
}
