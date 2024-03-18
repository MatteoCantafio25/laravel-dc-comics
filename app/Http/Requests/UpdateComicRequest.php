<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;  

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('comic');

        return [
            'title' => ['required','string', Rule::unique('comics')->ignore($id)], 
            'description' => 'nullable|string',
            'thumb' => 'nullable|url:http,https',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|in:comic book, graphic novel',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ];
    }
}
