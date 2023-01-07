<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContributionsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO : make a stronger autorization
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // TODO : make a stronger validation on the password (needed?)
        return [
            'title' => ['required'],
            'category' => ['required'],
            'content' => ['required'],
            'files.*' => ['mimes:pdf,jpg,png,jpeg'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'files.required' => 'Veuillez selectionner un fichier',
            // 'files' => 'Seuls les pdf et les images jpg, png, jpeg sont autorisées',
        ];
    }
}
