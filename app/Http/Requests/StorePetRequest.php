<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePetRequest extends FormRequest
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
            'name' => 'required|max:50',
            'species' => 'required|max:50',
            'date_born' => 'required',
            'genre' => 'required|max:100',
            'owner' => 'required|max:50',
            'vaccination_id' => 'required|exists:vaccinations,id'
        ];
    }
    public function messages(){
        return[
            'required'  => 'Il campo :attribute è obbligatorio.',
            'max'       => 'Il campo :attribute non può superare :max caratteri.',
            'vaccination_id.required' => 'Il campo delle vaccinazioni è obbligatorio',
            'vaccination_id.exists'   => 'Il campo selezionato non è valido'
        ];
    }
}