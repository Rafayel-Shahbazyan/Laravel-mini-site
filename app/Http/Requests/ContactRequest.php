<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:5'
        ];
    }

    public function attributes() {
        return [
            'name' => 'Имя'    //poxum enq ekranin tpvox anuny
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Partadir dasht' //ete sxaly required-i mecha uremn tpi im tvacy
        ];
    }
}
