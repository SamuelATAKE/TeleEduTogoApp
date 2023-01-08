<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreForumRequest extends FormRequest
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

            //must contain : title, content, category, file : images
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|integer',
            'file' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg | max:2048',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'title.required' => 'Le titre est requis',
            'title.string' => 'Le titre doit être une chaîne de caractères',
            'title.max' => 'Le titre ne doit pas dépasser 255 caractères',
            'content.required' => 'Le contenu est requis',
            'content.string' => 'Le contenu doit être une chaîne de caractères',
            'category.required' => 'La catégorie est requise',
            'category.integer' => 'La catégorie doit être un entier',
            'file.required' => 'Le fichier est requis',
            'file.file' => 'File doit être un fichier',
            'file.mimes' => 'File doit être de type jpeg, png, jpg, gif, svg',
            'file.max' => 'Le fichier ne doit pas dépasser 2048 octets',
        ];
    }
}
