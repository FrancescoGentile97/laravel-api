<?php

namespace App\Http\Controllers\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateProjectRequests extends FormRequest
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
            "name" => "required|min:1|max:255",
            "type_id" => "nullable",
            "description" => "required|string",
            "cover_img" => "required|image",
            "github_link" => "required|string",
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "Il titolo è obbligatorio",
            "name.min" =>  "Il titolo deve avere almeno :min caratteri",
            "name.max" =>  "Il titolo deve avere massimo :max caratteri",
            "description.required" => "Il contenuto della descrizione è obbligatorio",
            "cover_img.required" => "L'immagine è obbligatoria",
            "github_link.required" => "Il link del GitHub è obbligatorio",
        ];
    }
}
